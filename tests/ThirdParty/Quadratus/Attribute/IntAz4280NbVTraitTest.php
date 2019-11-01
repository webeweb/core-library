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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4280NbVTrait;

/**
 * Az4280 nb v trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4280NbVTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4280NbV() method.
     *
     * @return void
     */
    public function testSetAz4280NbV() {

        $obj = new TestIntAz4280NbVTrait();

        $obj->setAz4280NbV(10);
        $this->assertEquals(10, $obj->getAz4280NbV());
    }
}
