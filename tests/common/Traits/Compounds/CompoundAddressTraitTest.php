<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Common\Tests\Traits\Compounds;

use WBW\Library\Common\Tests\Fixtures\Traits\Compounds\TestCompoundAddressTrait;
use WBW\Library\Common\Tests\AbstractTestCase;

/**
 * Compound address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Tests\Traits\Compounds
 */
class CompoundAddressTraitTest extends AbstractTestCase {

    /**
     * Test setAddresseeDescription()
     *
     * @return void
     */
    public function testSetAddresseeDescription(): void {

        $obj = new TestCompoundAddressTrait();

        $obj->setAddresseeDescription("addresseeDescription");
        $this->assertEquals("addresseeDescription", $obj->getAddresseeDescription());
    }

    /**
     * Test __construct()
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
