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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolPasActiveTrait;

/**
 * Pas active trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolPasActiveTraitTest extends AbstractTestCase {

    /**
     * Tests the setPasActive() method.
     *
     * @return void
     */
    public function testSetPasActive() {

        $obj = new TestBoolPasActiveTrait();

        $obj->setPasActive(true);
        $this->assertEquals(true, $obj->getPasActive());
    }
}
