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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit6Trait;

/**
 * Niveau droit6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit6TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit6() method.
     *
     * @return void
     */
    public function testSetNiveauDroit6() {

        $obj = new TestStringNiveauDroit6Trait();

        $obj->setNiveauDroit6("niveauDroit6");
        $this->assertEquals("niveauDroit6", $obj->getNiveauDroit6());
    }
}
