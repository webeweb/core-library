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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraIban2Trait;

/**
 * T v a t l r a iban2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraIban2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraIban2() method.
     *
     * @return void
     */
    public function testSetTvatlraIban2() {

        $obj = new TestStringTvatlraIban2Trait();

        $obj->setTvatlraIban2("tvatlraIban2");
        $this->assertEquals("tvatlraIban2", $obj->getTvatlraIban2());
    }
}
