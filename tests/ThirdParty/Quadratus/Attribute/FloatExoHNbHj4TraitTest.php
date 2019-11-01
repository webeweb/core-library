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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExoHNbHj4Trait;

/**
 * Exo h_ nb h j4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExoHNbHj4TraitTest extends AbstractTestCase {

    /**
     * Tests the setExoHNbHj4() method.
     *
     * @return void
     */
    public function testSetExoHNbHj4() {

        $obj = new TestFloatExoHNbHj4Trait();

        $obj->setExoHNbHj4(10.092018);
        $this->assertEquals(10.092018, $obj->getExoHNbHj4());
    }
}
