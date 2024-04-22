<?php
class DATABASE_CONFIG {
    public $default = array(
	'datasource' => 'Database/Mysql',
	'persistent' => false,
	'host' => 'localhost',
	'login' => 'root',
	'password' => '',
	'database' => 'newedudesign',
	'prefix' => '',
	'encoding' => 'utf8',
	'port'=>3306
    );
    public $live = array(
    'datasource' => 'Database/Mysql',
    'persistent' => false,
    'host' => 'localhost',
    'login' => 'root',
    'password' => '',
    'database' => 'newedudesign',
    'prefix' => '',
    'encoding' => 'utf8',
    'port'=>3306
    );
    public function __construct() {
    $this->default  = $this->live;
    }
    }
    ?>