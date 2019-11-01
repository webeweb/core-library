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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTransporteur2Trait;

/**
 * Code transporteur2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTransporteur2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTransporteur2() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur2() {

        $obj = new TestStringCodeTransporteur2Trait();

        $obj->setCodeTransporteur2("codeTransporteur2");
        $this->assertEquals("codeTransporteur2", $obj->getCodeTransporteur2());
    }
}
