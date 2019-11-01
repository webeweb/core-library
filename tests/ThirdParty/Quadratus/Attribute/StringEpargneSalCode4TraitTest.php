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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEpargneSalCode4Trait;

/**
 * Epargne sal_ code4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEpargneSalCode4TraitTest extends AbstractTestCase {

    /**
     * Tests the setEpargneSalCode4() method.
     *
     * @return void
     */
    public function testSetEpargneSalCode4() {

        $obj = new TestStringEpargneSalCode4Trait();

        $obj->setEpargneSalCode4("epargneSalCode4");
        $this->assertEquals("epargneSalCode4", $obj->getEpargneSalCode4());
    }
}
