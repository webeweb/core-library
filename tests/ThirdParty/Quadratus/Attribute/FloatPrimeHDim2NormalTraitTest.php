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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPrimeHDim2NormalTrait;

/**
 * Prime h dim2 normal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPrimeHDim2NormalTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrimeHDim2Normal() method.
     *
     * @return void
     */
    public function testSetPrimeHDim2Normal() {

        $obj = new TestFloatPrimeHDim2NormalTrait();

        $obj->setPrimeHDim2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeHDim2Normal());
    }
}
