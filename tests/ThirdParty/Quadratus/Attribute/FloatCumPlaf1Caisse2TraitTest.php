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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumPlaf1Caisse2Trait;

/**
 * Cum plaf1 caisse2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumPlaf1Caisse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumPlaf1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2() {

        $obj = new TestFloatCumPlaf1Caisse2Trait();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }
}
