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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte34Trait;

/**
 * Texte34 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte34TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte34() method.
     *
     * @return void
     */
    public function testSetTexte34() {

        $obj = new TestStringTexte34Trait();

        $obj->setTexte34("texte34");
        $this->assertEquals("texte34", $obj->getTexte34());
    }
}
