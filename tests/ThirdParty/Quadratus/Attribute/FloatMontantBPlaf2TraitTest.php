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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantBPlaf2Trait;

/**
 * Montant b plaf2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantBPlaf2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantBPlaf2() method.
     *
     * @return void
     */
    public function testSetMontantBPlaf2() {

        $obj = new TestFloatMontantBPlaf2Trait();

        $obj->setMontantBPlaf2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantBPlaf2());
    }
}
