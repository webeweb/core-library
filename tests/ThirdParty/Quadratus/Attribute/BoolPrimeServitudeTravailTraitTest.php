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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPrimeServitudeTravailTrait;

/**
 * Prime servitude travail trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPrimeServitudeTravailTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrimeServitudeTravail() method.
     *
     * @return void
     */
    public function testSetPrimeServitudeTravail() {

        $obj = new TestBoolPrimeServitudeTravailTrait();

        $obj->setPrimeServitudeTravail(true);
        $this->assertEquals(true, $obj->getPrimeServitudeTravail());
    }
}
