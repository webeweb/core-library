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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4261Trait;

/**
 * Az4261 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4261TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4261() method.
     *
     * @return void
     */
    public function testSetAz4261() {

        $obj = new TestFloatAz4261Trait();

        $obj->setAz4261(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4261());
    }
}
