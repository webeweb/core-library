<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use WBW\Library\Quadratus\Model\QGI\TravauxTypeLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Travaux type lignes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class TravauxTypeLignesTest extends AbstractTestCase {

    /**
     * Tests setCodeRepartition()
     *
     * @return void
     */
    public function testSetCodeRepartition(): void {

        $obj = new TravauxTypeLignes();

        $obj->setCodeRepartition("codeRepartition");
        $this->assertEquals("codeRepartition", $obj->getCodeRepartition());
    }

    /**
     * Tests setCodeTravail()
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new TravauxTypeLignes();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new TravauxTypeLignes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setNbUo()
     *
     * @return void
     */
    public function testSetNbUo(): void {

        $obj = new TravauxTypeLignes();

        $obj->setNbUo(10.092018);
        $this->assertEquals(10.092018, $obj->getNbUo());
    }

    /**
     * Tests setNiveauLigne()
     *
     * @return void
     */
    public function testSetNiveauLigne(): void {

        $obj = new TravauxTypeLignes();

        $obj->setNiveauLigne("niveauLigne");
        $this->assertEquals("niveauLigne", $obj->getNiveauLigne());
    }

    /**
     * Tests setNumeroLigne()
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new TravauxTypeLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests setPolice()
     *
     * @return void
     */
    public function testSetPolice(): void {

        $obj = new TravauxTypeLignes();

        $obj->setPolice("police");
        $this->assertEquals("police", $obj->getPolice());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TravauxTypeLignes();

        $this->assertNull($obj->getCodeRepartition());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbUo());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getPolice());
    }
}
