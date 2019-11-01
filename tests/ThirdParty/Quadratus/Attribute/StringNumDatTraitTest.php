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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumDatTrait;

/**
 * Num d a t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumDatTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumDat() method.
     *
     * @return void
     */
    public function testSetNumDat() {

        $obj = new TestStringNumDatTrait();

        $obj->setNumDat("numDat");
        $this->assertEquals("numDat", $obj->getNumDat());
    }
}
