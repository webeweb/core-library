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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraRib1Trait;

/**
 * T v a t l r a rib1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraRib1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraRib1() method.
     *
     * @return void
     */
    public function testSetTvatlraRib1() {

        $obj = new TestStringTvatlraRib1Trait();

        $obj->setTvatlraRib1("tvatlraRib1");
        $this->assertEquals("tvatlraRib1", $obj->getTvatlraRib1());
    }
}
