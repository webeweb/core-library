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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDebSuiviClasse3Trait;

/**
 * Cpt deb suivi classe3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDebSuiviClasse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDebSuiviClasse3() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse3() {

        $obj = new TestStringCptDebSuiviClasse3Trait();

        $obj->setCptDebSuiviClasse3("cptDebSuiviClasse3");
        $this->assertEquals("cptDebSuiviClasse3", $obj->getCptDebSuiviClasse3());
    }
}
