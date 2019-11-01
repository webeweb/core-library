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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4262Trait;

/**
 * Az4262 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4262TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4262() method.
     *
     * @return void
     */
    public function testSetAz4262() {

        $obj = new TestFloatAz4262Trait();

        $obj->setAz4262(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4262());
    }
}
