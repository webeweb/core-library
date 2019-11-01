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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntLong2Trait;

/**
 * Long2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntLong2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLong2() method.
     *
     * @return void
     */
    public function testSetLong2() {

        $obj = new TestIntLong2Trait();

        $obj->setLong2(10);
        $this->assertEquals(10, $obj->getLong2());
    }
}
