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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTransfertEntree2Trait;

/**
 * Transfert entree2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTransfertEntree2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTransfertEntree2() method.
     *
     * @return void
     */
    public function testSetTransfertEntree2() {

        $obj = new TestBoolTransfertEntree2Trait();

        $obj->setTransfertEntree2(true);
        $this->assertEquals(true, $obj->getTransfertEntree2());
    }
}
