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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeChef1Trait;

/**
 * Code chef1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeChef1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeChef1() method.
     *
     * @return void
     */
    public function testSetCodeChef1() {

        $obj = new TestStringCodeChef1Trait();

        $obj->setCodeChef1("codeChef1");
        $this->assertEquals("codeChef1", $obj->getCodeChef1());
    }
}
