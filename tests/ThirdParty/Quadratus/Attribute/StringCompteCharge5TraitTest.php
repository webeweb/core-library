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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge5Trait;

/**
 * Compte charge5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge5() method.
     *
     * @return void
     */
    public function testSetCompteCharge5() {

        $obj = new TestStringCompteCharge5Trait();

        $obj->setCompteCharge5("compteCharge5");
        $this->assertEquals("compteCharge5", $obj->getCompteCharge5());
    }
}
