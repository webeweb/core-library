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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte4Trait;

/**
 * Texte4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte4TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte4() method.
     *
     * @return void
     */
    public function testSetTexte4() {

        $obj = new TestStringTexte4Trait();

        $obj->setTexte4("texte4");
        $this->assertEquals("texte4", $obj->getTexte4());
    }
}
