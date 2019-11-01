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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete10Trait;

/**
 * Requete10 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete10TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete10() method.
     *
     * @return void
     */
    public function testSetRequete10() {

        $obj = new TestStringRequete10Trait();

        $obj->setRequete10("requete10");
        $this->assertEquals("requete10", $obj->getRequete10());
    }
}
