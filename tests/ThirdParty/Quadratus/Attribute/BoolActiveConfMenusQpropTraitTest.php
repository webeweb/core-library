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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolActiveConfMenusQpropTrait;

/**
 * Active conf menus q p r o p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolActiveConfMenusQpropTraitTest extends AbstractTestCase {

    /**
     * Tests the setActiveConfMenusQprop() method.
     *
     * @return void
     */
    public function testSetActiveConfMenusQprop() {

        $obj = new TestBoolActiveConfMenusQpropTrait();

        $obj->setActiveConfMenusQprop(true);
        $this->assertEquals(true, $obj->getActiveConfMenusQprop());
    }
}
