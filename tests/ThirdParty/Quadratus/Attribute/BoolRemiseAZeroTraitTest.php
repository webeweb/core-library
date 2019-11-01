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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRemiseAZeroTrait;

/**
 * Remise a zero trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRemiseAZeroTraitTest extends AbstractTestCase {

    /**
     * Tests the setRemiseAZero() method.
     *
     * @return void
     */
    public function testSetRemiseAZero() {

        $obj = new TestBoolRemiseAZeroTrait();

        $obj->setRemiseAZero(true);
        $this->assertEquals(true, $obj->getRemiseAZero());
    }
}
