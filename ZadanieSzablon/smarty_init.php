<?php
// smarty_init.php
require_once dirname(__FILE__).'/libs/Smarty.class.php';

class SmartyInit extends Smarty {
    
    public function __construct() {
        parent::__construct();
        
        // Ustaw ścieżki
        $this->setTemplateDir(dirname(__FILE__).'/templates/');
        $this->setCompileDir(dirname(__FILE__).'/templates_c/');
        $this->setCacheDir(dirname(__FILE__).'/cache/');
        
        // Opcjonalne ustawienia
        $this->setCaching(false);  // Wyłącz cache na czas rozwoju
        $this->setDebugging(false); // Wyłącz debugowanie
    }
}
?>