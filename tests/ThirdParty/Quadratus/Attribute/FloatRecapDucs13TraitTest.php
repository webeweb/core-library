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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatRecapDucs13Trait;

/**
 * Recap ducs13 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatRecapDucs13TraitTest extends AbstractTestCase {

    /**
     * Tests the setRecapDucs13() method.
     *
     * @return void
     */
    public function testSetRecapDucs13() {

        $obj = new TestFloatRecapDucs13Trait();

        $obj->setRecapDucs13(10.092018);
        $this->assertEquals(10.092018, $obj->getRecapDucs13());
    }
}
