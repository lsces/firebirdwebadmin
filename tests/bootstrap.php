<?php

// Define Firebird constants if the extension is not loaded
if (!defined('IBASE_COMMITTED')) {
    define('IBASE_COMMITTED', 1);
}
if (!defined('IBASE_NOWAIT')) {
    define('IBASE_NOWAIT', 1);
}
if (!defined('IBASE_READ')) {
    define('IBASE_READ', 1);
}
if (!defined('IBASE_WRITE')) {
    define('IBASE_WRITE', 1);
}
if (!defined('IBASE_STS_HDR_PAGES')) {
    define('IBASE_STS_HDR_PAGES', 1);
}

// Load Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load language file needed for some tests
if (!defined('LANGUAGE')) {
    define('LANGUAGE', 'english');
}
require_once __DIR__ . '/../lang/english.inc.php';
