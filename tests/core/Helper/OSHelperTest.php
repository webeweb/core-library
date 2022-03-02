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
