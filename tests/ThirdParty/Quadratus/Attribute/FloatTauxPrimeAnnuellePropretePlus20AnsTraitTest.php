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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxPrimeAnnuellePropretePlus20AnsTrait;

/**
 * Taux prime annuelle proprete plus20 ans trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxPrimeAnnuellePropretePlus20AnsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxPrimeAnnuellePropretePlus20Ans() method.
     *
     * @return void
     */
    public function testSetTauxPrimeAnnuellePropretePlus20Ans() {

        $obj = new TestFloatTauxPrimeAnnuellePropretePlus20AnsTrait();

        $obj->setTauxPrimeAnnuellePropretePlus20Ans(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrimeAnnuellePropretePlus20Ans());
    }
}
