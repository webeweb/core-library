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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte44Trait;

/**
 * Texte44 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte44TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte44() method.
     *
     * @return void
     */
    public function testSetTexte44() {

        $obj = new TestStringTexte44Trait();

        $obj->setTexte44("texte44");
        $this->assertEquals("texte44", $obj->getTexte44());
    }
}
