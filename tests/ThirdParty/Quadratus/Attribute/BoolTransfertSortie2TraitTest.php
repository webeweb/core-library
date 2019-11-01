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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTransfertSortie2Trait;

/**
 * Transfert sortie2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTransfertSortie2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTransfertSortie2() method.
     *
     * @return void
     */
    public function testSetTransfertSortie2() {

        $obj = new TestBoolTransfertSortie2Trait();

        $obj->setTransfertSortie2(true);
        $this->assertEquals(true, $obj->getTransfertSortie2());
    }
}
