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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringProvCpCptChargesTrait;

/**
 * Prov c p cpt charges trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringProvCpCptChargesTraitTest extends AbstractTestCase {

    /**
     * Tests the setProvCpCptCharges() method.
     *
     * @return void
     */
    public function testSetProvCpCptCharges() {

        $obj = new TestStringProvCpCptChargesTrait();

        $obj->setProvCpCptCharges("provCpCptCharges");
        $this->assertEquals("provCpCptCharges", $obj->getProvCpCptCharges());
    }
}
