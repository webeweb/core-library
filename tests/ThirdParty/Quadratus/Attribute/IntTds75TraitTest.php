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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntTds75Trait;

/**
 * T d s75 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntTds75TraitTest extends AbstractTestCase {

    /**
     * Tests the setTds75() method.
     *
     * @return void
     */
    public function testSetTds75() {

        $obj = new TestIntTds75Trait();

        $obj->setTds75(10);
        $this->assertEquals(10, $obj->getTds75());
    }
}
