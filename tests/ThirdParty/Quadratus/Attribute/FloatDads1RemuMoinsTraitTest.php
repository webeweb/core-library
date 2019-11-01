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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDads1RemuMoinsTrait;

/**
 * D a d s1 remu moins trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDads1RemuMoinsTraitTest extends AbstractTestCase {

    /**
     * Tests the setDads1RemuMoins() method.
     *
     * @return void
     */
    public function testSetDads1RemuMoins() {

        $obj = new TestFloatDads1RemuMoinsTrait();

        $obj->setDads1RemuMoins(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1RemuMoins());
    }
}
