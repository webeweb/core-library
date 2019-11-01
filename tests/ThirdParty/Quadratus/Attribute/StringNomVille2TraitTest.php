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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNomVille2Trait;

/**
 * Nom ville2 trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNomVille2TraitTest extends AbstractTestCase {

    /**
     * Tests the setNomVille2() method.
     *
     * @return void
     */
    public function testSetNomVille2() {

        $obj = new TestStringNomVille2Trait();

        $obj->setNomVille2("nomVille2");
        $this->assertEquals("nomVille2", $obj->getNomVille2());
    }
}
