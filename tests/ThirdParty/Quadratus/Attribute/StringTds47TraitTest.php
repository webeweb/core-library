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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTds47Trait;

/**
 * T d s47 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTds47TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds47() method.
     *
     * @return void
     */
    public function testSetTds47() {

        $obj = new TestStringTds47Trait();

        $obj->setTds47("tds47");
        $this->assertEquals("tds47", $obj->getTds47());
    }
}
