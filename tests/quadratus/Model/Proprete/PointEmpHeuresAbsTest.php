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
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\PointEmpHeuresAbs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Point emp heures abs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class PointEmpHeuresAbsTest extends AbstractTestCase {

    /**
     * Test setCodeAbsence()
     *
     * @return void
     */
    public function testSetCodeAbsence(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setCodeAbsence("codeAbsence");
        $this->assertEquals("codeAbsence", $obj->getCodeAbsence());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Test setDate()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDate(): void {

        // Set a Date/time mock.
        $date = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbs();

        $obj->setDate($date);
        $this->assertSame($date, $obj->getDate());
    }

    /**
     * Test setHeureAbs()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureAbs(): void {

        // Set a Date/time mock.
        $heureAbs = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbs();

        $obj->setHeureAbs($heureAbs);
        $this->assertSame($heureAbs, $obj->getHeureAbs());
    }

    /**
     * Test setHeureAbsNuit()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureAbsNuit(): void {

        // Set a Date/time mock.
        $heureAbsNuit = new DateTime("2018-09-10");

        $obj = new PointEmpHeuresAbs();

        $obj->setHeureAbsNuit($heureAbsNuit);
        $this->assertSame($heureAbsNuit, $obj->getHeureAbsNuit());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setTypeHeure()
     *
     * @return void
     */
    public function testSetTypeHeure(): void {

        $obj = new PointEmpHeuresAbs();

        $obj->setTypeHeure("typeHeure");
        $this->assertEquals("typeHeure", $obj->getTypeHeure());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PointEmpHeuresAbs();

        $this->assertNull($obj->getCodeAbsence());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDate());
        $this->assertNull($obj->getHeureAbs());
        $this->assertNull($obj->getHeureAbsNuit());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getTypeHeure());
    }
}
