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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExoHNbHj5Trait;

/**
 * Exo h_ nb h j5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExoHNbHj5TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHNbHj5() method.
     *
     * @return void
     */
    public function testSetExoHNbHj5() {

        $obj = new TestFloatExoHNbHj5Trait();

        $obj->setExoHNbHj5(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj5());
    }
}
