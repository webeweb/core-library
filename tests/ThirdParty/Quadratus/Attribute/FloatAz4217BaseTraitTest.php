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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4217BaseTrait;

/**
 * Az4217 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4217BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4217Base() method.
     *
     * @return void
     */
    public function testSetAz4217Base() {

        $obj = new TestFloatAz4217BaseTrait();

        $obj->setAz4217Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4217Base());
    }
}
