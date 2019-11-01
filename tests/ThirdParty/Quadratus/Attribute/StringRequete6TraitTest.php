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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete6Trait;

/**
 * Requete6 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete6TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete6() method.
     *
     * @return void
     */
    public function testSetRequete6() {

        $obj = new TestStringRequete6Trait();

        $obj->setRequete6("requete6");
        $this->assertEquals("requete6", $obj->getRequete6());
    }
}
