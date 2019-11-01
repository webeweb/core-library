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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit2Trait;

/**
 * Niveau droit2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit2() method.
     *
     * @return void
     */
    public function testSetNiveauDroit2() {

        $obj = new TestStringNiveauDroit2Trait();

        $obj->setNiveauDroit2("niveauDroit2");
        $this->assertEquals("niveauDroit2", $obj->getNiveauDroit2());
    }
}
