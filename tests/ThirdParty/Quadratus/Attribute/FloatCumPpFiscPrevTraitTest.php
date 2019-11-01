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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumPpFiscPrevTrait;

/**
 * Cum p p fisc prev trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumPpFiscPrevTraitTest extends AbstractTestCase {

    /**
     * Tests the setCumPpFiscPrev() method.
     *
     * @return void
     */
    public function testSetCumPpFiscPrev() {

        $obj = new TestFloatCumPpFiscPrevTrait();

        $obj->setCumPpFiscPrev(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPpFiscPrev());
    }
}
