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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNatureRegle5Trait;

/**
 * Nature regle5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNatureRegle5TraitTest extends AbstractTestCase {

    /**
     * Tests the setNatureRegle5() method.
     *
     * @return void
     */
    public function testSetNatureRegle5() {

        $obj = new TestStringNatureRegle5Trait();

        $obj->setNatureRegle5("natureRegle5");
        $this->assertEquals("natureRegle5", $obj->getNatureRegle5());
    }
}
