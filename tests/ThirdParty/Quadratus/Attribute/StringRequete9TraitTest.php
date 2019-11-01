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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringRequete9Trait;

/**
 * Requete9 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringRequete9TraitTest extends AbstractTestCase {

    /**
     * Tests the setRequete9() method.
     *
     * @return void
     */
    public function testSetRequete9() {

        $obj = new TestStringRequete9Trait();

        $obj->setRequete9("requete9");
        $this->assertEquals("requete9", $obj->getRequete9());
    }
}
