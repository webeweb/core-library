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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz1030bTrait;

/**
 * Az1030b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz1030bTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz1030b() method.
     *
     * @return void
     */
    public function testSetAz1030b() {

        $obj = new TestFloatAz1030bTrait();

        $obj->setAz1030b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1030b());
    }
}
