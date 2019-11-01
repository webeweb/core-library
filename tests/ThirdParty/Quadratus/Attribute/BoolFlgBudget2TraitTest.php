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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFlgBudget2Trait;

/**
 * Flg budget2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFlgBudget2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFlgBudget2() method.
     *
     * @return void
     */
    public function testSetFlgBudget2() {

        $obj = new TestBoolFlgBudget2Trait();

        $obj->setFlgBudget2(true);
        $this->assertEquals(true, $obj->getFlgBudget2());
    }
}
