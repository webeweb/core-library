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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPuTr3Trait;

/**
 * P u_ tr3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPuTr3TraitTest extends AbstractTestCase {

    /**
     * Tests the setPuTr3() method.
     *
     * @return void
     */
    public function testSetPuTr3() {

        $obj = new TestFloatPuTr3Trait();

        $obj->setPuTr3(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr3());
    }
}
