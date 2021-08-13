<?php

/*
 * This file is part of the core-library-package.
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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class DocumentsTest extends AbstractTestCase {

    /**
     * Tests the setAnnee() method.
     *
     * @return void
     */
    public function testSetAnnee(): void {

        $obj = new Documents();

        $obj->setAnnee("annee");
        $this->assertEquals("annee", $obj->getAnnee());
    }

    /**
     * Tests the setAuteur() method.
     *
     * @return void
     */
    public function testSetAuteur(): void {

        $obj = new Documents();

        $obj->setAuteur("auteur");
        $this->assertEquals("auteur", $obj->getAuteur());
    }

    /**
     * Tests the setChapitre() method.
     *
     * @return void
     */
    public function testSetChapitre(): void {

        $obj = new Documents();

        $obj->setChapitre("chapitre");
        $this->assertEquals("chapitre", $obj->getChapitre());
    }

    /**
     * Tests the setChrono() method.
     *
     * @return void
     */
    public function testSetChrono(): void {

        $obj = new Documents();

        $obj->setChrono("chrono");
        $this->assertEquals("chrono", $obj->getChrono());
    }

    /**
     * Tests the setCodeNature() method.
     *
     * @return void
     */
    public function testSetCodeNature(): void {

        $obj = new Documents();

        $obj->setCodeNature("codeNature");
        $this->assertEquals("codeNature", $obj->getCodeNature());
    }

    /**
     * Tests the setDateHeureSys() method.
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
     * Tests the setDateModification() method.
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
     * Tests the setIndiceBulletin() method.
     *
     * @return void
     */
    public function testSetIndiceBulletin(): void {

        $obj = new Documents();

        $obj->setIndiceBulletin(10);
        $this->assertEquals(10, $obj->getIndiceBulletin());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Documents();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new Documents();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new Documents();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPeriodeArchivage() method.
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
     * Tests the setPublierWeb() method.
     *
     * @return void
     */
    public function testSetPublierWeb(): void {

        $obj = new Documents();

        $obj->setPublierWeb(true);
        $this->assertEquals(true, $obj->getPublierWeb());
    }

    /**
     * Tests the __construct() method.
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
