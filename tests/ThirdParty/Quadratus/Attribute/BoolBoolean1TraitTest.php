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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBoolean1Trait;

/**
 * Boolean1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBoolean1TraitTest extends AbstractTestCase {

    /**
     * Tests the setBoolean1() method.
     *
     * @return void
     */
    public function testSetBoolean1() {

        $obj = new TestBoolBoolean1Trait();

        $obj->setBoolean1(true);
        $this->assertEquals(true, $obj->getBoolean1());
    }
}
