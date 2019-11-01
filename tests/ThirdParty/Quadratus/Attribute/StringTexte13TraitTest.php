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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte13Trait;

/**
 * Texte13 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte13TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte13() method.
     *
     * @return void
     */
    public function testSetTexte13() {

        $obj = new TestStringTexte13Trait();

        $obj->setTexte13("texte13");
        $this->assertEquals("texte13", $obj->getTexte13());
    }
}
