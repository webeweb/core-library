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
        $this->assertNull(NirHelper::check("1621345044056"));
        $this->assertFalse(NirHelper::check("162134504405657"));
        $this->assertTrue(NirHelper::check("162134504405658"));
    }

    /**
     * Tests key()
     *
     * @return void
     */
    public function testKey(): void {

        $this->assertNull(NirHelper::key(null));
        $this->assertNull(NirHelper::key("162134504405"));
        $this->assertEquals("58", NirHelper::key("1621345044056"));
    }
}
