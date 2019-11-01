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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuCodeCColect1Trait;

/**
 * D a d s u code c colect1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuCodeCColect1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuCodeCColect1() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect1() {

        $obj = new TestStringDadsuCodeCColect1Trait();

        $obj->setDadsuCodeCColect1("dadsuCodeCColect1");
        $this->assertEquals("dadsuCodeCColect1", $obj->getDadsuCodeCColect1());
    }
}
