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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRibTitulaire2Trait;

/**
 * R i b titulaire2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRibTitulaire2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRibTitulaire2() method.
     *
     * @return void
     */
    public function testSetRibTitulaire2() {

        $obj = new TestStringRibTitulaire2Trait();

        $obj->setRibTitulaire2("ribTitulaire2");
        $this->assertEquals("ribTitulaire2", $obj->getRibTitulaire2());
    }
}
