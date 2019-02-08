<?php
require __DIR__.'/../vendor/autoload.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Max-Age: 86400'); // cache for 1 day
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
date_default_timezone_set('Asia/Jakarta');

ini_set('default_charset', 'utf-8');
setlocale(LC_ALL, 'en_US.UTF8');

require(__DIR__.'/../app/dependency.php');