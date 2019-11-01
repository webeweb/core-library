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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringOption1Trait;

/**
 * Option1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringOption1TraitTest extends AbstractTestCase {

    /**
     * Tests the setOption1() method.
     *
     * @return void
     */
    public function testSetOption1() {

        $obj = new TestStringOption1Trait();

        $obj->setOption1("option1");
        $this->assertEquals("option1", $obj->getOption1());
    }
}
