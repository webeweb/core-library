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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatEpargneSalMnt3Trait;

/**
 * Epargne sal_ mnt3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatEpargneSalMnt3TraitTest extends AbstractTestCase {

    /**
     * Tests the setEpargneSalMnt3() method.
     *
     * @return void
     */
    public function testSetEpargneSalMnt3() {

        $obj = new TestFloatEpargneSalMnt3Trait();

        $obj->setEpargneSalMnt3(10.092018);
        $this->assertEquals(10.092018, $obj->getEpargneSalMnt3());
    }
}
