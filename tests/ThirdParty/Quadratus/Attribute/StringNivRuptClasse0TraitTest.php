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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse0Trait;

/**
 * Niv rupt classe0 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse0TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse0() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse0() {

        $obj = new TestStringNivRuptClasse0Trait();

        $obj->setNivRuptClasse0("nivRuptClasse0");
        $this->assertEquals("nivRuptClasse0", $obj->getNivRuptClasse0());
    }
}
