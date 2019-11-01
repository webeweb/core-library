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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbhDiFPrisWTrait;

/**
 * Nbh di f pris w trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbhDiFPrisWTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbhDiFPrisW() method.
     *
     * @return void
     */
    public function testSetNbhDiFPrisW() {

        $obj = new TestFloatNbhDiFPrisWTrait();

        $obj->setNbhDiFPrisW(10.092018);
        $this->assertEquals(10.092018, $obj->getNbhDiFPrisW());
    }
}
