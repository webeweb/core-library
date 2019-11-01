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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestFloat21AcompteTot1Trait;

/**
 * 21 acompte tot1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class Float21AcompteTot1TraitTest extends AbstractTestCase {

    /**
     * Tests the set21AcompteTot1() method.
     *
     * @return void
     */
    public function testSet21AcompteTot1() {

        $obj = new TestFloat21AcompteTot1Trait();

        $obj->set21AcompteTot1(10.092018);
        $this->assertEquals(10.092018, $obj->get21AcompteTot1());
    }
}
