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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTransporteur5Trait;

/**
 * Code transporteur5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTransporteur5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTransporteur5() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur5() {

        $obj = new TestStringCodeTransporteur5Trait();

        $obj->setCodeTransporteur5("codeTransporteur5");
        $this->assertEquals("codeTransporteur5", $obj->getCodeTransporteur5());
    }
}
