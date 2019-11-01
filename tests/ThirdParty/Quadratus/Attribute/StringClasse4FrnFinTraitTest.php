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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringClasse4FrnFinTrait;

/**
 * Classe4 frn fin trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringClasse4FrnFinTraitTest extends AbstractTestCase {

    /**
     * Tests the setClasse4FrnFin() method.
     *
     * @return void
     */
    public function testSetClasse4FrnFin() {

        $obj = new TestStringClasse4FrnFinTrait();

        $obj->setClasse4FrnFin("classe4FrnFin");
        $this->assertEquals("classe4FrnFin", $obj->getClasse4FrnFin());
    }
}
