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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete4Trait;

/**
 * Requete4 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete4TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete4() method.
     *
     * @return void
     */
    public function testSetRequete4() {

        $obj = new TestStringRequete4Trait();

        $obj->setRequete4("requete4");
        $this->assertEquals("requete4", $obj->getRequete4());
    }
}
