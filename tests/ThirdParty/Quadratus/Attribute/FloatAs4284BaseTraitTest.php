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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatAs4284BaseTrait;

/**
 * As4284 base trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatAs4284BaseTraitTest extends AbstractTestCase {

    /**
     * Tests the setAs4284Base() method.
     *
     * @return void
     */
    public function testSetAs4284Base() {

        $obj = new TestFloatAs4284BaseTrait();

        $obj->setAs4284Base(10.092018);
        $this->assertEquals(10.092018, $obj->getAs4284Base());
    }
}
