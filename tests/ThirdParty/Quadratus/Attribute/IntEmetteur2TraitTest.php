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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntEmetteur2Trait;

/**
 * Emetteur2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntEmetteur2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEmetteur2() method.
     *
     * @return void
     */
    public function testSetEmetteur2() {

        $obj = new TestIntEmetteur2Trait();

        $obj->setEmetteur2(10);
        $this->assertEquals(10, $obj->getEmetteur2());
    }
}
