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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte46Trait;

/**
 * Texte46 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte46TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte46() method.
     *
     * @return void
     */
    public function testSetTexte46() {

        $obj = new TestStringTexte46Trait();

        $obj->setTexte46("texte46");
        $this->assertEquals("texte46", $obj->getTexte46());
    }
}
