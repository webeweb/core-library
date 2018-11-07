<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\LettresMissionsLignes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lettres missions lignes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class LettresMissionsLignesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

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
		$this->assertNull($obj->getUniqID());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new LettresMissionsLignes();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCollaborateur() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollaborateur() {

		$obj = new LettresMissionsLignes();

		$obj->setCodeCollaborateur("codeCollaborateur");
		$this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
	}

	/**
	 * Tests the setCodeMission() method.
	 *
	 * @return void
	 */
	public function testSetCodeMission() {

		$obj = new LettresMissionsLignes();

		$obj->setCodeMission("codeMission");
		$this->assertEquals("codeMission", $obj->getCodeMission());
	}

	/**
	 * Tests the setCodeRegroupement() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegroupement() {

		$obj = new LettresMissionsLignes();

		$obj->setCodeRegroupement("codeRegroupement");
		$this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
	}

	/**
	 * Tests the setCodeTravail() method.
	 *
	 * @return void
	 */
	public function testSetCodeTravail() {

		$obj = new LettresMissionsLignes();

		$obj->setCodeTravail("codeTravail");
		$this->assertEquals("codeTravail", $obj->getCodeTravail());
	}

	/**
	 * Tests the setDateDebut() method.
	 *
	 * @return void
	 */
	public function testSetDateDebut() {

		$obj = new LettresMissionsLignes();

		$obj->setDateDebut(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebut());
	}

	/**
	 * Tests the setDateFin() method.
	 *
	 * @return void
	 */
	public function testSetDateFin() {

		$obj = new LettresMissionsLignes();

		$obj->setDateFin(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFin());
	}

	/**
	 * Tests the setDeclarationARediger() method.
	 *
	 * @return void
	 */
	public function testSetDeclarationARediger() {

		$obj = new LettresMissionsLignes();

		$obj->setDeclarationARediger(true);
		$this->assertEquals(true, $obj->getDeclarationARediger());
	}

	/**
	 * Tests the setFrequence() method.
	 *
	 * @return void
	 */
	public function testSetFrequence() {

		$obj = new LettresMissionsLignes();

		$obj->setFrequence("frequence");
		$this->assertEquals("frequence", $obj->getFrequence());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new LettresMissionsLignes();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNbrHeures() method.
	 *
	 * @return void
	 */
	public function testSetNbrHeures() {

		$obj = new LettresMissionsLignes();

		$obj->setNbrHeures(10.092018);
		$this->assertEquals(10.092018, $obj->getNbrHeures());
	}

	/**
	 * Tests the setNbrOperations() method.
	 *
	 * @return void
	 */
	public function testSetNbrOperations() {

		$obj = new LettresMissionsLignes();

		$obj->setNbrOperations("nbrOperations");
		$this->assertEquals("nbrOperations", $obj->getNbrOperations());
	}

	/**
	 * Tests the setNiveau() method.
	 *
	 * @return void
	 */
	public function testSetNiveau() {

		$obj = new LettresMissionsLignes();

		$obj->setNiveau(10);
		$this->assertEquals(10, $obj->getNiveau());
	}

	/**
	 * Tests the setNiveauLigne() method.
	 *
	 * @return void
	 */
	public function testSetNiveauLigne() {

		$obj = new LettresMissionsLignes();

		$obj->setNiveauLigne("niveauLigne");
		$this->assertEquals("niveauLigne", $obj->getNiveauLigne());
	}

	/**
	 * Tests the setNumeroLettre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroLettre() {

		$obj = new LettresMissionsLignes();

		$obj->setNumeroLettre("numeroLettre");
		$this->assertEquals("numeroLettre", $obj->getNumeroLettre());
	}

	/**
	 * Tests the setNumeroLigne() method.
	 *
	 * @return void
	 */
	public function testSetNumeroLigne() {

		$obj = new LettresMissionsLignes();

		$obj->setNumeroLigne(10);
		$this->assertEquals(10, $obj->getNumeroLigne());
	}

	/**
	 * Tests the setObservations() method.
	 *
	 * @return void
	 */
	public function testSetObservations() {

		$obj = new LettresMissionsLignes();

		$obj->setObservations("observations");
		$this->assertEquals("observations", $obj->getObservations());
	}

	/**
	 * Tests the setPolice() method.
	 *
	 * @return void
	 */
	public function testSetPolice() {

		$obj = new LettresMissionsLignes();

		$obj->setPolice("police");
		$this->assertEquals("police", $obj->getPolice());
	}

	/**
	 * Tests the setRealisePar() method.
	 *
	 * @return void
	 */
	public function testSetRealisePar() {

		$obj = new LettresMissionsLignes();

		$obj->setRealisePar("realisePar");
		$this->assertEquals("realisePar", $obj->getRealisePar());
	}

	/**
	 * Tests the setTypeAffectation() method.
	 *
	 * @return void
	 */
	public function testSetTypeAffectation() {

		$obj = new LettresMissionsLignes();

		$obj->setTypeAffectation("typeAffectation");
		$this->assertEquals("typeAffectation", $obj->getTypeAffectation());
	}

	/**
	 * Tests the setUniqID() method.
	 *
	 * @return void
	 */
	public function testSetUniqID() {

		$obj = new LettresMissionsLignes();

		$obj->setUniqID("uniqID");
		$this->assertEquals("uniqID", $obj->getUniqID());
	}

}
