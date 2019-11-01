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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringFactBtqTrait;

/**
 * Fact_ b t q trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringFactBtqTraitTest extends AbstractTestCase {

    /**
     * Tests the setFactBtq() method.
     *
     * @return void
     */
    public function testSetFactBtq() {

        $obj = new TestStringFactBtqTrait();

        $obj->setFactBtq("factBtq");
        $this->assertEquals("factBtq", $obj->getFactBtq());
    }
}
