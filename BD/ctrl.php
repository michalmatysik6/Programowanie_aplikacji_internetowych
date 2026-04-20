<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'init.php';

$action = $_GET['action'] ?? 'glowna';

switch($action) {
    case 'kalkulator':
        require_once 'check.php';
        $ctrl = new \app\controllers\KalkulatorCtrl();
        $ctrl->action_kalkulator();
        break;
    case 'login':
        $ctrl = new \app\controllers\LoginCtrl();
        $ctrl->action_login();
        break;
    case 'logout':
        $ctrl = new \app\controllers\LoginCtrl();
        $ctrl->action_logout();
        break;
    case 'glowna':
    default:
        $ctrl = new \app\controllers\KalkulatorCtrl();
        $ctrl->action_glowna();
        break;
}