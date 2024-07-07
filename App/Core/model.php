<?php
namespace MVC\Core;
use Dcblogdev\PdoWrapper\Database as Database;
use MVC\Config\config;
class model
{

    public function DBconnection()
    {
        $options = [
            'username' => config::USERNAME,
            'database' => config::DATABASE,
            'password' => config::PASSWORD,
            'server' => config::SERVER,
            'type' => config::TYPE,
            'charset' => config::CHARSET,
            'port' => config::PORT
        ];
        try {
            return new Database($options);
        } catch (PDOException $e) {
            echo 'Connection Failed ' . $e->getMessage();
        }
    }
}
