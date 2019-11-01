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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumBaseTrD1Caisse1Trait;

/**
 * Cum base tr d1 caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumBaseTrD1Caisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumBaseTrD1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrD1Caisse1() {

        $obj = new TestFloatCumBaseTrD1Caisse1Trait();

        $obj->setCumBaseTrD1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrD1Caisse1());
    }
}
