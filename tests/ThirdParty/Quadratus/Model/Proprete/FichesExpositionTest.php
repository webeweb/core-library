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

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FichesExposition;

/**
 * Fiches exposition test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FichesExpositionTest extends AbstractTestCase {

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye() {

        $obj = new FichesExposition();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodePrestation() method.
     *
     * @return void
     */
    public function testSetCodePrestation() {

        $obj = new FichesExposition();

        $obj->setCodePrestation("codePrestation");
        $this->assertEquals("codePrestation", $obj->getCodePrestation());
    }

    /**
     * Tests the setCodeProduit() method.
     *
     * @return void
     */
    public function testSetCodeProduit() {

        $obj = new FichesExposition();

        $obj->setCodeProduit("codeProduit");
        $this->assertEquals("codeProduit", $obj->getCodeProduit());
    }

    /**
     * Tests the setDateCtrl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCtrl() {

        // Set a Date/time mock.
        $dateCtrl = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateCtrl($dateCtrl);
        $this->assertSame($dateCtrl, $obj->getDateCtrl());
    }

    /**
     * Tests the setDateDebExpo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebExpo() {

        // Set a Date/time mock.
        $dateDebExpo = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateDebExpo($dateDebExpo);
        $this->assertSame($dateDebExpo, $obj->getDateDebExpo());
    }

    /**
     * Tests the setDateFiche() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFiche() {

        // Set a Date/time mock.
        $dateFiche = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateFiche($dateFiche);
        $this->assertSame($dateFiche, $obj->getDateFiche());
    }

    /**
     * Tests the setDateFinExpo() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExpo() {

        // Set a Date/time mock.
        $dateFinExpo = new DateTime("2018-09-10");

        $obj = new FichesExposition();

        $obj->setDateFinExpo($dateFinExpo);
        $this->assertSame($dateFinExpo, $obj->getDateFinExpo());
    }

    /**
     * Tests the setLstCodePhase() method.
     *
     * @return void
     */
    public function testSetLstCodePhase() {

        $obj = new FichesExposition();

        $obj->setLstCodePhase("lstCodePhase");
        $this->assertEquals("lstCodePhase", $obj->getLstCodePhase());
    }

    /**
     * Tests the setLstCodePrev() method.
     *
     * @return void
     */
    public function testSetLstCodePrev() {

        $obj = new FichesExposition();

        $obj->setLstCodePrev("lstCodePrev");
        $this->assertEquals("lstCodePrev", $obj->getLstCodePrev());
    }

    /**
     * Tests the setResuCtrl() method.
     *
     * @return void
     */
    public function testSetResuCtrl() {

        $obj = new FichesExposition();

        $obj->setResuCtrl("resuCtrl");
        $this->assertEquals("resuCtrl", $obj->getResuCtrl());
    }

    /**
     * Tests the setTempsExposition() method.
     *
     * @return void
     */
    public function testSetTempsExposition() {

        $obj = new FichesExposition();

        $obj->setTempsExposition(10.092018);
        $this->assertEquals(10.092018, $obj->getTempsExposition());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

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
