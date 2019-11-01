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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTxHoraire2RsTrait;

/**
 * Tx horaire2 r s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTxHoraire2RsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTxHoraire2Rs() method.
     *
     * @return void
     */
    public function testSetTxHoraire2Rs() {

        $obj = new TestFloatTxHoraire2RsTrait();

        $obj->setTxHoraire2Rs(10.092018);
        $this->assertEquals(10.092018, $obj->getTxHoraire2Rs());
    }
}
