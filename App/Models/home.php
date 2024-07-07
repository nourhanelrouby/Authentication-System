<?php
namespace MVC\Models;
use MVC\Core\model;
class home extends model
{
    public function registeruser($tablename, $data)
    {
        try {
            $this->DBconnection()->insert($tablename, $data);
        } catch (PDOException $e) {
            echo 'Failed ' . $e->getMessage();
        }
    }

    public function getUser($query, $where = [])
    {
        try {
            return $this->DBconnection()->row($query, $where);
        } catch (PDOException $e) {
            echo 'Failed ' . $e->getMessage();
        }
    }

    public function getAllUsers($query)
    {
        try {
            return $this->DBconnection()->rows($query);
        } catch (PDOException $e) {
            echo 'Failed ' . $e->getMessage();
        }
    }

    public function changeUserPass($tablename, $data = [], $where = [])
    {
        try {
            return $this->DBconnection()->update($tablename, $data, $where);
        } catch (PDOException $e) {
            echo 'Failed ' . $e->getMessage();
        }
    }

    public function deleteUser($tablename, $id=[])
    {
        try {
            return $this->DBconnection()->deleteById($tablename, $id);
        } catch (PDOException $e) {
            echo "Failed " . $e->getMessage();
        }
    }
}