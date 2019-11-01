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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece4Trait;

/**
 * Champs critere ent piece4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece4TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece4() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece4() {

        $obj = new TestStringChampsCritereEntPiece4Trait();

        $obj->setChampsCritereEntPiece4("champsCritereEntPiece4");
        $this->assertEquals("champsCritereEntPiece4", $obj->getChampsCritereEntPiece4());
    }
}
