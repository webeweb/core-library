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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge8Trait;

/**
 * Compte charge8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge8TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge8() method.
     *
     * @return void
     */
    public function testSetCompteCharge8() {

        $obj = new TestStringCompteCharge8Trait();

        $obj->setCompteCharge8("compteCharge8");
        $this->assertEquals("compteCharge8", $obj->getCompteCharge8());
    }
}
