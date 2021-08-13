<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\PointEmpHeuresComplt;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point emp heures complt test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointEmpHeuresCompltTest extends AbstractTestCase {

    /**
     * Tests the setAFacturer() method.
     *
     * @return void
     */
    public function testSetAFacturer(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setAFacturer(true);
        $this->assertEquals(true, $obj->getAFacturer());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeEmploye() method.
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests the setCodeTache() method.
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
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

        $obj = new PointEmpHeuresComplt();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Tests the setHeureCompl() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureCompl(): void {

        // Set a Date/time mock.
        $heureCompl = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresComplt();

        $obj->setHeureCompl($heureCompl);
        $this->assertSame($heureCompl, $obj->getHeureCompl());
    }

    /**
     * Tests the setHeureComplNuit() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureComplNuit(): void {

        // Set a Date/time mock.
        $heureComplNuit = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresComplt();

        $obj->setHeureComplNuit($heureComplNuit);
        $this->assertSame($heureComplNuit, $obj->getHeureComplNuit());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setTypeHeure() method.
     *
     * @return void
     */
    public function testSetTypeHeure(): void {

        $obj = new PointEmpHeuresComplt();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointEmpHeuresComplt();

        $this->assertNull($obj->getAFacturer());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getHeureCompl());
        $this->assertNull($obj->getHeureComplNuit());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getTypeHeure());
    }
}
