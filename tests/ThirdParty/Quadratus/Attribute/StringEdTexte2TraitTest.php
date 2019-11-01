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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEdTexte2Trait;

/**
 * Ed texte2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEdTexte2TraitTest extends AbstractTestCase {

    /**
     * Tests the setEdTexte2() method.
     *
     * @return void
     */
    public function testSetEdTexte2() {

        $obj = new TestStringEdTexte2Trait();

        $obj->setEdTexte2("edTexte2");
        $this->assertEquals("edTexte2", $obj->getEdTexte2());
    }
}
