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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTvadaTrait;

/**
 * T v a d a trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTvadaTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvada() method.
     *
     * @return void
     */
    public function testSetTvada() {

        $obj = new TestFloatTvadaTrait();

        $obj->setTvada(10.092018);
        $this->assertEquals(10.092018, $obj->getTvada());
    }
}
