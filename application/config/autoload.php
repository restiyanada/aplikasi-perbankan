<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();
$autoload['libraries'] = array('database','session');
$autoload['drivers'] = array();
//$autoload['helper'] = array('url','form');
$autoload['helper'] = array('url','form');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('db_model', 'm_login');
