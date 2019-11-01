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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCoeffTr3Trait;

/**
 * Coeff_ tr3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCoeffTr3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCoeffTr3() method.
     *
     * @return void
     */
    public function testSetCoeffTr3() {

        $obj = new TestFloatCoeffTr3Trait();

        $obj->setCoeffTr3(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffTr3());
    }
}
