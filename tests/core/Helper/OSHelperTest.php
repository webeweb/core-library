<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Helper;

use WBW\Library\Core\Helper\OSHelper;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Operating System helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Helper
 */
class OSHelperTest extends AbstractTestCase {

    /**
     * Tests getMemory()
     *
     * @return void
     */
    public function testGetMemory(): void {

        $obj = OSHelper::getMemory();

        $this->assertGreaterThanOrEqual(0, $obj->getTotal());
        $this->assertGreaterThanOrEqual(0, $obj->getUsed());
        $this->assertGreaterThanOrEqual(0, $obj->getFree());
        $this->assertGreaterThanOrEqual(0, $obj->getShared());
        $this->assertGreaterThanOrEqual(0, $obj->getBuffCache());
        $this->assertGreaterThanOrEqual(0, $obj->getAvailable());
    }

    /**
     * Tests getMemory()
     *
     * @return void
     */
    public function testGetMemoryWithSwap(): void {

        $obj = OSHelper::getMemory(true);

        $this->assertGreaterThanOrEqual(0, $obj->getTotal());
        $this->assertGreaterThanOrEqual(0, $obj->getUsed());
        $this->assertGreaterThanOrEqual(0, $obj->getFree());
        $this->assertNull($obj->getShared());
        $this->assertNull($obj->getBuffCache());
        $this->assertNull($obj->getAvailable());
    }

    /**
     * Tests isLinux()
     *
     * @return void
     */
    public function testIsLinux(): void {

        if ("\\" !== DIRECTORY_SEPARATOR) {
            $this->assertTrue(OSHelper::isLinux());
        } else {
            $this->assertFalse(OSHelper::isLinux());
        }
    }

    /**
     * Tests isWindows()
     *
     * @return void
     */
    public function testIsWindows(): void {

        if ("\\" !== DIRECTORY_SEPARATOR) {
            $this->assertFalse(OSHelper::isWindows());
        } else {
            $this->assertTrue(OSHelper::isWindows());
        }
    }
}
