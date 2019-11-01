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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxPlafondInterets2Trait;

/**
 * Taux plafond interets2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxPlafondInterets2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxPlafondInterets2() method.
     *
     * @return void
     */
    public function testSetTauxPlafondInterets2() {

        $obj = new TestFloatTauxPlafondInterets2Trait();

        $obj->setTauxPlafondInterets2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPlafondInterets2());
    }
}
