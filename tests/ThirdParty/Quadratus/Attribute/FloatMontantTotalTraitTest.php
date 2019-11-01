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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantTotalTrait;

/**
 * Montant total trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantTotalTraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantTotal() method.
     *
     * @return void
     */
    public function testSetMontantTotal() {

        $obj = new TestFloatMontantTotalTrait();

        $obj->setMontantTotal(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTotal());
    }
}
