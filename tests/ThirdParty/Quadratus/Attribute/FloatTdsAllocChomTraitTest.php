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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTdsAllocChomTrait;

/**
 * Tds alloc chom trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTdsAllocChomTraitTest extends AbstractTestCase {

    /**
     * Tests the setTdsAllocChom() method.
     *
     * @return void
     */
    public function testSetTdsAllocChom() {

        $obj = new TestFloatTdsAllocChomTrait();

        $obj->setTdsAllocChom(10.092018);
        $this->assertEquals(10.092018, $obj->getTdsAllocChom());
    }
}
