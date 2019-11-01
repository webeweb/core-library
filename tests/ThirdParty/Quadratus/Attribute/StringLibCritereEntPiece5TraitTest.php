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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece5Trait;

/**
 * Lib critere ent piece5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece5TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece5() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece5() {

        $obj = new TestStringLibCritereEntPiece5Trait();

        $obj->setLibCritereEntPiece5("libCritereEntPiece5");
        $this->assertEquals("libCritereEntPiece5", $obj->getLibCritereEntPiece5());
    }
}
