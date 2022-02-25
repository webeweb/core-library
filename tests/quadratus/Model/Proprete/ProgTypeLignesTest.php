<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use WBW\Library\Quadratus\Model\Proprete\ProgTypeLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Prog type lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ProgTypeLignesTest extends AbstractTestCase {

    /**
     * Tests setCodeOperation()
     *
     * @return void
     */
    public function testSetCodeOperation(): void {

        $obj = new ProgTypeLignes();

        $obj->setCodeOperation("codeOperation");
        $this->assertEquals("codeOperation", $obj->getCodeOperation());
    }

    /**
     * Tests setCoefficient()
     *
     * @return void
     */
    public function testSetCoefficient(): void {

        $obj = new ProgTypeLignes();

        $obj->setCoefficient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefficient());
    }

    /**
     * Tests setNumLigne()
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new ProgTypeLignes();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests setNumProgramme()
     *
     * @return void
     */
    public function testSetNumProgramme(): void {

        $obj = new ProgTypeLignes();

        $obj->setNumProgramme(10);
        $this->assertEquals(10, $obj->getNumProgramme());
    }

    /**
     * Tests setVitesseReelle()
     *
     * @return void
     */
    public function testSetVitesseReelle(): void {

        $obj = new ProgTypeLignes();

        $obj->setVitesseReelle(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseReelle());
    }

    /**
     * Tests setVitesseTheorique()
     *
     * @return void
     */
    public function testSetVitesseTheorique(): void {

        $obj = new ProgTypeLignes();

        $obj->setVitesseTheorique(10.092018);
        $this->assertEquals(10.092018, $obj->getVitesseTheorique());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ProgTypeLignes();

        $this->assertNull($obj->getCodeOperation());
        $this->assertNull($obj->getCoefficient());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumProgramme());
        $this->assertNull($obj->getVitesseReelle());
        $this->assertNull($obj->getVitesseTheorique());
    }
}
