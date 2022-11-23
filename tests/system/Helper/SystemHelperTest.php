<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Helper;

use Exception;
use RuntimeException;
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
     * Tests isUnix()
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
     * Tests isWindows()
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
     * Tests retrieveDate()
     *
     * @return void
     */
    public function testRetrieveDate(): void {

        try {

            $this->assertNotNull(SystemHelper::retrieveDate());
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveHardDisks()
     *
     * @return void
     */
    public function testRetrieveHardDisks(): void {

        try {

            $res = SystemHelper::retrieveHardDisks();

            $this->assertGreaterThanOrEqual(1, count($res));
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveHostname()
     *
     * @return void
     */
    public function testRetrieveHostname(): void {

        try {

            $this->assertNotNull(SystemHelper::retrieveHostname());
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveMemory()
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
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveNetwork()
     *
     * @return void
     */
    public function testRetrieveNetwork(): void {

        try {

            $obj = SystemHelper::retrieveNetwork();

            $this->assertNotNull($obj->getHostname());
            $this->assertNotNull($obj->getGateway());
            $this->assertNotNull($obj->getDns());
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveNetworkCard()
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
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveNetworkCards()
     *
     * @return void
     */
    public function testRetrieveNetworkCards(): void {

        try {

            $res = SystemHelper::retrieveNetworkCards();

            $this->assertGreaterThan(1, count($res));
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveOperatingSystem()
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
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveProcessors()
     *
     * @return void
     */
    public function testRetrieveProcessors(): void {

        try {

            $res = SystemHelper::retrieveProcessors();

            $this->assertGreaterThanOrEqual(1, count($res));
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }

    /**
     * Tests retrieveProperties()
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
     * Tests retrieveUptime()
     *
     * @return void
     */
    public function testRetrieveUptime(): void {

        try {

            $this->assertNotNull(SystemHelper::retrieveUptime());
        } catch (Exception $ex) {

            $this->assertInstanceOf(RuntimeException::class, $ex);
            $this->assertEquals("This operating system is unsupported", $ex->getMessage());
        }
    }
}
