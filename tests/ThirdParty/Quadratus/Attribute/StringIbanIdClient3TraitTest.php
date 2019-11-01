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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIbanIdClient3Trait;

/**
 * Iban id client3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIbanIdClient3TraitTest extends AbstractTestCase {

    /**
     * Tests the setIbanIdClient3() method.
     *
     * @return void
     */
    public function testSetIbanIdClient3() {

        $obj = new TestStringIbanIdClient3Trait();

        $obj->setIbanIdClient3("ibanIdClient3");
        $this->assertEquals("ibanIdClient3", $obj->getIbanIdClient3());
    }
}
