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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNumeroEmploye2Trait;

/**
 * Numero employe2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNumeroEmploye2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNumeroEmploye2() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye2() {

        $obj = new TestStringNumeroEmploye2Trait();

        $obj->setNumeroEmploye2("numeroEmploye2");
        $this->assertEquals("numeroEmploye2", $obj->getNumeroEmploye2());
    }
}
