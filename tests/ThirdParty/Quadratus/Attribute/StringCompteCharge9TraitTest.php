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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge9Trait;

/**
 * Compte charge9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge9() method.
     *
     * @return void
     */
    public function testSetCompteCharge9() {

        $obj = new TestStringCompteCharge9Trait();

        $obj->setCompteCharge9("compteCharge9");
        $this->assertEquals("compteCharge9", $obj->getCompteCharge9());
    }
}
