<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDasTypeDeclDetailTrait;

/**
 * D a s type decl detail trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDasTypeDeclDetailTraitTest extends AbstractTestCase {

    /**
     * Tests the setDasTypeDeclDetail() method.
     *
     * @return void
     */
    public function testSetDasTypeDeclDetail() {

        $obj = new TestStringDasTypeDeclDetailTrait();

        $obj->setDasTypeDeclDetail("dasTypeDeclDetail");
        $this->assertEquals("dasTypeDeclDetail", $obj->getDasTypeDeclDetail());
    }
}
