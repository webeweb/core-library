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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCodeTvaVente2Trait;

/**
 * Code tva vente2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCodeTvaVente2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCodeTvaVente2() method.
     *
     * @return void
     */
    public function testSetCodeTvaVente2() {

        $obj = new TestStringCodeTvaVente2Trait();

        $obj->setCodeTvaVente2("codeTvaVente2");
        $this->assertEquals("codeTvaVente2", $obj->getCodeTvaVente2());
    }
}
