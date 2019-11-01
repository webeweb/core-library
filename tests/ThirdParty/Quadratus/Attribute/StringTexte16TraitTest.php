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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte16Trait;

/**
 * Texte16 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte16TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte16() method.
     *
     * @return void
     */
    public function testSetTexte16() {

        $obj = new TestStringTexte16Trait();

        $obj->setTexte16("texte16");
        $this->assertEquals("texte16", $obj->getTexte16());
    }
}
