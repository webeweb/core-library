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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte42Trait;

/**
 * Texte42 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte42TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte42() method.
     *
     * @return void
     */
    public function testSetTexte42() {

        $obj = new TestStringTexte42Trait();

        $obj->setTexte42("texte42");
        $this->assertEquals("texte42", $obj->getTexte42());
    }
}
