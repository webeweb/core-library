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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4270Base2Trait;

/**
 * Az4270 base2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4270Base2TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4270Base2() method.
     *
     * @return void
     */
    public function testSetAz4270Base2() {

        $obj = new TestFloatAz4270Base2Trait();

        $obj->setAz4270Base2(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4270Base2());
    }
}
