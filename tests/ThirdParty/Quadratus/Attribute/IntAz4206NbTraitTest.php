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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4206NbTrait;

/**
 * Az4206 nb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4206NbTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4206Nb() method.
     *
     * @return void
     */
    public function testSetAz4206Nb() {

        $obj = new TestIntAz4206NbTrait();

        $obj->setAz4206Nb(10);
        $this->assertEquals(10, $obj->getAz4206Nb());
    }
}
