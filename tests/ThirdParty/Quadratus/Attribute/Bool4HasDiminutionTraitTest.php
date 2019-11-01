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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBool4HasDiminutionTrait;

/**
 * 4 has diminution trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Bool4HasDiminutionTraitTest extends AbstractTestCase {

    /**
     * Tests the set4HasDiminution() method.
     *
     * @return void
     */
    public function testSet4HasDiminution() {

        $obj = new TestBool4HasDiminutionTrait();

        $obj->set4HasDiminution(true);
        $this->assertEquals(true, $obj->get4HasDiminution());
    }
}
