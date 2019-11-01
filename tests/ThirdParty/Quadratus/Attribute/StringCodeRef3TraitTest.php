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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef3Trait;

/**
 * Code ref3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef3() method.
     *
     * @return void
     */
    public function testSetCodeRef3() {

        $obj = new TestStringCodeRef3Trait();

        $obj->setCodeRef3("codeRef3");
        $this->assertEquals("codeRef3", $obj->getCodeRef3());
    }
}
