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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringVmpCodeJrnPmvTrait;

/**
 * V m p code jrn p m v trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringVmpCodeJrnPmvTraitTest extends AbstractTestCase {

    /**
     * Tests the setVmpCodeJrnPmv() method.
     *
     * @return void
     */
    public function testSetVmpCodeJrnPmv() {

        $obj = new TestStringVmpCodeJrnPmvTrait();

        $obj->setVmpCodeJrnPmv("vmpCodeJrnPmv");
        $this->assertEquals("vmpCodeJrnPmv", $obj->getVmpCodeJrnPmv());
    }
}
