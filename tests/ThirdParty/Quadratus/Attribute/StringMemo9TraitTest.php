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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo9Trait;

/**
 * Memo9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo9TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo9() method.
     *
     * @return void
     */
    public function testSetMemo9() {

        $obj = new TestStringMemo9Trait();

        $obj->setMemo9("memo9");
        $this->assertEquals("memo9", $obj->getMemo9());
    }
}
