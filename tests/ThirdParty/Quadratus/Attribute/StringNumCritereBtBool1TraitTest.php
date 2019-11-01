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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtBool1Trait;

/**
 * Num critere b t bool1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtBool1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtBool1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtBool1() {

        $obj = new TestStringNumCritereBtBool1Trait();

        $obj->setNumCritereBtBool1("numCritereBtBool1");
        $this->assertEquals("numCritereBtBool1", $obj->getNumCritereBtBool1());
    }
}
