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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexte35Trait;

/**
 * Texte35 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexte35TraitTest extends AbstractTestCase {

    /**
     * Tests the setTexte35() method.
     *
     * @return void
     */
    public function testSetTexte35() {

        $obj = new TestStringTexte35Trait();

        $obj->setTexte35("texte35");
        $this->assertEquals("texte35", $obj->getTexte35());
    }
}
