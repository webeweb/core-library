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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece4Trait;

/**
 * Lib critere ent piece4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece4TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece4() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece4() {

        $obj = new TestStringLibCritereEntPiece4Trait();

        $obj->setLibCritereEntPiece4("libCritereEntPiece4");
        $this->assertEquals("libCritereEntPiece4", $obj->getLibCritereEntPiece4());
    }
}
