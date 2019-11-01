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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo4Trait;

/**
 * Memo4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo4TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo4() method.
     *
     * @return void
     */
    public function testSetMemo4() {

        $obj = new TestStringMemo4Trait();

        $obj->setMemo4("memo4");
        $this->assertEquals("memo4", $obj->getMemo4());
    }
}
