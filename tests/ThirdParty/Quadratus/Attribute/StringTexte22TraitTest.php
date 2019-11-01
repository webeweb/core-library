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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte22Trait;

/**
 * Texte22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte22TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte22() method.
     *
     * @return void
     */
    public function testSetTexte22() {

        $obj = new TestStringTexte22Trait();

        $obj->setTexte22("texte22");
        $this->assertEquals("texte22", $obj->getTexte22());
    }
}
