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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc9Trait;

/**
 * Lib critere ent piece a c9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc9() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc9() {

        $obj = new TestStringLibCritereEntPieceAc9Trait();

        $obj->setLibCritereEntPieceAc9("libCritereEntPieceAc9");
        $this->assertEquals("libCritereEntPieceAc9", $obj->getLibCritereEntPieceAc9());
    }
}
