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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatIntracom3Trait;

/**
 * Intracom3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatIntracom3TraitTest extends AbstractTestCase {

    /**
     * Tests the setIntracom3() method.
     *
     * @return void
     */
    public function testSetIntracom3() {

        $obj = new TestFloatIntracom3Trait();

        $obj->setIntracom3(10.092018);
        $this->assertEquals(10.092018, $obj->getIntracom3());
    }
}
