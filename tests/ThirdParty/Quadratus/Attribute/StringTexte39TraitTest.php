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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte39Trait;

/**
 * Texte39 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte39TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte39() method.
     *
     * @return void
     */
    public function testSetTexte39() {

        $obj = new TestStringTexte39Trait();

        $obj->setTexte39("texte39");
        $this->assertEquals("texte39", $obj->getTexte39());
    }
}
