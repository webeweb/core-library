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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringeWsCabinetTrait;

/**
 * e w s cabinet trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringeWsCabinetTraitTest extends AbstractTestCase {

    /**
     * Tests the seteWsCabinet() method.
     *
     * @return void
     */
    public function testSeteWsCabinet() {

        $obj = new TestStringeWsCabinetTrait();

        $obj->seteWsCabinet("eWsCabinet");
        $this->assertEquals("eWsCabinet", $obj->geteWsCabinet());
    }
}
