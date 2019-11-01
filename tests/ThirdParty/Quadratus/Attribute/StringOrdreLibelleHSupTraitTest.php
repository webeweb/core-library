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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringOrdreLibelleHSupTrait;

/**
 * Ordre libelle h sup trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringOrdreLibelleHSupTraitTest extends AbstractTestCase {

    /**
     * Tests the setOrdreLibelleHSup() method.
     *
     * @return void
     */
    public function testSetOrdreLibelleHSup() {

        $obj = new TestStringOrdreLibelleHSupTrait();

        $obj->setOrdreLibelleHSup("ordreLibelleHSup");
        $this->assertEquals("ordreLibelleHSup", $obj->getOrdreLibelleHSup());
    }
}
