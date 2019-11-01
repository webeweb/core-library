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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraBic3Trait;

/**
 * T v a t l r a bic3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraBic3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraBic3() method.
     *
     * @return void
     */
    public function testSetTvatlraBic3() {

        $obj = new TestStringTvatlraBic3Trait();

        $obj->setTvatlraBic3("tvatlraBic3");
        $this->assertEquals("tvatlraBic3", $obj->getTvatlraBic3());
    }
}
