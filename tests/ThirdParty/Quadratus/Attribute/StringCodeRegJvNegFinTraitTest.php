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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRegJvNegFinTrait;

/**
 * Code reg j v neg fin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRegJvNegFinTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRegJvNegFin() method.
     *
     * @return void
     */
    public function testSetCodeRegJvNegFin() {

        $obj = new TestStringCodeRegJvNegFinTrait();

        $obj->setCodeRegJvNegFin("codeRegJvNegFin");
        $this->assertEquals("codeRegJvNegFin", $obj->getCodeRegJvNegFin());
    }
}
