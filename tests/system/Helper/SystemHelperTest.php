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
use WBW\Library\System\Exception\UnsupportedSystemException;
use WBW\Library\System\Helper\SystemHelper;
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
     * Tests retrieveHardDisks()
     *
     * @return void
     */
    public function testRetrieveHardDisks(): void {

        try {

            $res = SystemHelper::retrieveHardDisks();

            $this->assertGreaterThanOrEqual(1, count($res));
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
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
        } catch (Exception $ex) {

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
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

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
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

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
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

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
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

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
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

            $this->assertInstanceOf(UnsupportedSystemException::class, $ex);
        }
    }
}
