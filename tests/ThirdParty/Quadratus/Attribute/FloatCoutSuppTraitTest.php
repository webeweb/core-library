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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatCoutSuppTrait;

/**
 * Cout supp trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatCoutSuppTraitTest extends AbstractTestCase {

    /**
     * Tests the setCoutSupp() method.
     *
     * @return void
     */
    public function testSetCoutSupp() {

        $obj = new TestFloatCoutSuppTrait();

        $obj->setCoutSupp(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutSupp());
    }
}
