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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontant13Trait;

/**
 * Montant13 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontant13TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontant13() method.
     *
     * @return void
     */
    public function testSetMontant13() {

        $obj = new TestIntMontant13Trait();

        $obj->setMontant13(10);
        $this->assertEquals(10, $obj->getMontant13());
    }
}
