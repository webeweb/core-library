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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolHandicapeTrait;

/**
 * Handicape trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolHandicapeTraitTest extends AbstractTestCase {

    /**
     * Tests the setHandicape() method.
     *
     * @return void
     */
    public function testSetHandicape() {

        $obj = new TestBoolHandicapeTrait();

        $obj->setHandicape(true);
        $this->assertEquals(true, $obj->getHandicape());
    }
}
