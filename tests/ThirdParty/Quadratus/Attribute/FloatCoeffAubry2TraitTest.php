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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCoeffAubry2Trait;

/**
 * Coeff aubry2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCoeffAubry2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCoeffAubry2() method.
     *
     * @return void
     */
    public function testSetCoeffAubry2() {

        $obj = new TestFloatCoeffAubry2Trait();

        $obj->setCoeffAubry2(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffAubry2());
    }
}
