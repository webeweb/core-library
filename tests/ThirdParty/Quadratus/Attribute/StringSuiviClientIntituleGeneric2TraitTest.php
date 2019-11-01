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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric2Trait;

/**
 * Suivi client intitule generic2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric2TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric2() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric2() {

        $obj = new TestStringSuiviClientIntituleGeneric2Trait();

        $obj->setSuiviClientIntituleGeneric2("suiviClientIntituleGeneric2");
        $this->assertEquals("suiviClientIntituleGeneric2", $obj->getSuiviClientIntituleGeneric2());
    }
}
