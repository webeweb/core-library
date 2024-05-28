<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QPaie\SaisieArret;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Saisie arret test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class SaisieArretTest extends AbstractTestCase {

    /**
     * Test setDtCourrier()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtCourrier(): void {

        // Set a Date/time mock.
        $dtCourrier = new DateTime("2018-09-10");

        $obj = new SaisieArret();

        $obj->setDtCourrier($dtCourrier);
        $this->assertSame($dtCourrier, $obj->getDtCourrier());
    }

    /**
     * Test setDtDebutSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDebutSaisie(): void {

        // Set a Date/time mock.
        $dtDebutSaisie = new DateTime("2018-09-10");

        $obj = new SaisieArret();

        $obj->setDtDebutSaisie($dtDebutSaisie);
        $this->assertSame($dtDebutSaisie, $obj->getDtDebutSaisie());
    }

    /**
     * Test setDtFinSaisie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtFinSaisie(): void {

        // Set a Date/time mock.
        $dtFinSaisie = new DateTime("2018-09-10");

        $obj = new SaisieArret();

        $obj->setDtFinSaisie($dtFinSaisie);
        $this->assertSame($dtFinSaisie, $obj->getDtFinSaisie());
    }

    /**
     * Test setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new SaisieArret();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Test setMtCreance()
     *
     * @return void
     */
    public function testSetMtCreance(): void {

        $obj = new SaisieArret();

        $obj->setMtCreance(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCreance());
    }

    /**
     * Test setMtDejaPaye()
     *
     * @return void
     */
    public function testSetMtDejaPaye(): void {

        $obj = new SaisieArret();

        $obj->setMtDejaPaye(10.092018);
        $this->assertEquals(10.092018, $obj->getMtDejaPaye());
    }

    /**
     * Test setNbACharge()
     *
     * @return void
     */
    public function testSetNbACharge(): void {

        $obj = new SaisieArret();

        $obj->setNbACharge("nbACharge");
        $this->assertEquals("nbACharge", $obj->getNbACharge());
    }

    /**
     * Test setNomTribunal()
     *
     * @return void
     */
    public function testSetNomTribunal(): void {

        $obj = new SaisieArret();

        $obj->setNomTribunal("nomTribunal");
        $this->assertEquals("nomTribunal", $obj->getNomTribunal());
    }

    /**
     * Test setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new SaisieArret();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Test setTypeSaisie()
     *
     * @return void
     */
    public function testSetTypeSaisie(): void {

        $obj = new SaisieArret();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SaisieArret();

        $this->assertNull($obj->getDtCourrier());
        $this->assertNull($obj->getDtDebutSaisie());
        $this->assertNull($obj->getDtFinSaisie());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getMtCreance());
        $this->assertNull($obj->getMtDejaPaye());
        $this->assertNull($obj->getNbACharge());
        $this->assertNull($obj->getNomTribunal());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getTypeSaisie());
    }
}
