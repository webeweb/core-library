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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte27Trait;

/**
 * Texte27 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte27TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte27() method.
     *
     * @return void
     */
    public function testSetTexte27() {

        $obj = new TestStringTexte27Trait();

        $obj->setTexte27("texte27");
        $this->assertEquals("texte27", $obj->getTexte27());
    }
}
