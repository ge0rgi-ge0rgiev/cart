<?php

require_once 'Smarty/libs/Smarty.class.php';

class MySmarty extends Smarty {

    public function __construct() {
        parent::__construct();

        $this->setConfigDir(SITE_ROOT . DS . 'configs');
        $this->setTemplateDir(SITE_ROOT . DS . 'templates');
        $this->setCompileDir(SITE_ROOT . DS . 'templates_c');
        $this->setCacheDir(SITE_ROOT . DS . 'cache');
    }
}