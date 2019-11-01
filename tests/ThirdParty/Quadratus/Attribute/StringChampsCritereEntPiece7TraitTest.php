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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece7Trait;

/**
 * Champs critere ent piece7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece7TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece7() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece7() {

        $obj = new TestStringChampsCritereEntPiece7Trait();

        $obj->setChampsCritereEntPiece7("champsCritereEntPiece7");
        $this->assertEquals("champsCritereEntPiece7", $obj->getChampsCritereEntPiece7());
    }
}
