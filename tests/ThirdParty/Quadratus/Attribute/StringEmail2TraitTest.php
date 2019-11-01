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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEmail2Trait;

/**
 * Email2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEmail2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEmail2() method.
     *
     * @return void
     */
    public function testSetEmail2() {

        $obj = new TestStringEmail2Trait();

        $obj->setEmail2("email2");
        $this->assertEquals("email2", $obj->getEmail2());
    }
}
