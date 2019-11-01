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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds108Trait;

/**
 * T d s108 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds108TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds108() method.
     *
     * @return void
     */
    public function testSetTds108() {

        $obj = new TestBoolTds108Trait();

        $obj->setTds108(true);
        $this->assertEquals(true, $obj->getTds108());
    }
}
