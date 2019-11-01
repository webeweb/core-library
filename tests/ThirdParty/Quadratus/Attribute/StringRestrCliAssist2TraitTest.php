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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRestrCliAssist2Trait;

/**
 * Restr cli assist2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRestrCliAssist2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRestrCliAssist2() method.
     *
     * @return void
     */
    public function testSetRestrCliAssist2() {

        $obj = new TestStringRestrCliAssist2Trait();

        $obj->setRestrCliAssist2("restrCliAssist2");
        $this->assertEquals("restrCliAssist2", $obj->getRestrCliAssist2());
    }
}
