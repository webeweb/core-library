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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCColect5Trait;

/**
 * Code c colect5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCColect5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCColect5() method.
     *
     * @return void
     */
    public function testSetCodeCColect5() {

        $obj = new TestStringCodeCColect5Trait();

        $obj->setCodeCColect5("codeCColect5");
        $this->assertEquals("codeCColect5", $obj->getCodeCColect5());
    }
}
