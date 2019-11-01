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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat20AcompteTa1Trait;

/**
 * 20 acompte t a1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float20AcompteTa1TraitTest extends AbstractTestCase {

    /**
     * Tests the set20AcompteTa1() method.
     *
     * @return void
     */
    public function testSet20AcompteTa1() {

        $obj = new TestFloat20AcompteTa1Trait();

        $obj->set20AcompteTa1(10.092018);
        $this->assertEquals(10.092018, $obj->get20AcompteTa1());
    }
}
