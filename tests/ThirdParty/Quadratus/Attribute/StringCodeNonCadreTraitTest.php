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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeNonCadreTrait;

/**
 * Code non cadre trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeNonCadreTraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeNonCadre() method.
     *
     * @return void
     */
    public function testSetCodeNonCadre() {

        $obj = new TestStringCodeNonCadreTrait();

        $obj->setCodeNonCadre("codeNonCadre");
        $this->assertEquals("codeNonCadre", $obj->getCodeNonCadre());
    }
}
