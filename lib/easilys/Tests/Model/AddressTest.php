<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Tests\Model;

use WBW\Library\Easilys\Model\Address;
use WBW\Library\Easilys\Tests\AbstractTestCase;

/**
 * Address test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Tests\Model
 */
class AddressTest extends AbstractTestCase {

    /**
     * Test setAddress()
     *
     * @return void
     */
    public function testSetAddress(): void {

        $obj = new Address();

        $obj->setAddress("address");
        $this->assertEquals("address", $obj->getAddress());
    }

    /**
     * Test setCity()
     *
     * @return void
     */
    public function testSetCity(): void {

        $obj = new Address();

        $obj->setCity("city");
        $this->assertEquals("city", $obj->getCity());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Address();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getCountry());
        $this->assertNull($obj->getIsMain());
        $this->assertNull($obj->getLabel());
        $this->assertNull($obj->getPostalCode());
        $this->assertNull($obj->getType());

        $this->assertNull($obj->getAddress());
        $this->assertNull($obj->getCity());
    }
}
