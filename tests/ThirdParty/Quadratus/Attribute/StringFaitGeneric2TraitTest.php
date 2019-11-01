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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric2Trait;

/**
 * Fait generic2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric2() method.
     *
     * @return void
     */
    public function testSetFaitGeneric2() {

        $obj = new TestStringFaitGeneric2Trait();

        $obj->setFaitGeneric2("faitGeneric2");
        $this->assertEquals("faitGeneric2", $obj->getFaitGeneric2());
    }
}
