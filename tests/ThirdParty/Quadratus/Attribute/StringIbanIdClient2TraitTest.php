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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIbanIdClient2Trait;

/**
 * Iban id client2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIbanIdClient2TraitTest extends AbstractTestCase {

    /**
     * Tests the setIbanIdClient2() method.
     *
     * @return void
     */
    public function testSetIbanIdClient2() {

        $obj = new TestStringIbanIdClient2Trait();

        $obj->setIbanIdClient2("ibanIdClient2");
        $this->assertEquals("ibanIdClient2", $obj->getIbanIdClient2());
    }
}
