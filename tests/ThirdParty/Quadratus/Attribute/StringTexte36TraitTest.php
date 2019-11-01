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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte36Trait;

/**
 * Texte36 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte36TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte36() method.
     *
     * @return void
     */
    public function testSetTexte36() {

        $obj = new TestStringTexte36Trait();

        $obj->setTexte36("texte36");
        $this->assertEquals("texte36", $obj->getTexte36());
    }
}
