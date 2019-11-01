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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuCodeCColect6Trait;

/**
 * D a d s u code c colect6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuCodeCColect6TraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuCodeCColect6() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect6() {

        $obj = new TestStringDadsuCodeCColect6Trait();

        $obj->setDadsuCodeCColect6("dadsuCodeCColect6");
        $this->assertEquals("dadsuCodeCColect6", $obj->getDadsuCodeCColect6());
    }
}
