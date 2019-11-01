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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBase15pcentTrait;

/**
 * Base15pcent trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBase15pcentTraitTest extends AbstractTestCase {

    /**
     * Tests the setBase15pcent() method.
     *
     * @return void
     */
    public function testSetBase15pcent() {

        $obj = new TestFloatBase15pcentTrait();

        $obj->setBase15pcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBase15pcent());
    }
}
