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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolFlgAnN1Trait;

/**
 * Flg an n1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolFlgAnN1TraitTest extends AbstractTestCase {

    /**
     * Tests the setFlgAnN1() method.
     *
     * @return void
     */
    public function testSetFlgAnN1() {

        $obj = new TestBoolFlgAnN1Trait();

        $obj->setFlgAnN1(true);
        $this->assertEquals(true, $obj->getFlgAnN1());
    }
}
