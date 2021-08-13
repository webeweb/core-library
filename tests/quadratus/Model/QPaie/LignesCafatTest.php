<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QPaie\LignesCafat;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes cafat test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesCafatTest extends AbstractTestCase {

    /**
     * Tests the setCodeCommune() method.
     *
     * @return void
     */
    public function testSetCodeCommune(): void {

        $obj = new LignesCafat();

        $obj->setCodeCommune("codeCommune");
        $this->assertEquals("codeCommune", $obj->getCodeCommune());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new LignesCafat();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setDateDebauchage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebauchage(): void {

        // Set a Date/time mock.
        $dateDebauchage = new DateTime("2018-09-10");

        $obj = new LignesCafat();

        $obj->setDateDebauchage($dateDebauchage);
        $this->assertSame($dateDebauchage, $obj->getDateDebauchage());
    }

    /**
     * Tests the setDateEmbauchage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEmbauchage(): void {

        // Set a Date/time mock.
        $dateEmbauchage = new DateTime("2018-09-10");

        $obj = new LignesCafat();

        $obj->setDateEmbauchage($dateEmbauchage);
        $this->assertSame($dateEmbauchage, $obj->getDateEmbauchage());
    }

    /**
     * Tests the setNbHTrav() method.
     *
     * @return void
     */
    public function testSetNbHTrav(): void {

        $obj = new LignesCafat();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests the setNoEt() method.
     *
     * @return void
     */
    public function testSetNoEt(): void {

        $obj = new LignesCafat();

        $obj->setNoEt("noEt");
        $this->assertEquals("noEt", $obj->getNoEt());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new LignesCafat();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new LignesCafat();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumeroAssure() method.
     *
     * @return void
     */
    public function testSetNumeroAssure(): void {

        $obj = new LignesCafat();

        $obj->setNumeroAssure("numeroAssure");
        $this->assertEquals("numeroAssure", $obj->getNumeroAssure());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesCafat();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setOrganisme() method.
     *
     * @return void
     */
    public function testSetOrganisme(): void {

        $obj = new LignesCafat();

        $obj->setOrganisme("organisme");
        $this->assertEquals("organisme", $obj->getOrganisme());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new LignesCafat();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests the setSalaireBrut() method.
     *
     * @return void
     */
    public function testSetSalaireBrut(): void {

        $obj = new LignesCafat();

        $obj->setSalaireBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireBrut());
    }

    /**
     * Tests the setTauxAt() method.
     *
     * @return void
     */
    public function testSetTauxAt(): void {

        $obj = new LignesCafat();

        $obj->setTauxAt(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxAt());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesCafat();

        $this->assertNull($obj->getCodeCommune());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getDateDebauchage());
        $this->assertNull($obj->getDateEmbauchage());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNoEt());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumeroAssure());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getOrganisme());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getSalaireBrut());
        $this->assertNull($obj->getTauxAt());
    }
}
