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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxRetTrBpsTrait;

/**
 * Taux ret tr b p s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxRetTrBpsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxRetTrBps() method.
     *
     * @return void
     */
    public function testSetTauxRetTrBps() {

        $obj = new TestFloatTauxRetTrBpsTrait();

        $obj->setTauxRetTrBps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTrBps());
    }
}
