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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtBool2Trait;

/**
 * Num critere b t bool2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtBool2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtBool2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtBool2() {

        $obj = new TestStringNumCritereBtBool2Trait();

        $obj->setNumCritereBtBool2("numCritereBtBool2");
        $this->assertEquals("numCritereBtBool2", $obj->getNumCritereBtBool2());
    }
}
