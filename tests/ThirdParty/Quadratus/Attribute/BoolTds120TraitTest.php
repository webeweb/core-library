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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds120Trait;

/**
 * T d s120 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds120TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds120() method.
     *
     * @return void
     */
    public function testSetTds120() {

        $obj = new TestBoolTds120Trait();

        $obj->setTds120(true);
        $this->assertEquals(true, $obj->getTds120());
    }
}
