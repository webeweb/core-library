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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatNbreHDimancheTrait;

/**
 * Nbre h dimanche trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatNbreHDimancheTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbreHDimanche() method.
     *
     * @return void
     */
    public function testSetNbreHDimanche() {

        $obj = new TestFloatNbreHDimancheTrait();

        $obj->setNbreHDimanche(10.092018);
        $this->assertEquals(10.092018, $obj->getNbreHDimanche());
    }
}
