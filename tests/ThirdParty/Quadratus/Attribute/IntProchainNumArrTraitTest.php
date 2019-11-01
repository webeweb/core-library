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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntProchainNumArrTrait;

/**
 * Prochain num arr trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntProchainNumArrTraitTest extends AbstractTestCase {

    /**
     * Tests the setProchainNumArr() method.
     *
     * @return void
     */
    public function testSetProchainNumArr() {

        $obj = new TestIntProchainNumArrTrait();

        $obj->setProchainNumArr(10);
        $this->assertEquals(10, $obj->getProchainNumArr());
    }
}
