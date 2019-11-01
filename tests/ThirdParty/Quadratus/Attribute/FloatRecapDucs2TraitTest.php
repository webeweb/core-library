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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatRecapDucs2Trait;

/**
 * Recap ducs2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatRecapDucs2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRecapDucs2() method.
     *
     * @return void
     */
    public function testSetRecapDucs2() {

        $obj = new TestFloatRecapDucs2Trait();

        $obj->setRecapDucs2(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs2());
    }
}
