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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCode1Trait;

/**
 * Code1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCode1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCode1() method.
     *
     * @return void
     */
    public function testSetCode1() {

        $obj = new TestStringCode1Trait();

        $obj->setCode1("code1");
        $this->assertEquals("code1", $obj->getCode1());
    }
}
