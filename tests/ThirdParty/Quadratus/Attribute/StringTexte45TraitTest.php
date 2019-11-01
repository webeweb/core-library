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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte45Trait;

/**
 * Texte45 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte45TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte45() method.
     *
     * @return void
     */
    public function testSetTexte45() {

        $obj = new TestStringTexte45Trait();

        $obj->setTexte45("texte45");
        $this->assertEquals("texte45", $obj->getTexte45());
    }
}
