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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4232Trait;

/**
 * Az4232 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4232TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4232() method.
     *
     * @return void
     */
    public function testSetAz4232() {

        $obj = new TestFloatAz4232Trait();

        $obj->setAz4232(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4232());
    }
}
