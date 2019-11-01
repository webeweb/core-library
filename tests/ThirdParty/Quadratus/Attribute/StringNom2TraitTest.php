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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNom2Trait;

/**
 * Nom2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNom2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNom2() method.
     *
     * @return void
     */
    public function testSetNom2() {

        $obj = new TestStringNom2Trait();

        $obj->setNom2("nom2");
        $this->assertEquals("nom2", $obj->getNom2());
    }
}
