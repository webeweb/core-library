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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbHBonifiePrisesTrait;

/**
 * Nb h bonifie prises trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbHBonifiePrisesTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbHBonifiePrises() method.
     *
     * @return void
     */
    public function testSetNbHBonifiePrises() {

        $obj = new TestFloatNbHBonifiePrisesTrait();

        $obj->setNbHBonifiePrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifiePrises());
    }
}
