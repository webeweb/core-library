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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolHSup2StructurelleTrait;

/**
 * H sup2 structurelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolHSup2StructurelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setHSup2Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup2Structurelle() {

        $obj = new TestBoolHSup2StructurelleTrait();

        $obj->setHSup2Structurelle(true);
        $this->assertEquals(true, $obj->getHSup2Structurelle());
    }
}
