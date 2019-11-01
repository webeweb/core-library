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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptDebSuiviClasse1Trait;

/**
 * Cpt deb suivi classe1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptDebSuiviClasse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptDebSuiviClasse1() method.
     *
     * @return void
     */
    public function testSetCptDebSuiviClasse1() {

        $obj = new TestStringCptDebSuiviClasse1Trait();

        $obj->setCptDebSuiviClasse1("cptDebSuiviClasse1");
        $this->assertEquals("cptDebSuiviClasse1", $obj->getCptDebSuiviClasse1());
    }
}
