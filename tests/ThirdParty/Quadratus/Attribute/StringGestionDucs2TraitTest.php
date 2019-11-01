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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGestionDucs2Trait;

/**
 * Gestion ducs2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGestionDucs2TraitTest extends AbstractTestCase {

    /**
     * Tests the setGestionDucs2() method.
     *
     * @return void
     */
    public function testSetGestionDucs2() {

        $obj = new TestStringGestionDucs2Trait();

        $obj->setGestionDucs2("gestionDucs2");
        $this->assertEquals("gestionDucs2", $obj->getGestionDucs2());
    }
}
