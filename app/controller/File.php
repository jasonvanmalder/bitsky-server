<?php

namespace Controller;

use \Controller\Auth;
use \Kernel\LogManager;

class File extends Controller
{
    public function __construct()
    {
        $this->authService = new Auth();
    }

    function filesizeConvert($bytes, $decimals = 2) {
        $sz = 'BKMGTP';
        $factor = floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
    }

    public function getFolderContent()
    {
        $check = $this->checkUserToken();

        if(!empty($check))
        {
            $path = $_SERVER['DOCUMENT_ROOT'] . '/files';
            $items_content = [];
            $timezone = 1;

            if(!empty($_POST['path']))
            {
                $path .= $_POST['path'];
            }

            $items = scandir($path);

            foreach ($items as $item)
            {
                $fullPath = $path . DIRECTORY_SEPARATOR . $item;
                clearstatcache();
                if($item == '.' || $item == '..') continue;
                if(file_exists($fullPath))
                {
                    $date_updated = date ('d-m-Y H:i:s.', filemtime($fullPath)  + 3600 * $timezone);
                    $itemsize = $this->filesizeConvert(filesize($fullPath));
                    $extension = pathinfo($fullPath, PATHINFO_EXTENSION);

                    if(is_file($fullPath))
                    {
                        array_push($items_content, ['name' => $item, 'type' => $extension, 'updated_at' => $date_updated, 'size' => $itemsize]);
                    }
                    else if(is_dir($fullPath))
                    {
                        array_push($items_content, ['name' => $item, 'type' => 'dossier', 'updated_at' => $date_updated, 'size' => $itemsize]);
                    }
                } else
                {
                    return $this->forbidden($fullPath);
                    LogManager::store('[POST] Tentative de récupération d\'un fichier inexistant (ID utilisateur: '.$check['uniq_id'].', chemin: '.$fullPath.')', 2);
                    return $this->forbidden('fileNotFound');
                }
            }
            return json_encode(['success' => true, 'content' => $items_content]);
        } else
        {
            LogManager::store('[POST] Tentative de récupération des fichiers avec un token invalide (ID utilisateur: '.$check['uniq_id'].')', 2);
            return $this->forbidden('invalidToken');
        }
    }

    public function uploadFiles()
    {
        $check = $this->checkUserToken();

        if(!empty($check))
        {
            if(!empty($_POST['files']))
            {
                $path = $_POST['path'];
                $files = $_POST['files'];
                $rootPath = '/files';

                if(empty($path)) $rootPath = '/files/';

                foreach ($files as $file) {
                    print_r($file);
                    $fp = fopen($_SERVER['DOCUMENT_ROOT'] . $rootPath . $path . trim($file['path']),"w+");
                    fclose($fp);
                }

                return json_encode(['ok']);
            } else
            {
                return $this->forbidden('emptyInput');
            }
        } else
        {
            LogManager::store('[POST] Tentative d\'upload de fichiers avec un token invalide (ID utilisateur: '.$check['uniq_id'].')', 2);
            return $this->forbidden('invalidToken');
        }
    }

    public function createFolder()
    {
        $check = $this->checkUserToken();

        if(!empty($check))
        {
            if(!empty($_POST['name']))
            {
                $name = $_POST['name'];
                $path = $_POST['path'];

                $fullPath = $_SERVER['DOCUMENT_ROOT'] . '/files' . $path;

                mkdir($fullPath.'/'.$name);
                chmod($fullPath.'/'.$name, 0775);

                return json_encode(['success' => true, 'path' => $fullPath.'/'.$name]);
            }else
            {
                return $this->forbidden('emptyInput');
            }
        } else
        {
            LogManager::store('[POST] Tentative de création de dossier avec un token invalide (ID utilisateur: '.$check['uniq_id'].')', 2);
            return $this->forbidden('invalidToken');
        }
    }

    // TODO: deleteItem
}