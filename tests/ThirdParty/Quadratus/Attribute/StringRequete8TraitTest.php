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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete8Trait;

/**
 * Requete8 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete8TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete8() method.
     *
     * @return void
     */
    public function testSetRequete8() {

        $obj = new TestStringRequete8Trait();

        $obj->setRequete8("requete8");
        $this->assertEquals("requete8", $obj->getRequete8());
    }
}
