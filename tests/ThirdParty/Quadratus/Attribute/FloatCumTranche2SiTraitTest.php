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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumTranche2SiTrait;

/**
 * Cum tranche2 s i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumTranche2SiTraitTest extends AbstractTestCase {

    /**
     * Tests the setCumTranche2Si() method.
     *
     * @return void
     */
    public function testSetCumTranche2Si() {

        $obj = new TestFloatCumTranche2SiTrait();

        $obj->setCumTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2Si());
    }
}
