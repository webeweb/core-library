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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4212Trait;

/**
 * Az4212 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4212TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4212() method.
     *
     * @return void
     */
    public function testSetAz4212() {

        $obj = new TestFloatAz4212Trait();

        $obj->setAz4212(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4212());
    }
}
