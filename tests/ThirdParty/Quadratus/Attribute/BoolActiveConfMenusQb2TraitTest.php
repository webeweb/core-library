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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolActiveConfMenusQb2Trait;

/**
 * Active conf menus q b2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolActiveConfMenusQb2TraitTest extends AbstractTestCase {

    /**
     * Tests the setActiveConfMenusQb2() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQb2() {

        $obj = new TestBoolActiveConfMenusQb2Trait();

        $obj->setActiveConfMenusQb2(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQb2());
    }
}
