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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece8Trait;

/**
 * Lib critere ent piece8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece8TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece8() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece8() {

        $obj = new TestStringLibCritereEntPiece8Trait();

        $obj->setLibCritereEntPiece8("libCritereEntPiece8");
        $this->assertEquals("libCritereEntPiece8", $obj->getLibCritereEntPiece8());
    }
}
