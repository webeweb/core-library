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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringXFerLstCabsTrait;

/**
 * X fer lst cabs trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringXFerLstCabsTraitTest extends AbstractTestCase {

    /**
     * Tests the setXFerLstCabs() method.
     *
     * @return void
     */
    public function testSetXFerLstCabs() {

        $obj = new TestStringXFerLstCabsTrait();

        $obj->setXFerLstCabs("xFerLstCabs");
        $this->assertEquals("xFerLstCabs", $obj->getXFerLstCabs());
    }
}
