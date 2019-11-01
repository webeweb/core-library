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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeChef2Trait;

/**
 * Code chef2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeChef2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeChef2() method.
     *
     * @return void
     */
    public function testSetCodeChef2() {

        $obj = new TestStringCodeChef2Trait();

        $obj->setCodeChef2("codeChef2");
        $this->assertEquals("codeChef2", $obj->getCodeChef2());
    }
}
