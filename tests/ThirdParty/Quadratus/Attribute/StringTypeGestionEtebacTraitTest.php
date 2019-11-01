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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeGestionEtebacTrait;

/**
 * Type gestion e t e b a c trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeGestionEtebacTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeGestionEtebac() method.
     *
     * @return void
     */
    public function testSetTypeGestionEtebac() {

        $obj = new TestStringTypeGestionEtebacTrait();

        $obj->setTypeGestionEtebac("typeGestionEtebac");
        $this->assertEquals("typeGestionEtebac", $obj->getTypeGestionEtebac());
    }
}
