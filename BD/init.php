<?php

require_once 'core/Config.class.php';
require_once 'core/App.class.php';

use core\App;
use core\Config;

$_PARAMS = array();
$conf = new Config();

$conf->clean_urls = false;
$conf->action_param = 'action';
$conf->action_script = '/ctrl.php';

include 'config.php';

$conf->root_path = dirname(__FILE__);
$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;
if ($conf->clean_urls) $conf->action_root = $conf->app_root."/";
else $conf->action_root = $conf->app_root.'/index.php?'.$conf->action_param.'=';
$conf->action_url = $conf->server_url.$conf->action_root;

App::createAndInitialize($conf);

function getConf() { return core\App::getConf(); }
function getMessages() { return core\App::getMessages(); }
function getSmarty() { return core\App::getSmarty(); }
function getFromRequest($param_name) {
    return isset($_REQUEST[$param_name]) ? $_REQUEST[$param_name] : null;
}
function getFromSession($param_name) {
    if (session_status() == PHP_SESSION_NONE) session_start();
    return isset($_SESSION[$param_name]) ? unserialize($_SESSION[$param_name]) : null;
}

require_once 'lib/Medoo/Medoo.php';
use Medoo\Medoo;

$database = null;
function &getDB() {
    global $database, $conf;
    if ($database === null) {
        $database = new Medoo([
            'type' => $conf->db_type,
            'host' => $conf->db_server,
            'database' => $conf->db_name,
            'username' => $conf->db_user,
            'password' => $conf->db_pass,
            'charset' => $conf->db_charset,
            'port' => $conf->db_port,
        ]);
    }
    return $database;
}