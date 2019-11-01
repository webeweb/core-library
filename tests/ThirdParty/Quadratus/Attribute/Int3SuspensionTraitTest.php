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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestInt3SuspensionTrait;

/**
 * 3 suspension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Int3SuspensionTraitTest extends AbstractTestCase {

    /**
     * Tests the set3Suspension() method.
     *
     * @return void
     */
    public function testSet3Suspension() {

        $obj = new TestInt3SuspensionTrait();

        $obj->set3Suspension(10);
        $this->assertEquals(10, $obj->get3Suspension());
    }
}
