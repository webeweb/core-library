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

/**
 * Address trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Tests\Model
 */
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
}
