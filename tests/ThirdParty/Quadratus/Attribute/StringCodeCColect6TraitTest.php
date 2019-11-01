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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCColect6Trait;

/**
 * Code c colect6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCColect6TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCColect6() method.
     *
     * @return void
     */
    public function testSetCodeCColect6() {

        $obj = new TestStringCodeCColect6Trait();

        $obj->setCodeCColect6("codeCColect6");
        $this->assertEquals("codeCColect6", $obj->getCodeCColect6());
    }
}
