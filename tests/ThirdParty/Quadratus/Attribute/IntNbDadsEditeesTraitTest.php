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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntNbDadsEditeesTrait;

/**
 * Nb d a d s editees trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntNbDadsEditeesTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbDadsEditees() method.
     *
     * @return void
     */
    public function testSetNbDadsEditees() {

        $obj = new TestIntNbDadsEditeesTrait();

        $obj->setNbDadsEditees(10);
        $this->assertEquals(10, $obj->getNbDadsEditees());
    }
}
