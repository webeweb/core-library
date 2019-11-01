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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntPriseRdvTrait;

/**
 * Prise r d v trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntPriseRdvTraitTest extends AbstractTestCase {

    /**
     * Tests the setPriseRdv() method.
     *
     * @return void
     */
    public function testSetPriseRdv() {

        $obj = new TestIntPriseRdvTrait();

        $obj->setPriseRdv(10);
        $this->assertEquals(10, $obj->getPriseRdv());
    }
}
