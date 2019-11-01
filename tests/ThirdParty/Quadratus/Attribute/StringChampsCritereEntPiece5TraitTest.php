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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece5Trait;

/**
 * Champs critere ent piece5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece5TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece5() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece5() {

        $obj = new TestStringChampsCritereEntPiece5Trait();

        $obj->setChampsCritereEntPiece5("champsCritereEntPiece5");
        $this->assertEquals("champsCritereEntPiece5", $obj->getChampsCritereEntPiece5());
    }
}
