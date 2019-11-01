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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeCColect3Trait;

/**
 * Code c colect3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeCColect3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeCColect3() method.
     *
     * @return void
     */
    public function testSetCodeCColect3() {

        $obj = new TestStringCodeCColect3Trait();

        $obj->setCodeCColect3("codeCColect3");
        $this->assertEquals("codeCColect3", $obj->getCodeCColect3());
    }
}
