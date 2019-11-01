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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece3Trait;

/**
 * Champs critere ent piece3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece3TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece3() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece3() {

        $obj = new TestStringChampsCritereEntPiece3Trait();

        $obj->setChampsCritereEntPiece3("champsCritereEntPiece3");
        $this->assertEquals("champsCritereEntPiece3", $obj->getChampsCritereEntPiece3());
    }
}
