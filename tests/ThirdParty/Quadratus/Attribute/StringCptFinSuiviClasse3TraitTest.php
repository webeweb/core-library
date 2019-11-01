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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse3Trait;

/**
 * Cpt fin suivi classe3 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse3TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse3() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse3() {

        $obj = new TestStringCptFinSuiviClasse3Trait();

        $obj->setCptFinSuiviClasse3("cptFinSuiviClasse3");
        $this->assertEquals("cptFinSuiviClasse3", $obj->getCptFinSuiviClasse3());
    }
}
