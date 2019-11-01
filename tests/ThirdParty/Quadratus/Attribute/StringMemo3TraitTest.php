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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMemo3Trait;

/**
 * Memo3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMemo3TraitTest extends AbstractTestCase {

    /**
     * Tests the setMemo3() method.
     *
     * @return void
     */
    public function testSetMemo3() {

        $obj = new TestStringMemo3Trait();

        $obj->setMemo3("memo3");
        $this->assertEquals("memo3", $obj->getMemo3());
    }
}
