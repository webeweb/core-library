<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\LettresMissionsLignes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lettres missions lignes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class LettresMissionsLignesTest extends AbstractTestCase {

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new LettresMissionsLignes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new LettresMissionsLignes();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeMission() method.
     *
     * @return void
     */
    public function testSetCodeMission(): void {

        $obj = new LettresMissionsLignes();

        $obj->setCodeMission("codeMission");
        $this->assertEquals("codeMission", $obj->getCodeMission());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new LettresMissionsLignes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeTravail() method.
     *
     * @return void
     */
    public function testSetCodeTravail(): void {

        $obj = new LettresMissionsLignes();

        $obj->setCodeTravail("codeTravail");
        $this->assertEquals("codeTravail", $obj->getCodeTravail());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new LettresMissionsLignes();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new LettresMissionsLignes();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setDeclarationARediger() method.
     *
     * @return void
     */
    public function testSetDeclarationARediger(): void {

        $obj = new LettresMissionsLignes();

        $obj->setDeclarationARediger(true);
        $this->assertEquals(true, $obj->getDeclarationARediger());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new LettresMissionsLignes();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new LettresMissionsLignes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setNbrHeures() method.
     *
     * @return void
     */
    public function testSetNbrHeures(): void {

        $obj = new LettresMissionsLignes();

        $obj->setNbrHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbrHeures());
    }

    /**
     * Tests the setNbrOperations() method.
     *
     * @return void
     */
    public function testSetNbrOperations(): void {

        $obj = new LettresMissionsLignes();

        $obj->setNbrOperations("nbrOperations");
        $this->assertEquals("nbrOperations", $obj->getNbrOperations());
    }

    /**
     * Tests the setNiveau() method.
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new LettresMissionsLignes();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests the setNiveauLigne() method.
     *
     * @return void
     */
    public function testSetNiveauLigne(): void {

        $obj = new LettresMissionsLignes();

        $obj->setNiveauLigne("niveauLigne");
        $this->assertEquals("niveauLigne", $obj->getNiveauLigne());
    }

    /**
     * Tests the setNumeroLettre() method.
     *
     * @return void
     */
    public function testSetNumeroLettre(): void {

        $obj = new LettresMissionsLignes();

        $obj->setNumeroLettre("numeroLettre");
        $this->assertEquals("numeroLettre", $obj->getNumeroLettre());
    }

    /**
     * Tests the setNumeroLigne() method.
     *
     * @return void
     */
    public function testSetNumeroLigne(): void {

        $obj = new LettresMissionsLignes();

        $obj->setNumeroLigne(10);
        $this->assertEquals(10, $obj->getNumeroLigne());
    }

    /**
     * Tests the setObservations() method.
     *
     * @return void
     */
    public function testSetObservations(): void {

        $obj = new LettresMissionsLignes();

        $obj->setObservations("observations");
        $this->assertEquals("observations", $obj->getObservations());
    }

    /**
     * Tests the setPolice() method.
     *
     * @return void
     */
    public function testSetPolice(): void {

        $obj = new LettresMissionsLignes();

        $obj->setPolice("police");
        $this->assertEquals("police", $obj->getPolice());
    }

    /**
     * Tests the setRealisePar() method.
     *
     * @return void
     */
    public function testSetRealisePar(): void {

        $obj = new LettresMissionsLignes();

        $obj->setRealisePar("realisePar");
        $this->assertEquals("realisePar", $obj->getRealisePar());
    }

    /**
     * Tests the setTypeAffectation() method.
     *
     * @return void
     */
    public function testSetTypeAffectation(): void {

        $obj = new LettresMissionsLignes();

        $obj->setTypeAffectation("typeAffectation");
        $this->assertEquals("typeAffectation", $obj->getTypeAffectation());
    }

    /**
     * Tests the setUniqId() method.
     *
     * @return void
     */
    public function testSetUniqId(): void {

        $obj = new LettresMissionsLignes();

        $obj->setUniqId("uniqId");
        $this->assertEquals("uniqId", $obj->getUniqId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LettresMissionsLignes();

        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeMission());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeTravail());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDeclarationARediger());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getNbrHeures());
        $this->assertNull($obj->getNbrOperations());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauLigne());
        $this->assertNull($obj->getNumeroLettre());
        $this->assertNull($obj->getNumeroLigne());
        $this->assertNull($obj->getObservations());
        $this->assertNull($obj->getPolice());
        $this->assertNull($obj->getRealisePar());
        $this->assertNull($obj->getTypeAffectation());
        $this->assertNull($obj->getUniqId());
    }
}
