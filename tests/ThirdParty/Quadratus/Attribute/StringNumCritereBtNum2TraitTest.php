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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtNum2Trait;

/**
 * Num critere b t num2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtNum2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtNum2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtNum2() {

        $obj = new TestStringNumCritereBtNum2Trait();

        $obj->setNumCritereBtNum2("numCritereBtNum2");
        $this->assertEquals("numCritereBtNum2", $obj->getNumCritereBtNum2());
    }
}
