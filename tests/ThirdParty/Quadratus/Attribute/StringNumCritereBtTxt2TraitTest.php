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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtTxt2Trait;

/**
 * Num critere b t txt2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtTxt2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtTxt2() method.
     *
     * @return void
     */
    public function testSetNumCritereBtTxt2() {

        $obj = new TestStringNumCritereBtTxt2Trait();

        $obj->setNumCritereBtTxt2("numCritereBtTxt2");
        $this->assertEquals("numCritereBtTxt2", $obj->getNumCritereBtTxt2());
    }
}
