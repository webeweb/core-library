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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc1Trait;

/**
 * Champs critere ent piece a c1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc1TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc1() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc1() {

        $obj = new TestStringChampsCritereEntPieceAc1Trait();

        $obj->setChampsCritereEntPieceAc1("champsCritereEntPieceAc1");
        $this->assertEquals("champsCritereEntPieceAc1", $obj->getChampsCritereEntPieceAc1());
    }
}
