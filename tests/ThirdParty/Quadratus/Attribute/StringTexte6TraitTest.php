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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte6Trait;

/**
 * Texte6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte6TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte6() method.
     *
     * @return void
     */
    public function testSetTexte6() {

        $obj = new TestStringTexte6Trait();

        $obj->setTexte6("texte6");
        $this->assertEquals("texte6", $obj->getTexte6());
    }
}
