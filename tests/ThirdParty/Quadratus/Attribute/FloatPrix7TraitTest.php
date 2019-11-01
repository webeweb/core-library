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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPrix7Trait;

/**
 * Prix7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPrix7TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrix7() method.
     *
     * @return void
     */
    public function testSetPrix7() {

        $obj = new TestFloatPrix7Trait();

        $obj->setPrix7(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix7());
    }
}
