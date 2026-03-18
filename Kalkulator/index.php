<?php
require_once dirname(__FILE__).'/Kalkulator/config.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc_view.php");

//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH.'/Kalkulator/app/calc_view.php';