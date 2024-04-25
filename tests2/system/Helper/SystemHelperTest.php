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

namespace WBW\Library\System\Tests\Helper;

use RuntimeException;
use Throwable;
use WBW\Library\System\Helper\SystemHelper;
use WBW\Library\System\Model\PropertyInterface;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * System helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Helper
 */
class SystemHelperTest extends AbstractTestCase {

    /**
     * Test isUnix()
     *
     * @return void
     */
    public function testIsUnix(): void {

        if ("\\" !== DIRECTORY_SEPARATOR) {
            $this->assertTrue(SystemHelper::isUnix());
        } else {
            $this->assertFalse(SystemHelper::isUnix());
        }
    }

    /**
     * Test isWindows()
     *
     * @return void
     */
    public function testIsWindows(): void {

        if ("\\" !== DIRECTORY_SEPARATOR) {
            $this->assertFalse(SystemHelper::isWindows());
        } else {
            $this->assertTrue(SystemHelper::isWindows());
        }
    }

    /**
     * Test retrieveCpu()
     *
     * @return void
     */
    public function testRetrieveCpu(): void {

        try {

            $obj = SystemHelper::retrieveCpu();

            $this->assertGreaterThanOrEqual(0, $obj->getUs());
            $this->assertGreaterThanOrEqual(0, $obj->getSy());
            $this->assertGreaterThanOrEqual(0, $obj->getNi());
            $this->assertGreaterThanOrEqual(0, $obj->getId());
            $this->assertGreaterThanOrEqual(0, $obj->getWa());
            $this->assertGreaterThanOrEqual(0, $obj->getHi());
            $this->assertGreaterThanOrEqual(0, $obj->getSi());
            $this->assertGreaterThanOrEqual(0, $obj->getST());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveDate()
     *
     * @return void
     */
    public function testRetrieveDate(): void {

        try {

            $this->assertNotNull(SystemHelper::retrieveDate());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveHardDisks()
     *
     * @return void
     */
    public function testRetrieveHardDisks(): void {

        try {

            $res = SystemHelper::retrieveHardDisks();

            $this->assertGreaterThanOrEqual(1, count($res));
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveHostname()
     *
     * @return void
     */
    public function testRetrieveHostname(): void {

        try {

            $this->assertNotNull(SystemHelper::retrieveHostname());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveMemory()
     *
     * @return void
     */
    public function testRetrieveMemory(): void {

        try {

            $obj = SystemHelper::retrieveMemory();

            $this->assertNotCount(0, $obj->getValues());

            foreach ($obj->getValues() as $current) {
                $this->assertGreaterThanOrEqual(0, $current);
            }

            $this->assertGreaterThan(0, $obj->getMemAvailable());
            $this->assertGreaterThan(0, $obj->getMemFree());
            $this->assertGreaterThan(0, $obj->getMemTotal());
            $this->assertGreaterThanOrEqual(0, $obj->getSwapFree());
            $this->assertGreaterThanOrEqual(0, $obj->getSwapTotal());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveNetwork()
     *
     * @return void
     */
    public function testRetrieveNetwork(): void {

        try {

            $obj = SystemHelper::retrieveNetwork();

            $this->assertNotNull($obj->getHostname());
            $this->assertNotNull($obj->getGateway());
            $this->assertNotNull($obj->getDns());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveNetworkCard()
     *
     * @return void
     */
    public function testRetrieveNetworkCard(): void {

        try {

            $obj = SystemHelper::retrieveNetworkCard("lo");

            $this->assertNotNull($obj->getName());
            $this->assertNotNull($obj->getDuplex());
            $this->assertNotNull($obj->getIpv4());
            $this->assertNotNull($obj->getIpv6());
            $this->assertNotNull($obj->getMac());
            $this->assertNotNull($obj->getSpeed());
            $this->assertNotNull($obj->getStatus());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveNetworkCards()
     *
     * @return void
     */
    public function testRetrieveNetworkCards(): void {

        try {

            $res = SystemHelper::retrieveNetworkCards();

            $this->assertGreaterThan(1, count($res));
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveOperatingSystem()
     *
     * @return void
     */
    public function testRetrieveOperatingSystem(): void {

        try {

            $obj = SystemHelper::retrieveOperatingSystem();

            $this->assertNotNull($obj->getCodename());
            $this->assertNotNull($obj->getDescription());
            $this->assertNotNull($obj->getId());
            $this->assertNotNull($obj->getRelease());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveProcessors()
     *
     * @return void
     */
    public function testRetrieveProcessors(): void {

        try {

            $res = SystemHelper::retrieveProcessors();

            $this->assertGreaterThanOrEqual(1, count($res));

            $this->assertNotCount(0, $res[0]->getValues());

            $this->assertNotNull($res[0]->getCoreId());
            $this->assertNotNull($res[0]->getCpuCores());
            $this->assertNotNull($res[0]->getCpuMhz());
            $this->assertNotNull($res[0]->getModelName());
            $this->assertNotNull($res[0]->getProcessor());
            $this->assertNotNull($res[0]->getVendorId());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Test retrieveProperties()
     *
     * @return void
     */
    public function testRetrieveProperties(): void {

        $res = SystemHelper::retrieveProperties();
        $this->assertCount(14, $res);

        $this->assertArrayHasKey(PropertyInterface::FILE_SEPARATOR, $res);
        $this->assertArrayHasKey(PropertyInterface::PHP_CLASS_PATH, $res);
        $this->assertArrayHasKey(PropertyInterface::PHP_HOME, $res);
        $this->assertArrayHasKey(PropertyInterface::PHP_VENDOR, $res);
        $this->assertArrayHasKey(PropertyInterface::PHP_VENDOR_URL, $res);
        $this->assertArrayHasKey(PropertyInterface::PHP_VERSION, $res);
        $this->assertArrayHasKey(PropertyInterface::LINE_SEPARATOR, $res);
        $this->assertArrayHasKey(PropertyInterface::OS_ARCH, $res);
        $this->assertArrayHasKey(PropertyInterface::OS_NAME, $res);
        $this->assertArrayHasKey(PropertyInterface::OS_VERSION, $res);
        $this->assertArrayHasKey(PropertyInterface::PATH_SEPARATOR, $res);
        $this->assertArrayHasKey(PropertyInterface::USER_DIR, $res);
        $this->assertArrayHasKey(PropertyInterface::USER_HOME, $res);
        $this->assertArrayHasKey(PropertyInterface::USER_NAME, $res);
    }

    /**
     * Test retrieveUptime()
     *
     * @return void
     */
    public function testRetrieveUptime(): void {

        try {

            $this->assertNotNull(SystemHelper::retrieveUptime());
        } catch (Throwable $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }
}
