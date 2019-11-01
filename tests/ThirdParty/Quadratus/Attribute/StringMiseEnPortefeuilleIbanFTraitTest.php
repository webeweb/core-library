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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMiseEnPortefeuilleIbanFTrait;

/**
 * Mise en portefeuille iban f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMiseEnPortefeuilleIbanFTraitTest extends AbstractTestCase {

    /**
     * Tests the setMiseEnPortefeuilleIbanF() method.
     *
     * @return void
     */
    public function testSetMiseEnPortefeuilleIbanF() {

        $obj = new TestStringMiseEnPortefeuilleIbanFTrait();

        $obj->setMiseEnPortefeuilleIbanF("miseEnPortefeuilleIbanF");
        $this->assertEquals("miseEnPortefeuilleIbanF", $obj->getMiseEnPortefeuilleIbanF());
    }
}
