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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc8Trait;

/**
 * Champs critere ent piece a c8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc8TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc8() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc8() {

        $obj = new TestStringChampsCritereEntPieceAc8Trait();

        $obj->setChampsCritereEntPieceAc8("champsCritereEntPieceAc8");
        $this->assertEquals("champsCritereEntPieceAc8", $obj->getChampsCritereEntPieceAc8());
    }
}
