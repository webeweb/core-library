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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBaseSecuTrait;

/**
 * Base secu trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBaseSecuTraitTest extends AbstractTestCase {

    /**
     * Tests the setBaseSecu() method.
     *
     * @return void
     */
    public function testSetBaseSecu() {

        $obj = new TestFloatBaseSecuTrait();

        $obj->setBaseSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSecu());
    }
}
