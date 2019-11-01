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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereTriAbsConges1Trait;

/**
 * Critere tri abs conges1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereTriAbsConges1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereTriAbsConges1() method.
     *
     * @return void
     */
    public function testSetCritereTriAbsConges1() {

        $obj = new TestStringCritereTriAbsConges1Trait();

        $obj->setCritereTriAbsConges1("critereTriAbsConges1");
        $this->assertEquals("critereTriAbsConges1", $obj->getCritereTriAbsConges1());
    }
}
