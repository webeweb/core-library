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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc8Trait;

/**
 * Lib critere ent piece a c8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc8TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc8() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc8() {

        $obj = new TestStringLibCritereEntPieceAc8Trait();

        $obj->setLibCritereEntPieceAc8("libCritereEntPieceAc8");
        $this->assertEquals("libCritereEntPieceAc8", $obj->getLibCritereEntPieceAc8());
    }
}
