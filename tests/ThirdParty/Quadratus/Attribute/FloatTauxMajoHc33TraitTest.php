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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTauxMajoHc33Trait;

/**
 * Taux majo h c33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTauxMajoHc33TraitTest extends AbstractTestCase {

    /**
     * Tests the setTauxMajoHc33() method.
     *
     * @return void
     */
    public function testSetTauxMajoHc33() {

        $obj = new TestFloatTauxMajoHc33Trait();

        $obj->setTauxMajoHc33(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxMajoHc33());
    }
}
