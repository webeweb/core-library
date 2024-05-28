<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Tests\Monitor;

use RuntimeException;
use Throwable;
use WBW\Library\Common\Model\System\PropertyInterface;
use WBW\Library\Common\Monitor\SystemMonitor;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * System monitor test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Monitor
 */
class SystemMonitorTest extends AbstractTestCase {

    /**
     * Test getCpu()
     *
     * @return void
     */
    public function testGetCpu(): void {

        try {

            $res = SystemMonitor::getCpu();

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

            $res = SystemMonitor::getDate();

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

            $res = SystemMonitor::getHardDisks();

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

            $res = SystemMonitor::getHostname();

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

            $res = SystemMonitor::getMemory();

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

            $res = SystemMonitor::getNetwork();

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

            $res = SystemMonitor::getNetworkCards();

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

            $res = SystemMonitor::getOperatingSystem();

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

            $res = SystemMonitor::getProcessors();

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

        $this->assertIsArray(SystemMonitor::getProperties());
    }

    /**
     * Test getProperty()
     *
     * @return void
     */
    public function testGetProperty(): void {

        $this->assertNotNull(SystemMonitor::getProperty(PropertyInterface::FILE_SEPARATOR));
        $this->assertNull(SystemMonitor::getProperty(""));
    }

    /**
     * Test getUptime()
     *
     * @return void
     */
    public function testGetUptime(): void {

        try {

            $res = SystemMonitor::getUptime();

            $this->assertNotNull($res);
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }
}
