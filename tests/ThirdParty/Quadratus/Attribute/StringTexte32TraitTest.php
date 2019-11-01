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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte32Trait;

/**
 * Texte32 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte32TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte32() method.
     *
     * @return void
     */
    public function testSetTexte32() {

        $obj = new TestStringTexte32Trait();

        $obj->setTexte32("texte32");
        $this->assertEquals("texte32", $obj->getTexte32());
    }
}
