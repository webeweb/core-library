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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuCodeCColect5Trait;

/**
 * D a d s u code c colect5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuCodeCColect5TraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuCodeCColect5() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect5() {

        $obj = new TestStringDadsuCodeCColect5Trait();

        $obj->setDadsuCodeCColect5("dadsuCodeCColect5");
        $this->assertEquals("dadsuCodeCColect5", $obj->getDadsuCodeCColect5());
    }
}
