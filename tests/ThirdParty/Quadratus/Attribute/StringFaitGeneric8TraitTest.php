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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric8Trait;

/**
 * Fait generic8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric8TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric8() method.
     *
     * @return void
     */
    public function testSetFaitGeneric8() {

        $obj = new TestStringFaitGeneric8Trait();

        $obj->setFaitGeneric8("faitGeneric8");
        $this->assertEquals("faitGeneric8", $obj->getFaitGeneric8());
    }
}
