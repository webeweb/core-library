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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxLineaireTrait;

/**
 * Taux lineaire trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxLineaireTraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxLineaire() method.
     *
     * @return void
     */
    public function testSetTauxLineaire() {

        $obj = new TestFloatTauxLineaireTrait();

        $obj->setTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxLineaire());
    }
}
