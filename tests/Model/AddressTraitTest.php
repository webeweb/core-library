<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Model;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\Model\TestAddressTrait;

class AddressTraitTest extends AbstractTestCase {

    /**
     * Tests the setAddresseeDescription() method.
     *
     * @return void
     */
    public function testSetAddresseeDescription(): void {

        $obj = new TestAddressTrait();

        $obj->setAddresseeDescription("addresseeDescription");
        $this->assertEquals("addresseeDescription", $obj->getAddresseeDescription());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAddressTrait();

        $this->assertNull($obj->getAddressee());
        $this->assertNull($obj->getAddresseeDescription());
        $this->assertNull($obj->getCountry());
        $this->assertNull($obj->getHouseNumber());
        $this->assertNull($obj->getLocation());
        $this->assertNull($obj->getPostalCode());
        $this->assertNull($obj->getStreetName());
    }
}
