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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPieceAc6Trait;

/**
 * Champs critere ent piece a c6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPieceAc6TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPieceAc6() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPieceAc6() {

        $obj = new TestStringChampsCritereEntPieceAc6Trait();

        $obj->setChampsCritereEntPieceAc6("champsCritereEntPieceAc6");
        $this->assertEquals("champsCritereEntPieceAc6", $obj->getChampsCritereEntPieceAc6());
    }
}
