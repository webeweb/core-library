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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte33Trait;

/**
 * Texte33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte33TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte33() method.
     *
     * @return void
     */
    public function testSetTexte33() {

        $obj = new TestStringTexte33Trait();

        $obj->setTexte33("texte33");
        $this->assertEquals("texte33", $obj->getTexte33());
    }
}
