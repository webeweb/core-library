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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntPrixMoyenNbEntier2Trait;

/**
 * Prix moyen nb entier2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntPrixMoyenNbEntier2TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrixMoyenNbEntier2() method.
     *
     * @return void
     */
    public function testSetPrixMoyenNbEntier2() {

        $obj = new TestIntPrixMoyenNbEntier2Trait();

        $obj->setPrixMoyenNbEntier2(10);
        $this->assertEquals(10, $obj->getPrixMoyenNbEntier2());
    }
}
