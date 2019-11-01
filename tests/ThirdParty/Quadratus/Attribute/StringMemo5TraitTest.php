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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo5Trait;

/**
 * Memo5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo5TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo5() method.
     *
     * @return void
     */
    public function testSetMemo5() {

        $obj = new TestStringMemo5Trait();

        $obj->setMemo5("memo5");
        $this->assertEquals("memo5", $obj->getMemo5());
    }
}
