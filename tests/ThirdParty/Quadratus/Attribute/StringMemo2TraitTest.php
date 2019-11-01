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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo2Trait;

/**
 * Memo2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo2() method.
     *
     * @return void
     */
    public function testSetMemo2() {

        $obj = new TestStringMemo2Trait();

        $obj->setMemo2("memo2");
        $this->assertEquals("memo2", $obj->getMemo2());
    }
}
