<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('glowna');

Utils::addRoute('glowna', 'KalkulatorCtrl', 'action_glowna');
Utils::addRoute('kalkulator', 'KalkulatorCtrl', 'action_kalkulator');