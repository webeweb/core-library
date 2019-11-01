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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringSuiviClientIntituleGeneric10Trait;

/**
 * Suivi client intitule generic10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringSuiviClientIntituleGeneric10TraitTest extends AbstractTestCase {

    /**
     * Tests the setSuiviClientIntituleGeneric10() method.
     *
     * @return void
     */
    public function testSetSuiviClientIntituleGeneric10() {

        $obj = new TestStringSuiviClientIntituleGeneric10Trait();

        $obj->setSuiviClientIntituleGeneric10("suiviClientIntituleGeneric10");
        $this->assertEquals("suiviClientIntituleGeneric10", $obj->getSuiviClientIntituleGeneric10());
    }
}
