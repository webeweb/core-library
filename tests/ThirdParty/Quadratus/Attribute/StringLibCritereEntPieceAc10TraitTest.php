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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringLibCritereEntPieceAc10Trait;

/**
 * Lib critere ent piece a c10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringLibCritereEntPieceAc10TraitTest extends AbstractTestCase {

    /**
     * Tests the setLibCritereEntPieceAc10() method.
     *
     * @return void
     */
    public function testSetLibCritereEntPieceAc10() {

        $obj = new TestStringLibCritereEntPieceAc10Trait();

        $obj->setLibCritereEntPieceAc10("libCritereEntPieceAc10");
        $this->assertEquals("libCritereEntPieceAc10", $obj->getLibCritereEntPieceAc10());
    }
}
