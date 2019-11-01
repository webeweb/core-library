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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte8Trait;

/**
 * Texte8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte8TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte8() method.
     *
     * @return void
     */
    public function testSetTexte8() {

        $obj = new TestStringTexte8Trait();

        $obj->setTexte8("texte8");
        $this->assertEquals("texte8", $obj->getTexte8());
    }
}
