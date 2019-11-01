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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc5Trait;

/**
 * Champs critere ent piece a c5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc5TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc5() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc5() {

        $obj = new TestStringChampsCritereEntPieceAc5Trait();

        $obj->setChampsCritereEntPieceAc5("champsCritereEntPieceAc5");
        $this->assertEquals("champsCritereEntPieceAc5", $obj->getChampsCritereEntPieceAc5());
    }
}
