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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece1Trait;

/**
 * Champs critere ent piece1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece1TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece1() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece1() {

        $obj = new TestStringChampsCritereEntPiece1Trait();

        $obj->setChampsCritereEntPiece1("champsCritereEntPiece1");
        $this->assertEquals("champsCritereEntPiece1", $obj->getChampsCritereEntPiece1());
    }
}
