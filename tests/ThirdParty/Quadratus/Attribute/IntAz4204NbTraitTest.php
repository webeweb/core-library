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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntAz4204NbTrait;

/**
 * Az4204 nb trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntAz4204NbTraitTest extends AbstractTestCase {

    /**
     * Tests the setAz4204Nb() method.
     *
     * @return void
     */
    public function testSetAz4204Nb() {

        $obj = new TestIntAz4204NbTrait();

        $obj->setAz4204Nb(10);
        $this->assertEquals(10, $obj->getAz4204Nb());
    }
}
