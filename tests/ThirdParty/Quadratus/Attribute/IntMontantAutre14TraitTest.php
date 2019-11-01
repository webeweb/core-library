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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontantAutre14Trait;

/**
 * Montant autre14 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontantAutre14TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantAutre14() method.
     *
     * @return void
     */
    public function testSetMontantAutre14() {

        $obj = new TestIntMontantAutre14Trait();

        $obj->setMontantAutre14(10);
        $this->assertEquals(10, $obj->getMontantAutre14());
    }
}
