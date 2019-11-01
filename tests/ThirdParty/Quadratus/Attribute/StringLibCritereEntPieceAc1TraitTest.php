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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc1Trait;

/**
 * Lib critere ent piece a c1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc1TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc1() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc1() {

        $obj = new TestStringLibCritereEntPieceAc1Trait();

        $obj->setLibCritereEntPieceAc1("libCritereEntPieceAc1");
        $this->assertEquals("libCritereEntPieceAc1", $obj->getLibCritereEntPieceAc1());
    }
}
