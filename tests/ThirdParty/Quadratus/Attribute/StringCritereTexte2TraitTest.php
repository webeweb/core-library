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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCritereTexte2Trait;

/**
 * Critere texte2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCritereTexte2TraitTest extends AbstractTestCase {

    /**
     * Tests the setCritereTexte2() method.
     *
     * @return void
     */
    public function testSetCritereTexte2() {

        $obj = new TestStringCritereTexte2Trait();

        $obj->setCritereTexte2("critereTexte2");
        $this->assertEquals("critereTexte2", $obj->getCritereTexte2());
    }
}
