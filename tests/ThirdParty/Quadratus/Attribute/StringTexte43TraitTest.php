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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte43Trait;

/**
 * Texte43 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte43TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte43() method.
     *
     * @return void
     */
    public function testSetTexte43() {

        $obj = new TestStringTexte43Trait();

        $obj->setTexte43("texte43");
        $this->assertEquals("texte43", $obj->getTexte43());
    }
}
