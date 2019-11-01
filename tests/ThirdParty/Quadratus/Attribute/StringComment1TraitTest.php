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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment1Trait;

/**
 * Comment1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment1TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment1() method.
     *
     * @return void
     */
    public function testSetComment1() {

        $obj = new TestStringComment1Trait();

        $obj->setComment1("comment1");
        $this->assertEquals("comment1", $obj->getComment1());
    }
}
