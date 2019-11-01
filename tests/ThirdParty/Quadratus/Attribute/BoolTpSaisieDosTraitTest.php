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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestBoolTpSaisieDosTrait;

/**
 * T p saisie d o s trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class BoolTpSaisieDosTraitTest extends AbstractTestCase {

    /**
     * Tests the setTpSaisieDos() method.
     *
     * @return void
     */
    public function testSetTpSaisieDos() {

        $obj = new TestBoolTpSaisieDosTrait();

        $obj->setTpSaisieDos(true);
        $this->assertEquals(true, $obj->getTpSaisieDos());
    }
}
