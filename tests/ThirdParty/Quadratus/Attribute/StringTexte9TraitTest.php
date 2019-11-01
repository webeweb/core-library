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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte9Trait;

/**
 * Texte9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte9TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte9() method.
     *
     * @return void
     */
    public function testSetTexte9() {

        $obj = new TestStringTexte9Trait();

        $obj->setTexte9("texte9");
        $this->assertEquals("texte9", $obj->getTexte9());
    }
}
