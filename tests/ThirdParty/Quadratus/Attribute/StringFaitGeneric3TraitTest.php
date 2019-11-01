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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric3Trait;

/**
 * Fait generic3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric3TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric3() method.
     *
     * @return void
     */
    public function testSetFaitGeneric3() {

        $obj = new TestStringFaitGeneric3Trait();

        $obj->setFaitGeneric3("faitGeneric3");
        $this->assertEquals("faitGeneric3", $obj->getFaitGeneric3());
    }
}
