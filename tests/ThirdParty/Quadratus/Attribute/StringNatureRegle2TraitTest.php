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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle2Trait;

/**
 * Nature regle2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle2() method.
     *
     * @return void
     */
    public function testSetNatureRegle2() {

        $obj = new TestStringNatureRegle2Trait();

        $obj->setNatureRegle2("natureRegle2");
        $this->assertEquals("natureRegle2", $obj->getNatureRegle2());
    }
}
