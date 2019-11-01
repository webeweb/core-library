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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte40Trait;

/**
 * Texte40 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte40TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte40() method.
     *
     * @return void
     */
    public function testSetTexte40() {

        $obj = new TestStringTexte40Trait();

        $obj->setTexte40("texte40");
        $this->assertEquals("texte40", $obj->getTexte40());
    }
}
