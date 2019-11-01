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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPasGestionPdp1Trait;

/**
 * Pas gestion pdp1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPasGestionPdp1TraitTest extends AbstractTestCase {

    /**
     * Tests the setPasGestionPdp1() method.
     *
     * @return void
     */
    public function testSetPasGestionPdp1() {

        $obj = new TestBoolPasGestionPdp1Trait();

        $obj->setPasGestionPdp1(true);
        $this->assertEquals(true, $obj->getPasGestionPdp1());
    }
}
