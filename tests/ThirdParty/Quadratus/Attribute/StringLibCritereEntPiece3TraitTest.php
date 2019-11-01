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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece3Trait;

/**
 * Lib critere ent piece3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece3TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece3() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece3() {

        $obj = new TestStringLibCritereEntPiece3Trait();

        $obj->setLibCritereEntPiece3("libCritereEntPiece3");
        $this->assertEquals("libCritereEntPiece3", $obj->getLibCritereEntPiece3());
    }
}
