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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatZ12TaxeTrait;

/**
 * z12 taxe trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatZ12TaxeTraitTest extends AbstractTestCase {

    /**
     * Tests the setZ12Taxe() method.
     *
     * @return void
     */
    public function testSetZ12Taxe() {

        $obj = new TestFloatZ12TaxeTrait();

        $obj->setZ12Taxe(10.092018);
        $this->assertEquals(10.092018, $obj->getZ12Taxe());
    }
}
