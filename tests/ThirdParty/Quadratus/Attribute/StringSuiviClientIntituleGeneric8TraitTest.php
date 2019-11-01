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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric8Trait;

/**
 * Suivi client intitule generic8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric8TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric8() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric8() {

        $obj = new TestStringSuiviClientIntituleGeneric8Trait();

        $obj->setSuiviClientIntituleGeneric8("suiviClientIntituleGeneric8");
        $this->assertEquals("suiviClientIntituleGeneric8", $obj->getSuiviClientIntituleGeneric8());
    }
}
