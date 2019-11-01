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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNbFactureTrait;

/**
 * Nb facture trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNbFactureTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbFacture() method.
     *
     * @return void
     */
    public function testSetNbFacture() {

        $obj = new TestStringNbFactureTrait();

        $obj->setNbFacture("nbFacture");
        $this->assertEquals("nbFacture", $obj->getNbFacture());
    }
}
