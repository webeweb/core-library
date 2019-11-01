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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtNum1Trait;

/**
 * Num critere b t num1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtNum1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtNum1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtNum1() {

        $obj = new TestStringNumCritereBtNum1Trait();

        $obj->setNumCritereBtNum1("numCritereBtNum1");
        $this->assertEquals("numCritereBtNum1", $obj->getNumCritereBtNum1());
    }
}
