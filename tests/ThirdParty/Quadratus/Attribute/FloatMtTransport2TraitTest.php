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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtTransport2Trait;

/**
 * Mt transport2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtTransport2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtTransport2() method.
     *
     * @return void
     */
    public function testSetMtTransport2() {

        $obj = new TestFloatMtTransport2Trait();

        $obj->setMtTransport2(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport2());
    }
}
