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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc7Trait;

/**
 * Champs critere ent piece a c7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc7TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc7() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc7() {

        $obj = new TestStringChampsCritereEntPieceAc7Trait();

        $obj->setChampsCritereEntPieceAc7("champsCritereEntPieceAc7");
        $this->assertEquals("champsCritereEntPieceAc7", $obj->getChampsCritereEntPieceAc7());
    }
}
