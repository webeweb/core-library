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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef8Trait;

/**
 * Code ref8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef8() method.
     *
     * @return void
     */
    public function testSetCodeRef8() {

        $obj = new TestStringCodeRef8Trait();

        $obj->setCodeRef8("codeRef8");
        $this->assertEquals("codeRef8", $obj->getCodeRef8());
    }
}
