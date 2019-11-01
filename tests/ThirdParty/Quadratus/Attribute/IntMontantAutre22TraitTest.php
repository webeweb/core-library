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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontantAutre22Trait;

/**
 * Montant autre22 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontantAutre22TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantAutre22() method.
     *
     * @return void
     */
    public function testSetMontantAutre22() {

        $obj = new TestIntMontantAutre22Trait();

        $obj->setMontantAutre22(10);
        $this->assertEquals(10, $obj->getMontantAutre22());
    }
}
