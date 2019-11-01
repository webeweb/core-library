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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric3Trait;

/**
 * Suivi client intitule generic3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric3TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric3() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric3() {

        $obj = new TestStringSuiviClientIntituleGeneric3Trait();

        $obj->setSuiviClientIntituleGeneric3("suiviClientIntituleGeneric3");
        $this->assertEquals("suiviClientIntituleGeneric3", $obj->getSuiviClientIntituleGeneric3());
    }
}
