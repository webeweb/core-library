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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo8Trait;

/**
 * Memo8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo8TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo8() method.
     *
     * @return void
     */
    public function testSetMemo8() {

        $obj = new TestStringMemo8Trait();

        $obj->setMemo8("memo8");
        $this->assertEquals("memo8", $obj->getMemo8());
    }
}
