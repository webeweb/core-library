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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeTransport2Trait;

/**
 * Type transport2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeTransport2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeTransport2() method.
     *
     * @return void
     */
    public function testSetTypeTransport2() {

        $obj = new TestStringTypeTransport2Trait();

        $obj->setTypeTransport2("typeTransport2");
        $this->assertEquals("typeTransport2", $obj->getTypeTransport2());
    }
}
