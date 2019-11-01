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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringGestionRttTrait;

/**
 * Gestion r t t trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringGestionRttTraitTest extends AbstractTestCase {

    /**
     * Tests the setGestionRtt() method.
     *
     * @return void
     */
    public function testSetGestionRtt() {

        $obj = new TestStringGestionRttTrait();

        $obj->setGestionRtt("gestionRtt");
        $this->assertEquals("gestionRtt", $obj->getGestionRtt());
    }
}
