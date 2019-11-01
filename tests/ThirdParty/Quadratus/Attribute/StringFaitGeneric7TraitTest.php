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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric7Trait;

/**
 * Fait generic7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric7TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric7() method.
     *
     * @return void
     */
    public function testSetFaitGeneric7() {

        $obj = new TestStringFaitGeneric7Trait();

        $obj->setFaitGeneric7("faitGeneric7");
        $this->assertEquals("faitGeneric7", $obj->getFaitGeneric7());
    }
}
