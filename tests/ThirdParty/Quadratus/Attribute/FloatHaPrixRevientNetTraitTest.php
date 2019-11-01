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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHaPrixRevientNetTrait;

/**
 * H a_ prix revient net trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHaPrixRevientNetTraitTest extends AbstractTestCase {

    /**
     * Tests the setHaPrixRevientNet() method.
     *
     * @return void
     */
    public function testSetHaPrixRevientNet() {

        $obj = new TestFloatHaPrixRevientNetTrait();

        $obj->setHaPrixRevientNet(10.092018);
        $this->assertEquals(10.092018, $obj->getHaPrixRevientNet());
    }
}
