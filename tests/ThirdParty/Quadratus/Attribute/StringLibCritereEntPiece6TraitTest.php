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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece6Trait;

/**
 * Lib critere ent piece6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece6TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece6() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece6() {

        $obj = new TestStringLibCritereEntPiece6Trait();

        $obj->setLibCritereEntPiece6("libCritereEntPiece6");
        $this->assertEquals("libCritereEntPiece6", $obj->getLibCritereEntPiece6());
    }
}
