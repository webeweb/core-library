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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIbanIdClient1Trait;

/**
 * Iban id client1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIbanIdClient1TraitTest extends AbstractTestCase {

    /**
     * Tests the setIbanIdClient1() method.
     *
     * @return void
     */
    public function testSetIbanIdClient1() {

        $obj = new TestStringIbanIdClient1Trait();

        $obj->setIbanIdClient1("ibanIdClient1");
        $this->assertEquals("ibanIdClient1", $obj->getIbanIdClient1());
    }
}
