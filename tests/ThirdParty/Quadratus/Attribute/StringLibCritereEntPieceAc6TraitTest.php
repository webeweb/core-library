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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc6Trait;

/**
 * Lib critere ent piece a c6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc6() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc6() {

        $obj = new TestStringLibCritereEntPieceAc6Trait();

        $obj->setLibCritereEntPieceAc6("libCritereEntPieceAc6");
        $this->assertEquals("libCritereEntPieceAc6", $obj->getLibCritereEntPieceAc6());
    }
}
