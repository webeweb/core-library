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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte50Trait;

/**
 * Texte50 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte50TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte50() method.
     *
     * @return void
     */
    public function testSetTexte50() {

        $obj = new TestStringTexte50Trait();

        $obj->setTexte50("texte50");
        $this->assertEquals("texte50", $obj->getTexte50());
    }
}
