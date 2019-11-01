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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFctDonneesVTrait;

/**
 * Fct donnees v trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFctDonneesVTraitTest extends AbstractTestCase {

    /**
     * Tests the setFctDonneesV() method.
     *
     * @return void
     */
    public function testSetFctDonneesV() {

        $obj = new TestBoolFctDonneesVTrait();

        $obj->setFctDonneesV(true);
        $this->assertEquals(true, $obj->getFctDonneesV());
    }
}
