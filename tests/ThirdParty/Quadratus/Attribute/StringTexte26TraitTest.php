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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte26Trait;

/**
 * Texte26 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte26TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte26() method.
     *
     * @return void
     */
    public function testSetTexte26() {

        $obj = new TestStringTexte26Trait();

        $obj->setTexte26("texte26");
        $this->assertEquals("texte26", $obj->getTexte26());
    }
}
