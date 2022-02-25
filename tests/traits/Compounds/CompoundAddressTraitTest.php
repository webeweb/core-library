<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\Tests\Compounds;

use WBW\Library\Traits\Tests\AbstractTestCase;
use WBW\Library\Traits\Tests\Fixtures\Compounds\TestCompoundAddressTrait;

/**
 * Compound address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\Tests\Compounds
 */
class CompoundAddressTraitTest extends AbstractTestCase {

    /**
     * Tests setAddresseeDescription()
     *
     * @return void
     */
    public function testSetAddresseeDescription(): void {

        $obj = new TestCompoundAddressTrait();

        $obj->setAddresseeDescription("addresseeDescription");
        $this->assertEquals("addresseeDescription", $obj->getAddresseeDescription());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestCompoundAddressTrait();

        $this->assertNull($obj->getAddressee());
        $this->assertNull($obj->getCountry());
        $this->assertNull($obj->getHouseNumber());
        $this->assertNull($obj->getLocation());
        $this->assertNull($obj->getPostalCode());
        $this->assertNull($obj->getStreetName());
    }
}
