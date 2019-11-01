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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringClasse4ClientFinTrait;

/**
 * Classe4 client fin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringClasse4ClientFinTraitTest extends AbstractTestCase {

    /**
     * Tests the setClasse4ClientFin() method.
     *
     * @return void
     */
    public function testSetClasse4ClientFin() {

        $obj = new TestStringClasse4ClientFinTrait();

        $obj->setClasse4ClientFin("classe4ClientFin");
        $this->assertEquals("classe4ClientFin", $obj->getClasse4ClientFin());
    }
}
