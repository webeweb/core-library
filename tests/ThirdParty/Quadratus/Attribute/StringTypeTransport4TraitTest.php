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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeTransport4Trait;

/**
 * Type transport4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeTransport4TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeTransport4() method.
     *
     * @return void
     */
    public function testSetTypeTransport4() {

        $obj = new TestStringTypeTransport4Trait();

        $obj->setTypeTransport4("typeTransport4");
        $this->assertEquals("typeTransport4", $obj->getTypeTransport4());
    }
}
