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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge2Trait;

/**
 * Compte charge2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge2() method.
     *
     * @return void
     */
    public function testSetCompteCharge2() {

        $obj = new TestStringCompteCharge2Trait();

        $obj->setCompteCharge2("compteCharge2");
        $this->assertEquals("compteCharge2", $obj->getCompteCharge2());
    }
}
