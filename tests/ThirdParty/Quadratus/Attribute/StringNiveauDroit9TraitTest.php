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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNiveauDroit9Trait;

/**
 * Niveau droit9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNiveauDroit9TraitTest extends AbstractTestCase {

    /**
     * Tests the setNiveauDroit9() method.
     *
     * @return void
     */
    public function testSetNiveauDroit9() {

        $obj = new TestStringNiveauDroit9Trait();

        $obj->setNiveauDroit9("niveauDroit9");
        $this->assertEquals("niveauDroit9", $obj->getNiveauDroit9());
    }
}
