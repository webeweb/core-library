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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte17Trait;

/**
 * Texte17 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte17TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte17() method.
     *
     * @return void
     */
    public function testSetTexte17() {

        $obj = new TestStringTexte17Trait();

        $obj->setTexte17("texte17");
        $this->assertEquals("texte17", $obj->getTexte17());
    }
}
