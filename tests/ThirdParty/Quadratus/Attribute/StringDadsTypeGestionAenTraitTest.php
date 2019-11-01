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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringDadsTypeGestionAenTrait;

/**
 * D a d s type gestion a e n trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringDadsTypeGestionAenTraitTest extends AbstractTestCase {

    /**
     * Tests the setDadsTypeGestionAen() method.
     *
     * @return void
     */
    public function testSetDadsTypeGestionAen() {

        $obj = new TestStringDadsTypeGestionAenTrait();

        $obj->setDadsTypeGestionAen("dadsTypeGestionAen");
        $this->assertEquals("dadsTypeGestionAen", $obj->getDadsTypeGestionAen());
    }
}
