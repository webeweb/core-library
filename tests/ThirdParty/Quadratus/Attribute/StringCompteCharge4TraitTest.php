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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge4Trait;

/**
 * Compte charge4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge4() method.
     *
     * @return void
     */
    public function testSetCompteCharge4() {

        $obj = new TestStringCompteCharge4Trait();

        $obj->setCompteCharge4("compteCharge4");
        $this->assertEquals("compteCharge4", $obj->getCompteCharge4());
    }
}
