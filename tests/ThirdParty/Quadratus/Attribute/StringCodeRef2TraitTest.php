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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef2Trait;

/**
 * Code ref2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef2() method.
     *
     * @return void
     */
    public function testSetCodeRef2() {

        $obj = new TestStringCodeRef2Trait();

        $obj->setCodeRef2("codeRef2");
        $this->assertEquals("codeRef2", $obj->getCodeRef2());
    }
}
