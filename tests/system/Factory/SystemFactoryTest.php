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
}
