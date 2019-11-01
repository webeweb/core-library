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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringCleAccesPlaquettesTrait;

/**
 * Cle acces plaquettes trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringCleAccesPlaquettesTraitTest extends AbstractTestCase {

    /**
     * Tests the setCleAccesPlaquettes() method.
     *
     * @return void
     */
    public function testSetCleAccesPlaquettes() {

        $obj = new TestStringCleAccesPlaquettesTrait();

        $obj->setCleAccesPlaquettes("cleAccesPlaquettes");
        $this->assertEquals("cleAccesPlaquettes", $obj->getCleAccesPlaquettes());
    }
}
