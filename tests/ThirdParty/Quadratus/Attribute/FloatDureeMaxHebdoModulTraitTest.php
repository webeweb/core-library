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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatDureeMaxHebdoModulTrait;

/**
 * Duree max hebdo modul trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatDureeMaxHebdoModulTraitTest extends AbstractTestCase {

    /**
     * Tests the setDureeMaxHebdoModul() method.
     *
     * @return void
     */
    public function testSetDureeMaxHebdoModul() {

        $obj = new TestFloatDureeMaxHebdoModulTrait();

        $obj->setDureeMaxHebdoModul(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeMaxHebdoModul());
    }
}
