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
use WBW\Library\Quadratus\Model\Proprete\FichesExposition;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiches exposition test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FichesExpositionTest extends AbstractTestCase {

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new FichesExposition();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodePrestation()
     *
     * @return void
     */
    public function testSetCodePrestation(): void {

        $obj = new FichesExposition();

        $obj->setCodePrestation("codePrestation");
        $this->assertEquals("codePrestation", $obj->getCodePrestation());
    }

    /**
     * Tests setCodeProduit()
     *
     * @return void
     */
    public function testSetCodeProduit(): void {

        $obj = new FichesExposition();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests setDateCtrl()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrl(): void {

        // Set a Date/time mock.
        $dateCtrl = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateCtrl($dateCtrl);
        $this->assertSame($dateCtrl, $obj->getDateCtrl());
    }

    /**
     * Tests setDateDebExpo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebExpo(): void {

        // Set a Date/time mock.
        $dateDebExpo = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateDebExpo($dateDebExpo);
        $this->assertSame($dateDebExpo, $obj->getDateDebExpo());
    }

    /**
     * Tests setDateFiche()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFiche(): void {

        // Set a Date/time mock.
        $dateFiche = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateFiche($dateFiche);
        $this->assertSame($dateFiche, $obj->getDateFiche());
    }

    /**
     * Tests setDateFinExpo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExpo(): void {

        // Set a Date/time mock.
        $dateFinExpo = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateFinExpo($dateFinExpo);
        $this->assertSame($dateFinExpo, $obj->getDateFinExpo());
    }

    /**
     * Tests setLstCodePhase()
     *
     * @return void
     */
    public function testSetLstCodePhase(): void {

        $obj = new FichesExposition();

        $obj->setLstCodePhase("lstCodePhase");
        $this->assertEquals("lstCodePhase", $obj->getLstCodePhase());
    }

    /**
     * Tests setLstCodePrev()
     *
     * @return void
     */
    public function testSetLstCodePrev(): void {

        $obj = new FichesExposition();

        $obj->setLstCodePrev("lstCodePrev");
        $this->assertEquals("lstCodePrev", $obj->getLstCodePrev());
    }

    /**
     * Tests setResuCtrl()
     *
     * @return void
     */
    public function testSetResuCtrl(): void {

        $obj = new FichesExposition();

        $obj->setResuCtrl("resuCtrl");
        $this->assertEquals("resuCtrl", $obj->getResuCtrl());
    }

    /**
     * Tests setTempsExposition()
     *
     * @return void
     */
    public function testSetTempsExposition(): void {

        $obj = new FichesExposition();

        $obj->setTempsExposition(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsExposition());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new FichesExposition();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodePrestation());
        $this->assertNull($obj->getCodeProduit());
        $this->assertNull($obj->getDateCtrl());
        $this->assertNull($obj->getDateDebExpo());
        $this->assertNull($obj->getDateFiche());
        $this->assertNull($obj->getDateFinExpo());
        $this->assertNull($obj->getLstCodePhase());
        $this->assertNull($obj->getLstCodePrev());
        $this->assertNull($obj->getResuCtrl());
        $this->assertNull($obj->getTempsExposition());
    }
}
