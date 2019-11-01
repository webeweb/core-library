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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTotSiTrait;

/**
 * Tot s i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTotSiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTotSi() method.
     *
     * @return void
     */
    public function testSetTotSi() {

        $obj = new TestFloatTotSiTrait();

        $obj->setTotSi(10.092018);
        $this->assertEquals(10.092018, $obj->getTotSi());
    }
}
