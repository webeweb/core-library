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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTransporteur1Trait;

/**
 * Code transporteur1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTransporteur1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTransporteur1() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur1() {

        $obj = new TestStringCodeTransporteur1Trait();

        $obj->setCodeTransporteur1("codeTransporteur1");
        $this->assertEquals("codeTransporteur1", $obj->getCodeTransporteur1());
    }
}
