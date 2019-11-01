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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMandatPieceJointeEtebacTrait;

/**
 * Mandat piece jointe e t e b a c trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMandatPieceJointeEtebacTraitTest extends AbstractTestCase {

    /**
     * Tests the setMandatPieceJointeEtebac() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeEtebac() {

        $obj = new TestStringMandatPieceJointeEtebacTrait();

        $obj->setMandatPieceJointeEtebac("mandatPieceJointeEtebac");
        $this->assertEquals("mandatPieceJointeEtebac", $obj->getMandatPieceJointeEtebac());
    }
}
