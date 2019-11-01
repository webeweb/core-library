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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse8Trait;

/**
 * Niv rupt classe8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse8TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse8() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse8() {

        $obj = new TestStringNivRuptClasse8Trait();

        $obj->setNivRuptClasse8("nivRuptClasse8");
        $this->assertEquals("nivRuptClasse8", $obj->getNivRuptClasse8());
    }
}
