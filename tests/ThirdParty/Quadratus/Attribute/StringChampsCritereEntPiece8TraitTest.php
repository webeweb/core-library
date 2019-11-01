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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece8Trait;

/**
 * Champs critere ent piece8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece8TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece8() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece8() {

        $obj = new TestStringChampsCritereEntPiece8Trait();

        $obj->setChampsCritereEntPiece8("champsCritereEntPiece8");
        $this->assertEquals("champsCritereEntPiece8", $obj->getChampsCritereEntPiece8());
    }
}
