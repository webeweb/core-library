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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeTransport1Trait;

/**
 * Type transport1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeTransport1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeTransport1() method.
     *
     * @return void
     */
    public function testSetTypeTransport1() {

        $obj = new TestStringTypeTransport1Trait();

        $obj->setTypeTransport1("typeTransport1");
        $this->assertEquals("typeTransport1", $obj->getTypeTransport1());
    }
}
