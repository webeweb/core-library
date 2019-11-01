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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumTrD1caisse2Trait;

/**
 * Cum tr d1caisse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumTrD1caisse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumTrD1caisse2() method.
     *
     * @return void
     */
    public function testSetCumTrD1caisse2() {

        $obj = new TestFloatCumTrD1caisse2Trait();

        $obj->setCumTrD1caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrD1caisse2());
    }
}
