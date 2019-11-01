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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece10Trait;

/**
 * Champs critere ent piece10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece10TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece10() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece10() {

        $obj = new TestStringChampsCritereEntPiece10Trait();

        $obj->setChampsCritereEntPiece10("champsCritereEntPiece10");
        $this->assertEquals("champsCritereEntPiece10", $obj->getChampsCritereEntPiece10());
    }
}
