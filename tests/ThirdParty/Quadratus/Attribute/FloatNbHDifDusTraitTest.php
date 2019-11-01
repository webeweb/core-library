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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHDifDusTrait;

/**
 * Nb h dif dus trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHDifDusTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHDifDus() method.
     *
     * @return void
     */
    public function testSetNbHDifDus() {

        $obj = new TestFloatNbHDifDusTrait();

        $obj->setNbHDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDifDus());
    }
}
