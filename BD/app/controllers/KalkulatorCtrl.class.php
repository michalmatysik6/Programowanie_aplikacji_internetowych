<?php

namespace app\controllers;

use core\App;

class KalkulatorCtrl {

    public function action_glowna() {
        App::getSmarty()->assign('conf', App::getConf());
        App::getSmarty()->display('index.tpl');
    }

    public function action_kalkulator() {
        $kwota = $_POST['kwota'] ?? null;
        $lata = $_POST['lata'] ?? null;
        $op = $_POST['op'] ?? null;
        $result = null;
        $messages = array();

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $user = isset($_SESSION['user']) ? unserialize($_SESSION['user']) : null;
        $role = $user ? $user->role : null;

        if (isset($_POST['kwota']) || isset($_POST['lata']) || isset($_POST['op'])) {
            
            if ($kwota === null || $kwota === "") {
                $messages[] = 'Nie podano kwoty kredytu';
            }
            if ($lata === null || $lata === "") {
                $messages[] = 'Nie podano liczby lat';
            }
            if ($op === null || $op === "") {
                $messages[] = 'Nie podano oprocentowania';
            }

            if (empty($messages)) {
                if (!is_numeric($kwota) || $kwota <= 0) {
                    $messages[] = 'Kwota musi być liczbą dodatnią';
                }
                if (!is_numeric($lata) || $lata <= 0) {
                    $messages[] = 'Liczba lat musi być liczbą dodatnią';
                }
                if (!is_numeric($op) || $op < 0) {
                    $messages[] = 'Oprocentowanie nie może być ujemne';
                }
            }

            if ($role == 'user' && empty($messages)) {
                if ($kwota > 5000) {
                    $messages[] = 'Dla roli "user" maksymalna kwota kredytu to 5000 zł';
                }
                if ($lata > 2) {
                    $messages[] = 'Dla roli "user" maksymalny okres kredytu to 2 lata';
                }
                if ($op > 2) {
                    $messages[] = 'Dla roli "user" maksymalne oprocentowanie to 2%';
                }
            }

            if (empty($messages)) {
                $kwota = floatval($kwota);
                $lata = intval($lata);
                $op = floatval($op);

                $miesiace = $lata * 12;
                $miesieczneop = ($op / 100) / 12;

                if ($miesieczneop == 0) {
                    $result = $kwota / $miesiace;
                } else {
                    $czynnik = pow(1 + $miesieczneop, $miesiace);
                    $result = $kwota * $miesieczneop * $czynnik / ($czynnik - 1);
                }
            }
        }

        App::getSmarty()->assign('conf', App::getConf());
        App::getSmarty()->assign('kwota', $kwota);
        App::getSmarty()->assign('lata', $lata);
        App::getSmarty()->assign('op', $op);
        App::getSmarty()->assign('result', $result);
        App::getSmarty()->assign('messages', $messages);
        App::getSmarty()->assign('user', $user);
        App::getSmarty()->assign('role', $role);
        App::getSmarty()->display('kalkulator.tpl');
    }
}