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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLiquiTaxes1Trait;

/**
 * Liqui taxes1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLiquiTaxes1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLiquiTaxes1() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes1() {

        $obj = new TestStringLiquiTaxes1Trait();

        $obj->setLiquiTaxes1("liquiTaxes1");
        $this->assertEquals("liquiTaxes1", $obj->getLiquiTaxes1());
    }
}
