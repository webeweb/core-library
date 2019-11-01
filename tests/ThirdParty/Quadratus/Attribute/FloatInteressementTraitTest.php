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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatInteressementTrait;

/**
 * Interessement trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatInteressementTraitTest extends AbstractTestCase {

    /**
     * Tests the setInteressement() method.
     *
     * @return void
     */
    public function testSetInteressement() {

        $obj = new TestFloatInteressementTrait();

        $obj->setInteressement(10.092018);
        $this->assertEquals(10.092018, $obj->getInteressement());
    }
}
