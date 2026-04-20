<?php
$conf->server_name = 'localhost';
$conf->protocol = 'http';
$conf->app_root = '/Programowanie_aplikacji_internetowych-main/BD/public';

$conf->server_url = $conf->protocol.'://'.$conf->server_name;
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);

$conf->action_root = $conf->app_root.'/index.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;

$conf->clean_urls = false;
$conf->action_param = 'action';
$conf->action_script = '/ctrl.php';

// Konfiguracja bazy danych
$conf->db_type = 'mysql';
$conf->db_server = 'localhost';
$conf->db_name = 'kalkulator_bd';
$conf->db_user = 'root';
$conf->db_pass = '';
$conf->db_charset = 'utf8';
$conf->db_port = '3306';