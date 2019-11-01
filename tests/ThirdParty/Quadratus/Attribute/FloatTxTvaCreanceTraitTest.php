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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTxTvaCreanceTrait;

/**
 * Tx t v a creance trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTxTvaCreanceTraitTest extends AbstractTestCase {

    /**
     * Tests the setTxTvaCreance() method.
     *
     * @return void
     */
    public function testSetTxTvaCreance() {

        $obj = new TestFloatTxTvaCreanceTrait();

        $obj->setTxTvaCreance(10.092018);
        $this->assertEquals(10.092018, $obj->getTxTvaCreance());
    }
}
