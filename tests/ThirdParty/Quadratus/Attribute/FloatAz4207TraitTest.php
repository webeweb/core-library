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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4207Trait;

/**
 * Az4207 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4207TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4207() method.
     *
     * @return void
     */
    public function testSetAz4207() {

        $obj = new TestFloatAz4207Trait();

        $obj->setAz4207(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4207());
    }
}
