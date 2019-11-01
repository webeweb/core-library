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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc5Trait;

/**
 * Lib critere ent piece a c5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc5() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc5() {

        $obj = new TestStringLibCritereEntPieceAc5Trait();

        $obj->setLibCritereEntPieceAc5("libCritereEntPieceAc5");
        $this->assertEquals("libCritereEntPieceAc5", $obj->getLibCritereEntPieceAc5());
    }
}
