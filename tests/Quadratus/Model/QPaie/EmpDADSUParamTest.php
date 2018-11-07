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

use DateTime;
use WBW\Library\Core\Quadratus\Model\QPaie\EmpDADSUParam;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Emp d a d s u param model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class EmpDADSUParamTest extends AbstractFrameworkTestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstruct() {

		$obj = new EmpDADSUParam();

		$this->assertNull($obj->getActionsGratuites_Nbre());
		$this->assertNull($obj->getActionsGratuites_ValeurU());
		$this->assertNull($obj->getAnciennete());
		$this->assertNull($obj->getAncienneteBTP());
		$this->assertNull($obj->getAnneePrepa());
		$this->assertNull($obj->getAtBureau());
		$this->assertNull($obj->getAtEtab());
		$this->assertNull($obj->getAtRisque());
		$this->assertNull($obj->getAtTaux());
		$this->assertNull($obj->getAutresSommesExo_Code1());
		$this->assertNull($obj->getAutresSommesExo_Code2());
		$this->assertNull($obj->getAutresSommesExo_Code3());
		$this->assertNull($obj->getAutresSommesExo_Code4());
		$this->assertNull($obj->getAutresSommesExo_Mnt1());
		$this->assertNull($obj->getAutresSommesExo_Mnt2());
		$this->assertNull($obj->getAutresSommesExo_Mnt3());
		$this->assertNull($obj->getAutresSommesExo_Mnt4());
		$this->assertNull($obj->getBTQLieuTrav());
		$this->assertNull($obj->getBaseExoBrut1());
		$this->assertNull($obj->getBaseExoBrut2());
		$this->assertNull($obj->getBaseExoBrut3());
		$this->assertNull($obj->getBaseExoPlaf1());
		$this->assertNull($obj->getBaseExoPlaf2());
		$this->assertNull($obj->getBaseExoPlaf3());
		$this->assertNull($obj->getBureauDistributeurLieuTrav());
		$this->assertNull($obj->getCategorieBTP());
		$this->assertNull($obj->getCodeCaract());
		$this->assertNull($obj->getCodeClasseCNBF());
		$this->assertNull($obj->getCodeContratTrav());
		$this->assertNull($obj->getCodeConventionCol());
		$this->assertNull($obj->getCodeDecalagePaie());
		$this->assertNull($obj->getCodeDelegGestRisqueMaladie());
		$this->assertNull($obj->getCodeDroitContrat());
		$this->assertNull($obj->getCodeEmplMult());
		$this->assertNull($obj->getCodeEmploisMult());
		$this->assertNull($obj->getCodeEtablissement());
		$this->assertNull($obj->getCodeEtatContratPrud());
		$this->assertNull($obj->getCodeExtensionAlsaceMoselle());
		$this->assertNull($obj->getCodeInseeLieuTrav());
		$this->assertNull($obj->getCodeMotifDebPer());
		$this->assertNull($obj->getCodeMotifDebPer2());
		$this->assertNull($obj->getCodeMotifDebPer3());
		$this->assertNull($obj->getCodeMotifDebPer4());
		$this->assertNull($obj->getCodeMotifDebPer5());
		$this->assertNull($obj->getCodeMotifFinPer());
		$this->assertNull($obj->getCodeMotifFinPer2());
		$this->assertNull($obj->getCodeMotifFinPer3());
		$this->assertNull($obj->getCodeMotifFinPer4());
		$this->assertNull($obj->getCodeMotifFinPer5());
		$this->assertNull($obj->getCodeNatureBaseCotisations());
		$this->assertNull($obj->getCodeOfficielCommuneLieuTrav());
		$this->assertNull($obj->getCodePostalLieuTrav());
		$this->assertNull($obj->getCodeRegime1());
		$this->assertNull($obj->getCodeRegime2());
		$this->assertNull($obj->getCodeRegime3());
		$this->assertNull($obj->getCodeRegimeBTP());
		$this->assertNull($obj->getCodeRegimeBaseObl());
		$this->assertNull($obj->getCodeRegimeBaseOblAT());
		$this->assertNull($obj->getCodeRegimeBaseOblMaladie());
		$this->assertNull($obj->getCodeRegimeBaseOblVieilPat());
		$this->assertNull($obj->getCodeRegimeBaseOblVieilSal());
		$this->assertNull($obj->getCodeStatutCateg());
		$this->assertNull($obj->getCodeStatutCategConv());
		$this->assertNull($obj->getCodeStatutCategIrc());
		$this->assertNull($obj->getCodeStatutPro());
		$this->assertNull($obj->getCodeTypeExo1());
		$this->assertNull($obj->getCodeTypeExo2());
		$this->assertNull($obj->getCodeTypeExo3());
		$this->assertNull($obj->getCommentaire());
		$this->assertNull($obj->getComplementLieuTrav());
		$this->assertNull($obj->getDADSUConjointSalarie());
		$this->assertNull($obj->getDADSU_NbOptions());
		$this->assertNull($obj->getDADSU_PrixSouscriptOpt());
		$this->assertNull($obj->getDADSU_ValeurAction());
		$this->assertNull($obj->getDateCtrlNorme());
		$this->assertNull($obj->getDateCtrlNormeBTP());
		$this->assertNull($obj->getDateCtrlNormePrev());
		$this->assertNull($obj->getDateCtrlNormeRet());
		$this->assertNull($obj->getDebutPeriodeDecl());
		$this->assertNull($obj->getEchelon());
		$this->assertNull($obj->getEmploi());
		$this->assertNull($obj->getEpargneSal_Code1());
		$this->assertNull($obj->getEpargneSal_Code2());
		$this->assertNull($obj->getEpargneSal_Code3());
		$this->assertNull($obj->getEpargneSal_Code4());
		$this->assertNull($obj->getEpargneSal_Mnt1());
		$this->assertNull($obj->getEpargneSal_Mnt2());
		$this->assertNull($obj->getEpargneSal_Mnt3());
		$this->assertNull($obj->getEpargneSal_Mnt4());
		$this->assertNull($obj->getEtatCtrlNorme());
		$this->assertNull($obj->getEtatCtrlNormeBTP());
		$this->assertNull($obj->getEtatCtrlNormePrev());
		$this->assertNull($obj->getEtatCtrlNormeRet());
		$this->assertNull($obj->getExoAGFF());
		$this->assertNull($obj->getFinPeriodeDecl());
		$this->assertNull($obj->getGPEC_MntExoCSGCRDS());
		$this->assertNull($obj->getGPEC_MntExoCotSecu());
		$this->assertNull($obj->getIndemnCpPlaf());
		$this->assertNull($obj->getIndemnRupture_Code1());
		$this->assertNull($obj->getIndemnRupture_Code2());
		$this->assertNull($obj->getIndemnRupture_Mnt1());
		$this->assertNull($obj->getIndemnRupture_Mnt2());
		$this->assertNull($obj->getIndice());
		$this->assertNull($obj->getNbPeriodiciteIrcantec());
		$this->assertNull($obj->getNbhEtabBTP());
		$this->assertNull($obj->getNbhSalBTP());
		$this->assertNull($obj->getNicEtabAffectation());
		$this->assertNull($obj->getNiveau());
		$this->assertNull($obj->getNomVilleInseeLieuTrav());
		$this->assertNull($obj->getNomVilleLieuTrav());
		$this->assertNull($obj->getNomVoieLieuTrav());
		$this->assertNull($obj->getNumVoieLieuTrav());
		$this->assertNull($obj->getNumero());
		$this->assertNull($obj->getNumeroAdhesionBTP());
		$this->assertNull($obj->getNumeroAffilFNC());
		$this->assertNull($obj->getNumeroOrdre());
		$this->assertNull($obj->getNumeroRattach1());
		$this->assertNull($obj->getNumeroRattach2());
		$this->assertNull($obj->getNumeroRattach3());
		$this->assertNull($obj->getNumeroRattachBTP());
		$this->assertNull($obj->getParticipPatronAvtge_Code1());
		$this->assertNull($obj->getParticipPatronAvtge_Code2());
		$this->assertNull($obj->getParticipPatronAvtge_Mnt1());
		$this->assertNull($obj->getParticipPatronAvtge_Mnt2());
		$this->assertNull($obj->getPeriodiciteIrcantec());
		$this->assertNull($obj->getPosition());
		$this->assertNull($obj->getPourcentAct());
		$this->assertNull($obj->getRemunMedecins());
		$this->assertNull($obj->getSiretLieuTrav());
		$this->assertNull($obj->getStatutCotisantBTP());
		$this->assertNull($obj->getSupplFam());
		$this->assertNull($obj->getTDS59());
		$this->assertNull($obj->getTypeAffilBTP());
	}

	/**
	 * Tests the setActionsGratuites_Nbre() method.
	 *
	 * @return void
	 */
	public function testSetActionsGratuites_Nbre() {

		$obj = new EmpDADSUParam();

		$obj->setActionsGratuites_Nbre(10.092018);
		$this->assertEquals(10.092018, $obj->getActionsGratuites_Nbre());
	}

	/**
	 * Tests the setActionsGratuites_ValeurU() method.
	 *
	 * @return void
	 */
	public function testSetActionsGratuites_ValeurU() {

		$obj = new EmpDADSUParam();

		$obj->setActionsGratuites_ValeurU(10.092018);
		$this->assertEquals(10.092018, $obj->getActionsGratuites_ValeurU());
	}

	/**
	 * Tests the setAnciennete() method.
	 *
	 * @return void
	 */
	public function testSetAnciennete() {

		$obj = new EmpDADSUParam();

		$obj->setAnciennete(10.092018);
		$this->assertEquals(10.092018, $obj->getAnciennete());
	}

	/**
	 * Tests the setAncienneteBTP() method.
	 *
	 * @return void
	 */
	public function testSetAncienneteBTP() {

		$obj = new EmpDADSUParam();

		$obj->setAncienneteBTP(10.092018);
		$this->assertEquals(10.092018, $obj->getAncienneteBTP());
	}

	/**
	 * Tests the setAnneePrepa() method.
	 *
	 * @return void
	 */
	public function testSetAnneePrepa() {

		$obj = new EmpDADSUParam();

		$obj->setAnneePrepa(10);
		$this->assertEquals(10, $obj->getAnneePrepa());
	}

	/**
	 * Tests the setAtBureau() method.
	 *
	 * @return void
	 */
	public function testSetAtBureau() {

		$obj = new EmpDADSUParam();

		$obj->setAtBureau("atBureau");
		$this->assertEquals("atBureau", $obj->getAtBureau());
	}

	/**
	 * Tests the setAtEtab() method.
	 *
	 * @return void
	 */
	public function testSetAtEtab() {

		$obj = new EmpDADSUParam();

		$obj->setAtEtab("atEtab");
		$this->assertEquals("atEtab", $obj->getAtEtab());
	}

	/**
	 * Tests the setAtRisque() method.
	 *
	 * @return void
	 */
	public function testSetAtRisque() {

		$obj = new EmpDADSUParam();

		$obj->setAtRisque("atRisque");
		$this->assertEquals("atRisque", $obj->getAtRisque());
	}

	/**
	 * Tests the setAtTaux() method.
	 *
	 * @return void
	 */
	public function testSetAtTaux() {

		$obj = new EmpDADSUParam();

		$obj->setAtTaux(10.092018);
		$this->assertEquals(10.092018, $obj->getAtTaux());
	}

	/**
	 * Tests the setAutresSommesExo_Code1() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Code1() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Code1("autresSommesExo_Code1");
		$this->assertEquals("autresSommesExo_Code1", $obj->getAutresSommesExo_Code1());
	}

	/**
	 * Tests the setAutresSommesExo_Code2() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Code2() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Code2("autresSommesExo_Code2");
		$this->assertEquals("autresSommesExo_Code2", $obj->getAutresSommesExo_Code2());
	}

	/**
	 * Tests the setAutresSommesExo_Code3() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Code3() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Code3("autresSommesExo_Code3");
		$this->assertEquals("autresSommesExo_Code3", $obj->getAutresSommesExo_Code3());
	}

	/**
	 * Tests the setAutresSommesExo_Code4() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Code4() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Code4("autresSommesExo_Code4");
		$this->assertEquals("autresSommesExo_Code4", $obj->getAutresSommesExo_Code4());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt1() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt1());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt2() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt2());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt3() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt3() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Mnt3(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt3());
	}

	/**
	 * Tests the setAutresSommesExo_Mnt4() method.
	 *
	 * @return void
	 */
	public function testSetAutresSommesExo_Mnt4() {

		$obj = new EmpDADSUParam();

		$obj->setAutresSommesExo_Mnt4(10.092018);
		$this->assertEquals(10.092018, $obj->getAutresSommesExo_Mnt4());
	}

	/**
	 * Tests the setBTQLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetBTQLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setBTQLieuTrav("bTQLieuTrav");
		$this->assertEquals("bTQLieuTrav", $obj->getBTQLieuTrav());
	}

	/**
	 * Tests the setBaseExoBrut1() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoBrut1() {

		$obj = new EmpDADSUParam();

		$obj->setBaseExoBrut1(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoBrut1());
	}

	/**
	 * Tests the setBaseExoBrut2() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoBrut2() {

		$obj = new EmpDADSUParam();

		$obj->setBaseExoBrut2(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoBrut2());
	}

	/**
	 * Tests the setBaseExoBrut3() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoBrut3() {

		$obj = new EmpDADSUParam();

		$obj->setBaseExoBrut3(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoBrut3());
	}

	/**
	 * Tests the setBaseExoPlaf1() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoPlaf1() {

		$obj = new EmpDADSUParam();

		$obj->setBaseExoPlaf1(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoPlaf1());
	}

	/**
	 * Tests the setBaseExoPlaf2() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoPlaf2() {

		$obj = new EmpDADSUParam();

		$obj->setBaseExoPlaf2(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoPlaf2());
	}

	/**
	 * Tests the setBaseExoPlaf3() method.
	 *
	 * @return void
	 */
	public function testSetBaseExoPlaf3() {

		$obj = new EmpDADSUParam();

		$obj->setBaseExoPlaf3(10.092018);
		$this->assertEquals(10.092018, $obj->getBaseExoPlaf3());
	}

	/**
	 * Tests the setBureauDistributeurLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetBureauDistributeurLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setBureauDistributeurLieuTrav("bureauDistributeurLieuTrav");
		$this->assertEquals("bureauDistributeurLieuTrav", $obj->getBureauDistributeurLieuTrav());
	}

	/**
	 * Tests the setCategorieBTP() method.
	 *
	 * @return void
	 */
	public function testSetCategorieBTP() {

		$obj = new EmpDADSUParam();

		$obj->setCategorieBTP("categorieBTP");
		$this->assertEquals("categorieBTP", $obj->getCategorieBTP());
	}

	/**
	 * Tests the setCodeCaract() method.
	 *
	 * @return void
	 */
	public function testSetCodeCaract() {

		$obj = new EmpDADSUParam();

		$obj->setCodeCaract("codeCaract");
		$this->assertEquals("codeCaract", $obj->getCodeCaract());
	}

	/**
	 * Tests the setCodeClasseCNBF() method.
	 *
	 * @return void
	 */
	public function testSetCodeClasseCNBF() {

		$obj = new EmpDADSUParam();

		$obj->setCodeClasseCNBF("codeClasseCNBF");
		$this->assertEquals("codeClasseCNBF", $obj->getCodeClasseCNBF());
	}

	/**
	 * Tests the setCodeContratTrav() method.
	 *
	 * @return void
	 */
	public function testSetCodeContratTrav() {

		$obj = new EmpDADSUParam();

		$obj->setCodeContratTrav("codeContratTrav");
		$this->assertEquals("codeContratTrav", $obj->getCodeContratTrav());
	}

	/**
	 * Tests the setCodeConventionCol() method.
	 *
	 * @return void
	 */
	public function testSetCodeConventionCol() {

		$obj = new EmpDADSUParam();

		$obj->setCodeConventionCol("codeConventionCol");
		$this->assertEquals("codeConventionCol", $obj->getCodeConventionCol());
	}

	/**
	 * Tests the setCodeDecalagePaie() method.
	 *
	 * @return void
	 */
	public function testSetCodeDecalagePaie() {

		$obj = new EmpDADSUParam();

		$obj->setCodeDecalagePaie("codeDecalagePaie");
		$this->assertEquals("codeDecalagePaie", $obj->getCodeDecalagePaie());
	}

	/**
	 * Tests the setCodeDelegGestRisqueMaladie() method.
	 *
	 * @return void
	 */
	public function testSetCodeDelegGestRisqueMaladie() {

		$obj = new EmpDADSUParam();

		$obj->setCodeDelegGestRisqueMaladie("codeDelegGestRisqueMaladie");
		$this->assertEquals("codeDelegGestRisqueMaladie", $obj->getCodeDelegGestRisqueMaladie());
	}

	/**
	 * Tests the setCodeDroitContrat() method.
	 *
	 * @return void
	 */
	public function testSetCodeDroitContrat() {

		$obj = new EmpDADSUParam();

		$obj->setCodeDroitContrat("codeDroitContrat");
		$this->assertEquals("codeDroitContrat", $obj->getCodeDroitContrat());
	}

	/**
	 * Tests the setCodeEmplMult() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmplMult() {

		$obj = new EmpDADSUParam();

		$obj->setCodeEmplMult("codeEmplMult");
		$this->assertEquals("codeEmplMult", $obj->getCodeEmplMult());
	}

	/**
	 * Tests the setCodeEmploisMult() method.
	 *
	 * @return void
	 */
	public function testSetCodeEmploisMult() {

		$obj = new EmpDADSUParam();

		$obj->setCodeEmploisMult("codeEmploisMult");
		$this->assertEquals("codeEmploisMult", $obj->getCodeEmploisMult());
	}

	/**
	 * Tests the setCodeEtablissement() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtablissement() {

		$obj = new EmpDADSUParam();

		$obj->setCodeEtablissement(10);
		$this->assertEquals(10, $obj->getCodeEtablissement());
	}

	/**
	 * Tests the setCodeEtatContratPrud() method.
	 *
	 * @return void
	 */
	public function testSetCodeEtatContratPrud() {

		$obj = new EmpDADSUParam();

		$obj->setCodeEtatContratPrud("codeEtatContratPrud");
		$this->assertEquals("codeEtatContratPrud", $obj->getCodeEtatContratPrud());
	}

	/**
	 * Tests the setCodeExtensionAlsaceMoselle() method.
	 *
	 * @return void
	 */
	public function testSetCodeExtensionAlsaceMoselle() {

		$obj = new EmpDADSUParam();

		$obj->setCodeExtensionAlsaceMoselle("codeExtensionAlsaceMoselle");
		$this->assertEquals("codeExtensionAlsaceMoselle", $obj->getCodeExtensionAlsaceMoselle());
	}

	/**
	 * Tests the setCodeInseeLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetCodeInseeLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setCodeInseeLieuTrav("codeInseeLieuTrav");
		$this->assertEquals("codeInseeLieuTrav", $obj->getCodeInseeLieuTrav());
	}

	/**
	 * Tests the setCodeMotifDebPer() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifDebPer() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifDebPer("codeMotifDebPer");
		$this->assertEquals("codeMotifDebPer", $obj->getCodeMotifDebPer());
	}

	/**
	 * Tests the setCodeMotifDebPer2() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifDebPer2() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifDebPer2("codeMotifDebPer2");
		$this->assertEquals("codeMotifDebPer2", $obj->getCodeMotifDebPer2());
	}

	/**
	 * Tests the setCodeMotifDebPer3() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifDebPer3() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifDebPer3("codeMotifDebPer3");
		$this->assertEquals("codeMotifDebPer3", $obj->getCodeMotifDebPer3());
	}

	/**
	 * Tests the setCodeMotifDebPer4() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifDebPer4() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifDebPer4("codeMotifDebPer4");
		$this->assertEquals("codeMotifDebPer4", $obj->getCodeMotifDebPer4());
	}

	/**
	 * Tests the setCodeMotifDebPer5() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifDebPer5() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifDebPer5("codeMotifDebPer5");
		$this->assertEquals("codeMotifDebPer5", $obj->getCodeMotifDebPer5());
	}

	/**
	 * Tests the setCodeMotifFinPer() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifFinPer() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifFinPer("codeMotifFinPer");
		$this->assertEquals("codeMotifFinPer", $obj->getCodeMotifFinPer());
	}

	/**
	 * Tests the setCodeMotifFinPer2() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifFinPer2() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifFinPer2("codeMotifFinPer2");
		$this->assertEquals("codeMotifFinPer2", $obj->getCodeMotifFinPer2());
	}

	/**
	 * Tests the setCodeMotifFinPer3() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifFinPer3() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifFinPer3("codeMotifFinPer3");
		$this->assertEquals("codeMotifFinPer3", $obj->getCodeMotifFinPer3());
	}

	/**
	 * Tests the setCodeMotifFinPer4() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifFinPer4() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifFinPer4("codeMotifFinPer4");
		$this->assertEquals("codeMotifFinPer4", $obj->getCodeMotifFinPer4());
	}

	/**
	 * Tests the setCodeMotifFinPer5() method.
	 *
	 * @return void
	 */
	public function testSetCodeMotifFinPer5() {

		$obj = new EmpDADSUParam();

		$obj->setCodeMotifFinPer5("codeMotifFinPer5");
		$this->assertEquals("codeMotifFinPer5", $obj->getCodeMotifFinPer5());
	}

	/**
	 * Tests the setCodeNatureBaseCotisations() method.
	 *
	 * @return void
	 */
	public function testSetCodeNatureBaseCotisations() {

		$obj = new EmpDADSUParam();

		$obj->setCodeNatureBaseCotisations("codeNatureBaseCotisations");
		$this->assertEquals("codeNatureBaseCotisations", $obj->getCodeNatureBaseCotisations());
	}

	/**
	 * Tests the setCodeOfficielCommuneLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetCodeOfficielCommuneLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setCodeOfficielCommuneLieuTrav("codeOfficielCommuneLieuTrav");
		$this->assertEquals("codeOfficielCommuneLieuTrav", $obj->getCodeOfficielCommuneLieuTrav());
	}

	/**
	 * Tests the setCodePostalLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetCodePostalLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setCodePostalLieuTrav("codePostalLieuTrav");
		$this->assertEquals("codePostalLieuTrav", $obj->getCodePostalLieuTrav());
	}

	/**
	 * Tests the setCodeRegime1() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegime1() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegime1("codeRegime1");
		$this->assertEquals("codeRegime1", $obj->getCodeRegime1());
	}

	/**
	 * Tests the setCodeRegime2() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegime2() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegime2("codeRegime2");
		$this->assertEquals("codeRegime2", $obj->getCodeRegime2());
	}

	/**
	 * Tests the setCodeRegime3() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegime3() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegime3("codeRegime3");
		$this->assertEquals("codeRegime3", $obj->getCodeRegime3());
	}

	/**
	 * Tests the setCodeRegimeBTP() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeBTP() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegimeBTP("codeRegimeBTP");
		$this->assertEquals("codeRegimeBTP", $obj->getCodeRegimeBTP());
	}

	/**
	 * Tests the setCodeRegimeBaseObl() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeBaseObl() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegimeBaseObl("codeRegimeBaseObl");
		$this->assertEquals("codeRegimeBaseObl", $obj->getCodeRegimeBaseObl());
	}

	/**
	 * Tests the setCodeRegimeBaseOblAT() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeBaseOblAT() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegimeBaseOblAT("codeRegimeBaseOblAT");
		$this->assertEquals("codeRegimeBaseOblAT", $obj->getCodeRegimeBaseOblAT());
	}

	/**
	 * Tests the setCodeRegimeBaseOblMaladie() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeBaseOblMaladie() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegimeBaseOblMaladie("codeRegimeBaseOblMaladie");
		$this->assertEquals("codeRegimeBaseOblMaladie", $obj->getCodeRegimeBaseOblMaladie());
	}

	/**
	 * Tests the setCodeRegimeBaseOblVieilPat() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeBaseOblVieilPat() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegimeBaseOblVieilPat("codeRegimeBaseOblVieilPat");
		$this->assertEquals("codeRegimeBaseOblVieilPat", $obj->getCodeRegimeBaseOblVieilPat());
	}

	/**
	 * Tests the setCodeRegimeBaseOblVieilSal() method.
	 *
	 * @return void
	 */
	public function testSetCodeRegimeBaseOblVieilSal() {

		$obj = new EmpDADSUParam();

		$obj->setCodeRegimeBaseOblVieilSal("codeRegimeBaseOblVieilSal");
		$this->assertEquals("codeRegimeBaseOblVieilSal", $obj->getCodeRegimeBaseOblVieilSal());
	}

	/**
	 * Tests the setCodeStatutCateg() method.
	 *
	 * @return void
	 */
	public function testSetCodeStatutCateg() {

		$obj = new EmpDADSUParam();

		$obj->setCodeStatutCateg("codeStatutCateg");
		$this->assertEquals("codeStatutCateg", $obj->getCodeStatutCateg());
	}

	/**
	 * Tests the setCodeStatutCategConv() method.
	 *
	 * @return void
	 */
	public function testSetCodeStatutCategConv() {

		$obj = new EmpDADSUParam();

		$obj->setCodeStatutCategConv("codeStatutCategConv");
		$this->assertEquals("codeStatutCategConv", $obj->getCodeStatutCategConv());
	}

	/**
	 * Tests the setCodeStatutCategIrc() method.
	 *
	 * @return void
	 */
	public function testSetCodeStatutCategIrc() {

		$obj = new EmpDADSUParam();

		$obj->setCodeStatutCategIrc("codeStatutCategIrc");
		$this->assertEquals("codeStatutCategIrc", $obj->getCodeStatutCategIrc());
	}

	/**
	 * Tests the setCodeStatutPro() method.
	 *
	 * @return void
	 */
	public function testSetCodeStatutPro() {

		$obj = new EmpDADSUParam();

		$obj->setCodeStatutPro("codeStatutPro");
		$this->assertEquals("codeStatutPro", $obj->getCodeStatutPro());
	}

	/**
	 * Tests the setCodeTypeExo1() method.
	 *
	 * @return void
	 */
	public function testSetCodeTypeExo1() {

		$obj = new EmpDADSUParam();

		$obj->setCodeTypeExo1("codeTypeExo1");
		$this->assertEquals("codeTypeExo1", $obj->getCodeTypeExo1());
	}

	/**
	 * Tests the setCodeTypeExo2() method.
	 *
	 * @return void
	 */
	public function testSetCodeTypeExo2() {

		$obj = new EmpDADSUParam();

		$obj->setCodeTypeExo2("codeTypeExo2");
		$this->assertEquals("codeTypeExo2", $obj->getCodeTypeExo2());
	}

	/**
	 * Tests the setCodeTypeExo3() method.
	 *
	 * @return void
	 */
	public function testSetCodeTypeExo3() {

		$obj = new EmpDADSUParam();

		$obj->setCodeTypeExo3("codeTypeExo3");
		$this->assertEquals("codeTypeExo3", $obj->getCodeTypeExo3());
	}

	/**
	 * Tests the setCommentaire() method.
	 *
	 * @return void
	 */
	public function testSetCommentaire() {

		$obj = new EmpDADSUParam();

		$obj->setCommentaire("commentaire");
		$this->assertEquals("commentaire", $obj->getCommentaire());
	}

	/**
	 * Tests the setComplementLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetComplementLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setComplementLieuTrav("complementLieuTrav");
		$this->assertEquals("complementLieuTrav", $obj->getComplementLieuTrav());
	}

	/**
	 * Tests the setDADSUConjointSalarie() method.
	 *
	 * @return void
	 */
	public function testSetDADSUConjointSalarie() {

		$obj = new EmpDADSUParam();

		$obj->setDADSUConjointSalarie("dADSUConjointSalarie");
		$this->assertEquals("dADSUConjointSalarie", $obj->getDADSUConjointSalarie());
	}

	/**
	 * Tests the setDADSU_NbOptions() method.
	 *
	 * @return void
	 */
	public function testSetDADSU_NbOptions() {

		$obj = new EmpDADSUParam();

		$obj->setDADSU_NbOptions(10.092018);
		$this->assertEquals(10.092018, $obj->getDADSU_NbOptions());
	}

	/**
	 * Tests the setDADSU_PrixSouscriptOpt() method.
	 *
	 * @return void
	 */
	public function testSetDADSU_PrixSouscriptOpt() {

		$obj = new EmpDADSUParam();

		$obj->setDADSU_PrixSouscriptOpt(10.092018);
		$this->assertEquals(10.092018, $obj->getDADSU_PrixSouscriptOpt());
	}

	/**
	 * Tests the setDADSU_ValeurAction() method.
	 *
	 * @return void
	 */
	public function testSetDADSU_ValeurAction() {

		$obj = new EmpDADSUParam();

		$obj->setDADSU_ValeurAction(10.092018);
		$this->assertEquals(10.092018, $obj->getDADSU_ValeurAction());
	}

	/**
	 * Tests the setDateCtrlNorme() method.
	 *
	 * @return void
	 */
	public function testSetDateCtrlNorme() {

		$obj = new EmpDADSUParam();

		$obj->setDateCtrlNorme(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrlNorme());
	}

	/**
	 * Tests the setDateCtrlNormeBTP() method.
	 *
	 * @return void
	 */
	public function testSetDateCtrlNormeBTP() {

		$obj = new EmpDADSUParam();

		$obj->setDateCtrlNormeBTP(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrlNormeBTP());
	}

	/**
	 * Tests the setDateCtrlNormePrev() method.
	 *
	 * @return void
	 */
	public function testSetDateCtrlNormePrev() {

		$obj = new EmpDADSUParam();

		$obj->setDateCtrlNormePrev(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrlNormePrev());
	}

	/**
	 * Tests the setDateCtrlNormeRet() method.
	 *
	 * @return void
	 */
	public function testSetDateCtrlNormeRet() {

		$obj = new EmpDADSUParam();

		$obj->setDateCtrlNormeRet(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCtrlNormeRet());
	}

	/**
	 * Tests the setDebutPeriodeDecl() method.
	 *
	 * @return void
	 */
	public function testSetDebutPeriodeDecl() {

		$obj = new EmpDADSUParam();

		$obj->setDebutPeriodeDecl(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getDebutPeriodeDecl());
	}

	/**
	 * Tests the setEchelon() method.
	 *
	 * @return void
	 */
	public function testSetEchelon() {

		$obj = new EmpDADSUParam();

		$obj->setEchelon("echelon");
		$this->assertEquals("echelon", $obj->getEchelon());
	}

	/**
	 * Tests the setEmploi() method.
	 *
	 * @return void
	 */
	public function testSetEmploi() {

		$obj = new EmpDADSUParam();

		$obj->setEmploi("emploi");
		$this->assertEquals("emploi", $obj->getEmploi());
	}

	/**
	 * Tests the setEpargneSal_Code1() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Code1() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Code1("epargneSal_Code1");
		$this->assertEquals("epargneSal_Code1", $obj->getEpargneSal_Code1());
	}

	/**
	 * Tests the setEpargneSal_Code2() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Code2() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Code2("epargneSal_Code2");
		$this->assertEquals("epargneSal_Code2", $obj->getEpargneSal_Code2());
	}

	/**
	 * Tests the setEpargneSal_Code3() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Code3() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Code3("epargneSal_Code3");
		$this->assertEquals("epargneSal_Code3", $obj->getEpargneSal_Code3());
	}

	/**
	 * Tests the setEpargneSal_Code4() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Code4() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Code4("epargneSal_Code4");
		$this->assertEquals("epargneSal_Code4", $obj->getEpargneSal_Code4());
	}

	/**
	 * Tests the setEpargneSal_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt1() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt1());
	}

	/**
	 * Tests the setEpargneSal_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt2() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt2());
	}

	/**
	 * Tests the setEpargneSal_Mnt3() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt3() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Mnt3(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt3());
	}

	/**
	 * Tests the setEpargneSal_Mnt4() method.
	 *
	 * @return void
	 */
	public function testSetEpargneSal_Mnt4() {

		$obj = new EmpDADSUParam();

		$obj->setEpargneSal_Mnt4(10.092018);
		$this->assertEquals(10.092018, $obj->getEpargneSal_Mnt4());
	}

	/**
	 * Tests the setEtatCtrlNorme() method.
	 *
	 * @return void
	 */
	public function testSetEtatCtrlNorme() {

		$obj = new EmpDADSUParam();

		$obj->setEtatCtrlNorme("etatCtrlNorme");
		$this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
	}

	/**
	 * Tests the setEtatCtrlNormeBTP() method.
	 *
	 * @return void
	 */
	public function testSetEtatCtrlNormeBTP() {

		$obj = new EmpDADSUParam();

		$obj->setEtatCtrlNormeBTP("etatCtrlNormeBTP");
		$this->assertEquals("etatCtrlNormeBTP", $obj->getEtatCtrlNormeBTP());
	}

	/**
	 * Tests the setEtatCtrlNormePrev() method.
	 *
	 * @return void
	 */
	public function testSetEtatCtrlNormePrev() {

		$obj = new EmpDADSUParam();

		$obj->setEtatCtrlNormePrev("etatCtrlNormePrev");
		$this->assertEquals("etatCtrlNormePrev", $obj->getEtatCtrlNormePrev());
	}

	/**
	 * Tests the setEtatCtrlNormeRet() method.
	 *
	 * @return void
	 */
	public function testSetEtatCtrlNormeRet() {

		$obj = new EmpDADSUParam();

		$obj->setEtatCtrlNormeRet("etatCtrlNormeRet");
		$this->assertEquals("etatCtrlNormeRet", $obj->getEtatCtrlNormeRet());
	}

	/**
	 * Tests the setExoAGFF() method.
	 *
	 * @return void
	 */
	public function testSetExoAGFF() {

		$obj = new EmpDADSUParam();

		$obj->setExoAGFF(true);
		$this->assertEquals(true, $obj->getExoAGFF());
	}

	/**
	 * Tests the setFinPeriodeDecl() method.
	 *
	 * @return void
	 */
	public function testSetFinPeriodeDecl() {

		$obj = new EmpDADSUParam();

		$obj->setFinPeriodeDecl(new DateTime("2018-09-10"));
		$this->assertEquals(new DateTime("2018-09-10"), $obj->getFinPeriodeDecl());
	}

	/**
	 * Tests the setGPEC_MntExoCSGCRDS() method.
	 *
	 * @return void
	 */
	public function testSetGPEC_MntExoCSGCRDS() {

		$obj = new EmpDADSUParam();

		$obj->setGPEC_MntExoCSGCRDS(10.092018);
		$this->assertEquals(10.092018, $obj->getGPEC_MntExoCSGCRDS());
	}

	/**
	 * Tests the setGPEC_MntExoCotSecu() method.
	 *
	 * @return void
	 */
	public function testSetGPEC_MntExoCotSecu() {

		$obj = new EmpDADSUParam();

		$obj->setGPEC_MntExoCotSecu(10.092018);
		$this->assertEquals(10.092018, $obj->getGPEC_MntExoCotSecu());
	}

	/**
	 * Tests the setIndemnCpPlaf() method.
	 *
	 * @return void
	 */
	public function testSetIndemnCpPlaf() {

		$obj = new EmpDADSUParam();

		$obj->setIndemnCpPlaf(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnCpPlaf());
	}

	/**
	 * Tests the setIndemnRupture_Code1() method.
	 *
	 * @return void
	 */
	public function testSetIndemnRupture_Code1() {

		$obj = new EmpDADSUParam();

		$obj->setIndemnRupture_Code1("indemnRupture_Code1");
		$this->assertEquals("indemnRupture_Code1", $obj->getIndemnRupture_Code1());
	}

	/**
	 * Tests the setIndemnRupture_Code2() method.
	 *
	 * @return void
	 */
	public function testSetIndemnRupture_Code2() {

		$obj = new EmpDADSUParam();

		$obj->setIndemnRupture_Code2("indemnRupture_Code2");
		$this->assertEquals("indemnRupture_Code2", $obj->getIndemnRupture_Code2());
	}

	/**
	 * Tests the setIndemnRupture_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetIndemnRupture_Mnt1() {

		$obj = new EmpDADSUParam();

		$obj->setIndemnRupture_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnRupture_Mnt1());
	}

	/**
	 * Tests the setIndemnRupture_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetIndemnRupture_Mnt2() {

		$obj = new EmpDADSUParam();

		$obj->setIndemnRupture_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getIndemnRupture_Mnt2());
	}

	/**
	 * Tests the setIndice() method.
	 *
	 * @return void
	 */
	public function testSetIndice() {

		$obj = new EmpDADSUParam();

		$obj->setIndice("indice");
		$this->assertEquals("indice", $obj->getIndice());
	}

	/**
	 * Tests the setNbPeriodiciteIrcantec() method.
	 *
	 * @return void
	 */
	public function testSetNbPeriodiciteIrcantec() {

		$obj = new EmpDADSUParam();

		$obj->setNbPeriodiciteIrcantec(10.092018);
		$this->assertEquals(10.092018, $obj->getNbPeriodiciteIrcantec());
	}

	/**
	 * Tests the setNbhEtabBTP() method.
	 *
	 * @return void
	 */
	public function testSetNbhEtabBTP() {

		$obj = new EmpDADSUParam();

		$obj->setNbhEtabBTP(10.092018);
		$this->assertEquals(10.092018, $obj->getNbhEtabBTP());
	}

	/**
	 * Tests the setNbhSalBTP() method.
	 *
	 * @return void
	 */
	public function testSetNbhSalBTP() {

		$obj = new EmpDADSUParam();

		$obj->setNbhSalBTP(10.092018);
		$this->assertEquals(10.092018, $obj->getNbhSalBTP());
	}

	/**
	 * Tests the setNicEtabAffectation() method.
	 *
	 * @return void
	 */
	public function testSetNicEtabAffectation() {

		$obj = new EmpDADSUParam();

		$obj->setNicEtabAffectation("nicEtabAffectation");
		$this->assertEquals("nicEtabAffectation", $obj->getNicEtabAffectation());
	}

	/**
	 * Tests the setNiveau() method.
	 *
	 * @return void
	 */
	public function testSetNiveau() {

		$obj = new EmpDADSUParam();

		$obj->setNiveau("niveau");
		$this->assertEquals("niveau", $obj->getNiveau());
	}

	/**
	 * Tests the setNomVilleInseeLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetNomVilleInseeLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setNomVilleInseeLieuTrav("nomVilleInseeLieuTrav");
		$this->assertEquals("nomVilleInseeLieuTrav", $obj->getNomVilleInseeLieuTrav());
	}

	/**
	 * Tests the setNomVilleLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetNomVilleLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setNomVilleLieuTrav("nomVilleLieuTrav");
		$this->assertEquals("nomVilleLieuTrav", $obj->getNomVilleLieuTrav());
	}

	/**
	 * Tests the setNomVoieLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetNomVoieLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setNomVoieLieuTrav("nomVoieLieuTrav");
		$this->assertEquals("nomVoieLieuTrav", $obj->getNomVoieLieuTrav());
	}

	/**
	 * Tests the setNumVoieLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetNumVoieLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setNumVoieLieuTrav("numVoieLieuTrav");
		$this->assertEquals("numVoieLieuTrav", $obj->getNumVoieLieuTrav());
	}

	/**
	 * Tests the setNumero() method.
	 *
	 * @return void
	 */
	public function testSetNumero() {

		$obj = new EmpDADSUParam();

		$obj->setNumero("numero");
		$this->assertEquals("numero", $obj->getNumero());
	}

	/**
	 * Tests the setNumeroAdhesionBTP() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAdhesionBTP() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroAdhesionBTP("numeroAdhesionBTP");
		$this->assertEquals("numeroAdhesionBTP", $obj->getNumeroAdhesionBTP());
	}

	/**
	 * Tests the setNumeroAffilFNC() method.
	 *
	 * @return void
	 */
	public function testSetNumeroAffilFNC() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroAffilFNC("numeroAffilFNC");
		$this->assertEquals("numeroAffilFNC", $obj->getNumeroAffilFNC());
	}

	/**
	 * Tests the setNumeroOrdre() method.
	 *
	 * @return void
	 */
	public function testSetNumeroOrdre() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroOrdre(10);
		$this->assertEquals(10, $obj->getNumeroOrdre());
	}

	/**
	 * Tests the setNumeroRattach1() method.
	 *
	 * @return void
	 */
	public function testSetNumeroRattach1() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroRattach1("numeroRattach1");
		$this->assertEquals("numeroRattach1", $obj->getNumeroRattach1());
	}

	/**
	 * Tests the setNumeroRattach2() method.
	 *
	 * @return void
	 */
	public function testSetNumeroRattach2() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroRattach2("numeroRattach2");
		$this->assertEquals("numeroRattach2", $obj->getNumeroRattach2());
	}

	/**
	 * Tests the setNumeroRattach3() method.
	 *
	 * @return void
	 */
	public function testSetNumeroRattach3() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroRattach3("numeroRattach3");
		$this->assertEquals("numeroRattach3", $obj->getNumeroRattach3());
	}

	/**
	 * Tests the setNumeroRattachBTP() method.
	 *
	 * @return void
	 */
	public function testSetNumeroRattachBTP() {

		$obj = new EmpDADSUParam();

		$obj->setNumeroRattachBTP("numeroRattachBTP");
		$this->assertEquals("numeroRattachBTP", $obj->getNumeroRattachBTP());
	}

	/**
	 * Tests the setParticipPatronAvtge_Code1() method.
	 *
	 * @return void
	 */
	public function testSetParticipPatronAvtge_Code1() {

		$obj = new EmpDADSUParam();

		$obj->setParticipPatronAvtge_Code1("participPatronAvtge_Code1");
		$this->assertEquals("participPatronAvtge_Code1", $obj->getParticipPatronAvtge_Code1());
	}

	/**
	 * Tests the setParticipPatronAvtge_Code2() method.
	 *
	 * @return void
	 */
	public function testSetParticipPatronAvtge_Code2() {

		$obj = new EmpDADSUParam();

		$obj->setParticipPatronAvtge_Code2("participPatronAvtge_Code2");
		$this->assertEquals("participPatronAvtge_Code2", $obj->getParticipPatronAvtge_Code2());
	}

	/**
	 * Tests the setParticipPatronAvtge_Mnt1() method.
	 *
	 * @return void
	 */
	public function testSetParticipPatronAvtge_Mnt1() {

		$obj = new EmpDADSUParam();

		$obj->setParticipPatronAvtge_Mnt1(10.092018);
		$this->assertEquals(10.092018, $obj->getParticipPatronAvtge_Mnt1());
	}

	/**
	 * Tests the setParticipPatronAvtge_Mnt2() method.
	 *
	 * @return void
	 */
	public function testSetParticipPatronAvtge_Mnt2() {

		$obj = new EmpDADSUParam();

		$obj->setParticipPatronAvtge_Mnt2(10.092018);
		$this->assertEquals(10.092018, $obj->getParticipPatronAvtge_Mnt2());
	}

	/**
	 * Tests the setPeriodiciteIrcantec() method.
	 *
	 * @return void
	 */
	public function testSetPeriodiciteIrcantec() {

		$obj = new EmpDADSUParam();

		$obj->setPeriodiciteIrcantec("periodiciteIrcantec");
		$this->assertEquals("periodiciteIrcantec", $obj->getPeriodiciteIrcantec());
	}

	/**
	 * Tests the setPosition() method.
	 *
	 * @return void
	 */
	public function testSetPosition() {

		$obj = new EmpDADSUParam();

		$obj->setPosition("position");
		$this->assertEquals("position", $obj->getPosition());
	}

	/**
	 * Tests the setPourcentAct() method.
	 *
	 * @return void
	 */
	public function testSetPourcentAct() {

		$obj = new EmpDADSUParam();

		$obj->setPourcentAct(10.092018);
		$this->assertEquals(10.092018, $obj->getPourcentAct());
	}

	/**
	 * Tests the setRemunMedecins() method.
	 *
	 * @return void
	 */
	public function testSetRemunMedecins() {

		$obj = new EmpDADSUParam();

		$obj->setRemunMedecins(10.092018);
		$this->assertEquals(10.092018, $obj->getRemunMedecins());
	}

	/**
	 * Tests the setSiretLieuTrav() method.
	 *
	 * @return void
	 */
	public function testSetSiretLieuTrav() {

		$obj = new EmpDADSUParam();

		$obj->setSiretLieuTrav("siretLieuTrav");
		$this->assertEquals("siretLieuTrav", $obj->getSiretLieuTrav());
	}

	/**
	 * Tests the setStatutCotisantBTP() method.
	 *
	 * @return void
	 */
	public function testSetStatutCotisantBTP() {

		$obj = new EmpDADSUParam();

		$obj->setStatutCotisantBTP("statutCotisantBTP");
		$this->assertEquals("statutCotisantBTP", $obj->getStatutCotisantBTP());
	}

	/**
	 * Tests the setSupplFam() method.
	 *
	 * @return void
	 */
	public function testSetSupplFam() {

		$obj = new EmpDADSUParam();

		$obj->setSupplFam(10.092018);
		$this->assertEquals(10.092018, $obj->getSupplFam());
	}

	/**
	 * Tests the setTDS59() method.
	 *
	 * @return void
	 */
	public function testSetTDS59() {

		$obj = new EmpDADSUParam();

		$obj->setTDS59("tDS59");
		$this->assertEquals("tDS59", $obj->getTDS59());
	}

	/**
	 * Tests the setTypeAffilBTP() method.
	 *
	 * @return void
	 */
	public function testSetTypeAffilBTP() {

		$obj = new EmpDADSUParam();

		$obj->setTypeAffilBTP("typeAffilBTP");
		$this->assertEquals("typeAffilBTP", $obj->getTypeAffilBTP());
	}

}
