<?php

declare(strict_types = 1);

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
use WBW\Library\Quadratus\Model\Proprete\ChantiersReclamations;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Chantiers reclamations test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class ChantiersReclamationsTest extends AbstractTestCase {

    /**
     * Test setAlerte()
     *
     * @return void
     */
    public function testSetAlerte(): void {

        $obj = new ChantiersReclamations();

        $obj->setAlerte(true);
        $this->assertTrue($obj->getAlerte());
    }

    /**
     * Test setArchivee()
     *
     * @return void
     */
    public function testSetArchivee(): void {

        $obj = new ChantiersReclamations();

        $obj->setArchivee(true);
        $this->assertTrue($obj->getArchivee());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new ChantiersReclamations();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new ChantiersReclamations();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new ChantiersReclamations();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new ChantiersReclamations();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCritereListe1()
     *
     * @return void
     */
    public function testSetCritereListe1(): void {

        $obj = new ChantiersReclamations();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Test setCritereListe2()
     *
     * @return void
     */
    public function testSetCritereListe2(): void {

        $obj = new ChantiersReclamations();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Test setDateDebutDoc()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebutDoc(): void {

        // Set a Date/time mock.
        $dateDebutDoc = new DateTime("2018-09-10");

        $obj = new ChantiersReclamations();

        $obj->setDateDebutDoc($dateDebutDoc);
        $this->assertSame($dateDebutDoc, $obj->getDateDebutDoc());
    }

    /**
     * Test setDateFinDoc()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinDoc(): void {

        // Set a Date/time mock.
        $dateFinDoc = new DateTime("2018-09-10");

        $obj = new ChantiersReclamations();

        $obj->setDateFinDoc($dateFinDoc);
        $this->assertSame($dateFinDoc, $obj->getDateFinDoc());
    }

    /**
     * Test setDateReclam()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateReclam(): void {

        // Set a Date/time mock.
        $dateReclam = new DateTime("2018-09-10");

        $obj = new ChantiersReclamations();

        $obj->setDateReclam($dateReclam);
        $this->assertSame($dateReclam, $obj->getDateReclam());
    }

    /**
     * Test setDateTraitement()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateTraitement(): void {

        // Set a Date/time mock.
        $dateTraitement = new DateTime("2018-09-10");

        $obj = new ChantiersReclamations();

        $obj->setDateTraitement($dateTraitement);
        $this->assertSame($dateTraitement, $obj->getDateTraitement());
    }

    /**
     * Test setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new ChantiersReclamations();

        $obj->setNiveau("niveau");
        $this->assertEquals("niveau", $obj->getNiveau());
    }

    /**
     * Test setNiveauReclam()
     *
     * @return void
     */
    public function testSetNiveauReclam(): void {

        $obj = new ChantiersReclamations();

        $obj->setNiveauReclam("niveauReclam");
        $this->assertEquals("niveauReclam", $obj->getNiveauReclam());
    }

    /**
     * Test setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new ChantiersReclamations();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Test setNumeroReclam()
     *
     * @return void
     */
    public function testSetNumeroReclam(): void {

        $obj = new ChantiersReclamations();

        $obj->setNumeroReclam(10);
        $this->assertEquals(10, $obj->getNumeroReclam());
    }

    /**
     * Test setReclamation()
     *
     * @return void
     */
    public function testSetReclamation(): void {

        $obj = new ChantiersReclamations();

        $obj->setReclamation("reclamation");
        $this->assertEquals("reclamation", $obj->getReclamation());
    }

    /**
     * Test setResultat()
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new ChantiersReclamations();

        $obj->setResultat("resultat");
        $this->assertEquals("resultat", $obj->getResultat());
    }

    /**
     * Test setTypeReclam()
     *
     * @return void
     */
    public function testSetTypeReclam(): void {

        $obj = new ChantiersReclamations();

        $obj->setTypeReclam("typeReclam");
        $this->assertEquals("typeReclam", $obj->getTypeReclam());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ChantiersReclamations();

        $this->assertNull($obj->getAlerte());
        $this->assertNull($obj->getArchivee());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCritereListe1());
        $this->assertNull($obj->getCritereListe2());
        $this->assertNull($obj->getDateDebutDoc());
        $this->assertNull($obj->getDateFinDoc());
        $this->assertNull($obj->getDateReclam());
        $this->assertNull($obj->getDateTraitement());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauReclam());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getNumeroReclam());
        $this->assertNull($obj->getReclamation());
        $this->assertNull($obj->getResultat());
        $this->assertNull($obj->getTypeReclam());
    }
}
