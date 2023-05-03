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
use WBW\Library\Quadratus\Model\Proprete\AbsencesCpPrevisionnel;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Absences cp previsionnel test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class AbsencesCpPrevisionnelTest extends AbstractTestCase {

    /**
     * Test setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Test setCollaborateur()
     *
     * @return void
     */
    public function testSetCollaborateur(): void {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setCollaborateur("collaborateur");
        $this->assertEquals("collaborateur", $obj->getCollaborateur());
    }

    /**
     * Test setCommentaire()
     *
     * @return void
     */
    public function testSetCommentaire(): void {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setCommentaire("commentaire");
        $this->assertEquals("commentaire", $obj->getCommentaire());
    }

    /**
     * Test setDateDebutCp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutCp(): void {

        // Set a Date/time mock.
        $dateDebutCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateDebutCp($dateDebutCp);
        $this->assertSame($dateDebutCp, $obj->getDateDebutCp());
    }

    /**
     * Test setDateDemande()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDemande(): void {

        // Set a Date/time mock.
        $dateDemande = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateDemande($dateDemande);
        $this->assertSame($dateDemande, $obj->getDateDemande());
    }

    /**
     * Test setDateEtatCp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEtatCp(): void {

        // Set a Date/time mock.
        $dateEtatCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateEtatCp($dateEtatCp);
        $this->assertSame($dateEtatCp, $obj->getDateEtatCp());
    }

    /**
     * Test setDateFinCp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinCp(): void {

        // Set a Date/time mock.
        $dateFinCp = new DateTime("2018-09-10");

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDateFinCp($dateFinCp);
        $this->assertSame($dateFinCp, $obj->getDateFinCp());
    }

    /**
     * Test setDepuisWeb()
     *
     * @return void
     */
    public function testSetDepuisWeb(): void {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setDepuisWeb(true);
        $this->assertTrue($obj->getDepuisWeb());
    }

    /**
     * Test setEtatCp()
     *
     * @return void
     */
    public function testSetEtatCp(): void {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setEtatCp("etatCp");
        $this->assertEquals("etatCp", $obj->getEtatCp());
    }

    /**
     * Test setIndice()
     *
     * @return void
     */
    public function testSetIndice(): void {

        $obj = new AbsencesCpPrevisionnel();

        $obj->setIndice("indice");
        $this->assertEquals("indice", $obj->getIndice());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new AbsencesCpPrevisionnel();

        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCollaborateur());
        $this->assertNull($obj->getCommentaire());
        $this->assertNull($obj->getDateDebutCp());
        $this->assertNull($obj->getDateDemande());
        $this->assertNull($obj->getDateEtatCp());
        $this->assertNull($obj->getDateFinCp());
        $this->assertNull($obj->getDepuisWeb());
        $this->assertNull($obj->getEtatCp());
        $this->assertNull($obj->getIndice());
    }
}
