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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringChampsCritereEntPiece9Trait;

/**
 * Champs critere ent piece9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringChampsCritereEntPiece9TraitTest extends AbstractTestCase {

    /**
     * Tests the setChampsCritereEntPiece9() method.
     *
     * @return void
     */
    public function testSetChampsCritereEntPiece9() {

        $obj = new TestStringChampsCritereEntPiece9Trait();

        $obj->setChampsCritereEntPiece9("champsCritereEntPiece9");
        $this->assertEquals("champsCritereEntPiece9", $obj->getChampsCritereEntPiece9());
    }
}
