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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraBic2Trait;

/**
 * T v a t l r a bic2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraBic2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraBic2() method.
     *
     * @return void
     */
    public function testSetTvatlraBic2() {

        $obj = new TestStringTvatlraBic2Trait();

        $obj->setTvatlraBic2("tvatlraBic2");
        $this->assertEquals("tvatlraBic2", $obj->getTvatlraBic2());
    }
}
