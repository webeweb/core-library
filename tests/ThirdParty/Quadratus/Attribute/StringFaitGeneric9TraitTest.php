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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric9Trait;

/**
 * Fait generic9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric9TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric9() method.
     *
     * @return void
     */
    public function testSetFaitGeneric9() {

        $obj = new TestStringFaitGeneric9Trait();

        $obj->setFaitGeneric9("faitGeneric9");
        $this->assertEquals("faitGeneric9", $obj->getFaitGeneric9());
    }
}
