<?php

namespace app\controllers;

use core\App;

class LoginCtrl {

    public function action_login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'] ?? '';
            $pass = $_POST['pass'] ?? '';

            $db = getDB();
            $userData = $db->get('users', ['login', 'role'], [
                'login' => $login,
                'password' => $pass
            ]);

            if ($userData) {
                session_start();
                $user = new \app\transfer\User($userData['login'], $userData['role']);
                $_SESSION['user'] = serialize($user);
                header("Location: index.php?action=kalkulator");
                exit();
            } else {
                $error = 'Niepoprawny login lub hasło';
                $this->generateView($error);
            }
        } else {
            $this->generateView();
        }
    }

    public function action_logout() {
        if (session_status() == PHP_SESSION_NONE) session_start();
        session_destroy();
        header("Location: index.php");
        exit();
    }

    private function generateView($error = null) {
        App::getSmarty()->assign('error', $error);
        App::getSmarty()->assign('conf', App::getConf());
        App::getSmarty()->display('LoginView.tpl');
    }
}