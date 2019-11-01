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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc2Trait;

/**
 * Lib critere ent piece a c2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc2() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc2() {

        $obj = new TestStringLibCritereEntPieceAc2Trait();

        $obj->setLibCritereEntPieceAc2("libCritereEntPieceAc2");
        $this->assertEquals("libCritereEntPieceAc2", $obj->getLibCritereEntPieceAc2());
    }
}
