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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLiquiTaxes5Trait;

/**
 * Liqui taxes5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLiquiTaxes5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLiquiTaxes5() method.
     *
     * @return void
     */
    public function testSetLiquiTaxes5() {

        $obj = new TestStringLiquiTaxes5Trait();

        $obj->setLiquiTaxes5("liquiTaxes5");
        $this->assertEquals("liquiTaxes5", $obj->getLiquiTaxes5());
    }
}
