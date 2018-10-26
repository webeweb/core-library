<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QPaie;

use WBW\Library\Core\Quadratus\Model\QPaie\HistoriquesEmployesColonnes;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Historiques employes colonnes model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 * @final
 */
final class HistoriquesEmployesColonnesTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new HistoriquesEmployesColonnes();

		$this->assertNull($obj->getClauseWhere());
		$this->assertNull($obj->getIndice());
		$this->assertNull($obj->getIndiceTri());
		$this->assertNull($obj->getIntitule());
		$this->assertNull($obj->getJointure());
		$this->assertNull($obj->getNomChamp());
		$this->assertNull($obj->getNomTable());
		$this->assertNull($obj->getRefGUID());
		$this->assertNull($obj->getSaisie());
		$this->assertNull($obj->getSelection());
		$this->assertNull($obj->getTaille());
		$this->assertNull($obj->getTitre());
		$this->assertNull($obj->getbEnGraph());
	}

	/**
	 * Tests the setClauseWhere() method.
	 *
	 * @return void
	 */
	public function testSetClauseWhere() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setClauseWhere("clauseWhere");
		$this->assertEquals("clauseWhere", $obj->getClauseWhere());
	}

	/**
	 * Tests the setIndice() method.
	 *
	 * @return void
	 */
	public function testSetIndice() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setIndice(10);
		$this->assertEquals(10, $obj->getIndice());
	}

	/**
	 * Tests the setIndiceTri() method.
	 *
	 * @return void
	 */
	public function testSetIndiceTri() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setIndiceTri("indiceTri");
		$this->assertEquals("indiceTri", $obj->getIndiceTri());
	}

	/**
	 * Tests the setIntitule() method.
	 *
	 * @return void
	 */
	public function testSetIntitule() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setIntitule("intitule");
		$this->assertEquals("intitule", $obj->getIntitule());
	}

	/**
	 * Tests the setJointure() method.
	 *
	 * @return void
	 */
	public function testSetJointure() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setJointure("jointure");
		$this->assertEquals("jointure", $obj->getJointure());
	}

	/**
	 * Tests the setNomChamp() method.
	 *
	 * @return void
	 */
	public function testSetNomChamp() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setNomChamp("nomChamp");
		$this->assertEquals("nomChamp", $obj->getNomChamp());
	}

	/**
	 * Tests the setNomTable() method.
	 *
	 * @return void
	 */
	public function testSetNomTable() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setNomTable("nomTable");
		$this->assertEquals("nomTable", $obj->getNomTable());
	}

	/**
	 * Tests the setRefGUID() method.
	 *
	 * @return void
	 */
	public function testSetRefGUID() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setRefGUID("refGUID");
		$this->assertEquals("refGUID", $obj->getRefGUID());
	}

	/**
	 * Tests the setSaisie() method.
	 *
	 * @return void
	 */
	public function testSetSaisie() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setSaisie(true);
		$this->assertEquals(true, $obj->getSaisie());
	}

	/**
	 * Tests the setSelection() method.
	 *
	 * @return void
	 */
	public function testSetSelection() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setSelection("selection");
		$this->assertEquals("selection", $obj->getSelection());
	}

	/**
	 * Tests the setTaille() method.
	 *
	 * @return void
	 */
	public function testSetTaille() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setTaille(10);
		$this->assertEquals(10, $obj->getTaille());
	}

	/**
	 * Tests the setTitre() method.
	 *
	 * @return void
	 */
	public function testSetTitre() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setTitre("titre");
		$this->assertEquals("titre", $obj->getTitre());
	}

	/**
	 * Tests the setbEnGraph() method.
	 *
	 * @return void
	 */
	public function testSetbEnGraph() {

		$obj = new HistoriquesEmployesColonnes();

		$obj->setbEnGraph(true);
		$this->assertEquals(true, $obj->getbEnGraph());
	}

}
