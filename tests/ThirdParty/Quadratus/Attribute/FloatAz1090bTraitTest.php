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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAz1090bTrait;

/**
 * Az1090b trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAz1090bTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz1090b() method.
     *
     * @return void
     */
    public function testSetAz1090b() {

        $obj = new TestFloatAz1090bTrait();

        $obj->setAz1090b(10.092018);
        $this->assertEquals(10.092018, $obj->getAz1090b());
    }
}
