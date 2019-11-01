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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric4Trait;

/**
 * Suivi client intitule generic4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric4TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric4() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric4() {

        $obj = new TestStringSuiviClientIntituleGeneric4Trait();

        $obj->setSuiviClientIntituleGeneric4("suiviClientIntituleGeneric4");
        $this->assertEquals("suiviClientIntituleGeneric4", $obj->getSuiviClientIntituleGeneric4());
    }
}
