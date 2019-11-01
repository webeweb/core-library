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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringUniteRdvTrait;

/**
 * Unite r d v trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringUniteRdvTraitTest extends AbstractTestCase {

    /**
     * Tests the setUniteRdv() method.
     *
     * @return void
     */
    public function testSetUniteRdv() {

        $obj = new TestStringUniteRdvTrait();

        $obj->setUniteRdv("uniteRdv");
        $this->assertEquals("uniteRdv", $obj->getUniteRdv());
    }
}
