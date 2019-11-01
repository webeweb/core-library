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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeEditBrTrait;

/**
 * Type edit b r trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeEditBrTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeEditBr() method.
     *
     * @return void
     */
    public function testSetTypeEditBr() {

        $obj = new TestStringTypeEditBrTrait();

        $obj->setTypeEditBr("typeEditBr");
        $this->assertEquals("typeEditBr", $obj->getTypeEditBr());
    }
}
