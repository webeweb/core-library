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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPuTr1Trait;

/**
 * P u_ tr1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPuTr1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPuTr1() method.
     *
     * @return void
     */
    public function testSetPuTr1() {

        $obj = new TestFloatPuTr1Trait();

        $obj->setPuTr1(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr1());
    }
}
