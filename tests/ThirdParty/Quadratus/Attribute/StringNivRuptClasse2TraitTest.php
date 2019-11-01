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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse2Trait;

/**
 * Niv rupt classe2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse2() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse2() {

        $obj = new TestStringNivRuptClasse2Trait();

        $obj->setNivRuptClasse2("nivRuptClasse2");
        $this->assertEquals("nivRuptClasse2", $obj->getNivRuptClasse2());
    }
}
