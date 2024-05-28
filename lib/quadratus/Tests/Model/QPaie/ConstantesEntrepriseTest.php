<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Quadratus\Tests\Model\QPaie;

use DateTime;
use Throwable;
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
     * Test setAbsenceExtra()
     *
     * @return void
     */
    public function testSetAbsenceExtra(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAbsenceExtra("absenceExtra");
        $this->assertEquals("absenceExtra", $obj->getAbsenceExtra());
    }

    /**
     * Test setActiverPointageQws()
     *
     * @return void
     */
    public function testSetActiverPointageQws(): void {

        $obj = new ConstantesEntreprise();

        $obj->setActiverPointageQws(true);
        $this->assertTrue($obj->getActiverPointageQws());
    }

    /**
     * Test setAdhesionTdsNorme()
     *
     * @return void
     */
    public function testSetAdhesionTdsNorme(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAdhesionTdsNorme("adhesionTdsNorme");
        $this->assertEquals("adhesionTdsNorme", $obj->getAdhesionTdsNorme());
    }

    /**
     * Test setAffaire()
     *
     * @return void
     */
    public function testSetAffaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAffaire("affaire");
        $this->assertEquals("affaire", $obj->getAffaire());
    }

    /**
     * Test setAffectationTaux27()
     *
     * @return void
     */
    public function testSetAffectationTaux27(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAffectationTaux27(true);
        $this->assertTrue($obj->getAffectationTaux27());
    }

    /**
     * Test setAnalytiqueEmploye()
     *
     * @return void
     */
    public function testSetAnalytiqueEmploye(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAnalytiqueEmploye(true);
        $this->assertTrue($obj->getAnalytiqueEmploye());
    }

    /**
     * Test setArbitrageAuto()
     *
     * @return void
     */
    public function testSetArbitrageAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setArbitrageAuto("arbitrageAuto");
        $this->assertEquals("arbitrageAuto", $obj->getArbitrageAuto());
    }

    /**
     * Test setArchivageActif()
     *
     * @return void
     */
    public function testSetArchivageActif(): void {

        $obj = new ConstantesEntreprise();

        $obj->setArchivageActif(true);
        $this->assertTrue($obj->getArchivageActif());
    }

    /**
     * Test setAttestAuto()
     *
     * @return void
     */
    public function testSetAttestAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setAttestAuto(true);
        $this->assertTrue($obj->getAttestAuto());
    }

    /**
     * Test setBeneficieCice()
     *
     * @return void
     */
    public function testSetBeneficieCice(): void {

        $obj = new ConstantesEntreprise();

        $obj->setBeneficieCice(true);
        $this->assertTrue($obj->getBeneficieCice());
    }

    /**
     * Test setBrutAlSalMinConv()
     *
     * @return void
     */
    public function testSetBrutAlSalMinConv(): void {

        $obj = new ConstantesEntreprise();

        $obj->setBrutAlSalMinConv(true);
        $this->assertTrue($obj->getBrutAlSalMinConv());
    }

    /**
     * Test setCalculAutoHTheorique()
     *
     * @return void
     */
    public function testSetCalculAutoHTheorique(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCalculAutoHTheorique(true);
        $this->assertTrue($obj->getCalculAutoHTheorique());
    }

    /**
     * Test setCertifAuto()
     *
     * @return void
     */
    public function testSetCertifAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCertifAuto(true);
        $this->assertTrue($obj->getCertifAuto());
    }

    /**
     * Test setChequesEuro()
     *
     * @return void
     */
    public function testSetChequesEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setChequesEuro("chequesEuro");
        $this->assertEquals("chequesEuro", $obj->getChequesEuro());
    }

    /**
     * Test setChoixEditionChequeTc()
     *
     * @return void
     */
    public function testSetChoixEditionChequeTc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setChoixEditionChequeTc(true);
        $this->assertTrue($obj->getChoixEditionChequeTc());
    }

    /**
     * Test setCicePjMailCliDucsEdi()
     *
     * @return void
     */
    public function testSetCicePjMailCliDucsEdi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCicePjMailCliDucsEdi(true);
        $this->assertTrue($obj->getCicePjMailCliDucsEdi());
    }

    /**
     * Test setCleAcces1()
     *
     * @return void
     */
    public function testSetCleAcces1(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCleAcces1("cleAcces1");
        $this->assertEquals("cleAcces1", $obj->getCleAcces1());
    }

    /**
     * Test setClePortable()
     *
     * @return void
     */
    public function testSetClePortable(): void {

        $obj = new ConstantesEntreprise();

        $obj->setClePortable("clePortable");
        $this->assertEquals("clePortable", $obj->getClePortable());
    }

    /**
     * Test setCodeOrgBtpdadsu()
     *
     * @return void
     */
    public function testSetCodeOrgBtpdadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCodeOrgBtpdadsu("codeOrgBtpdadsu");
        $this->assertEquals("codeOrgBtpdadsu", $obj->getCodeOrgBtpdadsu());
    }

    /**
     * Test setCollaborateuriPaie()
     *
     * @return void
     */
    public function testSetCollaborateuriPaie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCollaborateuriPaie("collaborateuriPaie");
        $this->assertEquals("collaborateuriPaie", $obj->getCollaborateuriPaie());
    }

    /**
     * Test setCompression()
     *
     * @return void
     */
    public function testSetCompression(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCompression(true);
        $this->assertTrue($obj->getCompression());
    }

    /**
     * Test setCompteGainEuro()
     *
     * @return void
     */
    public function testSetCompteGainEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCompteGainEuro("compteGainEuro");
        $this->assertEquals("compteGainEuro", $obj->getCompteGainEuro());
    }

    /**
     * Test setComptePerteEuro()
     *
     * @return void
     */
    public function testSetComptePerteEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setComptePerteEuro("comptePerteEuro");
        $this->assertEquals("comptePerteEuro", $obj->getComptePerteEuro());
    }

    /**
     * Test setCptaElitEuros()
     *
     * @return void
     */
    public function testSetCptaElitEuros(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCptaElitEuros(true);
        $this->assertTrue($obj->getCptaElitEuros());
    }

    /**
     * Test setCtrlAutoCp()
     *
     * @return void
     */
    public function testSetCtrlAutoCp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlAutoCp(true);
        $this->assertTrue($obj->getCtrlAutoCp());
    }

    /**
     * Test setCtrlAutoCpAnticip()
     *
     * @return void
     */
    public function testSetCtrlAutoCpAnticip(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlAutoCpAnticip(true);
        $this->assertTrue($obj->getCtrlAutoCpAnticip());
    }

    /**
     * Test setCtrlTauxBase()
     *
     * @return void
     */
    public function testSetCtrlTauxBase(): void {

        $obj = new ConstantesEntreprise();

        $obj->setCtrlTauxBase(true);
        $this->assertTrue($obj->getCtrlTauxBase());
    }

    /**
     * Test setDadsDernierChoixGestionAen()
     *
     * @return void
     */
    public function testSetDadsDernierChoixGestionAen(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsDernierChoixGestionAen("dadsDernierChoixGestionAen");
        $this->assertEquals("dadsDernierChoixGestionAen", $obj->getDadsDernierChoixGestionAen());
    }

    /**
     * Test setDadsTypeGestionAen()
     *
     * @return void
     */
    public function testSetDadsTypeGestionAen(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsTypeGestionAen("dadsTypeGestionAen");
        $this->assertEquals("dadsTypeGestionAen", $obj->getDadsTypeGestionAen());
    }

    /**
     * Test setDadsuNumAgrAnsp()
     *
     * @return void
     */
    public function testSetDadsuNumAgrAnsp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsuNumAgrAnsp("dadsuNumAgrAnsp");
        $this->assertEquals("dadsuNumAgrAnsp", $obj->getDadsuNumAgrAnsp());
    }

    /**
     * Test setDadsuRefDec()
     *
     * @return void
     */
    public function testSetDadsuRefDec(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDadsuRefDec("dadsuRefDec");
        $this->assertEquals("dadsuRefDec", $obj->getDadsuRefDec());
    }

    /**
     * Test setDasTypeDecl()
     *
     * @return void
     */
    public function testSetDasTypeDecl(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDasTypeDecl("dasTypeDecl");
        $this->assertEquals("dasTypeDecl", $obj->getDasTypeDecl());
    }

    /**
     * Test setDasTypeDeclDetail()
     *
     * @return void
     */
    public function testSetDasTypeDeclDetail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDasTypeDeclDetail("dasTypeDeclDetail");
        $this->assertEquals("dasTypeDeclDetail", $obj->getDasTypeDeclDetail());
    }

    /**
     * Test setDateDp()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDp(): void {

        // Set a Date/time mock.
        $dateDp = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDateDp($dateDp);
        $this->assertSame($dateDp, $obj->getDateDp());
    }

    /**
     * Test setDebutPeriodeDas()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeDas(): void {

        // Set a Date/time mock.
        $debutPeriodeDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDebutPeriodeDas($debutPeriodeDas);
        $this->assertSame($debutPeriodeDas, $obj->getDebutPeriodeDas());
    }

    /**
     * Test setDebutPeriodeHistoDas()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDebutPeriodeHistoDas(): void {

        // Set a Date/time mock.
        $debutPeriodeHistoDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDebutPeriodeHistoDas($debutPeriodeHistoDas);
        $this->assertSame($debutPeriodeHistoDas, $obj->getDebutPeriodeHistoDas());
    }

    /**
     * Test setDeductionHSupFillon()
     *
     * @return void
     */
    public function testSetDeductionHSupFillon(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDeductionHSupFillon(true);
        $this->assertTrue($obj->getDeductionHSupFillon());
    }

    /**
     * Test setDeduireHSupNonStructurelle()
     *
     * @return void
     */
    public function testSetDeduireHSupNonStructurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDeduireHSupNonStructurelle(true);
        $this->assertTrue($obj->getDeduireHSupNonStructurelle());
    }

    /**
     * Test setDernierIndiceBul()
     *
     * @return void
     */
    public function testSetDernierIndiceBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDernierIndiceBul(10);
        $this->assertEquals(10, $obj->getDernierIndiceBul());
    }

    /**
     * Test setDestPointIrc()
     *
     * @return void
     */
    public function testSetDestPointIrc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDestPointIrc("destPointIrc");
        $this->assertEquals("destPointIrc", $obj->getDestPointIrc());
    }

    /**
     * Test setDestTriPoint()
     *
     * @return void
     */
    public function testSetDestTriPoint(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDestTriPoint("destTriPoint");
        $this->assertEquals("destTriPoint", $obj->getDestTriPoint());
    }

    /**
     * Test setDossierProprete()
     *
     * @return void
     */
    public function testSetDossierProprete(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDossierProprete("dossierProprete");
        $this->assertEquals("dossierProprete", $obj->getDossierProprete());
    }

    /**
     * Test setDossierSurWeb()
     *
     * @return void
     */
    public function testSetDossierSurWeb(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDossierSurWeb(true);
        $this->assertTrue($obj->getDossierSurWeb());
    }

    /**
     * Test setDsCodeCollab()
     *
     * @return void
     */
    public function testSetDsCodeCollab(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Test setDsDateRetour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour(): void {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Test setDsDateSortie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie(): void {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Test setDsFusion()
     *
     * @return void
     */
    public function testSetDsFusion(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDsFusion("dsFusion");
        $this->assertEquals("dsFusion", $obj->getDsFusion());
    }

    /**
     * Test setDsTypeEdition()
     *
     * @return void
     */
    public function testSetDsTypeEdition(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDsTypeEdition("dsTypeEdition");
        $this->assertEquals("dsTypeEdition", $obj->getDsTypeEdition());
    }

    /**
     * Test setDtDebutPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtDebutPeriode(): void {

        // Set a Date/time mock.
        $dtDebutPeriode = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDtDebutPeriode($dtDebutPeriode);
        $this->assertSame($dtDebutPeriode, $obj->getDtDebutPeriode());
    }

    /**
     * Test setDtFinPeriode()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDtFinPeriode(): void {

        // Set a Date/time mock.
        $dtFinPeriode = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setDtFinPeriode($dtFinPeriode);
        $this->assertSame($dtFinPeriode, $obj->getDtFinPeriode());
    }

    /**
     * Test setDucsFrancEuro()
     *
     * @return void
     */
    public function testSetDucsFrancEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setDucsFrancEuro("ducsFrancEuro");
        $this->assertEquals("ducsFrancEuro", $obj->getDucsFrancEuro());
    }

    /**
     * Test setEcrType()
     *
     * @return void
     */
    public function testSetEcrType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEcrType("ecrType");
        $this->assertEquals("ecrType", $obj->getEcrType());
    }

    /**
     * Test setEdBordChoixModele()
     *
     * @return void
     */
    public function testSetEdBordChoixModele(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordChoixModele("edBordChoixModele");
        $this->assertEquals("edBordChoixModele", $obj->getEdBordChoixModele());
    }

    /**
     * Test setEdBordRuptureEmp()
     *
     * @return void
     */
    public function testSetEdBordRuptureEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordRuptureEmp(true);
        $this->assertTrue($obj->getEdBordRuptureEmp());
    }

    /**
     * Test setEdBordTypeImp()
     *
     * @return void
     */
    public function testSetEdBordTypeImp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordTypeImp("edBordTypeImp");
        $this->assertEquals("edBordTypeImp", $obj->getEdBordTypeImp());
    }

    /**
     * Test setEdBordereau()
     *
     * @return void
     */
    public function testSetEdBordereau(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereau(true);
        $this->assertTrue($obj->getEdBordereau());
    }

    /**
     * Test setEdBordereauPrep()
     *
     * @return void
     */
    public function testSetEdBordereauPrep(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereauPrep(true);
        $this->assertTrue($obj->getEdBordereauPrep());
    }

    /**
     * Test setEdBordereauPrepa()
     *
     * @return void
     */
    public function testSetEdBordereauPrepa(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBordereauPrepa(true);
        $this->assertTrue($obj->getEdBordereauPrepa());
    }

    /**
     * Test setEdBulLastFax()
     *
     * @return void
     */
    public function testSetEdBulLastFax(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulLastFax("edBulLastFax");
        $this->assertEquals("edBulLastFax", $obj->getEdBulLastFax());
    }

    /**
     * Test setEdBulLastMail()
     *
     * @return void
     */
    public function testSetEdBulLastMail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulLastMail("edBulLastMail");
        $this->assertEquals("edBulLastMail", $obj->getEdBulLastMail());
    }

    /**
     * Test setEdBulTypeSortie()
     *
     * @return void
     */
    public function testSetEdBulTypeSortie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdBulTypeSortie("edBulTypeSortie");
        $this->assertEquals("edBulTypeSortie", $obj->getEdBulTypeSortie());
    }

    /**
     * Test setEdCorrespondance()
     *
     * @return void
     */
    public function testSetEdCorrespondance(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdCorrespondance(true);
        $this->assertTrue($obj->getEdCorrespondance());
    }

    /**
     * Test setEdDucsAuto()
     *
     * @return void
     */
    public function testSetEdDucsAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsAuto(true);
        $this->assertTrue($obj->getEdDucsAuto());
    }

    /**
     * Test setEdDucsNbEx()
     *
     * @return void
     */
    public function testSetEdDucsNbEx(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsNbEx("edDucsNbEx");
        $this->assertEquals("edDucsNbEx", $obj->getEdDucsNbEx());
    }

    /**
     * Test setEdDucsOptBtp()
     *
     * @return void
     */
    public function testSetEdDucsOptBtp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsOptBtp("edDucsOptBtp");
        $this->assertEquals("edDucsOptBtp", $obj->getEdDucsOptBtp());
    }

    /**
     * Test setEdDucsTypeSortie()
     *
     * @return void
     */
    public function testSetEdDucsTypeSortie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdDucsTypeSortie("edDucsTypeSortie");
        $this->assertEquals("edDucsTypeSortie", $obj->getEdDucsTypeSortie());
    }

    /**
     * Test setEdHSupBonifQueMajo()
     *
     * @return void
     */
    public function testSetEdHSupBonifQueMajo(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHSupBonifQueMajo(true);
        $this->assertTrue($obj->getEdHSupBonifQueMajo());
    }

    /**
     * Test setEdHistoTriEmp()
     *
     * @return void
     */
    public function testSetEdHistoTriEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriEmp("edHistoTriEmp");
        $this->assertEquals("edHistoTriEmp", $obj->getEdHistoTriEmp());
    }

    /**
     * Test setEdHistoTriEtablissement()
     *
     * @return void
     */
    public function testSetEdHistoTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriEtablissement(true);
        $this->assertTrue($obj->getEdHistoTriEtablissement());
    }

    /**
     * Test setEdHistoTriService()
     *
     * @return void
     */
    public function testSetEdHistoTriService(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoTriService(true);
        $this->assertTrue($obj->getEdHistoTriService());
    }

    /**
     * Test setEdHistoType()
     *
     * @return void
     */
    public function testSetEdHistoType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdHistoType("edHistoType");
        $this->assertEquals("edHistoType", $obj->getEdHistoType());
    }

    /**
     * Test setEdImputComptable()
     *
     * @return void
     */
    public function testSetEdImputComptable(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdImputComptable(true);
        $this->assertTrue($obj->getEdImputComptable());
    }

    /**
     * Test setEdTexte1()
     *
     * @return void
     */
    public function testSetEdTexte1(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTexte1("edTexte1");
        $this->assertEquals("edTexte1", $obj->getEdTexte1());
    }

    /**
     * Test setEdTexte2()
     *
     * @return void
     */
    public function testSetEdTexte2(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTexte2("edTexte2");
        $this->assertEquals("edTexte2", $obj->getEdTexte2());
    }

    /**
     * Test setEdTrtCptaLastFax()
     *
     * @return void
     */
    public function testSetEdTrtCptaLastFax(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaLastFax("edTrtCptaLastFax");
        $this->assertEquals("edTrtCptaLastFax", $obj->getEdTrtCptaLastFax());
    }

    /**
     * Test setEdTrtCptaLastMail()
     *
     * @return void
     */
    public function testSetEdTrtCptaLastMail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaLastMail("edTrtCptaLastMail");
        $this->assertEquals("edTrtCptaLastMail", $obj->getEdTrtCptaLastMail());
    }

    /**
     * Test setEdTrtCptaSortie()
     *
     * @return void
     */
    public function testSetEdTrtCptaSortie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEdTrtCptaSortie("edTrtCptaSortie");
        $this->assertEquals("edTrtCptaSortie", $obj->getEdTrtCptaSortie());
    }

    /**
     * Test setEditQpxlAbsences()
     *
     * @return void
     */
    public function testSetEditQpxlAbsences(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlAbsences(true);
        $this->assertTrue($obj->getEditQpxlAbsences());
    }

    /**
     * Test setEditQpxlAcomptes()
     *
     * @return void
     */
    public function testSetEditQpxlAcomptes(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlAcomptes(true);
        $this->assertTrue($obj->getEditQpxlAcomptes());
    }

    /**
     * Test setEditQpxlTriEmp()
     *
     * @return void
     */
    public function testSetEditQpxlTriEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlTriEmp("editQpxlTriEmp");
        $this->assertEquals("editQpxlTriEmp", $obj->getEditQpxlTriEmp());
    }

    /**
     * Test setEditQpxlViderLib()
     *
     * @return void
     */
    public function testSetEditQpxlViderLib(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditQpxlViderLib(true);
        $this->assertTrue($obj->getEditQpxlViderLib());
    }

    /**
     * Test setEditerBulletinStc()
     *
     * @return void
     */
    public function testSetEditerBulletinStc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditerBulletinStc(true);
        $this->assertTrue($obj->getEditerBulletinStc());
    }

    /**
     * Test setEditionChequeTc()
     *
     * @return void
     */
    public function testSetEditionChequeTc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditionChequeTc(true);
        $this->assertTrue($obj->getEditionChequeTc());
    }

    /**
     * Test setEditionDate()
     *
     * @return void
     */
    public function testSetEditionDate(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditionDate(true);
        $this->assertTrue($obj->getEditionDate());
    }

    /**
     * Test setEditionHeure()
     *
     * @return void
     */
    public function testSetEditionHeure(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEditionHeure(true);
        $this->assertTrue($obj->getEditionHeure());
    }

    /**
     * Test setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Test setEnteteSoldeTc()
     *
     * @return void
     */
    public function testSetEnteteSoldeTc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEnteteSoldeTc(true);
        $this->assertTrue($obj->getEnteteSoldeTc());
    }

    /**
     * Test setEtatControleDadsu()
     *
     * @return void
     */
    public function testSetEtatControleDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatControleDadsu("etatControleDadsu");
        $this->assertEquals("etatControleDadsu", $obj->getEtatControleDadsu());
    }

    /**
     * Test setEtatCtrlNorme()
     *
     * @return void
     */
    public function testSetEtatCtrlNorme(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatCtrlNorme("etatCtrlNorme");
        $this->assertEquals("etatCtrlNorme", $obj->getEtatCtrlNorme());
    }

    /**
     * Test setEtatDas()
     *
     * @return void
     */
    public function testSetEtatDas(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatDas("etatDas");
        $this->assertEquals("etatDas", $obj->getEtatDas());
    }

    /**
     * Test setEtatDasRect()
     *
     * @return void
     */
    public function testSetEtatDasRect(): void {

        $obj = new ConstantesEntreprise();

        $obj->setEtatDasRect("etatDasRect");
        $this->assertEquals("etatDasRect", $obj->getEtatDasRect());
    }

    /**
     * Test setFichierUnique()
     *
     * @return void
     */
    public function testSetFichierUnique(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFichierUnique(true);
        $this->assertTrue($obj->getFichierUnique());
    }

    /**
     * Test setFiltrerListeEmp()
     *
     * @return void
     */
    public function testSetFiltrerListeEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFiltrerListeEmp(10);
        $this->assertEquals(10, $obj->getFiltrerListeEmp());
    }

    /**
     * Test setFinPeriodeDas()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeDas(): void {

        // Set a Date/time mock.
        $finPeriodeDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setFinPeriodeDas($finPeriodeDas);
        $this->assertSame($finPeriodeDas, $obj->getFinPeriodeDas());
    }

    /**
     * Test setFinPeriodeHistoDas()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFinPeriodeHistoDas(): void {

        // Set a Date/time mock.
        $finPeriodeHistoDas = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setFinPeriodeHistoDas($finPeriodeHistoDas);
        $this->assertSame($finPeriodeHistoDas, $obj->getFinPeriodeHistoDas());
    }

    /**
     * Test setFlagTraite()
     *
     * @return void
     */
    public function testSetFlagTraite(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite("flagTraite");
        $this->assertEquals("flagTraite", $obj->getFlagTraite());
    }

    /**
     * Test setFlagTraite2()
     *
     * @return void
     */
    public function testSetFlagTraite2(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite2(10);
        $this->assertEquals(10, $obj->getFlagTraite2());
    }

    /**
     * Test setFlagTraite3()
     *
     * @return void
     */
    public function testSetFlagTraite3(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFlagTraite3(10);
        $this->assertEquals(10, $obj->getFlagTraite3());
    }

    /**
     * Test setFormatFicVirement()
     *
     * @return void
     */
    public function testSetFormatFicVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setFormatFicVirement("formatFicVirement");
        $this->assertEquals("formatFicVirement", $obj->getFormatFicVirement());
    }

    /**
     * Test setGestNumBulletin()
     *
     * @return void
     */
    public function testSetGestNumBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestNumBulletin(true);
        $this->assertTrue($obj->getGestNumBulletin());
    }

    /**
     * Test setGestRepoCompens()
     *
     * @return void
     */
    public function testSetGestRepoCompens(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestRepoCompens(true);
        $this->assertTrue($obj->getGestRepoCompens());
    }

    /**
     * Test setGestTexte()
     *
     * @return void
     */
    public function testSetGestTexte(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestTexte(true);
        $this->assertTrue($obj->getGestTexte());
    }

    /**
     * Test setGestionCoeff()
     *
     * @return void
     */
    public function testSetGestionCoeff(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionCoeff(true);
        $this->assertTrue($obj->getGestionCoeff());
    }

    /**
     * Test setGestionCoeffGrille()
     *
     * @return void
     */
    public function testSetGestionCoeffGrille(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionCoeffGrille(true);
        $this->assertTrue($obj->getGestionCoeffGrille());
    }

    /**
     * Test setGestionExemplaire()
     *
     * @return void
     */
    public function testSetGestionExemplaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionExemplaire("gestionExemplaire");
        $this->assertEquals("gestionExemplaire", $obj->getGestionExemplaire());
    }

    /**
     * Test setGestionIntemperie()
     *
     * @return void
     */
    public function testSetGestionIntemperie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionIntemperie(true);
        $this->assertTrue($obj->getGestionIntemperie());
    }

    /**
     * Test setGestionNumeroEmployeAuto()
     *
     * @return void
     */
    public function testSetGestionNumeroEmployeAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionNumeroEmployeAuto(true);
        $this->assertTrue($obj->getGestionNumeroEmployeAuto());
    }

    /**
     * Test setGestionQpxl()
     *
     * @return void
     */
    public function testSetGestionQpxl(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionQpxl(true);
        $this->assertTrue($obj->getGestionQpxl());
    }

    /**
     * Test setGestionTdBilaterale()
     *
     * @return void
     */
    public function testSetGestionTdBilaterale(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionTdBilaterale(true);
        $this->assertTrue($obj->getGestionTdBilaterale());
    }

    /**
     * Test setGestionTdSouDadsu()
     *
     * @return void
     */
    public function testSetGestionTdSouDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGestionTdSouDadsu(true);
        $this->assertTrue($obj->getGestionTdSouDadsu());
    }

    /**
     * Test setGroupeGi()
     *
     * @return void
     */
    public function testSetGroupeGi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setGroupeGi("groupeGi");
        $this->assertEquals("groupeGi", $obj->getGroupeGi());
    }

    /**
     * Test setHBonifInfluCassation()
     *
     * @return void
     */
    public function testSetHBonifInfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHBonifInfluCassation("hBonifInfluCassation");
        $this->assertEquals("hBonifInfluCassation", $obj->getHBonifInfluCassation());
    }

    /**
     * Test setHSup1Structurelle()
     *
     * @return void
     */
    public function testSetHSup1Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup1Structurelle(true);
        $this->assertTrue($obj->getHSup1Structurelle());
    }

    /**
     * Test setHSup2Structurelle()
     *
     * @return void
     */
    public function testSetHSup2Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup2Structurelle(true);
        $this->assertTrue($obj->getHSup2Structurelle());
    }

    /**
     * Test setHSup3Structurelle()
     *
     * @return void
     */
    public function testSetHSup3Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup3Structurelle(true);
        $this->assertTrue($obj->getHSup3Structurelle());
    }

    /**
     * Test setHSup4Structurelle()
     *
     * @return void
     */
    public function testSetHSup4Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup4Structurelle(true);
        $this->assertTrue($obj->getHSup4Structurelle());
    }

    /**
     * Test setHSup5Structurelle()
     *
     * @return void
     */
    public function testSetHSup5Structurelle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHSup5Structurelle(true);
        $this->assertTrue($obj->getHSup5Structurelle());
    }

    /**
     * Test setHeureSup2InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup2InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup2InfluCassation("heureSup2InfluCassation");
        $this->assertEquals("heureSup2InfluCassation", $obj->getHeureSup2InfluCassation());
    }

    /**
     * Test setHeureSup3InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup3InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup3InfluCassation("heureSup3InfluCassation");
        $this->assertEquals("heureSup3InfluCassation", $obj->getHeureSup3InfluCassation());
    }

    /**
     * Test setHeureSup4InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup4InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup4InfluCassation("heureSup4InfluCassation");
        $this->assertEquals("heureSup4InfluCassation", $obj->getHeureSup4InfluCassation());
    }

    /**
     * Test setHeureSup5InfluCassation()
     *
     * @return void
     */
    public function testSetHeureSup5InfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSup5InfluCassation("heureSup5InfluCassation");
        $this->assertEquals("heureSup5InfluCassation", $obj->getHeureSup5InfluCassation());
    }

    /**
     * Test setHeureSupInfluCassation()
     *
     * @return void
     */
    public function testSetHeureSupInfluCassation(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureSupInfluCassation("heureSupInfluCassation");
        $this->assertEquals("heureSupInfluCassation", $obj->getHeureSupInfluCassation());
    }

    /**
     * Test setHeureTheoBaseTrav()
     *
     * @return void
     */
    public function testSetHeureTheoBaseTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setHeureTheoBaseTrav("heureTheoBaseTrav");
        $this->assertEquals("heureTheoBaseTrav", $obj->getHeureTheoBaseTrav());
    }

    /**
     * Test setIndemCpIntervientBrutAl()
     *
     * @return void
     */
    public function testSetIndemCpIntervientBrutAl(): void {

        $obj = new ConstantesEntreprise();

        $obj->setIndemCpIntervientBrutAl(true);
        $this->assertTrue($obj->getIndemCpIntervientBrutAl());
    }

    /**
     * Test setJourDebutTransfert()
     *
     * @return void
     */
    public function testSetJourDebutTransfert(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJourDebutTransfert(10);
        $this->assertEquals(10, $obj->getJourDebutTransfert());
    }

    /**
     * Test setJourFinTransfert()
     *
     * @return void
     */
    public function testSetJourFinTransfert(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJourFinTransfert(10);
        $this->assertEquals(10, $obj->getJourFinTransfert());
    }

    /**
     * Test setJrnFormat()
     *
     * @return void
     */
    public function testSetJrnFormat(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnFormat("jrnFormat");
        $this->assertEquals("jrnFormat", $obj->getJrnFormat());
    }

    /**
     * Test setJrnRegroupeAbs()
     *
     * @return void
     */
    public function testSetJrnRegroupeAbs(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnRegroupeAbs(true);
        $this->assertTrue($obj->getJrnRegroupeAbs());
    }

    /**
     * Test setJrnTri()
     *
     * @return void
     */
    public function testSetJrnTri(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTri("jrnTri");
        $this->assertEquals("jrnTri", $obj->getJrnTri());
    }

    /**
     * Test setJrnTriEtablissement()
     *
     * @return void
     */
    public function testSetJrnTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTriEtablissement("jrnTriEtablissement");
        $this->assertEquals("jrnTriEtablissement", $obj->getJrnTriEtablissement());
    }

    /**
     * Test setJrnTriService()
     *
     * @return void
     */
    public function testSetJrnTriService(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnTriService("jrnTriService");
        $this->assertEquals("jrnTriService", $obj->getJrnTriService());
    }

    /**
     * Test setJrnType()
     *
     * @return void
     */
    public function testSetJrnType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setJrnType("jrnType");
        $this->assertEquals("jrnType", $obj->getJrnType());
    }

    /**
     * Test setLiaisonProprete()
     *
     * @return void
     */
    public function testSetLiaisonProprete(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLiaisonProprete(true);
        $this->assertTrue($obj->getLiaisonProprete());
    }

    /**
     * Test setLibArbitrage()
     *
     * @return void
     */
    public function testSetLibArbitrage(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibArbitrage("libArbitrage");
        $this->assertEquals("libArbitrage", $obj->getLibArbitrage());
    }

    /**
     * Test setLibBaseConge()
     *
     * @return void
     */
    public function testSetLibBaseConge(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibBaseConge("libBaseConge");
        $this->assertEquals("libBaseConge", $obj->getLibBaseConge());
    }

    /**
     * Test setLibBqcp()
     *
     * @return void
     */
    public function testSetLibBqcp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibBqcp("libBqcp");
        $this->assertEquals("libBqcp", $obj->getLibBqcp());
    }

    /**
     * Test setLibCachetAem()
     *
     * @return void
     */
    public function testSetLibCachetAem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibCachetAem("libCachetAem");
        $this->assertEquals("libCachetAem", $obj->getLibCachetAem());
    }

    /**
     * Test setLibCotisCne()
     *
     * @return void
     */
    public function testSetLibCotisCne(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibCotisCne("libCotisCne");
        $this->assertEquals("libCotisCne", $obj->getLibCotisCne());
    }

    /**
     * Test setLibFinContrat()
     *
     * @return void
     */
    public function testSetLibFinContrat(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibFinContrat("libFinContrat");
        $this->assertEquals("libFinContrat", $obj->getLibFinContrat());
    }

    /**
     * Test setLibFinContratCne()
     *
     * @return void
     */
    public function testSetLibFinContratCne(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibFinContratCne("libFinContratCne");
        $this->assertEquals("libFinContratCne", $obj->getLibFinContratCne());
    }

    /**
     * Test setLibIndemCp()
     *
     * @return void
     */
    public function testSetLibIndemCp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibIndemCp("libIndemCp");
        $this->assertEquals("libIndemCp", $obj->getLibIndemCp());
    }

    /**
     * Test setLibelleLibreVirement()
     *
     * @return void
     */
    public function testSetLibelleLibreVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLibelleLibreVirement("libelleLibreVirement");
        $this->assertEquals("libelleLibreVirement", $obj->getLibelleLibreVirement());
    }

    /**
     * Test setLigneBulEuro()
     *
     * @return void
     */
    public function testSetLigneBulEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLigneBulEuro(true);
        $this->assertTrue($obj->getLigneBulEuro());
    }

    /**
     * Test setLignesTransport()
     *
     * @return void
     */
    public function testSetLignesTransport(): void {

        $obj = new ConstantesEntreprise();

        $obj->setLignesTransport(true);
        $this->assertTrue($obj->getLignesTransport());
    }

    /**
     * Test setMailBulletin()
     *
     * @return void
     */
    public function testSetMailBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletin("mailBulletin");
        $this->assertEquals("mailBulletin", $obj->getMailBulletin());
    }

    /**
     * Test setMailBulletinCle()
     *
     * @return void
     */
    public function testSetMailBulletinCle(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletinCle("mailBulletinCle");
        $this->assertEquals("mailBulletinCle", $obj->getMailBulletinCle());
    }

    /**
     * Test setMailBulletinPj()
     *
     * @return void
     */
    public function testSetMailBulletinPj(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailBulletinPj("mailBulletinPj");
        $this->assertEquals("mailBulletinPj", $obj->getMailBulletinPj());
    }

    /**
     * Test setMailCLiDucsEdi()
     *
     * @return void
     */
    public function testSetMailCLiDucsEdi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMailCLiDucsEdi(true);
        $this->assertTrue($obj->getMailCLiDucsEdi());
    }

    /**
     * Test setMentionCp()
     *
     * @return void
     */
    public function testSetMentionCp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMentionCp(true);
        $this->assertTrue($obj->getMentionCp());
    }

    /**
     * Test setMessageVu()
     *
     * @return void
     */
    public function testSetMessageVu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMessageVu(true);
        $this->assertTrue($obj->getMessageVu());
    }

    /**
     * Test setMillesime1()
     *
     * @return void
     */
    public function testSetMillesime1(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMillesime1(10);
        $this->assertEquals(10, $obj->getMillesime1());
    }

    /**
     * Test setModePlanning()
     *
     * @return void
     */
    public function testSetModePlanning(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModePlanning(10);
        $this->assertEquals(10, $obj->getModePlanning());
    }

    /**
     * Test setModeleApercu()
     *
     * @return void
     */
    public function testSetModeleApercu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleApercu("modeleApercu");
        $this->assertEquals("modeleApercu", $obj->getModeleApercu());
    }

    /**
     * Test setModeleBonBleu()
     *
     * @return void
     */
    public function testSetModeleBonBleu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleBonBleu("modeleBonBleu");
        $this->assertEquals("modeleBonBleu", $obj->getModeleBonBleu());
    }

    /**
     * Test setModeleBulletin()
     *
     * @return void
     */
    public function testSetModeleBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleBulletin("modeleBulletin");
        $this->assertEquals("modeleBulletin", $obj->getModeleBulletin());
    }

    /**
     * Test setModeleCertif()
     *
     * @return void
     */
    public function testSetModeleCertif(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCertif("modeleCertif");
        $this->assertEquals("modeleCertif", $obj->getModeleCertif());
    }

    /**
     * Test setModeleCertifTrav()
     *
     * @return void
     */
    public function testSetModeleCertifTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCertifTrav("modeleCertifTrav");
        $this->assertEquals("modeleCertifTrav", $obj->getModeleCertifTrav());
    }

    /**
     * Test setModeleCheque()
     *
     * @return void
     */
    public function testSetModeleCheque(): void {

        $obj = new ConstantesEntreprise();

        $obj->setModeleCheque("modeleCheque");
        $this->assertEquals("modeleCheque", $obj->getModeleCheque());
    }

    /**
     * Test setMoisClotureAn()
     *
     * @return void
     */
    public function testSetMoisClotureAn(): void {

        $obj = new ConstantesEntreprise();

        $obj->setMoisClotureAn("moisClotureAn");
        $this->assertEquals("moisClotureAn", $obj->getMoisClotureAn());
    }

    /**
     * Test setNAttestAem()
     *
     * @return void
     */
    public function testSetNAttestAem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAem(10);
        $this->assertEquals(10, $obj->getNAttestAem());
    }

    /**
     * Test setNAttestAemedi()
     *
     * @return void
     */
    public function testSetNAttestAemedi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAemedi(10);
        $this->assertEquals(10, $obj->getNAttestAemedi());
    }

    /**
     * Test setNAttestAemx()
     *
     * @return void
     */
    public function testSetNAttestAemx(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAemx(10);
        $this->assertEquals(10, $obj->getNAttestAemx());
    }

    /**
     * Test setNAttestAssedic()
     *
     * @return void
     */
    public function testSetNAttestAssedic(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestAssedic(10);
        $this->assertEquals(10, $obj->getNAttestAssedic());
    }

    /**
     * Test setNAttestExtras()
     *
     * @return void
     */
    public function testSetNAttestExtras(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestExtras(10);
        $this->assertEquals(10, $obj->getNAttestExtras());
    }

    /**
     * Test setNAttestIjss()
     *
     * @return void
     */
    public function testSetNAttestIjss(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestIjss(10);
        $this->assertEquals(10, $obj->getNAttestIjss());
    }

    /**
     * Test setNAttestIjssAt()
     *
     * @return void
     */
    public function testSetNAttestIjssAt(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNAttestIjssAt(10);
        $this->assertEquals(10, $obj->getNAttestIjssAt());
    }

    /**
     * Test setNDerDocument()
     *
     * @return void
     */
    public function testSetNDerDocument(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNDerDocument(10);
        $this->assertEquals(10, $obj->getNDerDocument());
    }

    /**
     * Test setNapEuro()
     *
     * @return void
     */
    public function testSetNapEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNapEuro(true);
        $this->assertTrue($obj->getNapEuro());
    }

    /**
     * Test setNbExemplaire()
     *
     * @return void
     */
    public function testSetNbExemplaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNbExemplaire("nbExemplaire");
        $this->assertEquals("nbExemplaire", $obj->getNbExemplaire());
    }

    /**
     * Test setNceCongesSpectacles()
     *
     * @return void
     */
    public function testSetNceCongesSpectacles(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNceCongesSpectacles(10);
        $this->assertEquals(10, $obj->getNceCongesSpectacles());
    }

    /**
     * Test setNouvParamRetraiteType()
     *
     * @return void
     */
    public function testSetNouvParamRetraiteType(): void {

        $obj = new ConstantesEntreprise();

        $obj->setNouvParamRetraiteType(true);
        $this->assertTrue($obj->getNouvParamRetraiteType());
    }

    /**
     * Test setOptionsCalcAbs()
     *
     * @return void
     */
    public function testSetOptionsCalcAbs(): void {

        $obj = new ConstantesEntreprise();

        $obj->setOptionsCalcAbs(true);
        $this->assertTrue($obj->getOptionsCalcAbs());
    }

    /**
     * Test setOrdreLibelleHSup()
     *
     * @return void
     */
    public function testSetOrdreLibelleHSup(): void {

        $obj = new ConstantesEntreprise();

        $obj->setOrdreLibelleHSup("ordreLibelleHSup");
        $this->assertEquals("ordreLibelleHSup", $obj->getOrdreLibelleHSup());
    }

    /**
     * Test setPaieEuro()
     *
     * @return void
     */
    public function testSetPaieEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPaieEuro(true);
        $this->assertTrue($obj->getPaieEuro());
    }

    /**
     * Test setPartSalSeule()
     *
     * @return void
     */
    public function testSetPartSalSeule(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPartSalSeule(true);
        $this->assertTrue($obj->getPartSalSeule());
    }

    /**
     * Test setPasGestionIndiceBul()
     *
     * @return void
     */
    public function testSetPasGestionIndiceBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPasGestionIndiceBul(true);
        $this->assertTrue($obj->getPasGestionIndiceBul());
    }

    /**
     * Test setPasPrendreIccpFillon()
     *
     * @return void
     */
    public function testSetPasPrendreIccpFillon(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPasPrendreIccpFillon(true);
        $this->assertTrue($obj->getPasPrendreIccpFillon());
    }

    /**
     * Test setPasSousTotSBase()
     *
     * @return void
     */
    public function testSetPasSousTotSBase(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPasSousTotSBase(true);
        $this->assertTrue($obj->getPasSousTotSBase());
    }

    /**
     * Test setPassage35HFait()
     *
     * @return void
     */
    public function testSetPassage35HFait(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPassage35HFait(true);
        $this->assertTrue($obj->getPassage35HFait());
    }

    /**
     * Test setPathVirement()
     *
     * @return void
     */
    public function testSetPathVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPathVirement("pathVirement");
        $this->assertEquals("pathVirement", $obj->getPathVirement());
    }

    /**
     * Test setPeriodeIPaie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodeIPaie(): void {

        // Set a Date/time mock.
        $periodeIPaie = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setPeriodeIPaie($periodeIPaie);
        $this->assertSame($periodeIPaie, $obj->getPeriodeIPaie());
    }

    /**
     * Test setPeriodePaie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetPeriodePaie(): void {

        // Set a Date/time mock.
        $periodePaie = new DateTime("2018-09-10");

        $obj = new ConstantesEntreprise();

        $obj->setPeriodePaie($periodePaie);
        $this->assertSame($periodePaie, $obj->getPeriodePaie());
    }

    /**
     * Test setPjMailCLiDucsEdi()
     *
     * @return void
     */
    public function testSetPjMailCLiDucsEdi(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPjMailCLiDucsEdi(true);
        $this->assertTrue($obj->getPjMailCLiDucsEdi());
    }

    /**
     * Test setPjMailCliCouponPaiement()
     *
     * @return void
     */
    public function testSetPjMailCliCouponPaiement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPjMailCliCouponPaiement(true);
        $this->assertTrue($obj->getPjMailCliCouponPaiement());
    }

    /**
     * Test setPlafond()
     *
     * @return void
     */
    public function testSetPlafond(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPlafond(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond());
    }

    /**
     * Test setPortaFraisSanteCertifTrav()
     *
     * @return void
     */
    public function testSetPortaFraisSanteCertifTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPortaFraisSanteCertifTrav(true);
        $this->assertTrue($obj->getPortaFraisSanteCertifTrav());
    }

    /**
     * Test setPortaPrevoyanceOblig()
     *
     * @return void
     */
    public function testSetPortaPrevoyanceOblig(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPortaPrevoyanceOblig(true);
        $this->assertTrue($obj->getPortaPrevoyanceOblig());
    }

    /**
     * Test setPreparationTdp()
     *
     * @return void
     */
    public function testSetPreparationTdp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPreparationTdp(true);
        $this->assertTrue($obj->getPreparationTdp());
    }

    /**
     * Test setPresenceMin()
     *
     * @return void
     */
    public function testSetPresenceMin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setPresenceMin("presenceMin");
        $this->assertEquals("presenceMin", $obj->getPresenceMin());
    }

    /**
     * Test setProrataDifCertifTrav()
     *
     * @return void
     */
    public function testSetProrataDifCertifTrav(): void {

        $obj = new ConstantesEntreprise();

        $obj->setProrataDifCertifTrav(true);
        $this->assertTrue($obj->getProrataDifCertifTrav());
    }

    /**
     * Test setRazCommentaire()
     *
     * @return void
     */
    public function testSetRazCommentaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRazCommentaire("razCommentaire");
        $this->assertEquals("razCommentaire", $obj->getRazCommentaire());
    }

    /**
     * Test setRazHSup()
     *
     * @return void
     */
    public function testSetRazHSup(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRazHSup("razHSup");
        $this->assertEquals("razHSup", $obj->getRazHSup());
    }

    /**
     * Test setRdlpascii()
     *
     * @return void
     */
    public function testSetRdlpascii(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRdlpascii(true);
        $this->assertTrue($obj->getRdlpascii());
    }

    /**
     * Test setRdlpemployes()
     *
     * @return void
     */
    public function testSetRdlpemployes(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRdlpemployes(true);
        $this->assertTrue($obj->getRdlpemployes());
    }

    /**
     * Test setRefRemise()
     *
     * @return void
     */
    public function testSetRefRemise(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRefRemise(10);
        $this->assertEquals(10, $obj->getRefRemise());
    }

    /**
     * Test setRefTrans()
     *
     * @return void
     */
    public function testSetRefTrans(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRefTrans(10);
        $this->assertEquals(10, $obj->getRefTrans());
    }

    /**
     * Test setReferenceInterneVirement()
     *
     * @return void
     */
    public function testSetReferenceInterneVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setReferenceInterneVirement("referenceInterneVirement");
        $this->assertEquals("referenceInterneVirement", $obj->getReferenceInterneVirement());
    }

    /**
     * Test setRegroupLibEdBul()
     *
     * @return void
     */
    public function testSetRegroupLibEdBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRegroupLibEdBul(true);
        $this->assertTrue($obj->getRegroupLibEdBul());
    }

    /**
     * Test setReportMinimum()
     *
     * @return void
     */
    public function testSetReportMinimum(): void {

        $obj = new ConstantesEntreprise();

        $obj->setReportMinimum(10);
        $this->assertEquals(10, $obj->getReportMinimum());
    }

    /**
     * Test setRetraite97()
     *
     * @return void
     */
    public function testSetRetraite97(): void {

        $obj = new ConstantesEntreprise();

        $obj->setRetraite97(true);
        $this->assertTrue($obj->getRetraite97());
    }

    /**
     * Test setSaisPlanEmpSem()
     *
     * @return void
     */
    public function testSetSaisPlanEmpSem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSaisPlanEmpSem("saisPlanEmpSem");
        $this->assertEquals("saisPlanEmpSem", $obj->getSaisPlanEmpSem());
    }

    /**
     * Test setSaisieIndiceBul()
     *
     * @return void
     */
    public function testSetSaisieIndiceBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSaisieIndiceBul(true);
        $this->assertTrue($obj->getSaisieIndiceBul());
    }

    /**
     * Test setSautPage()
     *
     * @return void
     */
    public function testSetSautPage(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSautPage(true);
        $this->assertTrue($obj->getSautPage());
    }

    /**
     * Test setSeuil()
     *
     * @return void
     */
    public function testSetSeuil(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSeuil(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuil());
    }

    /**
     * Test setSeuilConting()
     *
     * @return void
     */
    public function testSetSeuilConting(): void {

        $obj = new ConstantesEntreprise();

        $obj->setSeuilConting(10.092018);
        $this->assertEquals(10.092018, $obj->getSeuilConting());
    }

    /**
     * Test setStcAuto()
     *
     * @return void
     */
    public function testSetStcAuto(): void {

        $obj = new ConstantesEntreprise();

        $obj->setStcAuto(true);
        $this->assertTrue($obj->getStcAuto());
    }

    /**
     * Test setTabBordTriEtablissement()
     *
     * @return void
     */
    public function testSetTabBordTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTabBordTriEtablissement(true);
        $this->assertTrue($obj->getTabBordTriEtablissement());
    }

    /**
     * Test setTabBordTriService()
     *
     * @return void
     */
    public function testSetTabBordTriService(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTabBordTriService(true);
        $this->assertTrue($obj->getTabBordTriService());
    }

    /**
     * Test setTableauCharge()
     *
     * @return void
     */
    public function testSetTableauCharge(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTableauCharge("tableauCharge");
        $this->assertEquals("tableauCharge", $obj->getTableauCharge());
    }

    /**
     * Test setTdsAnnee()
     *
     * @return void
     */
    public function testSetTdsAnnee(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTdsAnnee(10);
        $this->assertEquals(10, $obj->getTdsAnnee());
    }

    /**
     * Test setTdsEuro()
     *
     * @return void
     */
    public function testSetTdsEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTdsEuro(true);
        $this->assertTrue($obj->getTdsEuro());
    }

    /**
     * Test setTotGeneIsole()
     *
     * @return void
     */
    public function testSetTotGeneIsole(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTotGeneIsole("totGeneIsole");
        $this->assertEquals("totGeneIsole", $obj->getTotGeneIsole());
    }

    /**
     * Test setTotServiceIsole()
     *
     * @return void
     */
    public function testSetTotServiceIsole(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTotServiceIsole("totServiceIsole");
        $this->assertEquals("totServiceIsole", $obj->getTotServiceIsole());
    }

    /**
     * Test setTotalEtabIsole()
     *
     * @return void
     */
    public function testSetTotalEtabIsole(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTotalEtabIsole("totalEtabIsole");
        $this->assertEquals("totalEtabIsole", $obj->getTotalEtabIsole());
    }

    /**
     * Test setTransRupture()
     *
     * @return void
     */
    public function testSetTransRupture(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTransRupture("transRupture");
        $this->assertEquals("transRupture", $obj->getTransRupture());
    }

    /**
     * Test setTransTriEtablissement()
     *
     * @return void
     */
    public function testSetTransTriEtablissement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTransTriEtablissement("transTriEtablissement");
        $this->assertEquals("transTriEtablissement", $obj->getTransTriEtablissement());
    }

    /**
     * Test setTransfertTdsEmp()
     *
     * @return void
     */
    public function testSetTransfertTdsEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTransfertTdsEmp(true);
        $this->assertTrue($obj->getTransfertTdsEmp());
    }

    /**
     * Test setTriEmploye()
     *
     * @return void
     */
    public function testSetTriEmploye(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTriEmploye("triEmploye");
        $this->assertEquals("triEmploye", $obj->getTriEmploye());
    }

    /**
     * Test setTxSalDecote()
     *
     * @return void
     */
    public function testSetTxSalDecote(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTxSalDecote(10.092018);
        $this->assertEquals(10.092018, $obj->getTxSalDecote());
    }

    /**
     * Test setTypeAbsSansSolde()
     *
     * @return void
     */
    public function testSetTypeAbsSansSolde(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeAbsSansSolde("typeAbsSansSolde");
        $this->assertEquals("typeAbsSansSolde", $obj->getTypeAbsSansSolde());
    }

    /**
     * Test setTypeAgrementAem()
     *
     * @return void
     */
    public function testSetTypeAgrementAem(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeAgrementAem("typeAgrementAem");
        $this->assertEquals("typeAgrementAem", $obj->getTypeAgrementAem());
    }

    /**
     * Test setTypeBordereauPrepa()
     *
     * @return void
     */
    public function testSetTypeBordereauPrepa(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeBordereauPrepa("typeBordereauPrepa");
        $this->assertEquals("typeBordereauPrepa", $obj->getTypeBordereauPrepa());
    }

    /**
     * Test setTypeBulletin()
     *
     * @return void
     */
    public function testSetTypeBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeBulletin("typeBulletin");
        $this->assertEquals("typeBulletin", $obj->getTypeBulletin());
    }

    /**
     * Test setTypeDossier()
     *
     * @return void
     */
    public function testSetTypeDossier(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeDossier("typeDossier");
        $this->assertEquals("typeDossier", $obj->getTypeDossier());
    }

    /**
     * Test setTypeDue()
     *
     * @return void
     */
    public function testSetTypeDue(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeDue("typeDue");
        $this->assertEquals("typeDue", $obj->getTypeDue());
    }

    /**
     * Test setTypeEffectif()
     *
     * @return void
     */
    public function testSetTypeEffectif(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeEffectif("typeEffectif");
        $this->assertEquals("typeEffectif", $obj->getTypeEffectif());
    }

    /**
     * Test setTypeFichBilat()
     *
     * @return void
     */
    public function testSetTypeFichBilat(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeFichBilat("typeFichBilat");
        $this->assertEquals("typeFichBilat", $obj->getTypeFichBilat());
    }

    /**
     * Test setTypeGestionBal()
     *
     * @return void
     */
    public function testSetTypeGestionBal(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeGestionBal("typeGestionBal");
        $this->assertEquals("typeGestionBal", $obj->getTypeGestionBal());
    }

    /**
     * Test setTypeModele()
     *
     * @return void
     */
    public function testSetTypeModele(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeModele("typeModele");
        $this->assertEquals("typeModele", $obj->getTypeModele());
    }

    /**
     * Test setTypePrepDadsu()
     *
     * @return void
     */
    public function testSetTypePrepDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypePrepDadsu("typePrepDadsu");
        $this->assertEquals("typePrepDadsu", $obj->getTypePrepDadsu());
    }

    /**
     * Test setTypeSaisieAbs()
     *
     * @return void
     */
    public function testSetTypeSaisieAbs(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeSaisieAbs("typeSaisieAbs");
        $this->assertEquals("typeSaisieAbs", $obj->getTypeSaisieAbs());
    }

    /**
     * Test setTypeSaisieAbsence()
     *
     * @return void
     */
    public function testSetTypeSaisieAbsence(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeSaisieAbsence("typeSaisieAbsence");
        $this->assertEquals("typeSaisieAbsence", $obj->getTypeSaisieAbsence());
    }

    /**
     * Test setTypeStc()
     *
     * @return void
     */
    public function testSetTypeStc(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeStc("typeStc");
        $this->assertEquals("typeStc", $obj->getTypeStc());
    }

    /**
     * Test setTypeTauxIntemperie()
     *
     * @return void
     */
    public function testSetTypeTauxIntemperie(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeTauxIntemperie("typeTauxIntemperie");
        $this->assertEquals("typeTauxIntemperie", $obj->getTypeTauxIntemperie());
    }

    /**
     * Test setTypeTri()
     *
     * @return void
     */
    public function testSetTypeTri(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeTri("typeTri");
        $this->assertEquals("typeTri", $obj->getTypeTri());
    }

    /**
     * Test setTypeVirement()
     *
     * @return void
     */
    public function testSetTypeVirement(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeVirement("typeVirement");
        $this->assertEquals("typeVirement", $obj->getTypeVirement());
    }

    /**
     * Test setTypeVisuColSaisieBul()
     *
     * @return void
     */
    public function testSetTypeVisuColSaisieBul(): void {

        $obj = new ConstantesEntreprise();

        $obj->setTypeVisuColSaisieBul("typeVisuColSaisieBul");
        $this->assertEquals("typeVisuColSaisieBul", $obj->getTypeVisuColSaisieBul());
    }

    /**
     * Test setUtilisePdpQuadra()
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra(): void {

        $obj = new ConstantesEntreprise();

        $obj->setUtilisePdpQuadra(true);
        $this->assertTrue($obj->getUtilisePdpQuadra());
    }

    /**
     * Test setUtilisePdpQuadra2()
     *
     * @return void
     */
    public function testSetUtilisePdpQuadra2(): void {

        $obj = new ConstantesEntreprise();

        $obj->setUtilisePdpQuadra2(true);
        $this->assertTrue($obj->getUtilisePdpQuadra2());
    }

    /**
     * Test setValCpBulletin()
     *
     * @return void
     */
    public function testSetValCpBulletin(): void {

        $obj = new ConstantesEntreprise();

        $obj->setValCpBulletin(true);
        $this->assertTrue($obj->getValCpBulletin());
    }

    /**
     * Test setValFiltreListeEmp()
     *
     * @return void
     */
    public function testSetValFiltreListeEmp(): void {

        $obj = new ConstantesEntreprise();

        $obj->setValFiltreListeEmp(10);
        $this->assertEquals(10, $obj->getValFiltreListeEmp());
    }

    /**
     * Test setVersionControleDadsu()
     *
     * @return void
     */
    public function testSetVersionControleDadsu(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVersionControleDadsu(10);
        $this->assertEquals(10, $obj->getVersionControleDadsu());
    }

    /**
     * Test setVirCodeEtab()
     *
     * @return void
     */
    public function testSetVirCodeEtab(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirCodeEtab("virCodeEtab");
        $this->assertEquals("virCodeEtab", $obj->getVirCodeEtab());
    }

    /**
     * Test setVirCollectivite()
     *
     * @return void
     */
    public function testSetVirCollectivite(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirCollectivite("virCollectivite");
        $this->assertEquals("virCollectivite", $obj->getVirCollectivite());
    }

    /**
     * Test setVirComptableCentre()
     *
     * @return void
     */
    public function testSetVirComptableCentre(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirComptableCentre("virComptableCentre");
        $this->assertEquals("virComptableCentre", $obj->getVirComptableCentre());
    }

    /**
     * Test setVirComptableSub()
     *
     * @return void
     */
    public function testSetVirComptableSub(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirComptableSub("virComptableSub");
        $this->assertEquals("virComptableSub", $obj->getVirComptableSub());
    }

    /**
     * Test setVirFonctionPublique()
     *
     * @return void
     */
    public function testSetVirFonctionPublique(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirFonctionPublique(true);
        $this->assertTrue($obj->getVirFonctionPublique());
    }

    /**
     * Test setVirSeuil()
     *
     * @return void
     */
    public function testSetVirSeuil(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirSeuil(10.092018);
        $this->assertEquals(10.092018, $obj->getVirSeuil());
    }

    /**
     * Test setVirTypeEtab()
     *
     * @return void
     */
    public function testSetVirTypeEtab(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirTypeEtab("virTypeEtab");
        $this->assertEquals("virTypeEtab", $obj->getVirTypeEtab());
    }

    /**
     * Test setVirementCrLf()
     *
     * @return void
     */
    public function testSetVirementCrLf(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirementCrLf(true);
        $this->assertTrue($obj->getVirementCrLf());
    }

    /**
     * Test setVirementsEuro()
     *
     * @return void
     */
    public function testSetVirementsEuro(): void {

        $obj = new ConstantesEntreprise();

        $obj->setVirementsEuro("virementsEuro");
        $this->assertEquals("virementsEuro", $obj->getVirementsEuro());
    }

    /**
     * Test setWebPrioritaire()
     *
     * @return void
     */
    public function testSetWebPrioritaire(): void {

        $obj = new ConstantesEntreprise();

        $obj->setWebPrioritaire(true);
        $this->assertTrue($obj->getWebPrioritaire());
    }

    /**
     * Test __construct()
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
