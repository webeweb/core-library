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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolHSup3StructurelleTrait;

/**
 * H sup3 structurelle trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolHSup3StructurelleTraitTest extends AbstractTestCase {

    /**
     * Tests the setHSup3Structurelle() method.
     *
     * @return void
     */
    public function testSetHSup3Structurelle() {

        $obj = new TestBoolHSup3StructurelleTrait();

        $obj->setHSup3Structurelle(true);
        $this->assertEquals(true, $obj->getHSup3Structurelle());
    }
}
