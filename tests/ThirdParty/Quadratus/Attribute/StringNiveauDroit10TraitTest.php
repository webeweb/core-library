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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit10Trait;

/**
 * Niveau droit10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit10TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit10() method.
     *
     * @return void
     */
    public function testSetNiveauDroit10() {

        $obj = new TestStringNiveauDroit10Trait();

        $obj->setNiveauDroit10("niveauDroit10");
        $this->assertEquals("niveauDroit10", $obj->getNiveauDroit10());
    }
}
