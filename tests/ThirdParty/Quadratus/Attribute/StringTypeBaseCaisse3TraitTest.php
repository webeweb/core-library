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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeBaseCaisse3Trait;

/**
 * Type base caisse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeBaseCaisse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeBaseCaisse3() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3() {

        $obj = new TestStringTypeBaseCaisse3Trait();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }
}
