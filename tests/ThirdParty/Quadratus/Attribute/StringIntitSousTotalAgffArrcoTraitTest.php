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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIntitSousTotalAgffArrcoTrait;

/**
 * Intit sous total a g f f arrco trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIntitSousTotalAgffArrcoTraitTest extends AbstractTestCase {

    /**
     * Tests the setIntitSousTotalAgffArrco() method.
     *
     * @return void
     */
    public function testSetIntitSousTotalAgffArrco() {

        $obj = new TestStringIntitSousTotalAgffArrcoTrait();

        $obj->setIntitSousTotalAgffArrco("intitSousTotalAgffArrco");
        $this->assertEquals("intitSousTotalAgffArrco", $obj->getIntitSousTotalAgffArrco());
    }
}
