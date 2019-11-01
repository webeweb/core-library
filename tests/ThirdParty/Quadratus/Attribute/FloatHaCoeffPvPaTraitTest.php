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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHaCoeffPvPaTrait;

/**
 * H a_ coeff pv p a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHaCoeffPvPaTraitTest extends AbstractTestCase {

    /**
     * Tests the setHaCoeffPvPa() method.
     *
     * @return void
     */
    public function testSetHaCoeffPvPa() {

        $obj = new TestFloatHaCoeffPvPaTrait();

        $obj->setHaCoeffPvPa(10.092018);
        $this->assertEquals(10.092018, $obj->getHaCoeffPvPa());
    }
}
