<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\System\Tests\Factory;

use WBW\Library\System\Factory\SystemFactory;
use WBW\Library\System\Tests\AbstractTestCase;

/**
 * System factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\System\Tests\Factory
 */
class SystemFactoryTest extends AbstractTestCase {

    /**
     * Tests newMemory()
     *
     * @return void
     */
    public function testNewMemory(): void {

        $obj = SystemFactory::newMemory();

        $this->assertCount(51, $obj->getKeys());

        foreach ($obj->getValues() as $current) {
            $this->assertGreaterThanOrEqual(0, $current);
        }
    }

    /**
     * Tests newNetwork()
     *
     * @return void
     */
    public function testNewNetwork(): void {

        $obj = SystemFactory::newNetwork();

        $this->assertNotNull($obj->getHostname());
        $this->assertNotNull($obj->getGateway());
        $this->assertNotNull($obj->getDns());
    }

    /**
     * Tests newNetworkCard()
     *
     * @return void
     */
    public function testNewNetworkCard(): void {

        $obj = SystemFactory::newNetworkCard("wlp3s0");

        $this->assertNotNull($obj->getName());
        $this->assertNotNull($obj->getDuplex());
        $this->assertNotNull($obj->getIpv4());
        $this->assertNotNull($obj->getIpv6());
        $this->assertNotNull($obj->getMac());
        $this->assertNotNull($obj->getSpeed());
        $this->assertNotNull($obj->getStatus());
    }

    /**
     * Tests newNetworkCards()
     *
     * @return void
     */
    public function testNewNetworkCards(): void {

        $res = SystemFactory::newNetworkCards();

        $this->assertGreaterThan(1, count($res));
    }
}
