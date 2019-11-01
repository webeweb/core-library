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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz38htTrait;

/**
 * Az38ht trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz38htTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz38ht() method.
     *
     * @return void
     */
    public function testSetAz38ht() {

        $obj = new TestFloatAz38htTrait();

        $obj->setAz38ht(10.092018);
        $this->assertEquals(10.092018, $obj->getAz38ht());
    }
}
