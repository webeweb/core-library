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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuCodeCColect2Trait;

/**
 * D a d s u code c colect2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuCodeCColect2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuCodeCColect2() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect2() {

        $obj = new TestStringDadsuCodeCColect2Trait();

        $obj->setDadsuCodeCColect2("dadsuCodeCColect2");
        $this->assertEquals("dadsuCodeCColect2", $obj->getDadsuCodeCColect2());
    }
}
