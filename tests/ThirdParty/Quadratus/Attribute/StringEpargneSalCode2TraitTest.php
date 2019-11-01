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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEpargneSalCode2Trait;

/**
 * Epargne sal_ code2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEpargneSalCode2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEpargneSalCode2() method.
     *
     * @return void
     */
    public function testSetEpargneSalCode2() {

        $obj = new TestStringEpargneSalCode2Trait();

        $obj->setEpargneSalCode2("epargneSalCode2");
        $this->assertEquals("epargneSalCode2", $obj->getEpargneSalCode2());
    }
}
