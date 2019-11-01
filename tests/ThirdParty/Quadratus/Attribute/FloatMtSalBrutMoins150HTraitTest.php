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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtSalBrutMoins150HTrait;

/**
 * Mt sal brut moins150 h trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtSalBrutMoins150HTraitTest extends AbstractTestCase {

    /**
     * Tests the setMtSalBrutMoins150H() method.
     *
     * @return void
     */
    public function testSetMtSalBrutMoins150H() {

        $obj = new TestFloatMtSalBrutMoins150HTrait();

        $obj->setMtSalBrutMoins150H(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalBrutMoins150H());
    }
}
