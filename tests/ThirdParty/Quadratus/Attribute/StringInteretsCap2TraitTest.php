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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringInteretsCap2Trait;

/**
 * Interets c a p2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringInteretsCap2TraitTest extends AbstractTestCase {

    /**
     * Tests the setInteretsCap2() method.
     *
     * @return void
     */
    public function testSetInteretsCap2() {

        $obj = new TestStringInteretsCap2Trait();

        $obj->setInteretsCap2("interetsCap2");
        $this->assertEquals("interetsCap2", $obj->getInteretsCap2());
    }
}
