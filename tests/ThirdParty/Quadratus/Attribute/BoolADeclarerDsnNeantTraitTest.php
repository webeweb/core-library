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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolADeclarerDsnNeantTrait;

/**
 * A declarer d s n neant trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolADeclarerDsnNeantTraitTest extends AbstractTestCase {

    /**
     * Tests the setADeclarerDsnNeant() method.
     *
     * @return void
     */
    public function testSetADeclarerDsnNeant() {

        $obj = new TestBoolADeclarerDsnNeantTrait();

        $obj->setADeclarerDsnNeant(true);
        $this->assertEquals(true, $obj->getADeclarerDsnNeant());
    }
}
