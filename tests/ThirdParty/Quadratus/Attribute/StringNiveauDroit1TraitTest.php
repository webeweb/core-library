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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit1Trait;

/**
 * Niveau droit1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit1TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit1() method.
     *
     * @return void
     */
    public function testSetNiveauDroit1() {

        $obj = new TestStringNiveauDroit1Trait();

        $obj->setNiveauDroit1("niveauDroit1");
        $this->assertEquals("niveauDroit1", $obj->getNiveauDroit1());
    }
}
