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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece6Trait;

/**
 * Champs critere ent piece6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece6TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece6() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece6() {

        $obj = new TestStringChampsCritereEntPiece6Trait();

        $obj->setChampsCritereEntPiece6("champsCritereEntPiece6");
        $this->assertEquals("champsCritereEntPiece6", $obj->getChampsCritereEntPiece6());
    }
}
