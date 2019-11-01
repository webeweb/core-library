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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxPatTrait;

/**
 * Taux pat trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxPatTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxPat() method.
     *
     * @return void
     */
    public function testSetTauxPat() {

        $obj = new TestFloatTauxPatTrait();

        $obj->setTauxPat(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPat());
    }
}
