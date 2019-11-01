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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRibTitulaire1Trait;

/**
 * R i b titulaire1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRibTitulaire1TraitTest extends AbstractTestCase {

    /**
     * Tests the setRibTitulaire1() method.
     *
     * @return void
     */
    public function testSetRibTitulaire1() {

        $obj = new TestStringRibTitulaire1Trait();

        $obj->setRibTitulaire1("ribTitulaire1");
        $this->assertEquals("ribTitulaire1", $obj->getRibTitulaire1());
    }
}
