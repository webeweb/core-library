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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFaitGeneric6Trait;

/**
 * Fait generic6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFaitGeneric6TraitTest extends AbstractTestCase {

    /**
     * Tests the setFaitGeneric6() method.
     *
     * @return void
     */
    public function testSetFaitGeneric6() {

        $obj = new TestStringFaitGeneric6Trait();

        $obj->setFaitGeneric6("faitGeneric6");
        $this->assertEquals("faitGeneric6", $obj->getFaitGeneric6());
    }
}
