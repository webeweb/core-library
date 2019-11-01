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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCptFinSuiviClasse1Trait;

/**
 * Cpt fin suivi classe1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCptFinSuiviClasse1TraitTest extends AbstractTestCase {

    /**
     * Tests the setCptFinSuiviClasse1() method.
     *
     * @return void
     */
    public function testSetCptFinSuiviClasse1() {

        $obj = new TestStringCptFinSuiviClasse1Trait();

        $obj->setCptFinSuiviClasse1("cptFinSuiviClasse1");
        $this->assertEquals("cptFinSuiviClasse1", $obj->getCptFinSuiviClasse1());
    }
}
