<?php

namespace app\controllers;

use core\App;

class KalkulatorCtrl {

    public function action_glowna() {
        // Wyświetl stronę główną
        App::getSmarty()->display('index.tpl');
    }

    public function action_kalkulator() {
        // Pobierz dane z formularza jeśli zostały wysłane
        $kwota = $_POST['kwota'] ?? null;
        $lata = $_POST['lata'] ?? null;
        $op = $_POST['op'] ?? null;
        $result = null;
        $messages = array();

        // Jeśli formularz został wysłany
        if (isset($_POST['kwota']) || isset($_POST['lata']) || isset($_POST['op'])) {
            
            // Walidacja
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

            // Obliczenia
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

        // Przypisz zmienne do szablonu
        App::getSmarty()->assign('kwota', $kwota);
        App::getSmarty()->assign('lata', $lata);
        App::getSmarty()->assign('op', $op);
        App::getSmarty()->assign('result', $result);
        App::getSmarty()->assign('messages', $messages);
        App::getSmarty()->assign('action_url', App::getConf()->action_root . 'kalkulator');

        // Wyświetl szablon
        App::getSmarty()->display('kalkulator.tpl');
    }
}