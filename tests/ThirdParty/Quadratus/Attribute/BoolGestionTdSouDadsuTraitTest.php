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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolGestionTdSouDadsuTrait;

/**
 * Gestion t d sou d a d s u trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolGestionTdSouDadsuTraitTest extends AbstractTestCase {

    /**
     * Tests the setGestionTdSouDadsu() method.
     *
     * @return void
     */
    public function testSetGestionTdSouDadsu() {

        $obj = new TestBoolGestionTdSouDadsuTrait();

        $obj->setGestionTdSouDadsu(true);
        $this->assertEquals(true, $obj->getGestionTdSouDadsu());
    }
}
