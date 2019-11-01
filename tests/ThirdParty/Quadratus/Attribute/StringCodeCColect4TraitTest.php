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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCColect4Trait;

/**
 * Code c colect4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCColect4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCColect4() method.
     *
     * @return void
     */
    public function testSetCodeCColect4() {

        $obj = new TestStringCodeCColect4Trait();

        $obj->setCodeCColect4("codeCColect4");
        $this->assertEquals("codeCColect4", $obj->getCodeCColect4());
    }
}
