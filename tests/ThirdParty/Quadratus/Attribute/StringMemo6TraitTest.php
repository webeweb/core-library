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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo6Trait;

/**
 * Memo6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo6TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo6() method.
     *
     * @return void
     */
    public function testSetMemo6() {

        $obj = new TestStringMemo6Trait();

        $obj->setMemo6("memo6");
        $this->assertEquals("memo6", $obj->getMemo6());
    }
}
