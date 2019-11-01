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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloatMt10Trait;

/**
 * M t10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class FloatMt10TraitTest extends AbstractTestCase {

    /**
     * Tests the setMt10() method.
     *
     * @return void
     */
    public function testSetMt10() {

        $obj = new TestFloatMt10Trait();

        $obj->setMt10(10.092018);
        $this->assertEquals(10.092018, $obj->getMt10());
    }
}
