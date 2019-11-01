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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle3Trait;

/**
 * Nature regle3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle3TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle3() method.
     *
     * @return void
     */
    public function testSetNatureRegle3() {

        $obj = new TestStringNatureRegle3Trait();

        $obj->setNatureRegle3("natureRegle3");
        $this->assertEquals("natureRegle3", $obj->getNatureRegle3());
    }
}
