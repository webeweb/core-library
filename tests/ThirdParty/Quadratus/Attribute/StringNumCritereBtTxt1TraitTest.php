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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtTxt1Trait;

/**
 * Num critere b t txt1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtTxt1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtTxt1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtTxt1() {

        $obj = new TestStringNumCritereBtTxt1Trait();

        $obj->setNumCritereBtTxt1("numCritereBtTxt1");
        $this->assertEquals("numCritereBtTxt1", $obj->getNumCritereBtTxt1());
    }
}
