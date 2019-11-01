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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxPrimeAnnuellePropreteMoins20AnsTrait;

/**
 * Taux prime annuelle proprete moins20 ans trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxPrimeAnnuellePropreteMoins20AnsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxPrimeAnnuellePropreteMoins20Ans() method.
     *
     * @return void
     */
    public function testSetTauxPrimeAnnuellePropreteMoins20Ans() {

        $obj = new TestFloatTauxPrimeAnnuellePropreteMoins20AnsTrait();

        $obj->setTauxPrimeAnnuellePropreteMoins20Ans(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPrimeAnnuellePropreteMoins20Ans());
    }
}
