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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTypeDomiciliationBanque1Trait;

/**
 * Type domiciliation banque1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTypeDomiciliationBanque1TraitTest extends AbstractTestCase {

    /**
     * Tests the setTypeDomiciliationBanque1() method.
     *
     * @return void
     */
    public function testSetTypeDomiciliationBanque1() {

        $obj = new TestStringTypeDomiciliationBanque1Trait();

        $obj->setTypeDomiciliationBanque1("typeDomiciliationBanque1");
        $this->assertEquals("typeDomiciliationBanque1", $obj->getTypeDomiciliationBanque1());
    }
}
