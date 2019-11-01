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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTrsComment6Trait;

/**
 * T r s comment6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTrsComment6TraitTest extends AbstractTestCase {

    /**
     * Tests the setTrsComment6() method.
     *
     * @return void
     */
    public function testSetTrsComment6() {

        $obj = new TestStringTrsComment6Trait();

        $obj->setTrsComment6("trsComment6");
        $this->assertEquals("trsComment6", $obj->getTrsComment6());
    }
}
