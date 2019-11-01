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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringControleSaisieTpTrait;

/**
 * Controle saisie t p trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringControleSaisieTpTraitTest extends AbstractTestCase {

    /**
     * Tests the setControleSaisieTp() method.
     *
     * @return void
     */
    public function testSetControleSaisieTp() {

        $obj = new TestStringControleSaisieTpTrait();

        $obj->setControleSaisieTp("controleSaisieTp");
        $this->assertEquals("controleSaisieTp", $obj->getControleSaisieTp());
    }
}
