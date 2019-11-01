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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte2Trait;

/**
 * Texte2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte2() method.
     *
     * @return void
     */
    public function testSetTexte2() {

        $obj = new TestStringTexte2Trait();

        $obj->setTexte2("texte2");
        $this->assertEquals("texte2", $obj->getTexte2());
    }
}
