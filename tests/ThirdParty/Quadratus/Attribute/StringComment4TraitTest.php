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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringComment4Trait;

/**
 * Comment4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringComment4TraitTest extends AbstractTestCase {

    /**
     * Tests the setComment4() method.
     *
     * @return void
     */
    public function testSetComment4() {

        $obj = new TestStringComment4Trait();

        $obj->setComment4("comment4");
        $this->assertEquals("comment4", $obj->getComment4());
    }
}
