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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4240BaseTrait;

/**
 * Az4240 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4240BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4240Base() method.
     *
     * @return void
     */
    public function testSetAz4240Base() {

        $obj = new TestFloatAz4240BaseTrait();

        $obj->setAz4240Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4240Base());
    }
}
