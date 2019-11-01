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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestIntMontantAutre21Trait;

/**
 * Montant autre21 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class IntMontantAutre21TraitTest extends AbstractTestCase {

    /**
     * Tests the setMontantAutre21() method.
     *
     * @return void
     */
    public function testSetMontantAutre21() {

        $obj = new TestIntMontantAutre21Trait();

        $obj->setMontantAutre21(10);
        $this->assertEquals(10, $obj->getMontantAutre21());
    }
}
