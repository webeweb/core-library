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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte15Trait;

/**
 * Texte15 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte15TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte15() method.
     *
     * @return void
     */
    public function testSetTexte15() {

        $obj = new TestStringTexte15Trait();

        $obj->setTexte15("texte15");
        $this->assertEquals("texte15", $obj->getTexte15());
    }
}
