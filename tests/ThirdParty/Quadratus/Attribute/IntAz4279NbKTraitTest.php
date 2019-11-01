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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4279NbKTrait;

/**
 * Az4279 nb k trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4279NbKTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4279NbK() method.
     *
     * @return void
     */
    public function testSetAz4279NbK() {

        $obj = new TestIntAz4279NbKTrait();

        $obj->setAz4279NbK(10);
        $this->assertEquals(10, $obj->getAz4279NbK());
    }
}
