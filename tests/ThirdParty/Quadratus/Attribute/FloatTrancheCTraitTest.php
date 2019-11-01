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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTrancheCTrait;

/**
 * Tranche c trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTrancheCTraitTest extends AbstractTestCase {

    /**
     * Tests the setTrancheC() method.
     *
     * @return void
     */
    public function testSetTrancheC() {

        $obj = new TestFloatTrancheCTrait();

        $obj->setTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheC());
    }
}
