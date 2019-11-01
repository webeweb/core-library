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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatEpargneSalMnt1Trait;

/**
 * Epargne sal_ mnt1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatEpargneSalMnt1TraitTest extends AbstractTestCase {

    /**
     * Tests the setEpargneSalMnt1() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt1() {

        $obj = new TestFloatEpargneSalMnt1Trait();

        $obj->setEpargneSalMnt1(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt1());
    }
}
