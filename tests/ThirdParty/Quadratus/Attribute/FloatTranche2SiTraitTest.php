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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTranche2SiTrait;

/**
 * Tranche2 s i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTranche2SiTraitTest extends AbstractTestCase {

    /**
     * Tests the setTranche2Si() method.
     *
     * @return void
     */
    public function testSetTranche2Si() {

        $obj = new TestFloatTranche2SiTrait();

        $obj->setTranche2Si(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2Si());
    }
}
