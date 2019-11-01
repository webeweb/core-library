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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNote2Trait;

/**
 * Note2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNote2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNote2() method.
     *
     * @return void
     */
    public function testSetNote2() {

        $obj = new TestStringNote2Trait();

        $obj->setNote2("note2");
        $this->assertEquals("note2", $obj->getNote2());
    }
}
