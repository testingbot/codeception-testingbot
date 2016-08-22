<?php

require 'vendor/autoload.php';

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class TestingBotWebDriver extends \Codeception\Module\WebDriver
{

    public function _initialize(){
        getenv('TB_KEY') ? ($this->config["capabilities"]["client_key"] = getenv('TB_KEY')) : 0;
        getenv('TB_SECRET') ? ($this->config["capabilities"]["client_secret"] = getenv('TB_SECRET')) : 0;

        parent::_initialize();
    }

    // HOOK: after suite
    public function _afterSuite() {
        parent::_afterSuite();
    }
}
