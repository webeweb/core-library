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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMt24Trait;

/**
 * M t24 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMt24TraitTest extends AbstractTestCase {

    /**
     * Tests the setMt24() method.
     *
     * @return void
     */
    public function testSetMt24() {

        $obj = new TestFloatMt24Trait();

        $obj->setMt24(10.092018);
        $this->assertEquals(10.092018, $obj->getMt24());
    }
}
