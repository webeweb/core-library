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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge6Trait;

/**
 * Compte charge6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge6TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge6() method.
     *
     * @return void
     */
    public function testSetCompteCharge6() {

        $obj = new TestStringCompteCharge6Trait();

        $obj->setCompteCharge6("compteCharge6");
        $this->assertEquals("compteCharge6", $obj->getCompteCharge6());
    }
}
