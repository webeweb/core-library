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
use WBW\Library\Quadratus\Model\Proprete\MensualisationTache;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Mensualisation tache test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class MensualisationTacheTest extends AbstractTestCase {

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new MensualisationTache();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new MensualisationTache();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new MensualisationTache();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaboValid()
     *
     * @return void
     */
    public function testSetCodeCollaboValid(): void {

        $obj = new MensualisationTache();

        $obj->setCodeCollaboValid("codeCollaboValid");
        $this->assertEquals("codeCollaboValid", $obj->getCodeCollaboValid());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new MensualisationTache();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeEmploye()
     *
     * @return void
     */
    public function testSetCodeEmploye(): void {

        $obj = new MensualisationTache();

        $obj->setCodeEmploye("codeEmploye");
        $this->assertEquals("codeEmploye", $obj->getCodeEmploye());
    }

    /**
     * Tests setCodeTache()
     *
     * @return void
     */
    public function testSetCodeTache(): void {

        $obj = new MensualisationTache();

        $obj->setCodeTache("codeTache");
        $this->assertEquals("codeTache", $obj->getCodeTache());
    }

    /**
     * Tests setDateValidationSynchro()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationSynchro(): void {

        // Set a Date/time mock.
        $dateValidationSynchro = new DateTime("2018-09-10");

        $obj = new MensualisationTache();

        $obj->setDateValidationSynchro($dateValidationSynchro);
        $this->assertSame($dateValidationSynchro, $obj->getDateValidationSynchro());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new MensualisationTache();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setHistoMensSaisi()
     *
     * @return void
     */
    public function testSetHistoMensSaisi(): void {

        $obj = new MensualisationTache();

        $obj->setHistoMensSaisi(true);
        $this->assertEquals(true, $obj->getHistoMensSaisi());
    }

    /**
     * Tests setMensualisationCalculee()
     *
     * @return void
     */
    public function testSetMensualisationCalculee(): void {

        $obj = new MensualisationTache();

        $obj->setMensualisationCalculee(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationCalculee());
    }

    /**
     * Tests setMensualisationSaisie()
     *
     * @return void
     */
    public function testSetMensualisationSaisie(): void {

        $obj = new MensualisationTache();

        $obj->setMensualisationSaisie(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationSaisie());
    }

    /**
     * Tests setMtPrime()
     *
     * @return void
     */
    public function testSetMtPrime(): void {

        $obj = new MensualisationTache();

        $obj->setMtPrime(10.092018);
        $this->assertEquals(10.092018, $obj->getMtPrime());
    }

    /**
     * Tests setNbPaniers()
     *
     * @return void
     */
    public function testSetNbPaniers(): void {

        $obj = new MensualisationTache();

        $obj->setNbPaniers(10.092018);
        $this->assertEquals(10.092018, $obj->getNbPaniers());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new MensualisationTache();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setPeriodeDebutValidite()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDebutValidite(): void {

        // Set a Date/time mock.
        $periodeDebutValidite = new DateTime("2018-09-10");

        $obj = new MensualisationTache();

        $obj->setPeriodeDebutValidite($periodeDebutValidite);
        $this->assertSame($periodeDebutValidite, $obj->getPeriodeDebutValidite());
    }

    /**
     * Tests setUniqIdSynchro()
     *
     * @return void
     */
    public function testSetUniqIdSynchro(): void {

        $obj = new MensualisationTache();

        $obj->setUniqIdSynchro("uniqIdSynchro");
        $this->assertEquals("uniqIdSynchro", $obj->getUniqIdSynchro());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MensualisationTache();

        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaboValid());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEmploye());
        $this->assertNull($obj->getCodeTache());
        $this->assertNull($obj->getDateValidationSynchro());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getHistoMensSaisi());
        $this->assertNull($obj->getMensualisationCalculee());
        $this->assertNull($obj->getMensualisationSaisie());
        $this->assertNull($obj->getMtPrime());
        $this->assertNull($obj->getNbPaniers());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPeriodeDebutValidite());
        $this->assertNull($obj->getUniqIdSynchro());
    }
}
