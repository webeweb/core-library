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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntPrixMoyenNbDec2Trait;

/**
 * Prix moyen nb dec2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntPrixMoyenNbDec2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixMoyenNbDec2() method.
     *
     * @return void
     */
    public function testSetPrixMoyenNbDec2() {

        $obj = new TestIntPrixMoyenNbDec2Trait();

        $obj->setPrixMoyenNbDec2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbDec2());
    }
}
