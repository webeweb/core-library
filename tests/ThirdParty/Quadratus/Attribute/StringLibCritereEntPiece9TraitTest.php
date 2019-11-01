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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece9Trait;

/**
 * Lib critere ent piece9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece9TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece9() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece9() {

        $obj = new TestStringLibCritereEntPiece9Trait();

        $obj->setLibCritereEntPiece9("libCritereEntPiece9");
        $this->assertEquals("libCritereEntPiece9", $obj->getLibCritereEntPiece9());
    }
}
