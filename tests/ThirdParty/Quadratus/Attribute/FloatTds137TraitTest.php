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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTds137Trait;

/**
 * Tds137 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTds137TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds137() method.
     *
     * @return void
     */
    public function testSetTds137() {

        $obj = new TestFloatTds137Trait();

        $obj->setTds137(10.092018);
        $this->assertEquals(10.092018, $obj->getTds137());
    }
}
