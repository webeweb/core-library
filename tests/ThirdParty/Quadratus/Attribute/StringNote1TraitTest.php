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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNote1Trait;

/**
 * Note1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNote1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNote1() method.
     *
     * @return void
     */
    public function testSetNote1() {

        $obj = new TestStringNote1Trait();

        $obj->setNote1("note1");
        $this->assertEquals("note1", $obj->getNote1());
    }
}
