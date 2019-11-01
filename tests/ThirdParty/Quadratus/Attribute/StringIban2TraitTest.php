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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringIban2Trait;

/**
 * I b a n2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringIban2TraitTest extends AbstractTestCase {

    /**
     * Tests the setIban2() method.
     *
     * @return void
     */
    public function testSetIban2() {

        $obj = new TestStringIban2Trait();

        $obj->setIban2("iban2");
        $this->assertEquals("iban2", $obj->getIban2());
    }
}
