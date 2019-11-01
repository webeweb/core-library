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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPrimeJf2NormalTrait;

/**
 * Prime j f2 normal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPrimeJf2NormalTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrimeJf2Normal() method.
     *
     * @return void
     */
    public function testSetPrimeJf2Normal() {

        $obj = new TestFloatPrimeJf2NormalTrait();

        $obj->setPrimeJf2Normal(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJf2Normal());
    }
}
