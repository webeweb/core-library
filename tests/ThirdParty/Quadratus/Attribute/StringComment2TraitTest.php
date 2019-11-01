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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment2Trait;

/**
 * Comment2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment2TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment2() method.
     *
     * @return void
     */
    public function testSetComment2() {

        $obj = new TestStringComment2Trait();

        $obj->setComment2("comment2");
        $this->assertEquals("comment2", $obj->getComment2());
    }
}
