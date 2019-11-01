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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTxHoraire2TpTrait;

/**
 * Tx horaire2 t p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTxHoraire2TpTraitTest extends AbstractTestCase {

    /**
     * Tests the setTxHoraire2Tp() method.
     *
     * @return void
     */
    public function testSetTxHoraire2Tp() {

        $obj = new TestFloatTxHoraire2TpTrait();

        $obj->setTxHoraire2Tp(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2Tp());
    }
}
