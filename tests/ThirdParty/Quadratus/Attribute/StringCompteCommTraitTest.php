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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCompteCommTrait;

/**
 * Compte comm trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCompteCommTraitTest extends AbstractTestCase {

    /**
     * Tests the setCompteComm() method.
     *
     * @return void
     */
    public function testSetCompteComm() {

        $obj = new TestStringCompteCommTrait();

        $obj->setCompteComm("compteComm");
        $this->assertEquals("compteComm", $obj->getCompteComm());
    }
}
