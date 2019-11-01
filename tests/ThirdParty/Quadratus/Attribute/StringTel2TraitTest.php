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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTel2Trait;

/**
 * Tel2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTel2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2() {

        $obj = new TestStringTel2Trait();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }
}
