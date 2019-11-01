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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle6Trait;

/**
 * Nature regle6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle6TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle6() method.
     *
     * @return void
     */
    public function testSetNatureRegle6() {

        $obj = new TestStringNatureRegle6Trait();

        $obj->setNatureRegle6("natureRegle6");
        $this->assertEquals("natureRegle6", $obj->getNatureRegle6());
    }
}
