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
use WBW\Library\Quadratus\Model\QPaie\ConstantesEntreprise;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Constantes entreprise test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class ConstantesEntrepriseTest extends AbstractTestCase {

    /**
     * Tests setAbsenceExtra()
     *
     * @return void
     */
    public function testSetAbsenceExtra(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAbsenceExtra("absenceExtra");
        $this->assertEquals("absenceExtra", $obj->getAbsenceExtra());
    }

    /**
     * Tests setActiverPointageQws()
     *
     * @return void
     */
    public function testSetActiverPointageQws(): void {

        $obj = new ConstantesEntreprise();

        $obj->setActiverPointageQws(true);
        $this->assertEquals(true, $obj->getActiverPointageQws());
    }

    /**
     * Tests setAdhesionTdsNorme()
     *
     * @return void
     */
    public function testSetAdhesionTdsNorme(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAdhesionTdsNorme("adhesionTdsNorme");
        $this->assertEquals("adhesionTdsNorme", $obj->getAdhesionTdsNorme());
    }

    /**
     * Tests setAffaire()
     *
     * @return void
     */
    public function testSetAffaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAffaire("affaire");
        $this->assertEquals("affaire", $obj->getAffaire());
    }

    /**
     * Tests setAffectationTaux27()
     *
     * @return void
     */
    public function testSetAffectationTaux27(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAffectationTaux27(true);
        $this->assertEquals(true, $obj->getAffectationTaux27());
    }

    /**
     * Tests setAnalytiqueEmploye()
     *
     * @return void
     */
    public function testSetAnalytiqueEmploye(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAnalytiqueEmploye(true);
        $this->assertEquals(true, $obj->getAnalytiqueEmploye());
    }

    /**
     * Tests setArbitrageAuto()
     *
     * @return void
     */
    public function testSetArbitrageAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Tests setArchivageActif()
     *
     * @return void
     */
    public function testSetArchivageActif(): void {

        $obj = new ConstantesEntreprise();

        $obj->setArchivageActif(true);
        $this->assertEquals(true, $obj->getArchivageActif());
    }

    /**
     * Tests setAttestAuto()
     *
     * @return void
     */
    public function testSetAttestAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAttestAuto(true);
        $this->assertEquals(true, $obj->getAttestAuto());
    }

    /**
     * Tests setBeneficieCice()
     *
     * @return void
     */
    public function testSetBeneficieCice(): void {

        $obj = new ConstantesEntreprise();

        $obj->setBeneficieCice(true);
        $this->assertEquals(true, $obj->getBeneficieCice());
    }

    /**
     * Tests setBrutAlSalMinConv()
     *
     * @return void
     */
    public function testSetBrutAlSalMinConv(): void {

        $obj = new ConstantesEntreprise();

        $obj->setBrutAlSalMinConv(true);
        $this->assertEquals(true, $obj->getBrutAlSalMinConv());
    }

    /**
     * Tests setCalculAutoHTheorique()
     *
     * @return void
     */
    public function testSetCalculAutoHTheorique(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCalculAutoHTheorique(true);
        $this->assertEquals(true, $obj->getCalculAutoHTheorique());
    }

    /**
     * Tests setCertifAuto()
     *
     * @return void
     */
    public function testSetCertifAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCertifAuto(true);
        $this->assertEquals(true, $obj->getCertifAuto());
    }

    /**
     * Tests setChequesEuro()
     *
     * @return void
     */
    public function testSetChequesEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setChequesEuro("chequesEuro");
        $this->assertEquals("chequesEuro", $obj->getChequesEuro());
    }

    /**
     * Tests setChoixEditionChequeTc()
     *
     * @return void
     */
    public function testSetChoixEditionChequeTc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setChoixEditionChequeTc(true);
        $this->assertEquals(true, $obj->getChoixEditionChequeTc());
    }

    /**
     * Tests setCicePjMailCliDucsEdi()
     *
     * @return void
     */
    public function testSetCicePjMailCliDucsEdi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCicePjMailCliDucsEdi(true);
        $this->assertEquals(true, $obj->getCicePjMailCliDucsEdi());
    }

    /**
     * Tests setCleAcces1()
     *
     * @return void
     */
    public function testSetCleAcces1(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCleAcces1("cleAcces1");
        $this->assertEquals("cleAcces1", $obj->getCleAcces1());
    }

    /**
     * Tests setClePortable()
     *
     * @return void
     */
    public function testSetClePortable(): void {

        $obj = new ConstantesEntreprise();

        $obj->setClePortable("clePortable");
        $this->assertEquals("clePortable", $obj->getClePortable());
    }

    /**
     * Tests setCodeOrgBtpdadsu()
     *
     * @return void
     */
    public function testSetCodeOrgBtpdadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCodeOrgBtpdadsu("codeOrgBtpdadsu");
        $this->assertEquals("codeOrgBtpdadsu", $obj->getCodeOrgBtpdadsu());
    }

    /**
     * Tests setCollaborateuriPaie()
     *
     * @return void
     */
    public function testSetCollaborateuriPaie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCollaborateuriPaie("collaborateuriPaie");
        $this->assertEquals("collaborateuriPaie", $obj->getCollaborateuriPaie());
    }

    /**
     * Tests setCompression()
     *
     * @return void
     */
    public function testSetCompression(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCompression(true);
        $this->assertEquals(true, $obj->getCompression());
    }

    /**
     * Tests setCompteGainEuro()
     *
     * @return void
     */
    public function testSetCompteGainEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCompteGainEuro("compteGainEuro");
        $this->assertEquals("compteGainEuro", $obj->getCompteGainEuro());
    }

    /**
     * Tests setComptePerteEuro()
     *
     * @return void
     */
    public function testSetComptePerteEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setComptePerteEuro("comptePerteEuro");
        $this->assertEquals("comptePerteEuro", $obj->getComptePerteEuro());
    }

    /**
     * Tests setCptaElitEuros()
     *
     * @return void
     */
    public function testSetCptaElitEuros(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCptaElitEuros(true);
        $this->assertEquals(true, $obj->getCptaElitEuros());
    }

    /**
     * Tests setCtrlAutoCp()
     *
     * @return void
     */
    public function testSetCtrlAutoCp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlAutoCp(true);
        $this->assertEquals(true, $obj->getCtrlAutoCp());
    }

    /**
     * Tests setCtrlAutoCpAnticip()
     *
     * @return void
     */
    public function testSetCtrlAutoCpAnticip(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlAutoCpAnticip(true);
        $this->assertEquals(true, $obj->getCtrlAutoCpAnticip());
    }

    /**
     * Tests setCtrlTauxBase()
     *
     * @return void
     */
    public function testSetCtrlTauxBase(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlTauxBase(true);
        $this->assertEquals(true, $obj->getCtrlTauxBase());
    }

    /**
     * Tests setDadsDernierChoixGestionAen()
     *
     * @return void
     */
    public function testSetDadsDernierChoixGestionAen(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsDernierChoixGestionAen("dadsDernierChoixGestionAen");
        $this->assertEquals("dadsDernierChoixGestionAen", $obj->getDadsDernierChoixGestionAen());
    }

    /**
     * Tests setDadsTypeGestionAen()
     *
     * @return void
     */
    public function testSetDadsTypeGestionAen(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsTypeGestionAen("dadsTypeGestionAen");
        $this->assertEquals("dadsTypeGestionAen", $obj->getDadsTypeGestionAen());
    }

    /**
     * Tests setDadsuNumAgrAnsp()
     *
     * @return void
     */
    public function testSetDadsuNumAgrAnsp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsuNumAgrAnsp("dadsuNumAgrAnsp");
        $this->assertEquals("dadsuNumAgrAnsp", $obj->getDadsuNumAgrAnsp());
    }

    /**
     * Tests setDadsuRefDec()
     *
     * @return void
     */
    public function testSetDadsuRefDec(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsuRefDec("dadsuRefDec");
        $this->assertEquals("dadsuRefDec", $obj->getDadsuRefDec());
    }

    /**
     * Tests setDasTypeDecl()
     *
     * @return void
     */
    public function testSetDasTypeDecl(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDasTypeDecl("dasTypeDecl");
        $this->assertEquals("dasTypeDecl", $obj->getDasTypeDecl());
    }

    /**
     * Tests setDasTypeDeclDetail()
     *
     * @return void
     */
    public function testSetDasTypeDeclDetail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDasTypeDeclDetail("dasTypeDeclDetail");
        $this->assertEquals("dasTypeDeclDetail", $obj->getDasTypeDeclDetail());
    }

    /**
     * Tests setDateDp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDp(): void {

        // Set a Date/time mock.
        $dateDp = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDateDp($dateDp);
        $this->assertSame($dateDp, $obj->getDateDp());
    }

    /**
     * Tests setDebutPeriodeDas()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeDas(): void {

        // Set a Date/time mock.
        $debutPeriodeDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDebutPeriodeDas($debutPeriodeDas);
        $this->assertSame($debutPeriodeDas, $obj->getDebutPeriodeDas());
    }

    /**
     * Tests setDebutPeriodeHistoDas()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeHistoDas(): void {

        // Set a Date/time mock.
        $debutPeriodeHistoDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDebutPeriodeHistoDas($debutPeriodeHistoDas);
        $this->assertSame($debutPeriodeHistoDas, $obj->getDebutPeriodeHistoDas());
    }

    /**
     * Tests setDeductionHSupFillon()
     *
     * @return void
     */
    public function testSetDeductionHSupFillon(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDeductionHSupFillon(true);
        $this->assertEquals(true, $obj->getDeductionHSupFillon());
    }

    /**
     * Tests setDeduireHSupNonStructurelle()
     *
     * @return void
     */
    public function testSetDeduireHSupNonStructurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDeduireHSupNonStructurelle(true);
        $this->assertEquals(true, $obj->getDeduireHSupNonStructurelle());
    }

    /**
     * Tests setDernierIndiceBul()
     *
     * @return void
     */
    public function testSetDernierIndiceBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDernierIndiceBul(10);
        $this->assertEquals(10, $obj->getDernierIndiceBul());
    }

    /**
     * Tests setDestPointIrc()
     *
     * @return void
     */
    public function testSetDestPointIrc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDestPointIrc("destPointIrc");
        $this->assertEquals("destPointIrc", $obj->getDestPointIrc());
    }

    /**
     * Tests setDestTriPoint()
     *
     * @return void
     */
    public function testSetDestTriPoint(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDestTriPoint("destTriPoint");
        $this->assertEquals("destTriPoint", $obj->getDestTriPoint());
    }

    /**
     * Tests setDossierProprete()
     *
     * @return void
     */
    public function testSetDossierProprete(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDossierProprete("dossierProprete");
        $this->assertEquals("dossierProprete", $obj->getDossierProprete());
    }

    /**
     * Tests setDossierSurWeb()
     *
     * @return void
     */
    public function testSetDossierSurWeb(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDossierSurWeb(true);
        $this->assertEquals(true, $obj->getDossierSurWeb());
    }

    /**
     * Tests setDsCodeCollab()
     *
     * @return void
     */
    public function testSetDsCodeCollab(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Tests setDsDateRetour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour(): void {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Tests setDsDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie(): void {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Tests setDsFusion()
     *
     * @return void
     */
    public function testSetDsFusion(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDsFusion("dsFusion");
        $this->assertEquals("dsFusion", $obj->getDsFusion());
    }

    /**
     * Tests setDsTypeEdition()
     *
     * @return void
     */
    public function testSetDsTypeEdition(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDsTypeEdition("dsTypeEdition");
        $this->assertEquals("dsTypeEdition", $obj->getDsTypeEdition());
    }

    /**
     * Tests setDtDebutPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutPeriode(): void {

        // Set a Date/time mock.
        $dtDebutPeriode = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDtDebutPeriode($dtDebutPeriode);
        $this->assertSame($dtDebutPeriode, $obj->getDtDebutPeriode());
    }

    /**
     * Tests setDtFinPeriode()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPeriode(): void {

        // Set a Date/time mock.
        $dtFinPeriode = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDtFinPeriode($dtFinPeriode);
        $this->assertSame($dtFinPeriode, $obj->getDtFinPeriode());
    }

    /**
     * Tests setDucsFrancEuro()
     *
     * @return void
     */
    public function testSetDucsFrancEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDucsFrancEuro("ducsFrancEuro");
        $this->assertEquals("ducsFrancEuro", $obj->getDucsFrancEuro());
    }

    /**
     * Tests setEcrType()
     *
     * @return void
     */
    public function testSetEcrType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEcrType("ecrType");
        $this->assertEquals("ecrType", $obj->getEcrType());
    }

    /**
     * Tests setEdBordChoixModele()
     *
     * @return void
     */
    public function testSetEdBordChoixModele(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordChoixModele("edBordChoixModele");
        $this->assertEquals("edBordChoixModele", $obj->getEdBordChoixModele());
    }

    /**
     * Tests setEdBordRuptureEmp()
     *
     * @return void
     */
    public function testSetEdBordRuptureEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordRuptureEmp(true);
        $this->assertEquals(true, $obj->getEdBordRuptureEmp());
    }

    /**
     * Tests setEdBordTypeImp()
     *
     * @return void
     */
    public function testSetEdBordTypeImp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordTypeImp("edBordTypeImp");
        $this->assertEquals("edBordTypeImp", $obj->getEdBordTypeImp());
    }

    /**
     * Tests setEdBordereau()
     *
     * @return void
     */
    public function testSetEdBordereau(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereau(true);
        $this->assertEquals(true, $obj->getEdBordereau());
    }

    /**
     * Tests setEdBordereauPrep()
     *
     * @return void
     */
    public function testSetEdBordereauPrep(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereauPrep(true);
        $this->assertEquals(true, $obj->getEdBordereauPrep());
    }

    /**
     * Tests setEdBordereauPrepa()
     *
     * @return void
     */
    public function testSetEdBordereauPrepa(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereauPrepa(true);
        $this->assertEquals(true, $obj->getEdBordereauPrepa());
    }

    /**
     * Tests setEdBulLastFax()
     *
     * @return void
     */
    public function testSetEdBulLastFax(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulLastFax("edBulLastFax");
        $this->assertEquals("edBulLastFax", $obj->getEdBulLastFax());
    }

    /**
     * Tests setEdBulLastMail()
     *
     * @return void
     */
    public function testSetEdBulLastMail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulLastMail("edBulLastMail");
        $this->assertEquals("edBulLastMail", $obj->getEdBulLastMail());
    }

    /**
     * Tests setEdBulTypeSortie()
     *
     * @return void
     */
    public function testSetEdBulTypeSortie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulTypeSortie("edBulTypeSortie");
        $this->assertEquals("edBulTypeSortie", $obj->getEdBulTypeSortie());
    }

    /**
     * Tests setEdCorrespondance()
     *
     * @return void
     */
    public function testSetEdCorrespondance(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdCorrespondance(true);
        $this->assertEquals(true, $obj->getEdCorrespondance());
    }

    /**
     * Tests setEdDucsAuto()
     *
     * @return void
     */
    public function testSetEdDucsAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsAuto(true);
        $this->assertEquals(true, $obj->getEdDucsAuto());
    }

    /**
     * Tests setEdDucsNbEx()
     *
     * @return void
     */
    public function testSetEdDucsNbEx(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsNbEx("edDucsNbEx");
        $this->assertEquals("edDucsNbEx", $obj->getEdDucsNbEx());
    }

    /**
     * Tests setEdDucsOptBtp()
     *
     * @return void
     */
    public function testSetEdDucsOptBtp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsOptBtp("edDucsOptBtp");
        $this->assertEquals("edDucsOptBtp", $obj->getEdDucsOptBtp());
    }

    /**
     * Tests setEdDucsTypeSortie()
     *
     * @return void
     */
    public function testSetEdDucsTypeSortie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsTypeSortie("edDucsTypeSortie");
        $this->assertEquals("edDucsTypeSortie", $obj->getEdDucsTypeSortie());
    }

    /**
     * Tests setEdHSupBonifQueMajo()
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHSupBonifQueMajo(true);
        $this->assertEquals(true, $obj->getEdHSupBonifQueMajo());
    }

    /**
     * Tests setEdHistoTriEmp()
     *
     * @return void
     */
    public function testSetEdHistoTriEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriEmp("edHistoTriEmp");
        $this->assertEquals("edHistoTriEmp", $obj->getEdHistoTriEmp());
    }

    /**
     * Tests setEdHistoTriEtablissement()
     *
     * @return void
     */
    public function testSetEdHistoTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriEtablissement(true);
        $this->assertEquals(true, $obj->getEdHistoTriEtablissement());
    }

    /**
     * Tests setEdHistoTriService()
     *
     * @return void
     */
    public function testSetEdHistoTriService(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriService(true);
        $this->assertEquals(true, $obj->getEdHistoTriService());
    }

    /**
     * Tests setEdHistoType()
     *
     * @return void
     */
    public function testSetEdHistoType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoType("edHistoType");
        $this->assertEquals("edHistoType", $obj->getEdHistoType());
    }

    /**
     * Tests setEdImputComptable()
     *
     * @return void
     */
    public function testSetEdImputComptable(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdImputComptable(true);
        $this->assertEquals(true, $obj->getEdImputComptable());
    }

    /**
     * Tests setEdTexte1()
     *
     * @return void
     */
    public function testSetEdTexte1(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTexte1("edTexte1");
        $this->assertEquals("edTexte1", $obj->getEdTexte1());
    }

    /**
     * Tests setEdTexte2()
     *
     * @return void
     */
    public function testSetEdTexte2(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTexte2("edTexte2");
        $this->assertEquals("edTexte2", $obj->getEdTexte2());
    }

    /**
     * Tests setEdTrtCptaLastFax()
     *
     * @return void
     */
    public function testSetEdTrtCptaLastFax(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaLastFax("edTrtCptaLastFax");
        $this->assertEquals("edTrtCptaLastFax", $obj->getEdTrtCptaLastFax());
    }

    /**
     * Tests setEdTrtCptaLastMail()
     *
     * @return void
     */
    public function testSetEdTrtCptaLastMail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaLastMail("edTrtCptaLastMail");
        $this->assertEquals("edTrtCptaLastMail", $obj->getEdTrtCptaLastMail());
    }

    /**
     * Tests setEdTrtCptaSortie()
     *
     * @return void
     */
    public function testSetEdTrtCptaSortie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaSortie("edTrtCptaSortie");
        $this->assertEquals("edTrtCptaSortie", $obj->getEdTrtCptaSortie());
    }

    /**
     * Tests setEditQpxlAbsences()
     *
     * @return void
     */
    public function testSetEditQpxlAbsences(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlAbsences(true);
        $this->assertEquals(true, $obj->getEditQpxlAbsences());
    }

    /**
     * Tests setEditQpxlAcomptes()
     *
     * @return void
     */
    public function testSetEditQpxlAcomptes(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlAcomptes(true);
        $this->assertEquals(true, $obj->getEditQpxlAcomptes());
    }

    /**
     * Tests setEditQpxlTriEmp()
     *
     * @return void
     */
    public function testSetEditQpxlTriEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlTriEmp("editQpxlTriEmp");
        $this->assertEquals("editQpxlTriEmp", $obj->getEditQpxlTriEmp());
    }

    /**
     * Tests setEditQpxlViderLib()
     *
     * @return void
     */
    public function testSetEditQpxlViderLib(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlViderLib(true);
        $this->assertEquals(true, $obj->getEditQpxlViderLib());
    }

    /**
     * Tests setEditerBulletinStc()
     *
     * @return void
     */
    public function testSetEditerBulletinStc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditerBulletinStc(true);
        $this->assertEquals(true, $obj->getEditerBulletinStc());
    }

    /**
     * Tests setEditionChequeTc()
     *
     * @return void
     */
    public function testSetEditionChequeTc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditionChequeTc(true);
        $this->assertEquals(true, $obj->getEditionChequeTc());
    }

    /**
     * Tests setEditionDate()
     *
     * @return void
     */
    public function testSetEditionDate(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditionDate(true);
        $this->assertEquals(true, $obj->getEditionDate());
    }

    /**
     * Tests setEditionHeure()
     *
     * @return void
     */
    public function testSetEditionHeure(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditionHeure(true);
        $this->assertEquals(true, $obj->getEditionHeure());
    }

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests setEnteteSoldeTc()
     *
     * @return void
     */
    public function testSetEnteteSoldeTc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEnteteSoldeTc(true);
        $this->assertEquals(true, $obj->getEnteteSoldeTc());
    }

    /**
     * Tests setEtatControleDadsu()
     *
     * @return void
     */
    public function testSetEtatControleDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatControleDadsu("etatControleDadsu");
        $this->assertEquals("etatControleDadsu", $obj->getEtatControleDadsu());
    }

    /**
     * Tests setEtatCtrlNorme()
     *
     * @return void
     */
    public function testSetEtatCtrlNorme(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatCtrlNorme("etatCtrlNorme");
        $this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
    }

    /**
     * Tests setEtatDas()
     *
     * @return void
     */
    public function testSetEtatDas(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatDas("etatDas");
        $this->assertEquals("etatDas", $obj->getEtatDas());
    }

    /**
     * Tests setEtatDasRect()
     *
     * @return void
     */
    public function testSetEtatDasRect(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatDasRect("etatDasRect");
        $this->assertEquals("etatDasRect", $obj->getEtatDasRect());
    }

    /**
     * Tests setFichierUnique()
     *
     * @return void
     */
    public function testSetFichierUnique(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFichierUnique(true);
        $this->assertEquals(true, $obj->getFichierUnique());
    }

    /**
     * Tests setFiltrerListeEmp()
     *
     * @return void
     */
    public function testSetFiltrerListeEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFiltrerListeEmp(10);
        $this->assertEquals(10, $obj->getFiltrerListeEmp());
    }

    /**
     * Tests setFinPeriodeDas()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeDas(): void {

        // Set a Date/time mock.
        $finPeriodeDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setFinPeriodeDas($finPeriodeDas);
        $this->assertSame($finPeriodeDas, $obj->getFinPeriodeDas());
    }

    /**
     * Tests setFinPeriodeHistoDas()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeHistoDas(): void {

        // Set a Date/time mock.
        $finPeriodeHistoDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setFinPeriodeHistoDas($finPeriodeHistoDas);
        $this->assertSame($finPeriodeHistoDas, $obj->getFinPeriodeHistoDas());
    }

    /**
     * Tests setFlagTraite()
     *
     * @return void
     */
    public function testSetFlagTraite(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite("flagTraite");
        $this->assertEquals("flagTraite", $obj->getFlagTraite());
    }

    /**
     * Tests setFlagTraite2()
     *
     * @return void
     */
    public function testSetFlagTraite2(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite2(10);
        $this->assertEquals(10, $obj->getFlagTraite2());
    }

    /**
     * Tests setFlagTraite3()
     *
     * @return void
     */
    public function testSetFlagTraite3(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite3(10);
        $this->assertEquals(10, $obj->getFlagTraite3());
    }

    /**
     * Tests setFormatFicVirement()
     *
     * @return void
     */
    public function testSetFormatFicVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFormatFicVirement("formatFicVirement");
        $this->assertEquals("formatFicVirement", $obj->getFormatFicVirement());
    }

    /**
     * Tests setGestNumBulletin()
     *
     * @return void
     */
    public function testSetGestNumBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestNumBulletin(true);
        $this->assertEquals(true, $obj->getGestNumBulletin());
    }

    /**
     * Tests setGestRepoCompens()
     *
     * @return void
     */
    public function testSetGestRepoCompens(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestRepoCompens(true);
        $this->assertEquals(true, $obj->getGestRepoCompens());
    }

    /**
     * Tests setGestTexte()
     *
     * @return void
     */
    public function testSetGestTexte(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestTexte(true);
        $this->assertEquals(true, $obj->getGestTexte());
    }

    /**
     * Tests setGestionCoeff()
     *
     * @return void
     */
    public function testSetGestionCoeff(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionCoeff(true);
        $this->assertEquals(true, $obj->getGestionCoeff());
    }

    /**
     * Tests setGestionCoeffGrille()
     *
     * @return void
     */
    public function testSetGestionCoeffGrille(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionCoeffGrille(true);
        $this->assertEquals(true, $obj->getGestionCoeffGrille());
    }

    /**
     * Tests setGestionExemplaire()
     *
     * @return void
     */
    public function testSetGestionExemplaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionExemplaire("gestionExemplaire");
        $this->assertEquals("gestionExemplaire", $obj->getGestionExemplaire());
    }

    /**
     * Tests setGestionIntemperie()
     *
     * @return void
     */
    public function testSetGestionIntemperie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionIntemperie(true);
        $this->assertEquals(true, $obj->getGestionIntemperie());
    }

    /**
     * Tests setGestionNumeroEmployeAuto()
     *
     * @return void
     */
    public function testSetGestionNumeroEmployeAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionNumeroEmployeAuto(true);
        $this->assertEquals(true, $obj->getGestionNumeroEmployeAuto());
    }

    /**
     * Tests setGestionQpxl()
     *
     * @return void
     */
    public function testSetGestionQpxl(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionQpxl(true);
        $this->assertEquals(true, $obj->getGestionQpxl());
    }

    /**
     * Tests setGestionTdBilaterale()
     *
     * @return void
     */
    public function testSetGestionTdBilaterale(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionTdBilaterale(true);
        $this->assertEquals(true, $obj->getGestionTdBilaterale());
    }

    /**
     * Tests setGestionTdSouDadsu()
     *
     * @return void
     */
    public function testSetGestionTdSouDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionTdSouDadsu(true);
        $this->assertEquals(true, $obj->getGestionTdSouDadsu());
    }

    /**
     * Tests setGroupeGi()
     *
     * @return void
     */
    public function testSetGroupeGi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGroupeGi("groupeGi");
        $this->assertEquals("groupeGi", $obj->getGroupeGi());
    }

    /**
     * Tests setHBonifInfluCassation()
     *
     * @return void
     */
    public function testSetHBonifInfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHBonifInfluCassation("hBonifInfluCassation");
        $this->assertEquals("hBonifInfluCassation", $obj->getHBonifInfluCassation());
    }

    /**
     * Tests setHSup1Structurelle()
     *
     * @return void
     */
    public function testSetHSup1Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup1Structurelle(true);
        $this->assertEquals(true, $obj->getHSup1Structurelle());
    }

    /**
     * Tests setHSup2Structurelle()
     *
     * @return void
     */
    public function testSetHSup2Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup2Structurelle(true);
        $this->assertEquals(true, $obj->getHSup2Structurelle());
    }

    /**
     * Tests setHSup3Structurelle()
     *
     * @return void
     */
    public function testSetHSup3Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup3Structurelle(true);
        $this->assertEquals(true, $obj->getHSup3Structurelle());
    }

    /**
     * Tests setHSup4Structurelle()
     *
     * @return void
     */
    public function testSetHSup4Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup4Structurelle(true);
        $this->assertEquals(true, $obj->getHSup4Structurelle());
    }

    /**
     * Tests setHSup5Structurelle()
     *
     * @return void
     */
    public function testSetHSup5Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup5Structurelle(true);
        $this->assertEquals(true, $obj->getHSup5Structurelle());
    }

    /**
     * Tests setHeureSup2InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup2InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup2InfluCassation("heureSup2InfluCassation");
        $this->assertEquals("heureSup2InfluCassation", $obj->getHeureSup2InfluCassation());
    }

    /**
     * Tests setHeureSup3InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup3InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup3InfluCassation("heureSup3InfluCassation");
        $this->assertEquals("heureSup3InfluCassation", $obj->getHeureSup3InfluCassation());
    }

    /**
     * Tests setHeureSup4InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup4InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup4InfluCassation("heureSup4InfluCassation");
        $this->assertEquals("heureSup4InfluCassation", $obj->getHeureSup4InfluCassation());
    }

    /**
     * Tests setHeureSup5InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup5InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup5InfluCassation("heureSup5InfluCassation");
        $this->assertEquals("heureSup5InfluCassation", $obj->getHeureSup5InfluCassation());
    }

    /**
     * Tests setHeureSupInfluCassation()
     *
     * @return void
     */
    public function testSetHeureSupInfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSupInfluCassation("heureSupInfluCassation");
        $this->assertEquals("heureSupInfluCassation", $obj->getHeureSupInfluCassation());
    }

    /**
     * Tests setHeureTheoBaseTrav()
     *
     * @return void
     */
    public function testSetHeureTheoBaseTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureTheoBaseTrav("heureTheoBaseTrav");
        $this->assertEquals("heureTheoBaseTrav", $obj->getHeureTheoBaseTrav());
    }

    /**
     * Tests setIndemCpIntervientBrutAl()
     *
     * @return void
     */
    public function testSetIndemCpIntervientBrutAl(): void {

        $obj = new ConstantesEntreprise();

        $obj->setIndemCpIntervientBrutAl(true);
        $this->assertEquals(true, $obj->getIndemCpIntervientBrutAl());
    }

    /**
     * Tests setJourDebutTransfert()
     *
     * @return void
     */
    public function testSetJourDebutTransfert(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJourDebutTransfert(10);
        $this->assertEquals(10, $obj->getJourDebutTransfert());
    }

    /**
     * Tests setJourFinTransfert()
     *
     * @return void
     */
    public function testSetJourFinTransfert(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJourFinTransfert(10);
        $this->assertEquals(10, $obj->getJourFinTransfert());
    }

    /**
     * Tests setJrnFormat()
     *
     * @return void
     */
    public function testSetJrnFormat(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnFormat("jrnFormat");
        $this->assertEquals("jrnFormat", $obj->getJrnFormat());
    }

    /**
     * Tests setJrnRegroupeAbs()
     *
     * @return void
     */
    public function testSetJrnRegroupeAbs(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnRegroupeAbs(true);
        $this->assertEquals(true, $obj->getJrnRegroupeAbs());
    }

    /**
     * Tests setJrnTri()
     *
     * @return void
     */
    public function testSetJrnTri(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTri("jrnTri");
        $this->assertEquals("jrnTri", $obj->getJrnTri());
    }

    /**
     * Tests setJrnTriEtablissement()
     *
     * @return void
     */
    public function testSetJrnTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTriEtablissement("jrnTriEtablissement");
        $this->assertEquals("jrnTriEtablissement", $obj->getJrnTriEtablissement());
    }

    /**
     * Tests setJrnTriService()
     *
     * @return void
     */
    public function testSetJrnTriService(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTriService("jrnTriService");
        $this->assertEquals("jrnTriService", $obj->getJrnTriService());
    }

    /**
     * Tests setJrnType()
     *
     * @return void
     */
    public function testSetJrnType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnType("jrnType");
        $this->assertEquals("jrnType", $obj->getJrnType());
    }

    /**
     * Tests setLiaisonProprete()
     *
     * @return void
     */
    public function testSetLiaisonProprete(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLiaisonProprete(true);
        $this->assertEquals(true, $obj->getLiaisonProprete());
    }

    /**
     * Tests setLibArbitrage()
     *
     * @return void
     */
    public function testSetLibArbitrage(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibArbitrage("libArbitrage");
        $this->assertEquals("libArbitrage", $obj->getLibArbitrage());
    }

    /**
     * Tests setLibBaseConge()
     *
     * @return void
     */
    public function testSetLibBaseConge(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibBaseConge("libBaseConge");
        $this->assertEquals("libBaseConge", $obj->getLibBaseConge());
    }

    /**
     * Tests setLibBqcp()
     *
     * @return void
     */
    public function testSetLibBqcp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibBqcp("libBqcp");
        $this->assertEquals("libBqcp", $obj->getLibBqcp());
    }

    /**
     * Tests setLibCachetAem()
     *
     * @return void
     */
    public function testSetLibCachetAem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibCachetAem("libCachetAem");
        $this->assertEquals("libCachetAem", $obj->getLibCachetAem());
    }

    /**
     * Tests setLibCotisCne()
     *
     * @return void
     */
    public function testSetLibCotisCne(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibCotisCne("libCotisCne");
        $this->assertEquals("libCotisCne", $obj->getLibCotisCne());
    }

    /**
     * Tests setLibFinContrat()
     *
     * @return void
     */
    public function testSetLibFinContrat(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibFinContrat("libFinContrat");
        $this->assertEquals("libFinContrat", $obj->getLibFinContrat());
    }

    /**
     * Tests setLibFinContratCne()
     *
     * @return void
     */
    public function testSetLibFinContratCne(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibFinContratCne("libFinContratCne");
        $this->assertEquals("libFinContratCne", $obj->getLibFinContratCne());
    }

    /**
     * Tests setLibIndemCp()
     *
     * @return void
     */
    public function testSetLibIndemCp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibIndemCp("libIndemCp");
        $this->assertEquals("libIndemCp", $obj->getLibIndemCp());
    }

    /**
     * Tests setLibelleLibreVirement()
     *
     * @return void
     */
    public function testSetLibelleLibreVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibelleLibreVirement("libelleLibreVirement");
        $this->assertEquals("libelleLibreVirement", $obj->getLibelleLibreVirement());
    }

    /**
     * Tests setLigneBulEuro()
     *
     * @return void
     */
    public function testSetLigneBulEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLigneBulEuro(true);
        $this->assertEquals(true, $obj->getLigneBulEuro());
    }

    /**
     * Tests setLignesTransport()
     *
     * @return void
     */
    public function testSetLignesTransport(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLignesTransport(true);
        $this->assertEquals(true, $obj->getLignesTransport());
    }

    /**
     * Tests setMailBulletin()
     *
     * @return void
     */
    public function testSetMailBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletin("mailBulletin");
        $this->assertEquals("mailBulletin", $obj->getMailBulletin());
    }

    /**
     * Tests setMailBulletinCle()
     *
     * @return void
     */
    public function testSetMailBulletinCle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletinCle("mailBulletinCle");
        $this->assertEquals("mailBulletinCle", $obj->getMailBulletinCle());
    }

    /**
     * Tests setMailBulletinPj()
     *
     * @return void
     */
    public function testSetMailBulletinPj(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletinPj("mailBulletinPj");
        $this->assertEquals("mailBulletinPj", $obj->getMailBulletinPj());
    }

    /**
     * Tests setMailCLiDucsEdi()
     *
     * @return void
     */
    public function testSetMailCLiDucsEdi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailCLiDucsEdi(true);
        $this->assertEquals(true, $obj->getMailCLiDucsEdi());
    }

    /**
     * Tests setMentionCp()
     *
     * @return void
     */
    public function testSetMentionCp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMentionCp(true);
        $this->assertEquals(true, $obj->getMentionCp());
    }

    /**
     * Tests setMessageVu()
     *
     * @return void
     */
    public function testSetMessageVu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMessageVu(true);
        $this->assertEquals(true, $obj->getMessageVu());
    }

    /**
     * Tests setMillesime1()
     *
     * @return void
     */
    public function testSetMillesime1(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMillesime1(10);
        $this->assertEquals(10, $obj->getMillesime1());
    }

    /**
     * Tests setModePlanning()
     *
     * @return void
     */
    public function testSetModePlanning(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModePlanning(10);
        $this->assertEquals(10, $obj->getModePlanning());
    }

    /**
     * Tests setModeleApercu()
     *
     * @return void
     */
    public function testSetModeleApercu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleApercu("modeleApercu");
        $this->assertEquals("modeleApercu", $obj->getModeleApercu());
    }

    /**
     * Tests setModeleBonBleu()
     *
     * @return void
     */
    public function testSetModeleBonBleu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleBonBleu("modeleBonBleu");
        $this->assertEquals("modeleBonBleu", $obj->getModeleBonBleu());
    }

    /**
     * Tests setModeleBulletin()
     *
     * @return void
     */
    public function testSetModeleBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleBulletin("modeleBulletin");
        $this->assertEquals("modeleBulletin", $obj->getModeleBulletin());
    }

    /**
     * Tests setModeleCertif()
     *
     * @return void
     */
    public function testSetModeleCertif(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCertif("modeleCertif");
        $this->assertEquals("modeleCertif", $obj->getModeleCertif());
    }

    /**
     * Tests setModeleCertifTrav()
     *
     * @return void
     */
    public function testSetModeleCertifTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCertifTrav("modeleCertifTrav");
        $this->assertEquals("modeleCertifTrav", $obj->getModeleCertifTrav());
    }

    /**
     * Tests setModeleCheque()
     *
     * @return void
     */
    public function testSetModeleCheque(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCheque("modeleCheque");
        $this->assertEquals("modeleCheque", $obj->getModeleCheque());
    }

    /**
     * Tests setMoisClotureAn()
     *
     * @return void
     */
    public function testSetMoisClotureAn(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMoisClotureAn("moisClotureAn");
        $this->assertEquals("moisClotureAn", $obj->getMoisClotureAn());
    }

    /**
     * Tests setNAttestAem()
     *
     * @return void
     */
    public function testSetNAttestAem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAem(10);
        $this->assertEquals(10, $obj->getNAttestAem());
    }

    /**
     * Tests setNAttestAemedi()
     *
     * @return void
     */
    public function testSetNAttestAemedi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAemedi(10);
        $this->assertEquals(10, $obj->getNAttestAemedi());
    }

    /**
     * Tests setNAttestAemx()
     *
     * @return void
     */
    public function testSetNAttestAemx(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAemx(10);
        $this->assertEquals(10, $obj->getNAttestAemx());
    }

    /**
     * Tests setNAttestAssedic()
     *
     * @return void
     */
    public function testSetNAttestAssedic(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAssedic(10);
        $this->assertEquals(10, $obj->getNAttestAssedic());
    }

    /**
     * Tests setNAttestExtras()
     *
     * @return void
     */
    public function testSetNAttestExtras(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestExtras(10);
        $this->assertEquals(10, $obj->getNAttestExtras());
    }

    /**
     * Tests setNAttestIjss()
     *
     * @return void
     */
    public function testSetNAttestIjss(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestIjss(10);
        $this->assertEquals(10, $obj->getNAttestIjss());
    }

    /**
     * Tests setNAttestIjssAt()
     *
     * @return void
     */
    public function testSetNAttestIjssAt(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestIjssAt(10);
        $this->assertEquals(10, $obj->getNAttestIjssAt());
    }

    /**
     * Tests setNDerDocument()
     *
     * @return void
     */
    public function testSetNDerDocument(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Tests setNapEuro()
     *
     * @return void
     */
    public function testSetNapEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNapEuro(true);
        $this->assertEquals(true, $obj->getNapEuro());
    }

    /**
     * Tests setNbExemplaire()
     *
     * @return void
     */
    public function testSetNbExemplaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNbExemplaire("nbExemplaire");
        $this->assertEquals("nbExemplaire", $obj->getNbExemplaire());
    }

    /**
     * Tests setNceCongesSpectacles()
     *
     * @return void
     */
    public function testSetNceCongesSpectacles(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNceCongesSpectacles(10);
        $this->assertEquals(10, $obj->getNceCongesSpectacles());
    }

    /**
     * Tests setNouvParamRetraiteType()
     *
     * @return void
     */
    public function testSetNouvParamRetraiteType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNouvParamRetraiteType(true);
        $this->assertEquals(true, $obj->getNouvParamRetraiteType());
    }

    /**
     * Tests setOptionsCalcAbs()
     *
     * @return void
     */
    public function testSetOptionsCalcAbs(): void {

        $obj = new ConstantesEntreprise();

        $obj->setOptionsCalcAbs(true);
        $this->assertEquals(true, $obj->getOptionsCalcAbs());
    }

    /**
     * Tests setOrdreLibelleHSup()
     *
     * @return void
     */
    public function testSetOrdreLibelleHSup(): void {

        $obj = new ConstantesEntreprise();

        $obj->setOrdreLibelleHSup("ordreLibelleHSup");
        $this->assertEquals("ordreLibelleHSup", $obj->getOrdreLibelleHSup());
    }

    /**
     * Tests setPaieEuro()
     *
     * @return void
     */
    public function testSetPaieEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPaieEuro(true);
        $this->assertEquals(true, $obj->getPaieEuro());
    }

    /**
     * Tests setPartSalSeule()
     *
     * @return void
     */
    public function testSetPartSalSeule(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPartSalSeule(true);
        $this->assertEquals(true, $obj->getPartSalSeule());
    }

    /**
     * Tests setPasGestionIndiceBul()
     *
     * @return void
     */
    public function testSetPasGestionIndiceBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPasGestionIndiceBul(true);
        $this->assertEquals(true, $obj->getPasGestionIndiceBul());
    }

    /**
     * Tests setPasPrendreIccpFillon()
     *
     * @return void
     */
    public function testSetPasPrendreIccpFillon(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPasPrendreIccpFillon(true);
        $this->assertEquals(true, $obj->getPasPrendreIccpFillon());
    }

    /**
     * Tests setPasSousTotSBase()
     *
     * @return void
     */
    public function testSetPasSousTotSBase(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPasSousTotSBase(true);
        $this->assertEquals(true, $obj->getPasSousTotSBase());
    }

    /**
     * Tests setPassage35HFait()
     *
     * @return void
     */
    public function testSetPassage35HFait(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPassage35HFait(true);
        $this->assertEquals(true, $obj->getPassage35HFait());
    }

    /**
     * Tests setPathVirement()
     *
     * @return void
     */
    public function testSetPathVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPathVirement("pathVirement");
        $this->assertEquals("pathVirement", $obj->getPathVirement());
    }

    /**
     * Tests setPeriodeIPaie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeIPaie(): void {

        // Set a Date/time mock.
        $periodeIPaie = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setPeriodeIPaie($periodeIPaie);
        $this->assertSame($periodeIPaie, $obj->getPeriodeIPaie());
    }

    /**
     * Tests setPeriodePaie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodePaie(): void {

        // Set a Date/time mock.
        $periodePaie = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setPeriodePaie($periodePaie);
        $this->assertSame($periodePaie, $obj->getPeriodePaie());
    }

    /**
     * Tests setPjMailCLiDucsEdi()
     *
     * @return void
     */
    public function testSetPjMailCLiDucsEdi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPjMailCLiDucsEdi(true);
        $this->assertEquals(true, $obj->getPjMailCLiDucsEdi());
    }

    /**
     * Tests setPjMailCliCouponPaiement()
     *
     * @return void
     */
    public function testSetPjMailCliCouponPaiement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPjMailCliCouponPaiement(true);
        $this->assertEquals(true, $obj->getPjMailCliCouponPaiement());
    }

    /**
     * Tests setPlafond()
     *
     * @return void
     */
    public function testSetPlafond(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPlafond(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond());
    }

    /**
     * Tests setPortaFraisSanteCertifTrav()
     *
     * @return void
     */
    public function testSetPortaFraisSanteCertifTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPortaFraisSanteCertifTrav(true);
        $this->assertEquals(true, $obj->getPortaFraisSanteCertifTrav());
    }

    /**
     * Tests setPortaPrevoyanceOblig()
     *
     * @return void
     */
    public function testSetPortaPrevoyanceOblig(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPortaPrevoyanceOblig(true);
        $this->assertEquals(true, $obj->getPortaPrevoyanceOblig());
    }

    /**
     * Tests setPreparationTdp()
     *
     * @return void
     */
    public function testSetPreparationTdp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPreparationTdp(true);
        $this->assertEquals(true, $obj->getPreparationTdp());
    }

    /**
     * Tests setPresenceMin()
     *
     * @return void
     */
    public function testSetPresenceMin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPresenceMin("presenceMin");
        $this->assertEquals("presenceMin", $obj->getPresenceMin());
    }

    /**
     * Tests setProrataDifCertifTrav()
     *
     * @return void
     */
    public function testSetProrataDifCertifTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setProrataDifCertifTrav(true);
        $this->assertEquals(true, $obj->getProrataDifCertifTrav());
    }

    /**
     * Tests setRazCommentaire()
     *
     * @return void
     */
    public function testSetRazCommentaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRazCommentaire("razCommentaire");
        $this->assertEquals("razCommentaire", $obj->getRazCommentaire());
    }

    /**
     * Tests setRazHSup()
     *
     * @return void
     */
    public function testSetRazHSup(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRazHSup("razHSup");
        $this->assertEquals("razHSup", $obj->getRazHSup());
    }

    /**
     * Tests setRdlpascii()
     *
     * @return void
     */
    public function testSetRdlpascii(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRdlpascii(true);
        $this->assertEquals(true, $obj->getRdlpascii());
    }

    /**
     * Tests setRdlpemployes()
     *
     * @return void
     */
    public function testSetRdlpemployes(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRdlpemployes(true);
        $this->assertEquals(true, $obj->getRdlpemployes());
    }

    /**
     * Tests setRefRemise()
     *
     * @return void
     */
    public function testSetRefRemise(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRefRemise(10);
        $this->assertEquals(10, $obj->getRefRemise());
    }

    /**
     * Tests setRefTrans()
     *
     * @return void
     */
    public function testSetRefTrans(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRefTrans(10);
        $this->assertEquals(10, $obj->getRefTrans());
    }

    /**
     * Tests setReferenceInterneVirement()
     *
     * @return void
     */
    public function testSetReferenceInterneVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setReferenceInterneVirement("referenceInterneVirement");
        $this->assertEquals("referenceInterneVirement", $obj->getReferenceInterneVirement());
    }

    /**
     * Tests setRegroupLibEdBul()
     *
     * @return void
     */
    public function testSetRegroupLibEdBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRegroupLibEdBul(true);
        $this->assertEquals(true, $obj->getRegroupLibEdBul());
    }

    /**
     * Tests setReportMinimum()
     *
     * @return void
     */
    public function testSetReportMinimum(): void {

        $obj = new ConstantesEntreprise();

        $obj->setReportMinimum(10);
        $this->assertEquals(10, $obj->getReportMinimum());
    }

    /**
     * Tests setRetraite97()
     *
     * @return void
     */
    public function testSetRetraite97(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRetraite97(true);
        $this->assertEquals(true, $obj->getRetraite97());
    }

    /**
     * Tests setSaisPlanEmpSem()
     *
     * @return void
     */
    public function testSetSaisPlanEmpSem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSaisPlanEmpSem("saisPlanEmpSem");
        $this->assertEquals("saisPlanEmpSem", $obj->getSaisPlanEmpSem());
    }

    /**
     * Tests setSaisieIndiceBul()
     *
     * @return void
     */
    public function testSetSaisieIndiceBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSaisieIndiceBul(true);
        $this->assertEquals(true, $obj->getSaisieIndiceBul());
    }

    /**
     * Tests setSautPage()
     *
     * @return void
     */
    public function testSetSautPage(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSautPage(true);
        $this->assertEquals(true, $obj->getSautPage());
    }

    /**
     * Tests setSeuil()
     *
     * @return void
     */
    public function testSetSeuil(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSeuil(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuil());
    }

    /**
     * Tests setSeuilConting()
     *
     * @return void
     */
    public function testSetSeuilConting(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSeuilConting(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilConting());
    }

    /**
     * Tests setStcAuto()
     *
     * @return void
     */
    public function testSetStcAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setStcAuto(true);
        $this->assertEquals(true, $obj->getStcAuto());
    }

    /**
     * Tests setTabBordTriEtablissement()
     *
     * @return void
     */
    public function testSetTabBordTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTabBordTriEtablissement(true);
        $this->assertEquals(true, $obj->getTabBordTriEtablissement());
    }

    /**
     * Tests setTabBordTriService()
     *
     * @return void
     */
    public function testSetTabBordTriService(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTabBordTriService(true);
        $this->assertEquals(true, $obj->getTabBordTriService());
    }

    /**
     * Tests setTableauCharge()
     *
     * @return void
     */
    public function testSetTableauCharge(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTableauCharge("tableauCharge");
        $this->assertEquals("tableauCharge", $obj->getTableauCharge());
    }

    /**
     * Tests setTdsAnnee()
     *
     * @return void
     */
    public function testSetTdsAnnee(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTdsAnnee(10);
        $this->assertEquals(10, $obj->getTdsAnnee());
    }

    /**
     * Tests setTdsEuro()
     *
     * @return void
     */
    public function testSetTdsEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTdsEuro(true);
        $this->assertEquals(true, $obj->getTdsEuro());
    }

    /**
     * Tests setTotGeneIsole()
     *
     * @return void
     */
    public function testSetTotGeneIsole(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTotGeneIsole("totGeneIsole");
        $this->assertEquals("totGeneIsole", $obj->getTotGeneIsole());
    }

    /**
     * Tests setTotServiceIsole()
     *
     * @return void
     */
    public function testSetTotServiceIsole(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTotServiceIsole("totServiceIsole");
        $this->assertEquals("totServiceIsole", $obj->getTotServiceIsole());
    }

    /**
     * Tests setTotalEtabIsole()
     *
     * @return void
     */
    public function testSetTotalEtabIsole(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTotalEtabIsole("totalEtabIsole");
        $this->assertEquals("totalEtabIsole", $obj->getTotalEtabIsole());
    }

    /**
     * Tests setTransRupture()
     *
     * @return void
     */
    public function testSetTransRupture(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTransRupture("transRupture");
        $this->assertEquals("transRupture", $obj->getTransRupture());
    }

    /**
     * Tests setTransTriEtablissement()
     *
     * @return void
     */
    public function testSetTransTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTransTriEtablissement("transTriEtablissement");
        $this->assertEquals("transTriEtablissement", $obj->getTransTriEtablissement());
    }

    /**
     * Tests setTransfertTdsEmp()
     *
     * @return void
     */
    public function testSetTransfertTdsEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTransfertTdsEmp(true);
        $this->assertEquals(true, $obj->getTransfertTdsEmp());
    }

    /**
     * Tests setTriEmploye()
     *
     * @return void
     */
    public function testSetTriEmploye(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTriEmploye("triEmploye");
        $this->assertEquals("triEmploye", $obj->getTriEmploye());
    }

    /**
     * Tests setTxSalDecote()
     *
     * @return void
     */
    public function testSetTxSalDecote(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTxSalDecote(10.092018);
        $this->assertEquals(10.092018, $obj->getTxSalDecote());
    }

    /**
     * Tests setTypeAbsSansSolde()
     *
     * @return void
     */
    public function testSetTypeAbsSansSolde(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeAbsSansSolde("typeAbsSansSolde");
        $this->assertEquals("typeAbsSansSolde", $obj->getTypeAbsSansSolde());
    }

    /**
     * Tests setTypeAgrementAem()
     *
     * @return void
     */
    public function testSetTypeAgrementAem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeAgrementAem("typeAgrementAem");
        $this->assertEquals("typeAgrementAem", $obj->getTypeAgrementAem());
    }

    /**
     * Tests setTypeBordereauPrepa()
     *
     * @return void
     */
    public function testSetTypeBordereauPrepa(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeBordereauPrepa("typeBordereauPrepa");
        $this->assertEquals("typeBordereauPrepa", $obj->getTypeBordereauPrepa());
    }

    /**
     * Tests setTypeBulletin()
     *
     * @return void
     */
    public function testSetTypeBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeBulletin("typeBulletin");
        $this->assertEquals("typeBulletin", $obj->getTypeBulletin());
    }

    /**
     * Tests setTypeDossier()
     *
     * @return void
     */
    public function testSetTypeDossier(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeDossier("typeDossier");
        $this->assertEquals("typeDossier", $obj->getTypeDossier());
    }

    /**
     * Tests setTypeDue()
     *
     * @return void
     */
    public function testSetTypeDue(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeDue("typeDue");
        $this->assertEquals("typeDue", $obj->getTypeDue());
    }

    /**
     * Tests setTypeEffectif()
     *
     * @return void
     */
    public function testSetTypeEffectif(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeEffectif("typeEffectif");
        $this->assertEquals("typeEffectif", $obj->getTypeEffectif());
    }

    /**
     * Tests setTypeFichBilat()
     *
     * @return void
     */
    public function testSetTypeFichBilat(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeFichBilat("typeFichBilat");
        $this->assertEquals("typeFichBilat", $obj->getTypeFichBilat());
    }

    /**
     * Tests setTypeGestionBal()
     *
     * @return void
     */
    public function testSetTypeGestionBal(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeGestionBal("typeGestionBal");
        $this->assertEquals("typeGestionBal", $obj->getTypeGestionBal());
    }

    /**
     * Tests setTypeModele()
     *
     * @return void
     */
    public function testSetTypeModele(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeModele("typeModele");
        $this->assertEquals("typeModele", $obj->getTypeModele());
    }

    /**
     * Tests setTypePrepDadsu()
     *
     * @return void
     */
    public function testSetTypePrepDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypePrepDadsu("typePrepDadsu");
        $this->assertEquals("typePrepDadsu", $obj->getTypePrepDadsu());
    }

    /**
     * Tests setTypeSaisieAbs()
     *
     * @return void
     */
    public function testSetTypeSaisieAbs(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeSaisieAbs("typeSaisieAbs");
        $this->assertEquals("typeSaisieAbs", $obj->getTypeSaisieAbs());
    }

    /**
     * Tests setTypeSaisieAbsence()
     *
     * @return void
     */
    public function testSetTypeSaisieAbsence(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeSaisieAbsence("typeSaisieAbsence");
        $this->assertEquals("typeSaisieAbsence", $obj->getTypeSaisieAbsence());
    }

    /**
     * Tests setTypeStc()
     *
     * @return void
     */
    public function testSetTypeStc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeStc("typeStc");
        $this->assertEquals("typeStc", $obj->getTypeStc());
    }

    /**
     * Tests setTypeTauxIntemperie()
     *
     * @return void
     */
    public function testSetTypeTauxIntemperie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeTauxIntemperie("typeTauxIntemperie");
        $this->assertEquals("typeTauxIntemperie", $obj->getTypeTauxIntemperie());
    }

    /**
     * Tests setTypeTri()
     *
     * @return void
     */
    public function testSetTypeTri(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeTri("typeTri");
        $this->assertEquals("typeTri", $obj->getTypeTri());
    }

    /**
     * Tests setTypeVirement()
     *
     * @return void
     */
    public function testSetTypeVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeVirement("typeVirement");
        $this->assertEquals("typeVirement", $obj->getTypeVirement());
    }

    /**
     * Tests setTypeVisuColSaisieBul()
     *
     * @return void
     */
    public function testSetTypeVisuColSaisieBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeVisuColSaisieBul("typeVisuColSaisieBul");
        $this->assertEquals("typeVisuColSaisieBul", $obj->getTypeVisuColSaisieBul());
    }

    /**
     * Tests setUtilisePdpQuadra()
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra(): void {

        $obj = new ConstantesEntreprise();

        $obj->setUtilisePdpQuadra(true);
        $this->assertEquals(true, $obj->getUtilisePdpQuadra());
    }

    /**
     * Tests setUtilisePdpQuadra2()
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra2(): void {

        $obj = new ConstantesEntreprise();

        $obj->setUtilisePdpQuadra2(true);
        $this->assertEquals(true, $obj->getUtilisePdpQuadra2());
    }

    /**
     * Tests setValCpBulletin()
     *
     * @return void
     */
    public function testSetValCpBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setValCpBulletin(true);
        $this->assertEquals(true, $obj->getValCpBulletin());
    }

    /**
     * Tests setValFiltreListeEmp()
     *
     * @return void
     */
    public function testSetValFiltreListeEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setValFiltreListeEmp(10);
        $this->assertEquals(10, $obj->getValFiltreListeEmp());
    }

    /**
     * Tests setVersionControleDadsu()
     *
     * @return void
     */
    public function testSetVersionControleDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVersionControleDadsu(10);
        $this->assertEquals(10, $obj->getVersionControleDadsu());
    }

    /**
     * Tests setVirCodeEtab()
     *
     * @return void
     */
    public function testSetVirCodeEtab(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirCodeEtab("virCodeEtab");
        $this->assertEquals("virCodeEtab", $obj->getVirCodeEtab());
    }

    /**
     * Tests setVirCollectivite()
     *
     * @return void
     */
    public function testSetVirCollectivite(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirCollectivite("virCollectivite");
        $this->assertEquals("virCollectivite", $obj->getVirCollectivite());
    }

    /**
     * Tests setVirComptableCentre()
     *
     * @return void
     */
    public function testSetVirComptableCentre(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirComptableCentre("virComptableCentre");
        $this->assertEquals("virComptableCentre", $obj->getVirComptableCentre());
    }

    /**
     * Tests setVirComptableSub()
     *
     * @return void
     */
    public function testSetVirComptableSub(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirComptableSub("virComptableSub");
        $this->assertEquals("virComptableSub", $obj->getVirComptableSub());
    }

    /**
     * Tests setVirFonctionPublique()
     *
     * @return void
     */
    public function testSetVirFonctionPublique(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirFonctionPublique(true);
        $this->assertEquals(true, $obj->getVirFonctionPublique());
    }

    /**
     * Tests setVirSeuil()
     *
     * @return void
     */
    public function testSetVirSeuil(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirSeuil(10.092018);
        $this->assertEquals(10.092018, $obj->getVirSeuil());
    }

    /**
     * Tests setVirTypeEtab()
     *
     * @return void
     */
    public function testSetVirTypeEtab(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirTypeEtab("virTypeEtab");
        $this->assertEquals("virTypeEtab", $obj->getVirTypeEtab());
    }

    /**
     * Tests setVirementCrLf()
     *
     * @return void
     */
    public function testSetVirementCrLf(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirementCrLf(true);
        $this->assertEquals(true, $obj->getVirementCrLf());
    }

    /**
     * Tests setVirementsEuro()
     *
     * @return void
     */
    public function testSetVirementsEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirementsEuro("virementsEuro");
        $this->assertEquals("virementsEuro", $obj->getVirementsEuro());
    }

    /**
     * Tests setWebPrioritaire()
     *
     * @return void
     */
    public function testSetWebPrioritaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setWebPrioritaire(true);
        $this->assertEquals(true, $obj->getWebPrioritaire());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new ConstantesEntreprise();

        $this->assertNull($obj->getAbsenceExtra());
        $this->assertNull($obj->getActiverPointageQws());
        $this->assertNull($obj->getAdhesionTdsNorme());
        $this->assertNull($obj->getAffaire());
        $this->assertNull($obj->getAffectationTaux27());
        $this->assertNull($obj->getAnalytiqueEmploye());
        $this->assertNull($obj->getArbitrageAuto());
        $this->assertNull($obj->getArchivageActif());
        $this->assertNull($obj->getAttestAuto());
        $this->assertNull($obj->getBeneficieCice());
        $this->assertNull($obj->getBrutAlSalMinConv());
        $this->assertNull($obj->getCicePjMailCliDucsEdi());
        $this->assertNull($obj->getCalculAutoHTheorique());
        $this->assertNull($obj->getCertifAuto());
        $this->assertNull($obj->getChequesEuro());
        $this->assertNull($obj->getChoixEditionChequeTc());
        $this->assertNull($obj->getCleAcces1());
        $this->assertNull($obj->getClePortable());
        $this->assertNull($obj->getCodeOrgBtpdadsu());
        $this->assertNull($obj->getCollaborateuriPaie());
        $this->assertNull($obj->getCompression());
        $this->assertNull($obj->getCompteGainEuro());
        $this->assertNull($obj->getComptePerteEuro());
        $this->assertNull($obj->getCptaElitEuros());
        $this->assertNull($obj->getCtrlAutoCp());
        $this->assertNull($obj->getCtrlAutoCpAnticip());
        $this->assertNull($obj->getCtrlTauxBase());
        $this->assertNull($obj->getDadsDernierChoixGestionAen());
        $this->assertNull($obj->getDadsTypeGestionAen());
        $this->assertNull($obj->getDadsuNumAgrAnsp());
        $this->assertNull($obj->getDadsuRefDec());
        $this->assertNull($obj->getDasTypeDecl());
        $this->assertNull($obj->getDasTypeDeclDetail());
        $this->assertNull($obj->getDateDp());
        $this->assertNull($obj->getDebutPeriodeDas());
        $this->assertNull($obj->getDebutPeriodeHistoDas());
        $this->assertNull($obj->getDeductionHSupFillon());
        $this->assertNull($obj->getDeduireHSupNonStructurelle());
        $this->assertNull($obj->getDernierIndiceBul());
        $this->assertNull($obj->getDestPointIrc());
        $this->assertNull($obj->getDestTriPoint());
        $this->assertNull($obj->getDossierProprete());
        $this->assertNull($obj->getDossierSurWeb());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDsFusion());
        $this->assertNull($obj->getDsTypeEdition());
        $this->assertNull($obj->getDtDebutPeriode());
        $this->assertNull($obj->getDtFinPeriode());
        $this->assertNull($obj->getDucsFrancEuro());
        $this->assertNull($obj->getEcrType());
        $this->assertNull($obj->getEdBordChoixModele());
        $this->assertNull($obj->getEdBordRuptureEmp());
        $this->assertNull($obj->getEdBordTypeImp());
        $this->assertNull($obj->getEdBordereau());
        $this->assertNull($obj->getEdBordereauPrep());
        $this->assertNull($obj->getEdBordereauPrepa());
        $this->assertNull($obj->getEdBulLastFax());
        $this->assertNull($obj->getEdBulLastMail());
        $this->assertNull($obj->getEdBulTypeSortie());
        $this->assertNull($obj->getEdCorrespondance());
        $this->assertNull($obj->getEdDucsNbEx());
        $this->assertNull($obj->getEdDucsOptBtp());
        $this->assertNull($obj->getEdDucsTypeSortie());
        $this->assertNull($obj->getEdDucsAuto());
        $this->assertNull($obj->getEdHSupBonifQueMajo());
        $this->assertNull($obj->getEdHistoTriEmp());
        $this->assertNull($obj->getEdHistoTriEtablissement());
        $this->assertNull($obj->getEdHistoTriService());
        $this->assertNull($obj->getEdHistoType());
        $this->assertNull($obj->getEdImputComptable());
        $this->assertNull($obj->getEdTexte1());
        $this->assertNull($obj->getEdTexte2());
        $this->assertNull($obj->getEdTrtCptaLastFax());
        $this->assertNull($obj->getEdTrtCptaLastMail());
        $this->assertNull($obj->getEdTrtCptaSortie());
        $this->assertNull($obj->getEditQpxlAbsences());
        $this->assertNull($obj->getEditQpxlAcomptes());
        $this->assertNull($obj->getEditQpxlTriEmp());
        $this->assertNull($obj->getEditQpxlViderLib());
        $this->assertNull($obj->getEditerBulletinStc());
        $this->assertNull($obj->getEditionChequeTc());
        $this->assertNull($obj->getEditionDate());
        $this->assertNull($obj->getEditionHeure());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEnteteSoldeTc());
        $this->assertNull($obj->getEtatControleDadsu());
        $this->assertNull($obj->getEtatCtrlNorme());
        $this->assertNull($obj->getEtatDas());
        $this->assertNull($obj->getEtatDasRect());
        $this->assertNull($obj->getFichierUnique());
        $this->assertNull($obj->getFiltrerListeEmp());
        $this->assertNull($obj->getFinPeriodeDas());
        $this->assertNull($obj->getFinPeriodeHistoDas());
        $this->assertNull($obj->getFlagTraite());
        $this->assertNull($obj->getFlagTraite2());
        $this->assertNull($obj->getFlagTraite3());
        $this->assertNull($obj->getFormatFicVirement());
        $this->assertNull($obj->getGestNumBulletin());
        $this->assertNull($obj->getGestRepoCompens());
        $this->assertNull($obj->getGestTexte());
        $this->assertNull($obj->getGestionCoeff());
        $this->assertNull($obj->getGestionCoeffGrille());
        $this->assertNull($obj->getGestionExemplaire());
        $this->assertNull($obj->getGestionIntemperie());
        $this->assertNull($obj->getGestionNumeroEmployeAuto());
        $this->assertNull($obj->getGestionQpxl());
        $this->assertNull($obj->getGestionTdBilaterale());
        $this->assertNull($obj->getGestionTdSouDadsu());
        $this->assertNull($obj->getGroupeGi());
        $this->assertNull($obj->getHBonifInfluCassation());
        $this->assertNull($obj->getHSup1Structurelle());
        $this->assertNull($obj->getHSup2Structurelle());
        $this->assertNull($obj->getHSup3Structurelle());
        $this->assertNull($obj->getHSup4Structurelle());
        $this->assertNull($obj->getHSup5Structurelle());
        $this->assertNull($obj->getHeureSup2InfluCassation());
        $this->assertNull($obj->getHeureSup3InfluCassation());
        $this->assertNull($obj->getHeureSup4InfluCassation());
        $this->assertNull($obj->getHeureSup5InfluCassation());
        $this->assertNull($obj->getHeureSupInfluCassation());
        $this->assertNull($obj->getHeureTheoBaseTrav());
        $this->assertNull($obj->getIndemCpIntervientBrutAl());
        $this->assertNull($obj->getJourDebutTransfert());
        $this->assertNull($obj->getJourFinTransfert());
        $this->assertNull($obj->getJrnFormat());
        $this->assertNull($obj->getJrnRegroupeAbs());
        $this->assertNull($obj->getJrnTri());
        $this->assertNull($obj->getJrnTriEtablissement());
        $this->assertNull($obj->getJrnTriService());
        $this->assertNull($obj->getJrnType());
        $this->assertNull($obj->getLiaisonProprete());
        $this->assertNull($obj->getLibArbitrage());
        $this->assertNull($obj->getLibBqcp());
        $this->assertNull($obj->getLibBaseConge());
        $this->assertNull($obj->getLibCachetAem());
        $this->assertNull($obj->getLibCotisCne());
        $this->assertNull($obj->getLibFinContrat());
        $this->assertNull($obj->getLibFinContratCne());
        $this->assertNull($obj->getLibIndemCp());
        $this->assertNull($obj->getLibelleLibreVirement());
        $this->assertNull($obj->getLigneBulEuro());
        $this->assertNull($obj->getLignesTransport());
        $this->assertNull($obj->getMailBulletin());
        $this->assertNull($obj->getMailBulletinCle());
        $this->assertNull($obj->getMailBulletinPj());
        $this->assertNull($obj->getMailCLiDucsEdi());
        $this->assertNull($obj->getMentionCp());
        $this->assertNull($obj->getMessageVu());
        $this->assertNull($obj->getMillesime1());
        $this->assertNull($obj->getModePlanning());
        $this->assertNull($obj->getModeleApercu());
        $this->assertNull($obj->getModeleBonBleu());
        $this->assertNull($obj->getModeleBulletin());
        $this->assertNull($obj->getModeleCertif());
        $this->assertNull($obj->getModeleCertifTrav());
        $this->assertNull($obj->getModeleCheque());
        $this->assertNull($obj->getMoisClotureAn());
        $this->assertNull($obj->getNAttestAem());
        $this->assertNull($obj->getNAttestAemedi());
        $this->assertNull($obj->getNAttestAemx());
        $this->assertNull($obj->getNAttestAssedic());
        $this->assertNull($obj->getNAttestExtras());
        $this->assertNull($obj->getNAttestIjss());
        $this->assertNull($obj->getNAttestIjssAt());
        $this->assertNull($obj->getNceCongesSpectacles());
        $this->assertNull($obj->getNDerDocument());
        $this->assertNull($obj->getNapEuro());
        $this->assertNull($obj->getNbExemplaire());
        $this->assertNull($obj->getNouvParamRetraiteType());
        $this->assertNull($obj->getOptionsCalcAbs());
        $this->assertNull($obj->getOrdreLibelleHSup());
        $this->assertNull($obj->getPaieEuro());
        $this->assertNull($obj->getPartSalSeule());
        $this->assertNull($obj->getPasGestionIndiceBul());
        $this->assertNull($obj->getPasPrendreIccpFillon());
        $this->assertNull($obj->getPasSousTotSBase());
        $this->assertNull($obj->getPassage35HFait());
        $this->assertNull($obj->getPathVirement());
        $this->assertNull($obj->getPeriodeIPaie());
        $this->assertNull($obj->getPeriodePaie());
        $this->assertNull($obj->getPjMailCLiDucsEdi());
        $this->assertNull($obj->getPjMailCliCouponPaiement());
        $this->assertNull($obj->getPlafond());
        $this->assertNull($obj->getPortaFraisSanteCertifTrav());
        $this->assertNull($obj->getPortaPrevoyanceOblig());
        $this->assertNull($obj->getPreparationTdp());
        $this->assertNull($obj->getPresenceMin());
        $this->assertNull($obj->getProrataDifCertifTrav());
        $this->assertNull($obj->getRdlpascii());
        $this->assertNull($obj->getRdlpemployes());
        $this->assertNull($obj->getRazCommentaire());
        $this->assertNull($obj->getRazHSup());
        $this->assertNull($obj->getRefRemise());
        $this->assertNull($obj->getRefTrans());
        $this->assertNull($obj->getReferenceInterneVirement());
        $this->assertNull($obj->getRegroupLibEdBul());
        $this->assertNull($obj->getReportMinimum());
        $this->assertNull($obj->getRetraite97());
        $this->assertNull($obj->getSaisPlanEmpSem());
        $this->assertNull($obj->getSaisieIndiceBul());
        $this->assertNull($obj->getSautPage());
        $this->assertNull($obj->getSeuil());
        $this->assertNull($obj->getSeuilConting());
        $this->assertNull($obj->getStcAuto());
        $this->assertNull($obj->getTabBordTriEtablissement());
        $this->assertNull($obj->getTabBordTriService());
        $this->assertNull($obj->getTableauCharge());
        $this->assertNull($obj->getTdsAnnee());
        $this->assertNull($obj->getTdsEuro());
        $this->assertNull($obj->getTotGeneIsole());
        $this->assertNull($obj->getTotServiceIsole());
        $this->assertNull($obj->getTotalEtabIsole());
        $this->assertNull($obj->getTransRupture());
        $this->assertNull($obj->getTransTriEtablissement());
        $this->assertNull($obj->getTransfertTdsEmp());
        $this->assertNull($obj->getTriEmploye());
        $this->assertNull($obj->getTxSalDecote());
        $this->assertNull($obj->getTypeAbsSansSolde());
        $this->assertNull($obj->getTypeAgrementAem());
        $this->assertNull($obj->getTypeBordereauPrepa());
        $this->assertNull($obj->getTypeBulletin());
        $this->assertNull($obj->getTypeDue());
        $this->assertNull($obj->getTypeDossier());
        $this->assertNull($obj->getTypeEffectif());
        $this->assertNull($obj->getTypeFichBilat());
        $this->assertNull($obj->getTypeGestionBal());
        $this->assertNull($obj->getTypeModele());
        $this->assertNull($obj->getTypePrepDadsu());
        $this->assertNull($obj->getTypeSaisieAbs());
        $this->assertNull($obj->getTypeSaisieAbsence());
        $this->assertNull($obj->getTypeStc());
        $this->assertNull($obj->getTypeTauxIntemperie());
        $this->assertNull($obj->getTypeTri());
        $this->assertNull($obj->getTypeVirement());
        $this->assertNull($obj->getTypeVisuColSaisieBul());
        $this->assertNull($obj->getUtilisePdpQuadra());
        $this->assertNull($obj->getUtilisePdpQuadra2());
        $this->assertNull($obj->getValCpBulletin());
        $this->assertNull($obj->getValFiltreListeEmp());
        $this->assertNull($obj->getVersionControleDadsu());
        $this->assertNull($obj->getVirCodeEtab());
        $this->assertNull($obj->getVirCollectivite());
        $this->assertNull($obj->getVirComptableCentre());
        $this->assertNull($obj->getVirComptableSub());
        $this->assertNull($obj->getVirFonctionPublique());
        $this->assertNull($obj->getVirSeuil());
        $this->assertNull($obj->getVirTypeEtab());
        $this->assertNull($obj->getVirementCrLf());
        $this->assertNull($obj->getVirementsEuro());
        $this->assertNull($obj->getWebPrioritaire());
    }
}
