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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAdAmortAnterieur2Trait;

/**
 * A d amort anterieur2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAdAmortAnterieur2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAdAmortAnterieur2() method.
     *
     * @return void
     */
    public function testSetAdAmortAnterieur2() {

        $obj = new TestFloatAdAmortAnterieur2Trait();

        $obj->setAdAmortAnterieur2(10.092018);
        $this->assertEquals(10.092018, $obj->getAdAmortAnterieur2());
    }
}
