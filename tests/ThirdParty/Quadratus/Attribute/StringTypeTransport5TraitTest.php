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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeTransport5Trait;

/**
 * Type transport5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeTransport5TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeTransport5() method.
     *
     * @return void
     */
    public function testSetTypeTransport5() {

        $obj = new TestStringTypeTransport5Trait();

        $obj->setTypeTransport5("typeTransport5");
        $this->assertEquals("typeTransport5", $obj->getTypeTransport5());
    }
}
