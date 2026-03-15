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

// Define Firebird constants if the extension is not loaded
if (!defined('IBASE_COMMITTED')) {
    define('IBASE_COMMITTED', 8);
}
if (!defined('IBASE_NOWAIT')) {
    define('IBASE_NOWAIT', 256);
}
if (!defined('IBASE_READ')) {
    define('IBASE_READ', 2);
}
if (!defined('IBASE_WRITE')) {
    define('IBASE_WRITE', 4);
}
if (!defined('IBASE_STS_HDR_PAGES')) {
    define('IBASE_STS_HDR_PAGES', 1);
}
if (!defined('IBASE_TEXT')) {
    define('IBASE_TEXT', 1);
}

// Load project files manually in correct order after constants are defined
require_once __DIR__ . '/../inc/configuration.inc.php';
require_once __DIR__ . '/../inc/functions.inc.php';
require_once __DIR__ . '/../inc/firebird.inc.php';

// Load language file needed for some tests
if (!defined('LANGUAGE')) {
    define('LANGUAGE', 'english');
}
require_once __DIR__ . '/../lang/english.inc.php';
