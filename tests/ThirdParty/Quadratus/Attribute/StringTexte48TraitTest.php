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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte48Trait;

/**
 * Texte48 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte48TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte48() method.
     *
     * @return void
     */
    public function testSetTexte48() {

        $obj = new TestStringTexte48Trait();

        $obj->setTexte48("texte48");
        $this->assertEquals("texte48", $obj->getTexte48());
    }
}
