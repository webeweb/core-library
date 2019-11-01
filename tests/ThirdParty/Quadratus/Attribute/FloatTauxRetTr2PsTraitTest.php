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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxRetTr2PsTrait;

/**
 * Taux ret tr2 p s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxRetTr2PsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxRetTr2Ps() method.
     *
     * @return void
     */
    public function testSetTauxRetTr2Ps() {

        $obj = new TestFloatTauxRetTr2PsTrait();

        $obj->setTauxRetTr2Ps(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRetTr2Ps());
    }
}
