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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLiquiTaxes2Trait;

/**
 * Liqui taxes2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLiquiTaxes2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLiquiTaxes2() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes2() {

        $obj = new TestStringLiquiTaxes2Trait();

        $obj->setLiquiTaxes2("liquiTaxes2");
        $this->assertEquals("liquiTaxes2", $obj->getLiquiTaxes2());
    }
}
