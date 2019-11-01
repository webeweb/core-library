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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4282Trait;

/**
 * Az4282 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4282TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4282() method.
     *
     * @return void
     */
    public function testSetAz4282() {

        $obj = new TestFloatAz4282Trait();

        $obj->setAz4282(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4282());
    }
}
