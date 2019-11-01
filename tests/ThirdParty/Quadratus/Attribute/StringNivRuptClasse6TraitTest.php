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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNivRuptClasse6Trait;

/**
 * Niv rupt classe6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNivRuptClasse6TraitTest extends AbstractTestCase {

    /**
     * Tests the setNivRuptClasse6() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse6() {

        $obj = new TestStringNivRuptClasse6Trait();

        $obj->setNivRuptClasse6("nivRuptClasse6");
        $this->assertEquals("nivRuptClasse6", $obj->getNivRuptClasse6());
    }
}
