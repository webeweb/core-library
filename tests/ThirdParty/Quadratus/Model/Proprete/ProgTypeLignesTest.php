<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\ProgTypeLignes;

/**
 * Prog type lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ProgTypeLignesTest extends AbstractTestCase {

    /**
     * Tests the setCodeOperation() method.
     *
     * @return void
     */
    public function testSetCodeOperation() {

        $obj = new ProgTypeLignes();

        $obj->setCodeOperation("codeOperation");
        $this->assertEquals("codeOperation", $obj->getCodeOperation());
    }

    /**
     * Tests the setCoefficient() method.
     *
     * @return void
     */
    public function testSetCoefficient() {

        $obj = new ProgTypeLignes();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new ProgTypeLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumProgramme() method.
     *
     * @return void
     */
    public function testSetNumProgramme() {

        $obj = new ProgTypeLignes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Tests the setVitesseReelle() method.
     *
     * @return void
     */
    public function testSetVitesseReelle() {

        $obj = new ProgTypeLignes();

        $obj->setVitesseReelle(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseReelle());
    }

    /**
     * Tests the setVitesseTheorique() method.
     *
     * @return void
     */
    public function testSetVitesseTheorique() {

        $obj = new ProgTypeLignes();

        $obj->setVitesseTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseTheorique());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new ProgTypeLignes();

        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getVitesseReelle());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
