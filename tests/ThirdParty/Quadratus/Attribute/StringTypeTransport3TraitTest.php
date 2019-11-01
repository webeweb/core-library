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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeTransport3Trait;

/**
 * Type transport3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeTransport3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeTransport3() method.
     *
     * @return void
     */
    public function testSetTypeTransport3() {

        $obj = new TestStringTypeTransport3Trait();

        $obj->setTypeTransport3("typeTransport3");
        $this->assertEquals("typeTransport3", $obj->getTypeTransport3());
    }
}
