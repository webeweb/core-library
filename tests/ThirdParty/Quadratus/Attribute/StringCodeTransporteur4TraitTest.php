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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTransporteur4Trait;

/**
 * Code transporteur4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTransporteur4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTransporteur4() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur4() {

        $obj = new TestStringCodeTransporteur4Trait();

        $obj->setCodeTransporteur4("codeTransporteur4");
        $this->assertEquals("codeTransporteur4", $obj->getCodeTransporteur4());
    }
}
