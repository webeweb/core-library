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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete7Trait;

/**
 * Requete7 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete7TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete7() method.
     *
     * @return void
     */
    public function testSetRequete7() {

        $obj = new TestStringRequete7Trait();

        $obj->setRequete7("requete7");
        $this->assertEquals("requete7", $obj->getRequete7());
    }
}
