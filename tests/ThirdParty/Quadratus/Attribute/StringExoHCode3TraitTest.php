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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringExoHCode3Trait;

/**
 * Exo h_ code3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringExoHCode3TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHCode3() method.
     *
     * @return void
     */
    public function testSetExoHCode3() {

        $obj = new TestStringExoHCode3Trait();

        $obj->setExoHCode3("exoHCode3");
        $this->assertEquals("exoHCode3", $obj->getExoHCode3());
    }
}
