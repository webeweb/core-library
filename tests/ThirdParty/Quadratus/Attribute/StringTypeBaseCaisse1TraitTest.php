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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeBaseCaisse1Trait;

/**
 * Type base caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeBaseCaisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeBaseCaisse1() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1() {

        $obj = new TestStringTypeBaseCaisse1Trait();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }
}
