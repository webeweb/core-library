<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests;

use RuntimeException;
use Throwable;
use WBW\Library\Common\Model\System\PropertyInterface;
use WBW\Library\System\System;

/**
 * System test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests
 */
class SystemTest extends AbstractTestCase {

    /**
     * Test getCpu()
     *
     * @return void
     */
    public function testGetCpu(): void {

        try {

            $res = System::getCpu();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getDate()
     *
     * @return void
     */
    public function testGetDate(): void {

        try {

            $res = System::getDate();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getHardDisks()
     *
     * @return void
     */
    public function testGetHardDisks(): void {

        try {

            $res = System::getHardDisks();

            $this->assertNotCount(0, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getHostname()
     *
     * @return void
     */
    public function testGetHostname(): void {

        try {

            $res = System::getHostname();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getMemory()
     *
     * @return void
     */
    public function testGetMemory(): void {

        try {

            $res = System::getMemory();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getNetwork()
     *
     * @return void
     */
    public function testGetNetwork(): void {

        try {

            $res = System::getNetwork();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getNetworkCards()
     *
     * @return void
     */
    public function testGetNetworkCards(): void {

        try {

            $res = System::getNetworkCards();

            $this->assertNotCount(0, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getOperatingSystem()
     *
     * @return void
     */
    public function testGetOperatingSystem(): void {

        try {

            $res = System::getOperatingSystem();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getProcessors()
     *
     * @return void
     */
    public function testGetProcessors(): void {

        try {

            $res = System::getProcessors();

            $this->assertNotCount(0, $res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test getProperties()
     *
     * @return void
     */
    public function testGetProperties(): void {

        $this->assertIsArray(System::getProperties());
    }

    /**
     * Test getProperty()
     *
     * @return void
     */
    public function testGetProperty(): void {

        $this->assertNotNull(System::getProperty(PropertyInterface::FILE_SEPARATOR));
        $this->assertNull(System::getProperty(""));
    }

    /**
     * Test getUptime()
     *
     * @return void
     */
    public function testGetUptime(): void {

        try {

            $res = System::getUptime();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test isUnix()
     *
     * @return void
     */
    public function testIsUnix(): void {

        $this->assertIsBool(System::isUnix());
    }

    /**
     * Test isWindows()
     *
     * @return void
     */
    public function testIsWindows(): void {

        $this->assertIsBool(System::isWindows());
    }
}
