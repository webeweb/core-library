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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMajJfNormalType2Trait;

/**
 * Maj j f normal type2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMajJfNormalType2TraitTest extends AbstractTestCase {

    /**
     * Tests the setMajJfNormalType2() method.
     *
     * @return void
     */
    public function testSetMajJfNormalType2() {

        $obj = new TestFloatMajJfNormalType2Trait();

        $obj->setMajJfNormalType2(10.092018);
        $this->assertEquals(10.092018, $obj->getMajJfNormalType2());
    }
}
