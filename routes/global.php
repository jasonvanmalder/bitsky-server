<?php
return [
    #   Type         Name                                   Controller       Method
    [   'POST',      '/get_temp',                           'hardware',      'getTemp'                      ],
    [   'POST',      '/get_cpu',                            'hardware',      'getCPUUsage'                  ],
    [   'POST',      '/get_key',                            'link',          'getLinkingKey'                ],
    [   'POST',      '/create_link',                        'link',          'createLink'                   ],
    [   'POST',      '/active_link',                        'link',          'activeLink'                   ],
    [   'POST',      '/get_link',                           'link',          'getLink'                      ],
    [   'POST',      '/get_active_links',                   'link',          'getActiveLinks'               ],
    [   'POST',      '/get_active_devices',                 'link',          'getActiveLinksNameAndIP'      ],
    [   'POST',      '/delete_link',                        'link',          'deleteLink'                   ],
    [   'POST',      '/delete_link_intermediary',           'link',          'deleteLinkIntermediary'       ],
    [   'POST',      '/login',                              'auth',          'login'                        ],
    [   'POST',      '/register',                           'auth',          'register'                     ],
    [   'POST',      '/change_password',                    'auth',          'changePassword'               ],
    [   'POST',      '/auth_verify',                        'auth',          'verify'                       ],
    [   'POST',      '/register_confirmation',              'auth',          'checkRegisterConfirmation'    ],
    [   'POST',      '/get_firsttime',                      'auth',          'getFirstTime'                 ],
    [   'POST',      '/store_post',                         'post',          'store'                        ],
    [   'POST',      '/remove_post',                        'post',          'remove'                       ],
    [   'POST',      '/post_add_local_favorite',            'post',          'addLocalFavorite'             ],
    [   'POST',      '/post_add_favorite',                  'post',          'addFavorite'                  ],
    [   'POST',      '/post_remove_local_favorite',         'post',          'removeLocalFavorite'          ],
    [   'POST',      '/post_remove_favorite',               'post',          'removeFavorite'               ],
    [   'POST',      '/post_get_local_user_favorite',       'post',          'getLocalFavoriteOfUser'       ],
    [   'POST',      '/post_get_user_favorite',             'post',          'getFavoriteOfUser'            ],
    [   'POST',      '/get_localpost',                      'post',          'getLocal'                     ],
    [   'POST',      '/get_post',                           'post',          'get'                          ],
    [   'POST',      '/get_localpost_score',                'post',          'getLocalScore'                ],
    [   'POST',      '/get_post_score',                     'post',          'getScore'                     ],
    [   'POST',      '/get_localposts',                     'post',          'getLocalPosts'                ],
    [   'POST',      '/get_allposts',                       'post',          'getAll'                       ],
    [   'POST',      '/get_allpostsofuser',                 'post',          'getAllOfUser'                 ],
    [   'POST',      '/get_allpostsofstrangeruser',         'post',          'getAllOfStrangerUser'         ],
    [   'POST',      '/get_localtrends',                    'post',          'getLocalTrends'               ],
    [   'POST',      '/get_trends',                         'post',          'getTrends'                    ],
    [   'POST',      '/get_favoritestrends',                'user',          'getFavoritesTrends'           ],
    [   'POST',      '/get_strangerfavoritestrends',        'user',          'strangerGetFavoritesTrends'   ],
    [   'POST',      '/get_allcomments',                    'post',          'getAllComments'               ],
    [   'POST',      '/get_localcommentscount',             'post',          'getLocalCommentsCount'        ],
    [   'POST',      '/get_commentscount',                  'post',          'getCommentsCount'             ],
    [   'POST',      '/get_localbestcomments',              'post',          'getLocalBestComments'         ],
    [   'POST',      '/get_bestcomments',                   'post',          'getBestComments'              ],
    [   'POST',      '/post_add_local_comment',             'post',          'addLocalComment'              ],
    [   'POST',      '/post_add_comment',                   'post',          'addComment'                   ],
    [   'POST',      '/post_remove_local_comment',          'post',          'removeLocalComment'           ],
    [   'POST',      '/post_remove_comment',                'post',          'removeComment'                ],
    [   'POST',      '/post_get_local_comments',            'post',          'getLocalComments'             ],
    [   'POST',      '/post_get_comments',                  'post',          'getComments'                  ],
    [   'POST',      '/post_get_local_user_comment_favorite', 'post',        'getLocalCommentFavoriteOfUser'],
    [   'POST',      '/post_get_user_comment_favorite',     'post',          'getCommentFavoriteOfUser'     ],
    [   'POST',      '/post_add_local_comment_favorite',    'post',          'addLocalCommentFavorite'      ],
    [   'POST',      '/post_add_comment_favorite',          'post',          'addCommentFavorite'           ],
    [   'POST',      '/post_remove_local_comment_favorite', 'post',          'removeLocalCommentFavorite'   ],
    [   'POST',      '/post_remove_comment_favorite',       'post',          'removeCommentFavorite'        ],
    [   'POST',      '/create_user',                        'user',          'createOrUpdate'               ],
    [   'POST',      '/update_user',                        'user',          'createOrUpdate'               ],
    [   'POST',      '/delete_user',                        'user',          'delete'                       ],
    [   'POST',      '/delete_by_user',                     'user',          'deleteByUser'                 ],
    [   'POST',      '/get_allusers',                       'user',          'getAll'                       ],
    [   'POST',      '/get_user',                           'user',          'getById'                      ],
    [   'POST',      '/get_stranger_user',                  'user',          'strangerGetById'              ],
    [   'POST',      '/get_user_by_uniq_id',                'user',          'getByUniqId'                  ],
    [   'POST',      '/get_local_user_by_uniq_id',          'user',          'localGetByUniqId'             ],
    [   'GET',       '/get_ranks',                          'rank',          'getAll'                       ],
    [   'GET',       '/get_registration_module_state',      'module',        'getRegistrationState'         ],
    [   'POST',      '/toggle_registration_module_state',   'module',        'toggleRegistrationState'      ],
    [   'POST',      '/get_logs',                           'log',           'get'                          ],
    [   'POST',      '/get_files',                          'file',          'getFolderContent'             ],
    [   'POST',      '/local_get_files',                    'file',          'localGetFolderContent'        ],
    [   'POST',      '/upload_files',                       'file',          'uploadFiles'                  ],
    [   'POST',      '/local_upload_files',                 'file',          'localUploadFiles'             ],
    [   'POST',      '/create_folder',                      'file',          'createFolder'                 ],
    [   'POST',      '/local_create_folder',                'file',          'localCreateFolder'            ],
    [   'POST',      '/delete_item',                        'file',          'deleteItem'                   ],
    [   'POST',      '/local_delete_item',                  'file',          'localDeleteItem'              ],
    [   'POST',      '/download_item',                      'file',          'downloadItem'                 ],
    [   'POST',      '/local_download_item',                'file',          'localDownloadItem'            ],
    [   'POST',      '/send_notification',                  'notification',  'create'                       ],
    [   'POST',      '/get_user_notifications',             'notification',  'getAll'                       ],
    [   'POST',      '/delete_user_notifications',          'notification',  'deleteAll'                    ],
    [   'POST',      '/read_user_notifications',            'notification',  'readAll'                      ],
    [   'POST',      '/count_user_notifications',           'notification',  'count'                        ],
    [   'POST',      '/get_devices',                        'file',          'getStorageDevices'            ],
    [   'POST',      '/local_get_devices',                  'file',          'localGetStorageDevices'       ],
    [   'POST',      '/get_devices_memory',                 'hardware',      'getStorageDevicesMemory'      ],
    [   'POST',      '/create_conversation',                'messaging',     'createConversation'           ],
    [   'POST',      '/get_conversations',                  'messaging',     'getConversations'             ],
    [   'POST',      '/get_conversation',                   'messaging',     'getConversation'              ],
    [   'POST',      '/send_message',                       'messaging',     'sendMessage'                  ],
    [   'POST',      '/count_unread_messages',              'messaging',     'countUnreadMessages'          ],
    [   'POST',      '/update_post',                        'post',          'update'                       ],
    [   'POST',      '/update_comment',                     'post',          'updateComment'                ],
];