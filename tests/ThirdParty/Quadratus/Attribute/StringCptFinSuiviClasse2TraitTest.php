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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse2Trait;

/**
 * Cpt fin suivi classe2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse2() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse2() {

        $obj = new TestStringCptFinSuiviClasse2Trait();

        $obj->setCptFinSuiviClasse2("cptFinSuiviClasse2");
        $this->assertEquals("cptFinSuiviClasse2", $obj->getCptFinSuiviClasse2());
    }
}
