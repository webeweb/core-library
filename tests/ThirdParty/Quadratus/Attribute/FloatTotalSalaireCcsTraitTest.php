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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTotalSalaireCcsTrait;

/**
 * Total salaire c c s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTotalSalaireCcsTraitTest extends AbstractTestCase {

    /**
     * Tests the setTotalSalaireCcs() method.
     *
     * @return void
     */
    public function testSetTotalSalaireCcs() {

        $obj = new TestFloatTotalSalaireCcsTrait();

        $obj->setTotalSalaireCcs(10.092018);
        $this->assertEquals(10.092018, $obj->getTotalSalaireCcs());
    }
}
