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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit5Trait;

/**
 * Niveau droit5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit5TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit5() method.
     *
     * @return void
     */
    public function testSetNiveauDroit5() {

        $obj = new TestStringNiveauDroit5Trait();

        $obj->setNiveauDroit5("niveauDroit5");
        $this->assertEquals("niveauDroit5", $obj->getNiveauDroit5());
    }
}
