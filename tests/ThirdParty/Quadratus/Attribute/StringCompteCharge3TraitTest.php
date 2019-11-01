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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge3Trait;

/**
 * Compte charge3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge3() method.
     *
     * @return void
     */
    public function testSetCompteCharge3() {

        $obj = new TestStringCompteCharge3Trait();

        $obj->setCompteCharge3("compteCharge3");
        $this->assertEquals("compteCharge3", $obj->getCompteCharge3());
    }
}
