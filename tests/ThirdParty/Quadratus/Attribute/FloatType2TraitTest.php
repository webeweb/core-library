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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatType2Trait;

/**
 * Type2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatType2TraitTest extends AbstractTestCase {

    /**
     * Tests the setType2() method.
     *
     * @return void
     */
    public function testSetType2() {

        $obj = new TestFloatType2Trait();

        $obj->setType2(10.092018);
        $this->assertEquals(10.092018, $obj->getType2());
    }
}
