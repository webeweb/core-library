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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtTransport1Trait;

/**
 * Mt transport1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtTransport1TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtTransport1() method.
     *
     * @return void
     */
    public function testSetMtTransport1() {

        $obj = new TestFloatMtTransport1Trait();

        $obj->setMtTransport1(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTransport1());
    }
}
