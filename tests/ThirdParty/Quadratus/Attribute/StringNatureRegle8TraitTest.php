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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle8Trait;

/**
 * Nature regle8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle8TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle8() method.
     *
     * @return void
     */
    public function testSetNatureRegle8() {

        $obj = new TestStringNatureRegle8Trait();

        $obj->setNatureRegle8("natureRegle8");
        $this->assertEquals("natureRegle8", $obj->getNatureRegle8());
    }
}
