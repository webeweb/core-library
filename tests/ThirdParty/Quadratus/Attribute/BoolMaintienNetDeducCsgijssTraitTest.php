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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolMaintienNetDeducCsgijssTrait;

/**
 * Maintien net deduc c s g i j s s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolMaintienNetDeducCsgijssTraitTest extends AbstractTestCase {

    /**
     * Tests the setMaintienNetDeducCsgijss() method.
     *
     * @return void
     */
    public function testSetMaintienNetDeducCsgijss() {

        $obj = new TestBoolMaintienNetDeducCsgijssTrait();

        $obj->setMaintienNetDeducCsgijss(true);
        $this->assertEquals(true, $obj->getMaintienNetDeducCsgijss());
    }
}
