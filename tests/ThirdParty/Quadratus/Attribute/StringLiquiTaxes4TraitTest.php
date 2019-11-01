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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLiquiTaxes4Trait;

/**
 * Liqui taxes4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLiquiTaxes4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLiquiTaxes4() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes4() {

        $obj = new TestStringLiquiTaxes4Trait();

        $obj->setLiquiTaxes4("liquiTaxes4");
        $this->assertEquals("liquiTaxes4", $obj->getLiquiTaxes4());
    }
}
