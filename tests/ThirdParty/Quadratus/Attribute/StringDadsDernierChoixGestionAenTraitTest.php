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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsDernierChoixGestionAenTrait;

/**
 * D a d s dernier choix gestion a e n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsDernierChoixGestionAenTraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsDernierChoixGestionAen() method.
     *
     * @return void
     */
    public function testSetDadsDernierChoixGestionAen() {

        $obj = new TestStringDadsDernierChoixGestionAenTrait();

        $obj->setDadsDernierChoixGestionAen("dadsDernierChoixGestionAen");
        $this->assertEquals("dadsDernierChoixGestionAen", $obj->getDadsDernierChoixGestionAen());
    }
}
