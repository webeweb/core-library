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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatExpBiens4Trait;

/**
 * Exp biens4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatExpBiens4TraitTest extends AbstractTestCase {

    /**
     * Tests the setExpBiens4() method.
     *
     * @return void
     */
    public function testSetExpBiens4() {

        $obj = new TestFloatExpBiens4Trait();

        $obj->setExpBiens4(10.092018);
        $this->assertEquals(10.092018, $obj->getExpBiens4());
    }
}
