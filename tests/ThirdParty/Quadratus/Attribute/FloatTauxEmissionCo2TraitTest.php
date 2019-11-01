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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxEmissionCo2Trait;

/**
 * Taux emission c o2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxEmissionCo2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxEmissionCo2() method.
     *
     * @return void
     */
    public function testSetTauxEmissionCo2() {

        $obj = new TestFloatTauxEmissionCo2Trait();

        $obj->setTauxEmissionCo2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEmissionCo2());
    }
}
