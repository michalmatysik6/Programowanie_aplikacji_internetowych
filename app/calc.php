<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_POST['kwota'] ?? null;
$lata = $_POST['lata'] ?? null;
$op = $_POST['op'] ?? null;

$messages = array();

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

include 'calc_view.php';