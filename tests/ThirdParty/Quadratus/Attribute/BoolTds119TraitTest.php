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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds119Trait;

/**
 * T d s119 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds119TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds119() method.
     *
     * @return void
     */
    public function testSetTds119() {

        $obj = new TestBoolTds119Trait();

        $obj->setTds119(true);
        $this->assertEquals(true, $obj->getTds119());
    }
}
