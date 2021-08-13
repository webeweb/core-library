<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Subventions;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Subventions test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class SubventionsTest extends AbstractTestCase {

    /**
     * Tests the setCodeCentre() method.
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new Subventions();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests the setCoeffDegressif() method.
     *
     * @return void
     */
    public function testSetCoeffDegressif(): void {

        $obj = new Subventions();

        $obj->setCoeffDegressif(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffDegressif());
    }

    /**
     * Tests the setDate() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new Subventions();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setDateCession() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCession(): void {

        // Set a Date/time mock.
        $dateCession = new DateTime("2018-09-10");

        $obj = new Subventions();

        $obj->setDateCession($dateCession);
        $this->assertSame($dateCession, $obj->getDateCession());
    }

    /**
     * Tests the setDateMiseEnService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateMiseEnService(): void {

        // Set a Date/time mock.
        $dateMiseEnService = new DateTime("2018-09-10");

        $obj = new Subventions();

        $obj->setDateMiseEnService($dateMiseEnService);
        $this->assertSame($dateMiseEnService, $obj->getDateMiseEnService());
    }

    /**
     * Tests the setDuree() method.
     *
     * @return void
     */
    public function testSetDuree(): void {

        $obj = new Subventions();

        $obj->setDuree(10);
        $this->assertEquals(10, $obj->getDuree());
    }

    /**
     * Tests the setImmoNumero() method.
     *
     * @return void
     */
    public function testSetImmoNumero(): void {

        $obj = new Subventions();

        $obj->setImmoNumero(10);
        $this->assertEquals(10, $obj->getImmoNumero());
    }

    /**
     * Tests the setImmoNumeroCompte() method.
     *
     * @return void
     */
    public function testSetImmoNumeroCompte(): void {

        $obj = new Subventions();

        $obj->setImmoNumeroCompte("immoNumeroCompte");
        $this->assertEquals("immoNumeroCompte", $obj->getImmoNumeroCompte());
    }

    /**
     * Tests the setImmoNumeroDeux() method.
     *
     * @return void
     */
    public function testSetImmoNumeroDeux(): void {

        $obj = new Subventions();

        $obj->setImmoNumeroDeux(10);
        $this->assertEquals(10, $obj->getImmoNumeroDeux());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Subventions();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setMontant() method.
     *
     * @return void
     */
    public function testSetMontant(): void {

        $obj = new Subventions();

        $obj->setMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant());
    }

    /**
     * Tests the setNumContrat() method.
     *
     * @return void
     */
    public function testSetNumContrat(): void {

        $obj = new Subventions();

        $obj->setNumContrat("numContrat");
        $this->assertEquals("numContrat", $obj->getNumContrat());
    }

    /**
     * Tests the setNumCptSubvention() method.
     *
     * @return void
     */
    public function testSetNumCptSubvention(): void {

        $obj = new Subventions();

        $obj->setNumCptSubvention("numCptSubvention");
        $this->assertEquals("numCptSubvention", $obj->getNumCptSubvention());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new Subventions();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setTauxLineaire() method.
     *
     * @return void
     */
    public function testSetTauxLineaire(): void {

        $obj = new Subventions();

        $obj->setTauxLineaire(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxLineaire());
    }

    /**
     * Tests the setTypeAmort() method.
     *
     * @return void
     */
    public function testSetTypeAmort(): void {

        $obj = new Subventions();

        $obj->setTypeAmort("typeAmort");
        $this->assertEquals("typeAmort", $obj->getTypeAmort());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Subventions();

        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCoeffDegressif());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getDateCession());
        $this->assertNull($obj->getDateMiseEnService());
        $this->assertNull($obj->getDuree());
        $this->assertNull($obj->getImmoNumero());
        $this->assertNull($obj->getImmoNumeroCompte());
        $this->assertNull($obj->getImmoNumeroDeux());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMontant());
        $this->assertNull($obj->getNumContrat());
        $this->assertNull($obj->getNumCptSubvention());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getTauxLineaire());
        $this->assertNull($obj->getTypeAmort());
    }
}
