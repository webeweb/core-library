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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4244Trait;

/**
 * Az4244 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4244TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4244() method.
     *
     * @return void
     */
    public function testSetAz4244() {

        $obj = new TestFloatAz4244Trait();

        $obj->setAz4244(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4244());
    }
}
