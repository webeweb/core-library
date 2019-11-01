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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringZ12CodeTrait;

/**
 * z12 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringZ12CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setZ12Code() method.
     *
     * @return void
     */
    public function testSetZ12Code() {

        $obj = new TestStringZ12CodeTrait();

        $obj->setZ12Code("z12Code");
        $this->assertEquals("z12Code", $obj->getZ12Code());
    }
}
