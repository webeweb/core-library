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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtSalBrutMoins600HTrait;

/**
 * Mt sal brut moins600 h trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtSalBrutMoins600HTraitTest extends AbstractTestCase {

    /**
     * Tests the setMtSalBrutMoins600H() method.
     *
     * @return void
     */
    public function testSetMtSalBrutMoins600H() {

        $obj = new TestFloatMtSalBrutMoins600HTrait();

        $obj->setMtSalBrutMoins600H(10.092018);
        $this->assertEquals(10.092018, $obj->getMtSalBrutMoins600H());
    }
}
