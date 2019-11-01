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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDebSuiviClasse9Trait;

/**
 * Cpt deb suivi classe9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDebSuiviClasse9TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDebSuiviClasse9() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse9() {

        $obj = new TestStringCptDebSuiviClasse9Trait();

        $obj->setCptDebSuiviClasse9("cptDebSuiviClasse9");
        $this->assertEquals("cptDebSuiviClasse9", $obj->getCptDebSuiviClasse9());
    }
}
