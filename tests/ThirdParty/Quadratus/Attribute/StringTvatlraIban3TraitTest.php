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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraIban3Trait;

/**
 * T v a t l r a iban3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraIban3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraIban3() method.
     *
     * @return void
     */
    public function testSetTvatlraIban3() {

        $obj = new TestStringTvatlraIban3Trait();

        $obj->setTvatlraIban3("tvatlraIban3");
        $this->assertEquals("tvatlraIban3", $obj->getTvatlraIban3());
    }
}
