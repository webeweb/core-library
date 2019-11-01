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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4274Trait;

/**
 * Az4274 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4274TraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4274() method.
     *
     * @return void
     */
    public function testSetAz4274() {

        $obj = new TestFloatAz4274Trait();

        $obj->setAz4274(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4274());
    }
}
