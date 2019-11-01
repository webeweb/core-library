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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete11Trait;

/**
 * Requete11 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete11TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete11() method.
     *
     * @return void
     */
    public function testSetRequete11() {

        $obj = new TestStringRequete11Trait();

        $obj->setRequete11("requete11");
        $this->assertEquals("requete11", $obj->getRequete11());
    }
}
