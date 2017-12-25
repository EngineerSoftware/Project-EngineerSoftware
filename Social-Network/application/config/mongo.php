<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$mongo['host'] = 'localhost';
$mongo['port'] = '27017';
$mongo['dbname'] = 'social-network2';
$mongo['user'] = 'hp101';
$mongo['password'] = '123456';
$mongo['connString'] = null; // if you need to custom connection string, just set this. Exp. mongodb://localhost:27017
$config['mongo'] = $mongo;
