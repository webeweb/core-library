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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDads1RemuPlusTrait;

/**
 * D a d s1 remu plus trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDads1RemuPlusTraitTest extends AbstractTestCase {

    /**
     * Tests the setDads1RemuPlus() method.
     *
     * @return void
     */
    public function testSetDads1RemuPlus() {

        $obj = new TestFloatDads1RemuPlusTrait();

        $obj->setDads1RemuPlus(10.092018);
        $this->assertEquals(10.092018, $obj->getDads1RemuPlus());
    }
}
