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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte28Trait;

/**
 * Texte28 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte28TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte28() method.
     *
     * @return void
     */
    public function testSetTexte28() {

        $obj = new TestStringTexte28Trait();

        $obj->setTexte28("texte28");
        $this->assertEquals("texte28", $obj->getTexte28());
    }
}
