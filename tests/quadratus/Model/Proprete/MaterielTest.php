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

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\Materiel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Materiel test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class MaterielTest extends AbstractTestCase {

    /**
     * Tests the setCodeBarre() method.
     *
     * @return void
     */
    public function testSetCodeBarre(): void {

        $obj = new Materiel();

        $obj->setCodeBarre("codeBarre");
        $this->assertEquals("codeBarre", $obj->getCodeBarre());
    }

    /**
     * Tests the setCodeMateriel() method.
     *
     * @return void
     */
    public function testSetCodeMateriel(): void {

        $obj = new Materiel();

        $obj->setCodeMateriel("codeMateriel");
        $this->assertEquals("codeMateriel", $obj->getCodeMateriel());
    }

    /**
     * Tests the setDateAchat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAchat(): void {

        // Set a Date/time mock.
        $dateAchat = new DateTime("2018-09-10");

        $obj = new Materiel();

        $obj->setDateAchat($dateAchat);
        $this->assertSame($dateAchat, $obj->getDateAchat());
    }

    /**
     * Tests the setDateDebutAmortissement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebutAmortissement(): void {

        // Set a Date/time mock.
        $dateDebutAmortissement = new DateTime("2018-09-10");

        $obj = new Materiel();

        $obj->setDateDebutAmortissement($dateDebutAmortissement);
        $this->assertSame($dateDebutAmortissement, $obj->getDateDebutAmortissement());
    }

    /**
     * Tests the setDateFinAmortissement() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinAmortissement(): void {

        // Set a Date/time mock.
        $dateFinAmortissement = new DateTime("2018-09-10");

        $obj = new Materiel();

        $obj->setDateFinAmortissement($dateFinAmortissement);
        $this->assertSame($dateFinAmortissement, $obj->getDateFinAmortissement());
    }

    /**
     * Tests the setDateFinService() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinService(): void {

        // Set a Date/time mock.
        $dateFinService = new DateTime("2018-09-10");

        $obj = new Materiel();

        $obj->setDateFinService($dateFinService);
        $this->assertSame($dateFinService, $obj->getDateFinService());
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

        $obj = new Materiel();

        $obj->setDateMiseEnService($dateMiseEnService);
        $this->assertSame($dateMiseEnService, $obj->getDateMiseEnService());
    }

    /**
     * Tests the setDesignation1() method.
     *
     * @return void
     */
    public function testSetDesignation1(): void {

        $obj = new Materiel();

        $obj->setDesignation1("designation1");
        $this->assertEquals("designation1", $obj->getDesignation1());
    }

    /**
     * Tests the setDesignation2() method.
     *
     * @return void
     */
    public function testSetDesignation2(): void {

        $obj = new Materiel();

        $obj->setDesignation2("designation2");
        $this->assertEquals("designation2", $obj->getDesignation2());
    }

    /**
     * Tests the setDesignation3() method.
     *
     * @return void
     */
    public function testSetDesignation3(): void {

        $obj = new Materiel();

        $obj->setDesignation3("designation3");
        $this->assertEquals("designation3", $obj->getDesignation3());
    }

    /**
     * Tests the setDesignation4() method.
     *
     * @return void
     */
    public function testSetDesignation4(): void {

        $obj = new Materiel();

        $obj->setDesignation4("designation4");
        $this->assertEquals("designation4", $obj->getDesignation4());
    }

    /**
     * Tests the setDesignation5() method.
     *
     * @return void
     */
    public function testSetDesignation5(): void {

        $obj = new Materiel();

        $obj->setDesignation5("designation5");
        $this->assertEquals("designation5", $obj->getDesignation5());
    }

    /**
     * Tests the setMontantAmortissement() method.
     *
     * @return void
     */
    public function testSetMontantAmortissement(): void {

        $obj = new Materiel();

        $obj->setMontantAmortissement(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAmortissement());
    }

    /**
     * Tests the setNumeroSerie() method.
     *
     * @return void
     */
    public function testSetNumeroSerie(): void {

        $obj = new Materiel();

        $obj->setNumeroSerie("numeroSerie");
        $this->assertEquals("numeroSerie", $obj->getNumeroSerie());
    }

    /**
     * Tests the setValAchatEuro() method.
     *
     * @return void
     */
    public function testSetValAchatEuro(): void {

        $obj = new Materiel();

        $obj->setValAchatEuro(10.092018);
        $this->assertEquals(10.092018, $obj->getValAchatEuro());
    }

    /**
     * Tests the setValAchatFrf() method.
     *
     * @return void
     */
    public function testSetValAchatFrf(): void {

        $obj = new Materiel();

        $obj->setValAchatFrf(10.092018);
        $this->assertEquals(10.092018, $obj->getValAchatFrf());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Materiel();

        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeMateriel());
        $this->assertNull($obj->getDateAchat());
        $this->assertNull($obj->getDateDebutAmortissement());
        $this->assertNull($obj->getDateFinAmortissement());
        $this->assertNull($obj->getDateFinService());
        $this->assertNull($obj->getDateMiseEnService());
        $this->assertNull($obj->getDesignation1());
        $this->assertNull($obj->getDesignation2());
        $this->assertNull($obj->getDesignation3());
        $this->assertNull($obj->getDesignation4());
        $this->assertNull($obj->getDesignation5());
        $this->assertNull($obj->getMontantAmortissement());
        $this->assertNull($obj->getNumeroSerie());
        $this->assertNull($obj->getValAchatEuro());
        $this->assertNull($obj->getValAchatFrf());
    }
}
