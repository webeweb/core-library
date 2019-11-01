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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle1Trait;

/**
 * Nature regle1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle1() method.
     *
     * @return void
     */
    public function testSetNatureRegle1() {

        $obj = new TestStringNatureRegle1Trait();

        $obj->setNatureRegle1("natureRegle1");
        $this->assertEquals("natureRegle1", $obj->getNatureRegle1());
    }
}
