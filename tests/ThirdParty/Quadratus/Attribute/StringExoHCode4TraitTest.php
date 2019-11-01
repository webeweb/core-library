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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringExoHCode4Trait;

/**
 * Exo h_ code4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringExoHCode4TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHCode4() method.
     *
     * @return void
     */
    public function testSetExoHCode4() {

        $obj = new TestStringExoHCode4Trait();

        $obj->setExoHCode4("exoHCode4");
        $this->assertEquals("exoHCode4", $obj->getExoHCode4());
    }
}
