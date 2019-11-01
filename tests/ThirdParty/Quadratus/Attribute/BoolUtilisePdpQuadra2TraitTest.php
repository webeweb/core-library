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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolUtilisePdpQuadra2Trait;

/**
 * Utilise pdp quadra2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolUtilisePdpQuadra2TraitTest extends AbstractTestCase {

    /**
     * Tests the setUtilisePdpQuadra2() method.
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra2() {

        $obj = new TestBoolUtilisePdpQuadra2Trait();

        $obj->setUtilisePdpQuadra2(true);
        $this->assertEquals(true, $obj->getUtilisePdpQuadra2());
    }
}
