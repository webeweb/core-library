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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge11Trait;

/**
 * Compte charge11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge11TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge11() method.
     *
     * @return void
     */
    public function testSetCompteCharge11() {

        $obj = new TestStringCompteCharge11Trait();

        $obj->setCompteCharge11("compteCharge11");
        $this->assertEquals("compteCharge11", $obj->getCompteCharge11());
    }
}
