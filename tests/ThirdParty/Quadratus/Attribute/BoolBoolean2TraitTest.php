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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolBoolean2Trait;

/**
 * Boolean2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolBoolean2TraitTest extends AbstractTestCase {

    /**
     * Tests the setBoolean2() method.
     *
     * @return void
     */
    public function testSetBoolean2() {

        $obj = new TestBoolBoolean2Trait();

        $obj->setBoolean2(true);
        $this->assertEquals(true, $obj->getBoolean2());
    }
}
