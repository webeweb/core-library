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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTransfertEntree1Trait;

/**
 * Transfert entree1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTransfertEntree1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTransfertEntree1() method.
     *
     * @return void
     */
    public function testSetTransfertEntree1() {

        $obj = new TestBoolTransfertEntree1Trait();

        $obj->setTransfertEntree1(true);
        $this->assertEquals(true, $obj->getTransfertEntree1());
    }
}
