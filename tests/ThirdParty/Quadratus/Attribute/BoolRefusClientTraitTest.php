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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolRefusClientTrait;

/**
 * Refus client trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolRefusClientTraitTest extends AbstractTestCase {

    /**
     * Tests the setRefusClient() method.
     *
     * @return void
     */
    public function testSetRefusClient() {

        $obj = new TestBoolRefusClientTrait();

        $obj->setRefusClient(true);
        $this->assertEquals(true, $obj->getRefusClient());
    }
}
