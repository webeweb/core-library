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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereTriAbsConges2Trait;

/**
 * Critere tri abs conges2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereTriAbsConges2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereTriAbsConges2() method.
     *
     * @return void
     */
    public function testSetCritereTriAbsConges2() {

        $obj = new TestStringCritereTriAbsConges2Trait();

        $obj->setCritereTriAbsConges2("critereTriAbsConges2");
        $this->assertEquals("critereTriAbsConges2", $obj->getCritereTriAbsConges2());
    }
}
