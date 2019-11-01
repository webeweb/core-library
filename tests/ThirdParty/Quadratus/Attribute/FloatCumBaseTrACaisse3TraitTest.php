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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumBaseTrACaisse3Trait;

/**
 * Cum base tr a caisse3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumBaseTrACaisse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCumBaseTrACaisse3() method.
     *
     * @return void
     */
    public function testSetCumBaseTrACaisse3() {

        $obj = new TestFloatCumBaseTrACaisse3Trait();

        $obj->setCumBaseTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseTrACaisse3());
    }
}
