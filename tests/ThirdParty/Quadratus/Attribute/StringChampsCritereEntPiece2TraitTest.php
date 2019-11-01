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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece2Trait;

/**
 * Champs critere ent piece2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece2TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece2() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece2() {

        $obj = new TestStringChampsCritereEntPiece2Trait();

        $obj->setChampsCritereEntPiece2("champsCritereEntPiece2");
        $this->assertEquals("champsCritereEntPiece2", $obj->getChampsCritereEntPiece2());
    }
}
