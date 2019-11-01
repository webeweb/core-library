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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds76Trait;

/**
 * T d s76 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds76TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds76() method.
     *
     * @return void
     */
    public function testSetTds76() {

        $obj = new TestStringTds76Trait();

        $obj->setTds76("tds76");
        $this->assertEquals("tds76", $obj->getTds76());
    }
}
