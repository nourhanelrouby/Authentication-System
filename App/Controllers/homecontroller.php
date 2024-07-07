<?php
namespace MVC\Controllers;

use MVC\Core\controller;

use MVC\Models\home;
use MVC\Config\session;
class homecontroller extends controller
{
    public function index()
    {
        $this->View('/user/index');
    }

    public function register()
    {
        session::Start();
        if (isset($_POST['sub'])) {
            if (empty($_POST['name'])) {
                session::Set('error', 'No data founded');
            } else if (empty($_POST['email'])) {
                session::Set('error', 'No data founded');
            } else if (empty($_POST['pass'])) {
                session::Set('error', 'No data founded');
            } else if (empty($_POST['mobile'])) {
                session::Set('error', 'No data founded');
            } else {
                $data = [
                    'username' => $_POST['name'],
                    'userEmail' => $_POST['email'],
                    'userPass' => $_POST['pass'],
                    'userMobile' => $_POST['mobile']
                ];
                $obj = new home();
                $obj->registeruser('user', $data);
                session::Set('success', 'Data inserted successfully');
            }
        }
        $this->View('/user/register');
    }

    public function login()
    {
        session::Start();
        if (isset($_POST['sub'])) {
            $ema = $_POST['email'];
            $pass = $_POST['pass'];
            $obj = new home();
            $query = "SELECT * FROM user WHERE userEmail = ? AND userPass =? ";
            $data = $obj->getUser($query, [$ema, $pass]);
            if (!empty($data)) {
                session::Set('user_id', $data->id);
                session::Set('user_email', $data->userEmail);
                session::Set('user_mobile', $data->userMobile);
                session::Set('user_name', $data->username);
                session::Set('user_pass', $data->userPass);
                $this->View('/user/index');
                die();
            } else {
                session::Set('error', 'Data Not Correct');
            }
        }
        $this->View('/user/login');
    }

    public function changepassword()
    {
        session::Start();
        $isok = 0;
        if (isset($_POST['sub'])) {
            $obj = new home();

            if (isset($_POST['oldpass'])) $oldpass = $_POST['oldpass'];
            if (isset($_POST['newpass'])) $newpass = $_POST['newpass'];
            if (isset($_POST['conpass'])) $conpass = $_POST['conpass'];

            if ($oldpass === session::Get('user_pass')) {

                if ($newpass === $conpass) {
                    $where = ['userEmail' => session::Get('user_email')];
                    $data = [
                        'userPass' => $_POST['newpass']
                    ];
                    $obj->changeUserPass('user', $data, $where);
                    session::Set('user_pass', $newpass);
                    $this->View('/user/show');
                    $isok = 1;
                } else {
                    session::Set('error', 'Passwords are not the same');
                }
            } else {
                session::Set('error', 'Password not correct');
            }
        }
        if ($isok == 0) $this->View('/user/changepassword');
    }
    public function show()
    {
        $this->View('/user/show');
    }

    public function allusers()
    {
        $query = "SELECT * FROM user";
        $obj = new home();
        $data = $obj->getAllUsers($query);
        $this->View('/user/allusers', ['data' => $data]);
    }

    public function logout()
    {
        $this->View('/user/logout');
    }

    public function deleteaccount()
    {
        $accountNotDeleted = 1;
        if (isset($_POST['sub'])) {
            if (isset($_POST['email'])) $ema = $_POST['email'];
            if (isset($_POST['pass'])) $pass = $_POST['pass'];
            $query = "SELECT * FROM user WHERE userEmail = ?";
            $obj = new home();
            $data = $obj->getUser($query, [$ema]);
            if (!empty($data)) {
                if ($ema === $data->userEmail && $pass === $data->userPass) {
                    $obj->deleteUser('user', $data->id);
                    $accountNotDeleted = 0;
                    $this->View('/user/logout');
                } else {
                    session::Set('error', 'E-mail or Password not correct');
                }
            } else {
                session::Set('error', 'E-mail or Password not correct');
            }
        }
        if ($accountNotDeleted == 1) $this->View('/user/deleteaccount');
    }
}