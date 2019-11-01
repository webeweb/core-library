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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringExoHCode5Trait;

/**
 * Exo h_ code5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringExoHCode5TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHCode5() method.
     *
     * @return void
     */
    public function testSetExoHCode5() {

        $obj = new TestStringExoHCode5Trait();

        $obj->setExoHCode5("exoHCode5");
        $this->assertEquals("exoHCode5", $obj->getExoHCode5());
    }
}
