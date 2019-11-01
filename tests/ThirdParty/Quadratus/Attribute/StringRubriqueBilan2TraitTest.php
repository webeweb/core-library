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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRubriqueBilan2Trait;

/**
 * Rubrique bilan2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRubriqueBilan2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRubriqueBilan2() method.
     *
     * @return void
     */
    public function testSetRubriqueBilan2() {

        $obj = new TestStringRubriqueBilan2Trait();

        $obj->setRubriqueBilan2("rubriqueBilan2");
        $this->assertEquals("rubriqueBilan2", $obj->getRubriqueBilan2());
    }
}
