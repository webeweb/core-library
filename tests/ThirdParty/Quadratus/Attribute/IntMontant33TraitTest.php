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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontant33Trait;

/**
 * Montant33 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontant33TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontant33() method.
     *
     * @return void
     */
    public function testSetMontant33() {

        $obj = new TestIntMontant33Trait();

        $obj->setMontant33(10);
        $this->assertEquals(10, $obj->getMontant33());
    }
}
