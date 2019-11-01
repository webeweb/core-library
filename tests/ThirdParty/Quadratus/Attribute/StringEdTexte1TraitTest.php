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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringEdTexte1Trait;

/**
 * Ed texte1 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringEdTexte1TraitTest extends AbstractTestCase {

    /**
     * Tests the setEdTexte1() method.
     *
     * @return void
     */
    public function testSetEdTexte1() {

        $obj = new TestStringEdTexte1Trait();

        $obj->setEdTexte1("edTexte1");
        $this->assertEquals("edTexte1", $obj->getEdTexte1());
    }
}
