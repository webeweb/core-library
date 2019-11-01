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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte29Trait;

/**
 * Texte29 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte29TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte29() method.
     *
     * @return void
     */
    public function testSetTexte29() {

        $obj = new TestStringTexte29Trait();

        $obj->setTexte29("texte29");
        $this->assertEquals("texte29", $obj->getTexte29());
    }
}
