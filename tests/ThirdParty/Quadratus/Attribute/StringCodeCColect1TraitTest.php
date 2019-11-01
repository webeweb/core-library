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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCColect1Trait;

/**
 * Code c colect1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCColect1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCColect1() method.
     *
     * @return void
     */
    public function testSetCodeCColect1() {

        $obj = new TestStringCodeCColect1Trait();

        $obj->setCodeCColect1("codeCColect1");
        $this->assertEquals("codeCColect1", $obj->getCodeCColect1());
    }
}
