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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatEpargneSalMnt4Trait;

/**
 * Epargne sal_ mnt4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatEpargneSalMnt4TraitTest extends AbstractTestCase {

    /**
     * Tests the setEpargneSalMnt4() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt4() {

        $obj = new TestFloatEpargneSalMnt4Trait();

        $obj->setEpargneSalMnt4(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt4());
    }
}
