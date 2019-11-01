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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz4229BaseTrait;

/**
 * Az4229 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz4229BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4229Base() method.
     *
     * @return void
     */
    public function testSetAz4229Base() {

        $obj = new TestFloatAz4229BaseTrait();

        $obj->setAz4229Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAz4229Base());
    }
}
