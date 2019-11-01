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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringNbCaracteresLigneFactTrait;

/**
 * Nb caracteres ligne fact trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringNbCaracteresLigneFactTraitTest extends AbstractTestCase {

    /**
     * Tests the setNbCaracteresLigneFact() method.
     *
     * @return void
     */
    public function testSetNbCaracteresLigneFact() {

        $obj = new TestStringNbCaracteresLigneFactTrait();

        $obj->setNbCaracteresLigneFact("nbCaracteresLigneFact");
        $this->assertEquals("nbCaracteresLigneFact", $obj->getNbCaracteresLigneFact());
    }
}
