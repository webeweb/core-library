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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCrr151PmValueCtTrait;

/**
 * C r r151 p m value c t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCrr151PmValueCtTraitTest extends AbstractTestCase {

    /**
     * Tests the setCrr151PmValueCt() method.
     *
     * @return void
     */
    public function testSetCrr151PmValueCt() {

        $obj = new TestFloatCrr151PmValueCtTrait();

        $obj->setCrr151PmValueCt(10.092018);
        $this->assertEquals(10.092018, $obj->getCrr151PmValueCt());
    }
}
