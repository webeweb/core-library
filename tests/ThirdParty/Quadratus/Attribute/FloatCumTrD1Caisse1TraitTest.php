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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumTrD1Caisse1Trait;

/**
 * Cum tr d1 caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumTrD1Caisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumTrD1Caisse1() {

        $obj = new TestFloatCumTrD1Caisse1Trait();

        $obj->setCumTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1Caisse1());
    }
}
