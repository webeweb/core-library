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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatBaseAfTrait;

/**
 * Base a f trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatBaseAfTraitTest extends AbstractTestCase {

    /**
     * Tests the setBaseAf() method.
     *
     * @return void
     */
    public function testSetBaseAf() {

        $obj = new TestFloatBaseAfTrait();

        $obj->setBaseAf(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseAf());
    }
}
