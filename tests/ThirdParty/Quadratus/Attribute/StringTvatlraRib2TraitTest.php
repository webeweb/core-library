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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTvatlraRib2Trait;

/**
 * T v a t l r a rib2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTvatlraRib2TraitTest extends AbstractTestCase {

    /**
     * Tests the setTvatlraRib2() method.
     *
     * @return void
     */
    public function testSetTvatlraRib2() {

        $obj = new TestStringTvatlraRib2Trait();

        $obj->setTvatlraRib2("tvatlraRib2");
        $this->assertEquals("tvatlraRib2", $obj->getTvatlraRib2());
    }
}
