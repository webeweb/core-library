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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete5Trait;

/**
 * Requete5 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete5TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete5() method.
     *
     * @return void
     */
    public function testSetRequete5() {

        $obj = new TestStringRequete5Trait();

        $obj->setRequete5("requete5");
        $this->assertEquals("requete5", $obj->getRequete5());
    }
}
