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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte18Trait;

/**
 * Texte18 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte18TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte18() method.
     *
     * @return void
     */
    public function testSetTexte18() {

        $obj = new TestStringTexte18Trait();

        $obj->setTexte18("texte18");
        $this->assertEquals("texte18", $obj->getTexte18());
    }
}
