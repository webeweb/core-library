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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPiece10Trait;

/**
 * Lib critere ent piece10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPiece10TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPiece10() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPiece10() {

        $obj = new TestStringLibCritereEntPiece10Trait();

        $obj->setLibCritereEntPiece10("libCritereEntPiece10");
        $this->assertEquals("libCritereEntPiece10", $obj->getLibCritereEntPiece10());
    }
}
