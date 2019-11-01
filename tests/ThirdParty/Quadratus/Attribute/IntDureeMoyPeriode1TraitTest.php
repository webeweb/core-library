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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntDureeMoyPeriode1Trait;

/**
 * Duree moy periode1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntDureeMoyPeriode1TraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeMoyPeriode1() method.
     *
     * @return void
     */
    public function testSetDureeMoyPeriode1() {

        $obj = new TestIntDureeMoyPeriode1Trait();

        $obj->setDureeMoyPeriode1(10);
        $this->assertEquals(10, $obj->getDureeMoyPeriode1());
    }
}
