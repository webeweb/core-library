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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatTaux3Trait;

/**
 * Taux3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatTaux3TraitTest extends AbstractTestCase {

    /**
     * Tests the setTaux3() method.
     *
     * @return void
     */
    public function testSetTaux3() {

        $obj = new TestFloatTaux3Trait();

        $obj->setTaux3(10.092018);
        $this->assertEquals(10.092018, $obj->getTaux3());
    }
}
