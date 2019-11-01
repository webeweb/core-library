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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbMaxGammeTrait;

/**
 * Nb max gamme trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbMaxGammeTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbMaxGamme() method.
     *
     * @return void
     */
    public function testSetNbMaxGamme() {

        $obj = new TestIntNbMaxGammeTrait();

        $obj->setNbMaxGamme(10);
        $this->assertEquals(10, $obj->getNbMaxGamme());
    }
}
