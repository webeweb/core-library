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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGestionDucs1Trait;

/**
 * Gestion ducs1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGestionDucs1TraitTest extends AbstractTestCase {

    /**
     * Tests the setGestionDucs1() method.
     *
     * @return void
     */
    public function testSetGestionDucs1() {

        $obj = new TestStringGestionDucs1Trait();

        $obj->setGestionDucs1("gestionDucs1");
        $this->assertEquals("gestionDucs1", $obj->getGestionDucs1());
    }
}
