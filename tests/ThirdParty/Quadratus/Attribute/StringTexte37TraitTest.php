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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte37Trait;

/**
 * Texte37 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte37TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte37() method.
     *
     * @return void
     */
    public function testSetTexte37() {

        $obj = new TestStringTexte37Trait();

        $obj->setTexte37("texte37");
        $this->assertEquals("texte37", $obj->getTexte37());
    }
}
