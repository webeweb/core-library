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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsuCodeCColect3Trait;

/**
 * D a d s u code c colect3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsuCodeCColect3TraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsuCodeCColect3() method.
     *
     * @return void
     */
    public function testSetDadsuCodeCColect3() {

        $obj = new TestStringDadsuCodeCColect3Trait();

        $obj->setDadsuCodeCColect3("dadsuCodeCColect3");
        $this->assertEquals("dadsuCodeCColect3", $obj->getDadsuCodeCColect3());
    }
}
