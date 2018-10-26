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
use WBW\Library\Core\Quadratus\Model\QGI\Evenements;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Evenements model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 * @final
 */
final class EvenementsTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new Evenements();

		$this->assertNull($obj->getArchive());
		$this->assertNull($obj->getCodeClient());
		$this->assertNull($obj->getCodeCollab());
		$this->assertNull($obj->getContenu1());
		$this->assertNull($obj->getContenu2());
		$this->assertNull($obj->getContenu3());
		$this->assertNull($obj->getContenu4());
		$this->assertNull($obj->getDateEvt());
		$this->assertNull($obj->getEmplacementFichier());
		$this->assertNull($obj->getEtatIsActif());
		$this->assertNull($obj->getFS_Compta());
		$this->assertNull($obj->getFS_ComptaDateAlerte());
		$this->assertNull($obj->getFS_ComptaYaAlerte());
		$this->assertNull($obj->getFS_Compta_CollArch());
		$this->assertNull($obj->getFS_Compta_DateArch());
		$this->assertNull($obj->getFS_Fiscal());
		$this->assertNull($obj->getFS_Fiscal_CollArch());
		$this->assertNull($obj->getFS_Fiscal_DateArch());
		$this->assertNull($obj->getFS_GI());
		$this->assertNull($obj->getFS_GI_CollArch());
		$this->assertNull($obj->getFS_GI_DateArch());
		$this->assertNull($obj->getFS_Juridique());
		$this->assertNull($obj->getFS_Juridique_CollArch());
		$this->assertNull($obj->getFS_Juridique_DateArch());
		$this->assertNull($obj->getFS_Social());
		$this->assertNull($obj->getFS_SocialDateAlerte());
		$this->assertNull($obj->getFS_SocialYaAlerte());
		$this->assertNull($obj->getFS_Social_CollArch());
		$this->assertNull($obj->getFS_Social_DateArch());
		$this->assertNull($obj->getLibelle());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getQualifiant1());
		$this->assertNull($obj->getQualifiant2());
		$this->assertNull($obj->getQualifiant3());
		$this->assertNull($obj->getRacineCpt());
		$this->assertNull($obj->getRegle());
		$this->assertNull($obj->getTitre());
		$this->assertNull($obj->getTypeEvt());
		$this->assertNull($obj->getUniqID());
	}

	/**
	 * Tests the setArchive() method.
	 *
	 * @return void
	 */
	public function testSetArchive() {

		$obj = new Evenements();

		$obj->setArchive(true);
		$this->assertEquals(true, $obj->getArchive());
	}

	/**
	 * Tests the setCodeClient() method.
	 *
	 * @return void
	 */
	public function testSetCodeClient() {

		$obj = new Evenements();

		$obj->setCodeClient("codeClient");
		$this->assertEquals("codeClient", $obj->getCodeClient());
	}

	/**
	 * Tests the setCodeCollab() method.
	 *
	 * @return void
	 */
	public function testSetCodeCollab() {

		$obj = new Evenements();

		$obj->setCodeCollab("codeCollab");
		$this->assertEquals("codeCollab", $obj->getCodeCollab());
	}

	/**
	 * Tests the setContenu1() method.
	 *
	 * @return void
	 */
	public function testSetContenu1() {

		$obj = new Evenements();

		$obj->setContenu1("contenu1");
		$this->assertEquals("contenu1", $obj->getContenu1());
	}

	/**
	 * Tests the setContenu2() method.
	 *
	 * @return void
	 */
	public function testSetContenu2() {

		$obj = new Evenements();

		$obj->setContenu2("contenu2");
		$this->assertEquals("contenu2", $obj->getContenu2());
	}

	/**
	 * Tests the setContenu3() method.
	 *
	 * @return void
	 */
	public function testSetContenu3() {

		$obj = new Evenements();

		$obj->setContenu3("contenu3");
		$this->assertEquals("contenu3", $obj->getContenu3());
	}

	/**
	 * Tests the setContenu4() method.
	 *
	 * @return void
	 */
	public function testSetContenu4() {

		$obj = new Evenements();

		$obj->setContenu4("contenu4");
		$this->assertEquals("contenu4", $obj->getContenu4());
	}

	/**
	 * Tests the setDateEvt() method.
	 *
	 * @return void
	 */
	public function testSetDateEvt() {

		$obj = new Evenements();

		$obj->setDateEvt(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEvt());
	}

	/**
	 * Tests the setEmplacementFichier() method.
	 *
	 * @return void
	 */
	public function testSetEmplacementFichier() {

		$obj = new Evenements();

		$obj->setEmplacementFichier("emplacementFichier");
		$this->assertEquals("emplacementFichier", $obj->getEmplacementFichier());
	}

	/**
	 * Tests the setEtatIsActif() method.
	 *
	 * @return void
	 */
	public function testSetEtatIsActif() {

		$obj = new Evenements();

		$obj->setEtatIsActif("etatIsActif");
		$this->assertEquals("etatIsActif", $obj->getEtatIsActif());
	}

	/**
	 * Tests the setFS_Compta() method.
	 *
	 * @return void
	 */
	public function testSetFS_Compta() {

		$obj = new Evenements();

		$obj->setFS_Compta("fS_Compta");
		$this->assertEquals("fS_Compta", $obj->getFS_Compta());
	}

	/**
	 * Tests the setFS_ComptaDateAlerte() method.
	 *
	 * @return void
	 */
	public function testSetFS_ComptaDateAlerte() {

		$obj = new Evenements();

		$obj->setFS_ComptaDateAlerte(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_ComptaDateAlerte());
	}

	/**
	 * Tests the setFS_ComptaYaAlerte() method.
	 *
	 * @return void
	 */
	public function testSetFS_ComptaYaAlerte() {

		$obj = new Evenements();

		$obj->setFS_ComptaYaAlerte(true);
		$this->assertEquals(true, $obj->getFS_ComptaYaAlerte());
	}

	/**
	 * Tests the setFS_Compta_CollArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Compta_CollArch() {

		$obj = new Evenements();

		$obj->setFS_Compta_CollArch("fS_Compta_CollArch");
		$this->assertEquals("fS_Compta_CollArch", $obj->getFS_Compta_CollArch());
	}

	/**
	 * Tests the setFS_Compta_DateArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Compta_DateArch() {

		$obj = new Evenements();

		$obj->setFS_Compta_DateArch(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_Compta_DateArch());
	}

	/**
	 * Tests the setFS_Fiscal() method.
	 *
	 * @return void
	 */
	public function testSetFS_Fiscal() {

		$obj = new Evenements();

		$obj->setFS_Fiscal("fS_Fiscal");
		$this->assertEquals("fS_Fiscal", $obj->getFS_Fiscal());
	}

	/**
	 * Tests the setFS_Fiscal_CollArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Fiscal_CollArch() {

		$obj = new Evenements();

		$obj->setFS_Fiscal_CollArch("fS_Fiscal_CollArch");
		$this->assertEquals("fS_Fiscal_CollArch", $obj->getFS_Fiscal_CollArch());
	}

	/**
	 * Tests the setFS_Fiscal_DateArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Fiscal_DateArch() {

		$obj = new Evenements();

		$obj->setFS_Fiscal_DateArch(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_Fiscal_DateArch());
	}

	/**
	 * Tests the setFS_GI() method.
	 *
	 * @return void
	 */
	public function testSetFS_GI() {

		$obj = new Evenements();

		$obj->setFS_GI("fS_GI");
		$this->assertEquals("fS_GI", $obj->getFS_GI());
	}

	/**
	 * Tests the setFS_GI_CollArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_GI_CollArch() {

		$obj = new Evenements();

		$obj->setFS_GI_CollArch("fS_GI_CollArch");
		$this->assertEquals("fS_GI_CollArch", $obj->getFS_GI_CollArch());
	}

	/**
	 * Tests the setFS_GI_DateArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_GI_DateArch() {

		$obj = new Evenements();

		$obj->setFS_GI_DateArch(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_GI_DateArch());
	}

	/**
	 * Tests the setFS_Juridique() method.
	 *
	 * @return void
	 */
	public function testSetFS_Juridique() {

		$obj = new Evenements();

		$obj->setFS_Juridique("fS_Juridique");
		$this->assertEquals("fS_Juridique", $obj->getFS_Juridique());
	}

	/**
	 * Tests the setFS_Juridique_CollArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Juridique_CollArch() {

		$obj = new Evenements();

		$obj->setFS_Juridique_CollArch("fS_Juridique_CollArch");
		$this->assertEquals("fS_Juridique_CollArch", $obj->getFS_Juridique_CollArch());
	}

	/**
	 * Tests the setFS_Juridique_DateArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Juridique_DateArch() {

		$obj = new Evenements();

		$obj->setFS_Juridique_DateArch(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_Juridique_DateArch());
	}

	/**
	 * Tests the setFS_Social() method.
	 *
	 * @return void
	 */
	public function testSetFS_Social() {

		$obj = new Evenements();

		$obj->setFS_Social("fS_Social");
		$this->assertEquals("fS_Social", $obj->getFS_Social());
	}

	/**
	 * Tests the setFS_SocialDateAlerte() method.
	 *
	 * @return void
	 */
	public function testSetFS_SocialDateAlerte() {

		$obj = new Evenements();

		$obj->setFS_SocialDateAlerte(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_SocialDateAlerte());
	}

	/**
	 * Tests the setFS_SocialYaAlerte() method.
	 *
	 * @return void
	 */
	public function testSetFS_SocialYaAlerte() {

		$obj = new Evenements();

		$obj->setFS_SocialYaAlerte(true);
		$this->assertEquals(true, $obj->getFS_SocialYaAlerte());
	}

	/**
	 * Tests the setFS_Social_CollArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Social_CollArch() {

		$obj = new Evenements();

		$obj->setFS_Social_CollArch("fS_Social_CollArch");
		$this->assertEquals("fS_Social_CollArch", $obj->getFS_Social_CollArch());
	}

	/**
	 * Tests the setFS_Social_DateArch() method.
	 *
	 * @return void
	 */
	public function testSetFS_Social_DateArch() {

		$obj = new Evenements();

		$obj->setFS_Social_DateArch(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFS_Social_DateArch());
	}

	/**
	 * Tests the setLibelle() method.
	 *
	 * @return void
	 */
	public function testSetLibelle() {

		$obj = new Evenements();

		$obj->setLibelle("libelle");
		$this->assertEquals("libelle", $obj->getLibelle());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new Evenements();

		$obj->setNumero(10);
		$this->assertEquals(10, $obj->getNumero());
	}

	/**
	 * Tests the setQualifiant1() method.
	 *
	 * @return void
	 */
	public function testSetQualifiant1() {

		$obj = new Evenements();

		$obj->setQualifiant1("qualifiant1");
		$this->assertEquals("qualifiant1", $obj->getQualifiant1());
	}

	/**
	 * Tests the setQualifiant2() method.
	 *
	 * @return void
	 */
	public function testSetQualifiant2() {

		$obj = new Evenements();

		$obj->setQualifiant2("qualifiant2");
		$this->assertEquals("qualifiant2", $obj->getQualifiant2());
	}

	/**
	 * Tests the setQualifiant3() method.
	 *
	 * @return void
	 */
	public function testSetQualifiant3() {

		$obj = new Evenements();

		$obj->setQualifiant3("qualifiant3");
		$this->assertEquals("qualifiant3", $obj->getQualifiant3());
	}

	/**
	 * Tests the setRacineCpt() method.
	 *
	 * @return void
	 */
	public function testSetRacineCpt() {

		$obj = new Evenements();

		$obj->setRacineCpt("racineCpt");
		$this->assertEquals("racineCpt", $obj->getRacineCpt());
	}

	/**
	 * Tests the setRegle() method.
	 *
	 * @return void
	 */
	public function testSetRegle() {

		$obj = new Evenements();

		$obj->setRegle(true);
		$this->assertEquals(true, $obj->getRegle());
	}

	/**
	 * Tests the setTitre() method.
	 *
	 * @return void
	 */
	public function testSetTitre() {

		$obj = new Evenements();

		$obj->setTitre("titre");
		$this->assertEquals("titre", $obj->getTitre());
	}

	/**
	 * Tests the setTypeEvt() method.
	 *
	 * @return void
	 */
	public function testSetTypeEvt() {

		$obj = new Evenements();

		$obj->setTypeEvt("typeEvt");
		$this->assertEquals("typeEvt", $obj->getTypeEvt());
	}

	/**
	 * Tests the setUniqID() method.
	 *
	 * @return void
	 */
	public function testSetUniqID() {

		$obj = new Evenements();

		$obj->setUniqID("uniqID");
		$this->assertEquals("uniqID", $obj->getUniqID());
	}

}
