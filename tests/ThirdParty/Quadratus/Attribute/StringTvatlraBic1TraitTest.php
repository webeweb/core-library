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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraBic1Trait;

/**
 * T v a t l r a bic1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraBic1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraBic1() method.
     *
     * @return void
     */
    public function testSetTvatlraBic1() {

        $obj = new TestStringTvatlraBic1Trait();

        $obj->setTvatlraBic1("tvatlraBic1");
        $this->assertEquals("tvatlraBic1", $obj->getTvatlraBic1());
    }
}
