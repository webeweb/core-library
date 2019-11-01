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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatPrix5Trait;

/**
 * Prix5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatPrix5TraitTest extends AbstractTestCase {

    /**
     * Tests the setPrix5() method.
     *
     * @return void
     */
    public function testSetPrix5() {

        $obj = new TestFloatPrix5Trait();

        $obj->setPrix5(10.092018);
        $this->assertEquals(10.092018, $obj->getPrix5());
    }
}
