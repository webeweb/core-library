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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment7Trait;

/**
 * Comment7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment7TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment7() method.
     *
     * @return void
     */
    public function testSetComment7() {

        $obj = new TestStringComment7Trait();

        $obj->setComment7("comment7");
        $this->assertEquals("comment7", $obj->getComment7());
    }
}
