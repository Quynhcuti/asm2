<?php

const PATH_ROOT = __DIR__ . '/';


session_start();

require 'vendor/autoload.php';

Dotenv\Dotenv::createImmutable(__DIR__)->load();

require_once __DIR__ . '/routes/index.php';
