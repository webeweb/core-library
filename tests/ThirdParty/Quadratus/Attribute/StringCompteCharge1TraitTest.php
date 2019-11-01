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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge1Trait;

/**
 * Compte charge1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge1() method.
     *
     * @return void
     */
    public function testSetCompteCharge1() {

        $obj = new TestStringCompteCharge1Trait();

        $obj->setCompteCharge1("compteCharge1");
        $this->assertEquals("compteCharge1", $obj->getCompteCharge1());
    }
}
