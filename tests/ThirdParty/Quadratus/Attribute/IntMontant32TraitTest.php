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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontant32Trait;

/**
 * Montant32 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontant32TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontant32() method.
     *
     * @return void
     */
    public function testSetMontant32() {

        $obj = new TestIntMontant32Trait();

        $obj->setMontant32(10);
        $this->assertEquals(10, $obj->getMontant32());
    }
}
