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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntPrixDefautVenteTrait;

/**
 * Prix defaut vente trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntPrixDefautVenteTraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixDefautVente() method.
     *
     * @return void
     */
    public function testSetPrixDefautVente() {

        $obj = new TestIntPrixDefautVenteTrait();

        $obj->setPrixDefautVente(10);
        $this->assertEquals(10, $obj->getPrixDefautVente());
    }
}
