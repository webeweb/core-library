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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCColect2Trait;

/**
 * Code c colect2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCColect2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCColect2() method.
     *
     * @return void
     */
    public function testSetCodeCColect2() {

        $obj = new TestStringCodeCColect2Trait();

        $obj->setCodeCColect2("codeCColect2");
        $this->assertEquals("codeCColect2", $obj->getCodeCColect2());
    }
}
