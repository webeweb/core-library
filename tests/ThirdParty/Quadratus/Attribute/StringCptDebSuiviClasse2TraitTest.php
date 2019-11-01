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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDebSuiviClasse2Trait;

/**
 * Cpt deb suivi classe2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDebSuiviClasse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDebSuiviClasse2() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse2() {

        $obj = new TestStringCptDebSuiviClasse2Trait();

        $obj->setCptDebSuiviClasse2("cptDebSuiviClasse2");
        $this->assertEquals("cptDebSuiviClasse2", $obj->getCptDebSuiviClasse2());
    }
}
