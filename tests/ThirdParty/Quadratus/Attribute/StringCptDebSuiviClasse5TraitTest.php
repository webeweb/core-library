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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDebSuiviClasse5Trait;

/**
 * Cpt deb suivi classe5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDebSuiviClasse5TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDebSuiviClasse5() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse5() {

        $obj = new TestStringCptDebSuiviClasse5Trait();

        $obj->setCptDebSuiviClasse5("cptDebSuiviClasse5");
        $this->assertEquals("cptDebSuiviClasse5", $obj->getCptDebSuiviClasse5());
    }
}
