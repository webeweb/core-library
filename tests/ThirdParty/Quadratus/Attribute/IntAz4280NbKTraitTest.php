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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4280NbKTrait;

/**
 * Az4280 nb k trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4280NbKTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4280NbK() method.
     *
     * @return void
     */
    public function testSetAz4280NbK() {

        $obj = new TestIntAz4280NbKTrait();

        $obj->setAz4280NbK(10);
        $this->assertEquals(10, $obj->getAz4280NbK());
    }
}
