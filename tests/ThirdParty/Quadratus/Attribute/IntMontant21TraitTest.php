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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontant21Trait;

/**
 * Montant21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontant21TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontant21() method.
     *
     * @return void
     */
    public function testSetMontant21() {

        $obj = new TestIntMontant21Trait();

        $obj->setMontant21(10);
        $this->assertEquals(10, $obj->getMontant21());
    }
}
