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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete2Trait;

/**
 * Requete2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete2TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete2() method.
     *
     * @return void
     */
    public function testSetRequete2() {

        $obj = new TestStringRequete2Trait();

        $obj->setRequete2("requete2");
        $this->assertEquals("requete2", $obj->getRequete2());
    }
}
