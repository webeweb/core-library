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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCumProvCpTrait;

/**
 * Cum prov cp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCumProvCpTraitTest extends AbstractTestCase {

    /**
     * Tests the setCumProvCp() method.
     *
     * @return void
     */
    public function testSetCumProvCp() {

        $obj = new TestFloatCumProvCpTrait();

        $obj->setCumProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumProvCp());
    }
}
