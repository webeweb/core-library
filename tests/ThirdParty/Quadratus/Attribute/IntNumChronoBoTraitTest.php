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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNumChronoBoTrait;

/**
 * Num chrono b o trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNumChronoBoTraitTest extends AbstractTestCase {

    /**
     * Tests the setNumChronoBo() method.
     *
     * @return void
     */
    public function testSetNumChronoBo() {

        $obj = new TestIntNumChronoBoTrait();

        $obj->setNumChronoBo(10);
        $this->assertEquals(10, $obj->getNumChronoBo());
    }
}
