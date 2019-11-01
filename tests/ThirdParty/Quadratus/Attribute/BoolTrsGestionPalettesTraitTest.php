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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTrsGestionPalettesTrait;

/**
 * T r s gestion palettes trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTrsGestionPalettesTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsGestionPalettes() method.
     *
     * @return void
     */
    public function testSetTrsGestionPalettes() {

        $obj = new TestBoolTrsGestionPalettesTrait();

        $obj->setTrsGestionPalettes(true);
        $this->assertEquals(true, $obj->getTrsGestionPalettes());
    }
}
