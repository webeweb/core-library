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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMtCrds100Trait;

/**
 * Mt c r d s100 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMtCrds100TraitTest extends AbstractTestCase {

    /**
     * Tests the setMtCrds100() method.
     *
     * @return void
     */
    public function testSetMtCrds100() {

        $obj = new TestFloatMtCrds100Trait();

        $obj->setMtCrds100(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCrds100());
    }
}
