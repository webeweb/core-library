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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPuTr5Trait;

/**
 * P u_ tr5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPuTr5TraitTest extends AbstractTestCase {

    /**
     * Tests the setPuTr5() method.
     *
     * @return void
     */
    public function testSetPuTr5() {

        $obj = new TestFloatPuTr5Trait();

        $obj->setPuTr5(10.092018);
        $this->assertEquals(10.092018, $obj->getPuTr5());
    }
}
