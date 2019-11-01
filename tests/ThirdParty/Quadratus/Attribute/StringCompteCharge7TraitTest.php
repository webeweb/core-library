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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCharge7Trait;

/**
 * Compte charge7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCharge7TraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteCharge7() method.
     *
     * @return void
     */
    public function testSetCompteCharge7() {

        $obj = new TestStringCompteCharge7Trait();

        $obj->setCompteCharge7("compteCharge7");
        $this->assertEquals("compteCharge7", $obj->getCompteCharge7());
    }
}
