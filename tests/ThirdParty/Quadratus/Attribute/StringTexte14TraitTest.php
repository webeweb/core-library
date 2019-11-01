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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte14Trait;

/**
 * Texte14 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte14TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte14() method.
     *
     * @return void
     */
    public function testSetTexte14() {

        $obj = new TestStringTexte14Trait();

        $obj->setTexte14("texte14");
        $this->assertEquals("texte14", $obj->getTexte14());
    }
}
