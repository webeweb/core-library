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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte49Trait;

/**
 * Texte49 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte49TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte49() method.
     *
     * @return void
     */
    public function testSetTexte49() {

        $obj = new TestStringTexte49Trait();

        $obj->setTexte49("texte49");
        $this->assertEquals("texte49", $obj->getTexte49());
    }
}
