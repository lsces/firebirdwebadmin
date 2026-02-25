<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    protected function setUp(): void
    {
        // build_title depends on these globals
        $GLOBALS['s_connected'] = false;
        $GLOBALS['s_login'] = ['database' => 'test.fdb'];
    }

    public function testBuildTitleDisconnected()
    {
        $GLOBALS['s_connected'] = false;
        $title = build_title('Database');
        $this->assertEquals('Firebird Web Admin / Database', $title);
    }

    public function testBuildTitleConnected()
    {
        $GLOBALS['s_connected'] = true;
        $title = build_title('Database');
        $this->assertEquals('Firebird Web Admin / Database: test.fdb', $title);
    }
}
