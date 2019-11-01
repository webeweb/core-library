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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEpargneSalCode3Trait;

/**
 * Epargne sal_ code3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEpargneSalCode3TraitTest extends AbstractTestCase {

    /**
     * Tests the setEpargneSalCode3() method.
     *
     * @return void
     */
    public function testSetEpargneSalCode3() {

        $obj = new TestStringEpargneSalCode3Trait();

        $obj->setEpargneSalCode3("epargneSalCode3");
        $this->assertEquals("epargneSalCode3", $obj->getEpargneSalCode3());
    }
}
