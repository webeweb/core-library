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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte19Trait;

/**
 * Texte19 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte19TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte19() method.
     *
     * @return void
     */
    public function testSetTexte19() {

        $obj = new TestStringTexte19Trait();

        $obj->setTexte19("texte19");
        $this->assertEquals("texte19", $obj->getTexte19());
    }
}
