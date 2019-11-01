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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntDureeMoyPeriode2Trait;

/**
 * Duree moy periode2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntDureeMoyPeriode2TraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeMoyPeriode2() method.
     *
     * @return void
     */
    public function testSetDureeMoyPeriode2() {

        $obj = new TestIntDureeMoyPeriode2Trait();

        $obj->setDureeMoyPeriode2(10);
        $this->assertEquals(10, $obj->getDureeMoyPeriode2());
    }
}
