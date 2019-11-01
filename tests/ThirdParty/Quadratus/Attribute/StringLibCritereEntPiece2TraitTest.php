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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece2Trait;

/**
 * Lib critere ent piece2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece2TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece2() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece2() {

        $obj = new TestStringLibCritereEntPiece2Trait();

        $obj->setLibCritereEntPiece2("libCritereEntPiece2");
        $this->assertEquals("libCritereEntPiece2", $obj->getLibCritereEntPiece2());
    }
}
