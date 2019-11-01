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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte30Trait;

/**
 * Texte30 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte30TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte30() method.
     *
     * @return void
     */
    public function testSetTexte30() {

        $obj = new TestStringTexte30Trait();

        $obj->setTexte30("texte30");
        $this->assertEquals("texte30", $obj->getTexte30());
    }
}
