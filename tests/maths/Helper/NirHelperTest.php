<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Maths\Tests\Helper;

use WBW\Library\Maths\Helper\NirHelper;
use WBW\Library\Maths\Tests\AbstractTestCase;

/**
 * NIR helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Maths\Tests\Helper
 */
class NirHelperTest extends AbstractTestCase {

    /**
     * Tests check()
     *
     * @return void
     */
    public function testCheck(): void {

        $this->assertNull(NirHelper::check(null));
        $this->assertNull(NirHelper::check("1700101001001"));
        $this->assertNull(NirHelper::check("370010100100164")); // Sex
        $this->assertNull(NirHelper::check("170130100100165")); // Month
        $this->assertFalse(NirHelper::check("170010100100166"));
        $this->assertTrue(NirHelper::check("170010100100167"));
    }

    /**
     * Tests key()
     *
     * @return void
     */
    public function testKey(): void {

        $this->assertNull(NirHelper::key(null));
        $this->assertNull(NirHelper::key("170010100100"));
        $this->assertEquals("67", NirHelper::key("1700101001001"));
    }
}
