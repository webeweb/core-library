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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPartSalSeuleTrait;

/**
 * Part sal seule trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPartSalSeuleTraitTest extends AbstractTestCase {

    /**
     * Tests the setPartSalSeule() method.
     *
     * @return void
     */
    public function testSetPartSalSeule() {

        $obj = new TestBoolPartSalSeuleTrait();

        $obj->setPartSalSeule(true);
        $this->assertEquals(true, $obj->getPartSalSeule());
    }
}
