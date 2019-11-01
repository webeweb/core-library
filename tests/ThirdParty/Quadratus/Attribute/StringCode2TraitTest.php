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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCode2Trait;

/**
 * Code2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCode2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCode2() method.
     *
     * @return void
     */
    public function testSetCode2() {

        $obj = new TestStringCode2Trait();

        $obj->setCode2("code2");
        $this->assertEquals("code2", $obj->getCode2());
    }
}
