<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'init.php';
require_once 'routing.php';

\core\SessionUtils::loadMessages();

// Pobierz akcję z parametru URL
$action = $_GET['action'] ?? 'glowna';

// Wywołaj odpowiedni kontroler
$ctrl = new \app\controllers\KalkulatorCtrl();

switch($action) {
    case 'kalkulator':
        $ctrl->action_kalkulator();
        break;
    case 'glowna':
    default:
        $ctrl->action_glowna();
        break;
}