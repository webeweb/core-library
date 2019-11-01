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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNb30RenouvCddTrait;

/**
 * Nb30 renouv c d d trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNb30RenouvCddTraitTest extends AbstractTestCase {

    /**
     * Tests the setNb30RenouvCdd() method.
     *
     * @return void
     */
    public function testSetNb30RenouvCdd() {

        $obj = new TestIntNb30RenouvCddTrait();

        $obj->setNb30RenouvCdd(10);
        $this->assertEquals(10, $obj->getNb30RenouvCdd());
    }
}
