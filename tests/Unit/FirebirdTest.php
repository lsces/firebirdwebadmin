<?php

use PHPUnit\Framework\TestCase;

class FirebirdTest extends TestCase
{
    public function testGetPresetCharsets()
    {
        $charsets = get_preset_charsets();
        $this->assertIsArray($charsets);
        $this->assertContains('UTF8', $charsets);
        $this->assertContains('NONE', $charsets);
    }

    public function testGetDatatypes()
    {
        $datatypes = get_datatypes();
        $this->assertIsArray($datatypes);
        $this->assertArrayHasKey(37, $datatypes); // VARCHAR
        $this->assertEquals('VARCHAR', $datatypes[37]);
    }
}
