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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPrimeJfExceptTrait;

/**
 * Prime j f except trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPrimeJfExceptTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrimeJfExcept() method.
     *
     * @return void
     */
    public function testSetPrimeJfExcept() {

        $obj = new TestFloatPrimeJfExceptTrait();

        $obj->setPrimeJfExcept(10.092018);
        $this->assertEquals(10.092018, $obj->getPrimeJfExcept());
    }
}
