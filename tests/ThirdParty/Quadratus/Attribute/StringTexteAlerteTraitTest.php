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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringTexteAlerteTrait;

/**
 * Texte alerte trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringTexteAlerteTraitTest extends AbstractTestCase {

    /**
     * Tests the setTexteAlerte() method.
     *
     * @return void
     */
    public function testSetTexteAlerte() {

        $obj = new TestStringTexteAlerteTrait();

        $obj->setTexteAlerte("texteAlerte");
        $this->assertEquals("texteAlerte", $obj->getTexteAlerte());
    }
}
