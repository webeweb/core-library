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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringAz38CodeTrait;

/**
 * Az38 code trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringAz38CodeTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz38Code() method.
     *
     * @return void
     */
    public function testSetAz38Code() {

        $obj = new TestStringAz38CodeTrait();

        $obj->setAz38Code("az38Code");
        $this->assertEquals("az38Code", $obj->getAz38Code());
    }
}
