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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFlgAnN2Trait;

/**
 * Flg an n2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFlgAnN2TraitTest extends AbstractTestCase {

    /**
     * Tests the setFlgAnN2() method.
     *
     * @return void
     */
    public function testSetFlgAnN2() {

        $obj = new TestBoolFlgAnN2Trait();

        $obj->setFlgAnN2(true);
        $this->assertEquals(true, $obj->getFlgAnN2());
    }
}
