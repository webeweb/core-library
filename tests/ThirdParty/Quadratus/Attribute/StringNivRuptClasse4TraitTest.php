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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse4Trait;

/**
 * Niv rupt classe4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse4TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse4() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse4() {

        $obj = new TestStringNivRuptClasse4Trait();

        $obj->setNivRuptClasse4("nivRuptClasse4");
        $this->assertEquals("nivRuptClasse4", $obj->getNivRuptClasse4());
    }
}
