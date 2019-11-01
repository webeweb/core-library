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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit7Trait;

/**
 * Niveau droit7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit7TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit7() method.
     *
     * @return void
     */
    public function testSetNiveauDroit7() {

        $obj = new TestStringNiveauDroit7Trait();

        $obj->setNiveauDroit7("niveauDroit7");
        $this->assertEquals("niveauDroit7", $obj->getNiveauDroit7());
    }
}
