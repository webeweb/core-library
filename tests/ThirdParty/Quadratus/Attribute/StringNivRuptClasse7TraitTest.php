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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse7Trait;

/**
 * Niv rupt classe7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse7TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse7() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse7() {

        $obj = new TestStringNivRuptClasse7Trait();

        $obj->setNivRuptClasse7("nivRuptClasse7");
        $this->assertEquals("nivRuptClasse7", $obj->getNivRuptClasse7());
    }
}
