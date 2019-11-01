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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumPlafondSs2Trait;

/**
 * Cum plafond s s2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumPlafondSs2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumPlafondSs2() method.
     *
     * @return void
     */
    public function testSetCumPlafondSs2() {

        $obj = new TestFloatCumPlafondSs2Trait();

        $obj->setCumPlafondSs2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondSs2());
    }
}
