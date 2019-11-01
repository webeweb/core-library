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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4289BaseTrait;

/**
 * Az4289 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4289BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4289Base() method.
     *
     * @return void
     */
    public function testSetAz4289Base() {

        $obj = new TestFloatAz4289BaseTrait();

        $obj->setAz4289Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4289Base());
    }
}
