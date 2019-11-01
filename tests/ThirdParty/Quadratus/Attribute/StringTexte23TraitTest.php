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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte23Trait;

/**
 * Texte23 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte23TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte23() method.
     *
     * @return void
     */
    public function testSetTexte23() {

        $obj = new TestStringTexte23Trait();

        $obj->setTexte23("texte23");
        $this->assertEquals("texte23", $obj->getTexte23());
    }
}
