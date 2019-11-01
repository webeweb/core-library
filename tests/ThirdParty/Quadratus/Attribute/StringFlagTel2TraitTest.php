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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFlagTel2Trait;

/**
 * Flag tel2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFlagTel2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFlagTel2() method.
     *
     * @return void
     */
    public function testSetFlagTel2() {

        $obj = new TestStringFlagTel2Trait();

        $obj->setFlagTel2("flagTel2");
        $this->assertEquals("flagTel2", $obj->getFlagTel2());
    }
}
