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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo10Trait;

/**
 * Memo10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo10TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo10() method.
     *
     * @return void
     */
    public function testSetMemo10() {

        $obj = new TestStringMemo10Trait();

        $obj->setMemo10("memo10");
        $this->assertEquals("memo10", $obj->getMemo10());
    }
}
