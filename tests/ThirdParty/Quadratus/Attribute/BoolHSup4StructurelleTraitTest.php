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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolHSup4StructurelleTrait;

/**
 * H sup4 structurelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolHSup4StructurelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setHSup4Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup4Structurelle() {

        $obj = new TestBoolHSup4StructurelleTrait();

        $obj->setHSup4Structurelle(true);
        $this->assertEquals(true, $obj->getHSup4Structurelle());
    }
}
