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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTransfertSortie1Trait;

/**
 * Transfert sortie1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTransfertSortie1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTransfertSortie1() method.
     *
     * @return void
     */
    public function testSetTransfertSortie1() {

        $obj = new TestBoolTransfertSortie1Trait();

        $obj->setTransfertSortie1(true);
        $this->assertEquals(true, $obj->getTransfertSortie1());
    }
}
