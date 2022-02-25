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
use WBW\Library\Quadratus\Model\QPaie\Documents;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Documents test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DocumentsTest extends AbstractTestCase {

    /**
     * Tests setAnnee()
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new Documents();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Tests setAuteur()
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new Documents();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Tests setChapitre()
     *
     * @return void
     */
    public function testSetChapitre(): void {

        $obj = new Documents();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Tests setChrono()
     *
     * @return void
     */
    public function testSetChrono(): void {

        $obj = new Documents();

        $obj->setChrono("chrono");
        $this->assertEquals("chrono", $obj->getChrono());
    }

    /**
     * Tests setCodeNature()
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new Documents();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests setDateHeureSys()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateHeureSys(): void {

        // Set a Date/time mock.
        $dateHeureSys = new DateTime("2018-09-10");

        $obj = new Documents();

        $obj->setDateHeureSys($dateHeureSys);
        $this->assertSame($dateHeureSys, $obj->getDateHeureSys());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Documents();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setIndiceBulletin()
     *
     * @return void
     */
    public function testSetIndiceBulletin(): void {

        $obj = new Documents();

        $obj->setIndiceBulletin(10);
        $this->assertEquals(10, $obj->getIndiceBulletin());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Documents();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Documents();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Documents();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setPeriodeArchivage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeArchivage(): void {

        // Set a Date/time mock.
        $periodeArchivage = new DateTime("2018-09-10");

        $obj = new Documents();

        $obj->setPeriodeArchivage($periodeArchivage);
        $this->assertSame($periodeArchivage, $obj->getPeriodeArchivage());
    }

    /**
     * Tests setPublierWeb()
     *
     * @return void
     */
    public function testSetPublierWeb(): void {

        $obj = new Documents();

        $obj->setPublierWeb(true);
        $this->assertEquals(true, $obj->getPublierWeb());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Documents();

        $this->assertNull($obj->getAnnee());
        $this->assertNull($obj->getAuteur());
        $this->assertNull($obj->getChapitre());
        $this->assertNull($obj->getChrono());
        $this->assertNull($obj->getCodeNature());
        $this->assertNull($obj->getDateHeureSys());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getIndiceBulletin());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPeriodeArchivage());
        $this->assertNull($obj->getPublierWeb());
    }
}
