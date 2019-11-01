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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMontantSmicRetenu2Trait;

/**
 * Montant s m i c retenu2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMontantSmicRetenu2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantSmicRetenu2() method.
     *
     * @return void
     */
    public function testSetMontantSmicRetenu2() {

        $obj = new TestFloatMontantSmicRetenu2Trait();

        $obj->setMontantSmicRetenu2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSmicRetenu2());
    }
}
