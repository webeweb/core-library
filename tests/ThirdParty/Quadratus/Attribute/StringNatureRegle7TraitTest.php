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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle7Trait;

/**
 * Nature regle7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle7TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle7() method.
     *
     * @return void
     */
    public function testSetNatureRegle7() {

        $obj = new TestStringNatureRegle7Trait();

        $obj->setNatureRegle7("natureRegle7");
        $this->assertEquals("natureRegle7", $obj->getNatureRegle7());
    }
}
