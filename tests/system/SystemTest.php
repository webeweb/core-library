<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests;

use Exception;
use RuntimeException;
use WBW\Library\System\System;

/**
 * System test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests
 */
class SystemTest extends AbstractTestCase {

    /**
     * Tests getDate()
     *
     * @return void
     */
    public function testGetDate(): void {

        try {

            $res = System::getDate();

            $this->assertNotNull($res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getHardDisks()
     *
     * @return void
     */
    public function testGetHardDisks(): void {

        try {

            $res = System::getHardDisks();

            $this->assertNotCount(0, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getMemory()
     *
     * @return void
     */
    public function testGetMemory(): void {

        try {

            $res = System::getMemory();

            $this->assertNotNull($res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getNetwork()
     *
     * @return void
     */
    public function testGetNetwork(): void {

        try {

            $res = System::getNetwork();

            $this->assertNotNull($res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getNetworkCards()
     *
     * @return void
     */
    public function testGetNetworkCards(): void {

        try {

            $res = System::getNetworkCards();

            $this->assertNotCount(0, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getOperatingSystem()
     *
     * @return void
     */
    public function testGetOperatingSystem(): void {

        try {

            $res = System::getOperatingSystem();

            $this->assertNotNull($res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getProcessors()
     *
     * @return void
     */
    public function testGetProcessors(): void {

        try {

            $res = System::getProcessors();

            $this->assertNotCount(0, $res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests getUptime()
     *
     * @return void
     */
    public function testGetUptime(): void {

        try {

            $res = System::getUptime();

            $this->assertNotNull($res);
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests isUnix()
     *
     * @return void
     */
    public function testIsUnix(): void {

        $this->assertIsBool(System::isUnix());
    }

    /**
     * Tests isWindows()
     *
     * @return void
     */
    public function testIsWindows(): void {

        $this->assertIsBool(System::isWindows());
    }
}
