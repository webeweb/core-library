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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumBaseTrACaisse1Trait;

/**
 * Cum base tr a caisse1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumBaseTrACaisse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumBaseTrACaisse1() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse1() {

        $obj = new TestFloatCumBaseTrACaisse1Trait();

        $obj->setCumBaseTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse1());
    }
}
