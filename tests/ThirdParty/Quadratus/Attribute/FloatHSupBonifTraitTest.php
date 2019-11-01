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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatHSupBonifTrait;

/**
 * H sup bonif trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatHSupBonifTraitTest extends AbstractTestCase {

    /**
     * Tests the setHSupBonif() method.
     *
     * @return void
     */
    public function testSetHSupBonif() {

        $obj = new TestFloatHSupBonifTrait();

        $obj->setHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getHSupBonif());
    }
}
