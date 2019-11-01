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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraIban1Trait;

/**
 * T v a t l r a iban1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraIban1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraIban1() method.
     *
     * @return void
     */
    public function testSetTvatlraIban1() {

        $obj = new TestStringTvatlraIban1Trait();

        $obj->setTvatlraIban1("tvatlraIban1");
        $this->assertEquals("tvatlraIban1", $obj->getTvatlraIban1());
    }
}
