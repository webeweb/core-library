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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc7Trait;

/**
 * Lib critere ent piece a c7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc7TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc7() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc7() {

        $obj = new TestStringLibCritereEntPieceAc7Trait();

        $obj->setLibCritereEntPieceAc7("libCritereEntPieceAc7");
        $this->assertEquals("libCritereEntPieceAc7", $obj->getLibCritereEntPieceAc7());
    }
}
