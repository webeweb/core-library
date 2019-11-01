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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDebSuiviClasse4Trait;

/**
 * Cpt deb suivi classe4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDebSuiviClasse4TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDebSuiviClasse4() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse4() {

        $obj = new TestStringCptDebSuiviClasse4Trait();

        $obj->setCptDebSuiviClasse4("cptDebSuiviClasse4");
        $this->assertEquals("cptDebSuiviClasse4", $obj->getCptDebSuiviClasse4());
    }
}
