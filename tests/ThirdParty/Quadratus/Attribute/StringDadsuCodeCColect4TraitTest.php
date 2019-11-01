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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuCodeCColect4Trait;

/**
 * D a d s u code c colect4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuCodeCColect4TraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuCodeCColect4() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect4() {

        $obj = new TestStringDadsuCodeCColect4Trait();

        $obj->setDadsuCodeCColect4("dadsuCodeCColect4");
        $this->assertEquals("dadsuCodeCColect4", $obj->getDadsuCodeCColect4());
    }
}
