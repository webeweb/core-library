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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTds110Trait;

/**
 * T d s110 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTds110TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds110() method.
     *
     * @return void
     */
    public function testSetTds110() {

        $obj = new TestBoolTds110Trait();

        $obj->setTds110(true);
        $this->assertEquals(true, $obj->getTds110());
    }
}
