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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumCritereBtByte1Trait;

/**
 * Num critere b t byte1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumCritereBtByte1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumCritereBtByte1() method.
     *
     * @return void
     */
    public function testSetNumCritereBtByte1() {

        $obj = new TestStringNumCritereBtByte1Trait();

        $obj->setNumCritereBtByte1("numCritereBtByte1");
        $this->assertEquals("numCritereBtByte1", $obj->getNumCritereBtByte1());
    }
}
