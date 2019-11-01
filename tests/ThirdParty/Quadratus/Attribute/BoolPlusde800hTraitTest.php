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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPlusde800hTrait;

/**
 * Plusde800h trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPlusde800hTraitTest extends AbstractTestCase {

    /**
     * Tests the setPlusde800h() method.
     *
     * @return void
     */
    public function testSetPlusde800h() {

        $obj = new TestBoolPlusde800hTrait();

        $obj->setPlusde800h(true);
        $this->assertEquals(true, $obj->getPlusde800h());
    }
}
