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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTdsSup1200Trait;

/**
 * T d s sup1200 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTdsSup1200TraitTest extends AbstractTestCase {

    /**
     * Tests the setTdsSup1200() method.
     *
     * @return void
     */
    public function testSetTdsSup1200() {

        $obj = new TestStringTdsSup1200Trait();

        $obj->setTdsSup1200("tdsSup1200");
        $this->assertEquals("tdsSup1200", $obj->getTdsSup1200());
    }
}
