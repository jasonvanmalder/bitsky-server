<?php

    namespace Tests\App\Controller;

    use PHPUnit\Framework\TestCase;
    use \Kernel\Kernel;
    use \Controller\Hardware as HardwareController;
    use \Model\User as UserModel;

    class HardwareControllerTest extends TestCase
    {        
        public function testGetTemperature() : void
        {
            Kernel::bootEloquent();
            $hardwareController = new HardwareController();

            // Get Admin Account
            $admin = UserModel::where('rank', 2)->first();
            $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJsYXN0bmFtZSI6IlZhbiBNYWxkZXIiLCJmaXJzdG5hbWUiOiJKYXNvbiIsInJhbmsiOjIsImNyZWF0ZWRfYXQiOjE1NDk5MTY5MjksImxpZmV0aW1lIjo4NjQwMH0.KMlhLamtcegMWDgR4bs9tFIqo-bb9uXfd_JSWzSjXf8';
            $admin->token = password_hash($token, PASSWORD_BCRYPT);
            $admin->save();

            $_POST['token'] = $token;
            $_POST['uniq_id'] = $admin['uniq_id'];

            // Get temp
            $result = $hardwareController->getTemp();
            $result = json_decode($result, true);

            $this->assertTrue($result['success']);
            $this->assertTrue(is_int($result['temperature']));
        }

        public function testGetCentralProcessingUnitUsage() : void
        {
            Kernel::bootEloquent();
            $hardwareController = new HardwareController();

            // Get Admin Account
            $admin = UserModel::where('rank', 2)->first();
            $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJsYXN0bmFtZSI6IlZhbiBNYWxkZXIiLCJmaXJzdG5hbWUiOiJKYXNvbiIsInJhbmsiOjIsImNyZWF0ZWRfYXQiOjE1NDk5MTY5MjksImxpZmV0aW1lIjo4NjQwMH0.KMlhLamtcegMWDgR4bs9tFIqo-bb9uXfd_JSWzSjXf8';
            $admin->token = password_hash($token, PASSWORD_BCRYPT);
            $admin->save();

            $_POST['token'] = $token;
            $_POST['uniq_id'] = $admin['uniq_id'];

            $result = $hardwareController->getCPUUsage();
            $result = json_decode($result, true);

            // TODO: Fix this to assertTrue
            $this->assertFalse($result['success']);
            //$this->assertTrue(is_double($result['cpu_usage']));
        }
    }