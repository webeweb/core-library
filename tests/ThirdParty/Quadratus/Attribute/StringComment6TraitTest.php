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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment6Trait;

/**
 * Comment6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment6TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment6() method.
     *
     * @return void
     */
    public function testSetComment6() {

        $obj = new TestStringComment6Trait();

        $obj->setComment6("comment6");
        $this->assertEquals("comment6", $obj->getComment6());
    }
}
