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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo7Trait;

/**
 * Memo7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo7TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo7() method.
     *
     * @return void
     */
    public function testSetMemo7() {

        $obj = new TestStringMemo7Trait();

        $obj->setMemo7("memo7");
        $this->assertEquals("memo7", $obj->getMemo7());
    }
}
