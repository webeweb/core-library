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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolLibellePlusDe30CaracTrait;

/**
 * Libelle plus de30 carac trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolLibellePlusDe30CaracTraitTest extends AbstractTestCase {

    /**
     * Tests the setLibellePlusDe30Carac() method.
     *
     * @return void
     */
    public function testSetLibellePlusDe30Carac() {

        $obj = new TestBoolLibellePlusDe30CaracTrait();

        $obj->setLibellePlusDe30Carac(true);
        $this->assertEquals(true, $obj->getLibellePlusDe30Carac());
    }
}
