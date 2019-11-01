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
use WBW\Library\Core\Tests\Fixtures\ThirdParty\Quadratus\Attribute\TestStringMandatPieceJointePediTrait;

/**
 * Mandat piece jointe p e d i trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Attribute
 */
class StringMandatPieceJointePediTraitTest extends AbstractTestCase {

    /**
     * Tests the setMandatPieceJointePedi() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointePedi() {

        $obj = new TestStringMandatPieceJointePediTrait();

        $obj->setMandatPieceJointePedi("mandatPieceJointePedi");
        $this->assertEquals("mandatPieceJointePedi", $obj->getMandatPieceJointePedi());
    }
}
