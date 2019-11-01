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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeRef7Trait;

/**
 * Code ref7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeRef7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeRef7() method.
     *
     * @return void
     */
    public function testSetCodeRef7() {

        $obj = new TestStringCodeRef7Trait();

        $obj->setCodeRef7("codeRef7");
        $this->assertEquals("codeRef7", $obj->getCodeRef7());
    }
}
