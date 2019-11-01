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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4207NbKTrait;

/**
 * Az4207 nb k trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4207NbKTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4207NbK() method.
     *
     * @return void
     */
    public function testSetAz4207NbK() {

        $obj = new TestIntAz4207NbKTrait();

        $obj->setAz4207NbK(10);
        $this->assertEquals(10, $obj->getAz4207NbK());
    }
}
