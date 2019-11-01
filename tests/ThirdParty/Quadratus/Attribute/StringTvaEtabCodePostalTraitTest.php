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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvaEtabCodePostalTrait;

/**
 * T v a etab_ code postal trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvaEtabCodePostalTraitTest extends AbstractTestCase {

    /**
     * Tests the setTvaEtabCodePostal() method.
     *
     * @return void
     */
    public function testSetTvaEtabCodePostal() {

        $obj = new TestStringTvaEtabCodePostalTrait();

        $obj->setTvaEtabCodePostal("tvaEtabCodePostal");
        $this->assertEquals("tvaEtabCodePostal", $obj->getTvaEtabCodePostal());
    }
}
