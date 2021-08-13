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
use WBW\Library\Quadratus\Model\QGI\Fiscal;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fiscal test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class FiscalTest extends AbstractTestCase {

    /**
     * Tests the setAbattementCga() method.
     *
     * @return void
     */
    public function testSetAbattementCga(): void {

        $obj = new Fiscal();

        $obj->setAbattementCga(true);
        $this->assertEquals(true, $obj->getAbattementCga());
    }

    /**
     * Tests the setAssuranceControle() method.
     *
     * @return void
     */
    public function testSetAssuranceControle(): void {

        $obj = new Fiscal();

        $obj->setAssuranceControle(true);
        $this->assertEquals(true, $obj->getAssuranceControle());
    }

    /**
     * Tests the setCdAssiette() method.
     *
     * @return void
     */
    public function testSetCdAssiette(): void {

        $obj = new Fiscal();

        $obj->setCdAssiette("cdAssiette");
        $this->assertEquals("cdAssiette", $obj->getCdAssiette());
    }

    /**
     * Tests the setCdi() method.
     *
     * @return void
     */
    public function testSetCdi(): void {

        $obj = new Fiscal();

        $obj->setCdi("cdi");
        $this->assertEquals("cdi", $obj->getCdi());
    }

    /**
     * Tests the setCga() method.
     *
     * @return void
     */
    public function testSetCga(): void {

        $obj = new Fiscal();

        $obj->setCga(true);
        $this->assertEquals(true, $obj->getCga());
    }

    /**
     * Tests the setCodeCentreImpot() method.
     *
     * @return void
     */
    public function testSetCodeCentreImpot(): void {

        $obj = new Fiscal();

        $obj->setCodeCentreImpot("codeCentreImpot");
        $this->assertEquals("codeCentreImpot", $obj->getCodeCentreImpot());
    }

    /**
     * Tests the setCodeCga() method.
     *
     * @return void
     */
    public function testSetCodeCga(): void {

        $obj = new Fiscal();

        $obj->setCodeCga("codeCga");
        $this->assertEquals("codeCga", $obj->getCodeCga());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Fiscal();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeImpotDirect() method.
     *
     * @return void
     */
    public function testSetCodeImpotDirect(): void {

        $obj = new Fiscal();

        $obj->setCodeImpotDirect("codeImpotDirect");
        $this->assertEquals("codeImpotDirect", $obj->getCodeImpotDirect());
    }

    /**
     * Tests the setCodeRecetteImpots() method.
     *
     * @return void
     */
    public function testSetCodeRecetteImpots(): void {

        $obj = new Fiscal();

        $obj->setCodeRecetteImpots("codeRecetteImpots");
        $this->assertEquals("codeRecetteImpots", $obj->getCodeRecetteImpots());
    }

    /**
     * Tests the setCodeRegimeTva() method.
     *
     * @return void
     */
    public function testSetCodeRegimeTva(): void {

        $obj = new Fiscal();

        $obj->setCodeRegimeTva("codeRegimeTva");
        $this->assertEquals("codeRegimeTva", $obj->getCodeRegimeTva());
    }

    /**
     * Tests the setContactCentreImpots() method.
     *
     * @return void
     */
    public function testSetContactCentreImpots(): void {

        $obj = new Fiscal();

        $obj->setContactCentreImpots("contactCentreImpots");
        $this->assertEquals("contactCentreImpots", $obj->getContactCentreImpots());
    }

    /**
     * Tests the setContactCga() method.
     *
     * @return void
     */
    public function testSetContactCga(): void {

        $obj = new Fiscal();

        $obj->setContactCga("contactCga");
        $this->assertEquals("contactCga", $obj->getContactCga());
    }

    /**
     * Tests the setContactRecetteImpots() method.
     *
     * @return void
     */
    public function testSetContactRecetteImpots(): void {

        $obj = new Fiscal();

        $obj->setContactRecetteImpots("contactRecetteImpots");
        $this->assertEquals("contactRecetteImpots", $obj->getContactRecetteImpots());
    }

    /**
     * Tests the setDateAdhesionCga() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAdhesionCga(): void {

        // Set a Date/time mock.
        $dateAdhesionCga = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setDateAdhesionCga($dateAdhesionCga);
        $this->assertSame($dateAdhesionCga, $obj->getDateAdhesionCga());
    }

    /**
     * Tests the setDateEffetAdhesionCga() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEffetAdhesionCga(): void {

        // Set a Date/time mock.
        $dateEffetAdhesionCga = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setDateEffetAdhesionCga($dateEffetAdhesionCga);
        $this->assertSame($dateEffetAdhesionCga, $obj->getDateEffetAdhesionCga());
    }

    /**
     * Tests the setDateEffetRadiationCga() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEffetRadiationCga(): void {

        // Set a Date/time mock.
        $dateEffetRadiationCga = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setDateEffetRadiationCga($dateEffetRadiationCga);
        $this->assertSame($dateEffetRadiationCga, $obj->getDateEffetRadiationCga());
    }

    /**
     * Tests the setDateRadiationCga() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRadiationCga(): void {

        // Set a Date/time mock.
        $dateRadiationCga = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setDateRadiationCga($dateRadiationCga);
        $this->assertSame($dateRadiationCga, $obj->getDateRadiationCga());
    }

    /**
     * Tests the setDeclarationSur() method.
     *
     * @return void
     */
    public function testSetDeclarationSur(): void {

        $obj = new Fiscal();

        $obj->setDeclarationSur("declarationSur");
        $this->assertEquals("declarationSur", $obj->getDeclarationSur());
    }

    /**
     * Tests the setDureeExercice() method.
     *
     * @return void
     */
    public function testSetDureeExercice(): void {

        $obj = new Fiscal();

        $obj->setDureeExercice("dureeExercice");
        $this->assertEquals("dureeExercice", $obj->getDureeExercice());
    }

    /**
     * Tests the setEdiTdfcBdF() method.
     *
     * @return void
     */
    public function testSetEdiTdfcBdF(): void {

        $obj = new Fiscal();

        $obj->setEdiTdfcBdF(true);
        $this->assertEquals(true, $obj->getEdiTdfcBdF());
    }

    /**
     * Tests the setFrpCle() method.
     *
     * @return void
     */
    public function testSetFrpCle(): void {

        $obj = new Fiscal();

        $obj->setFrpCle("frpCle");
        $this->assertEquals("frpCle", $obj->getFrpCle());
    }

    /**
     * Tests the setFrpDossier() method.
     *
     * @return void
     */
    public function testSetFrpDossier(): void {

        $obj = new Fiscal();

        $obj->setFrpDossier("frpDossier");
        $this->assertEquals("frpDossier", $obj->getFrpDossier());
    }

    /**
     * Tests the setFrpRecette() method.
     *
     * @return void
     */
    public function testSetFrpRecette(): void {

        $obj = new Fiscal();

        $obj->setFrpRecette("frpRecette");
        $this->assertEquals("frpRecette", $obj->getFrpRecette());
    }

    /**
     * Tests the setIdImpotsGouvFr() method.
     *
     * @return void
     */
    public function testSetIdImpotsGouvFr(): void {

        $obj = new Fiscal();

        $obj->setIdImpotsGouvFr("idImpotsGouvFr");
        $this->assertEquals("idImpotsGouvFr", $obj->getIdImpotsGouvFr());
    }

    /**
     * Tests the setImpot() method.
     *
     * @return void
     */
    public function testSetImpot(): void {

        $obj = new Fiscal();

        $obj->setImpot("impot");
        $this->assertEquals("impot", $obj->getImpot());
    }

    /**
     * Tests the setInsp() method.
     *
     * @return void
     */
    public function testSetInsp(): void {

        $obj = new Fiscal();

        $obj->setInsp("insp");
        $this->assertEquals("insp", $obj->getInsp());
    }

    /**
     * Tests the setJourDeclaration() method.
     *
     * @return void
     */
    public function testSetJourDeclaration(): void {

        $obj = new Fiscal();

        $obj->setJourDeclaration("jourDeclaration");
        $this->assertEquals("jourDeclaration", $obj->getJourDeclaration());
    }

    /**
     * Tests the setMandatDateDebutDads() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutDads(): void {

        // Set a Date/time mock.
        $mandatDateDebutDads = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutDads($mandatDateDebutDads);
        $this->assertSame($mandatDateDebutDads, $obj->getMandatDateDebutDads());
    }

    /**
     * Tests the setMandatDateDebutDucsedi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutDucsedi(): void {

        // Set a Date/time mock.
        $mandatDateDebutDucsedi = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutDucsedi($mandatDateDebutDucsedi);
        $this->assertSame($mandatDateDebutDucsedi, $obj->getMandatDateDebutDucsedi());
    }

    /**
     * Tests the setMandatDateDebutEditva() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutEditva(): void {

        // Set a Date/time mock.
        $mandatDateDebutEditva = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutEditva($mandatDateDebutEditva);
        $this->assertSame($mandatDateDebutEditva, $obj->getMandatDateDebutEditva());
    }

    /**
     * Tests the setMandatDateDebutEtebac() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutEtebac(): void {

        // Set a Date/time mock.
        $mandatDateDebutEtebac = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutEtebac($mandatDateDebutEtebac);
        $this->assertSame($mandatDateDebutEtebac, $obj->getMandatDateDebutEtebac());
    }

    /**
     * Tests the setMandatDateDebutPedi() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutPedi(): void {

        // Set a Date/time mock.
        $mandatDateDebutPedi = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutPedi($mandatDateDebutPedi);
        $this->assertSame($mandatDateDebutPedi, $obj->getMandatDateDebutPedi());
    }

    /**
     * Tests the setMandatDateDebutReq() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutReq(): void {

        // Set a Date/time mock.
        $mandatDateDebutReq = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutReq($mandatDateDebutReq);
        $this->assertSame($mandatDateDebutReq, $obj->getMandatDateDebutReq());
    }

    /**
     * Tests the setMandatDateDebutTdfc() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMandatDateDebutTdfc(): void {

        // Set a Date/time mock.
        $mandatDateDebutTdfc = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setMandatDateDebutTdfc($mandatDateDebutTdfc);
        $this->assertSame($mandatDateDebutTdfc, $obj->getMandatDateDebutTdfc());
    }

    /**
     * Tests the setMandatDureeDads() method.
     *
     * @return void
     */
    public function testSetMandatDureeDads(): void {

        $obj = new Fiscal();

        $obj->setMandatDureeDads(10);
        $this->assertEquals(10, $obj->getMandatDureeDads());
    }

    /**
     * Tests the setMandatDureeDucsedi() method.
     *
     * @return void
     */
    public function testSetMandatDureeDucsedi(): void {

        $obj = new Fiscal();

        $obj->setMandatDureeDucsedi(10);
        $this->assertEquals(10, $obj->getMandatDureeDucsedi());
    }

    /**
     * Tests the setMandatDureeEditva() method.
     *
     * @return void
     */
    public function testSetMandatDureeEditva(): void {

        $obj = new Fiscal();

        $obj->setMandatDureeEditva(10);
        $this->assertEquals(10, $obj->getMandatDureeEditva());
    }

    /**
     * Tests the setMandatDureeEtebac() method.
     *
     * @return void
     */
    public function testSetMandatDureeEtebac(): void {

        $obj = new Fiscal();

        $obj->setMandatDureeEtebac(10);
        $this->assertEquals(10, $obj->getMandatDureeEtebac());
    }

    /**
     * Tests the setMandatDureePedi() method.
     *
     * @return void
     */
    public function testSetMandatDureePedi(): void {

        $obj = new Fiscal();

        $obj->setMandatDureePedi(10);
        $this->assertEquals(10, $obj->getMandatDureePedi());
    }

    /**
     * Tests the setMandatDureeReq() method.
     *
     * @return void
     */
    public function testSetMandatDureeReq(): void {

        $obj = new Fiscal();

        $obj->setMandatDureeReq(10);
        $this->assertEquals(10, $obj->getMandatDureeReq());
    }

    /**
     * Tests the setMandatDureeTdfc() method.
     *
     * @return void
     */
    public function testSetMandatDureeTdfc(): void {

        $obj = new Fiscal();

        $obj->setMandatDureeTdfc(10);
        $this->assertEquals(10, $obj->getMandatDureeTdfc());
    }

    /**
     * Tests the setMandatPieceJointeDads() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeDads(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointeDads("mandatPieceJointeDads");
        $this->assertEquals("mandatPieceJointeDads", $obj->getMandatPieceJointeDads());
    }

    /**
     * Tests the setMandatPieceJointeDucsedi() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeDucsedi(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointeDucsedi("mandatPieceJointeDucsedi");
        $this->assertEquals("mandatPieceJointeDucsedi", $obj->getMandatPieceJointeDucsedi());
    }

    /**
     * Tests the setMandatPieceJointeEditva() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeEditva(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointeEditva("mandatPieceJointeEditva");
        $this->assertEquals("mandatPieceJointeEditva", $obj->getMandatPieceJointeEditva());
    }

    /**
     * Tests the setMandatPieceJointeEtebac() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeEtebac(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointeEtebac("mandatPieceJointeEtebac");
        $this->assertEquals("mandatPieceJointeEtebac", $obj->getMandatPieceJointeEtebac());
    }

    /**
     * Tests the setMandatPieceJointePedi() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointePedi(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointePedi("mandatPieceJointePedi");
        $this->assertEquals("mandatPieceJointePedi", $obj->getMandatPieceJointePedi());
    }

    /**
     * Tests the setMandatPieceJointeReq() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeReq(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointeReq("mandatPieceJointeReq");
        $this->assertEquals("mandatPieceJointeReq", $obj->getMandatPieceJointeReq());
    }

    /**
     * Tests the setMandatPieceJointeTdfc() method.
     *
     * @return void
     */
    public function testSetMandatPieceJointeTdfc(): void {

        $obj = new Fiscal();

        $obj->setMandatPieceJointeTdfc("mandatPieceJointeTdfc");
        $this->assertEquals("mandatPieceJointeTdfc", $obj->getMandatPieceJointeTdfc());
    }

    /**
     * Tests the setMandatSuiviDads() method.
     *
     * @return void
     */
    public function testSetMandatSuiviDads(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviDads(true);
        $this->assertEquals(true, $obj->getMandatSuiviDads());
    }

    /**
     * Tests the setMandatSuiviDucsedi() method.
     *
     * @return void
     */
    public function testSetMandatSuiviDucsedi(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviDucsedi(true);
        $this->assertEquals(true, $obj->getMandatSuiviDucsedi());
    }

    /**
     * Tests the setMandatSuiviEditva() method.
     *
     * @return void
     */
    public function testSetMandatSuiviEditva(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviEditva(true);
        $this->assertEquals(true, $obj->getMandatSuiviEditva());
    }

    /**
     * Tests the setMandatSuiviEtebac() method.
     *
     * @return void
     */
    public function testSetMandatSuiviEtebac(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviEtebac(true);
        $this->assertEquals(true, $obj->getMandatSuiviEtebac());
    }

    /**
     * Tests the setMandatSuiviPedi() method.
     *
     * @return void
     */
    public function testSetMandatSuiviPedi(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviPedi(true);
        $this->assertEquals(true, $obj->getMandatSuiviPedi());
    }

    /**
     * Tests the setMandatSuiviReq() method.
     *
     * @return void
     */
    public function testSetMandatSuiviReq(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviReq(true);
        $this->assertEquals(true, $obj->getMandatSuiviReq());
    }

    /**
     * Tests the setMandatSuiviTdfc() method.
     *
     * @return void
     */
    public function testSetMandatSuiviTdfc(): void {

        $obj = new Fiscal();

        $obj->setMandatSuiviTdfc(true);
        $this->assertEquals(true, $obj->getMandatSuiviTdfc());
    }

    /**
     * Tests the setMdpImpotsGouvFr() method.
     *
     * @return void
     */
    public function testSetMdpImpotsGouvFr(): void {

        $obj = new Fiscal();

        $obj->setMdpImpotsGouvFr("mdpImpotsGouvFr");
        $this->assertEquals("mdpImpotsGouvFr", $obj->getMdpImpotsGouvFr());
    }

    /**
     * Tests the setMethodeCalcul() method.
     *
     * @return void
     */
    public function testSetMethodeCalcul(): void {

        $obj = new Fiscal();

        $obj->setMethodeCalcul("methodeCalcul");
        $this->assertEquals("methodeCalcul", $obj->getMethodeCalcul());
    }

    /**
     * Tests the setMotifRadiationCga() method.
     *
     * @return void
     */
    public function testSetMotifRadiationCga(): void {

        $obj = new Fiscal();

        $obj->setMotifRadiationCga("motifRadiationCga");
        $this->assertEquals("motifRadiationCga", $obj->getMotifRadiationCga());
    }

    /**
     * Tests the setNumeroRegistre() method.
     *
     * @return void
     */
    public function testSetNumeroRegistre(): void {

        $obj = new Fiscal();

        $obj->setNumeroRegistre("numeroRegistre");
        $this->assertEquals("numeroRegistre", $obj->getNumeroRegistre());
    }

    /**
     * Tests the setPeriodiciteTva() method.
     *
     * @return void
     */
    public function testSetPeriodiciteTva(): void {

        $obj = new Fiscal();

        $obj->setPeriodiciteTva("periodiciteTva");
        $this->assertEquals("periodiciteTva", $obj->getPeriodiciteTva());
    }

    /**
     * Tests the setPmeCommunautaire() method.
     *
     * @return void
     */
    public function testSetPmeCommunautaire(): void {

        $obj = new Fiscal();

        $obj->setPmeCommunautaire(true);
        $this->assertEquals(true, $obj->getPmeCommunautaire());
    }

    /**
     * Tests the setPoleEnregistrement() method.
     *
     * @return void
     */
    public function testSetPoleEnregistrement(): void {

        $obj = new Fiscal();

        $obj->setPoleEnregistrement("poleEnregistrement");
        $this->assertEquals("poleEnregistrement", $obj->getPoleEnregistrement());
    }

    /**
     * Tests the setRefObligFisc() method.
     *
     * @return void
     */
    public function testSetRefObligFisc(): void {

        $obj = new Fiscal();

        $obj->setRefObligFisc("refObligFisc");
        $this->assertEquals("refObligFisc", $obj->getRefObligFisc());
    }

    /**
     * Tests the setRefPaiementDgi() method.
     *
     * @return void
     */
    public function testSetRefPaiementDgi(): void {

        $obj = new Fiscal();

        $obj->setRefPaiementDgi("refPaiementDgi");
        $this->assertEquals("refPaiementDgi", $obj->getRefPaiementDgi());
    }

    /**
     * Tests the setRegime() method.
     *
     * @return void
     */
    public function testSetRegime(): void {

        $obj = new Fiscal();

        $obj->setRegime("regime");
        $this->assertEquals("regime", $obj->getRegime());
    }

    /**
     * Tests the setRegimeAgricole() method.
     *
     * @return void
     */
    public function testSetRegimeAgricole(): void {

        $obj = new Fiscal();

        $obj->setRegimeAgricole(true);
        $this->assertEquals(true, $obj->getRegimeAgricole());
    }

    /**
     * Tests the setRegimeGroupe() method.
     *
     * @return void
     */
    public function testSetRegimeGroupe(): void {

        $obj = new Fiscal();

        $obj->setRegimeGroupe(true);
        $this->assertEquals(true, $obj->getRegimeGroupe());
    }

    /**
     * Tests the setRofCfe() method.
     *
     * @return void
     */
    public function testSetRofCfe(): void {

        $obj = new Fiscal();

        $obj->setRofCfe("rofCfe");
        $this->assertEquals("rofCfe", $obj->getRofCfe());
    }

    /**
     * Tests the setRofCvae() method.
     *
     * @return void
     */
    public function testSetRofCvae(): void {

        $obj = new Fiscal();

        $obj->setRofCvae("rofCvae");
        $this->assertEquals("rofCvae", $obj->getRofCvae());
    }

    /**
     * Tests the setRofCvaep() method.
     *
     * @return void
     */
    public function testSetRofCvaep(): void {

        $obj = new Fiscal();

        $obj->setRofCvaep("rofCvaep");
        $this->assertEquals("rofCvaep", $obj->getRofCvaep());
    }

    /**
     * Tests the setRofIs() method.
     *
     * @return void
     */
    public function testSetRofIs(): void {

        $obj = new Fiscal();

        $obj->setRofIs("rofIs");
        $this->assertEquals("rofIs", $obj->getRofIs());
    }

    /**
     * Tests the setRofRcm() method.
     *
     * @return void
     */
    public function testSetRofRcm(): void {

        $obj = new Fiscal();

        $obj->setRofRcm("rofRcm");
        $this->assertEquals("rofRcm", $obj->getRofRcm());
    }

    /**
     * Tests the setRofTdfcGroup() method.
     *
     * @return void
     */
    public function testSetRofTdfcGroup(): void {

        $obj = new Fiscal();

        $obj->setRofTdfcGroup("rofTdfcGroup");
        $this->assertEquals("rofTdfcGroup", $obj->getRofTdfcGroup());
    }

    /**
     * Tests the setRofTs() method.
     *
     * @return void
     */
    public function testSetRofTs(): void {

        $obj = new Fiscal();

        $obj->setRofTs("rofTs");
        $this->assertEquals("rofTs", $obj->getRofTs());
    }

    /**
     * Tests the setRofTva() method.
     *
     * @return void
     */
    public function testSetRofTva(): void {

        $obj = new Fiscal();

        $obj->setRofTva("rofTva");
        $this->assertEquals("rofTva", $obj->getRofTva());
    }

    /**
     * Tests the setSocieteMere() method.
     *
     * @return void
     */
    public function testSetSocieteMere(): void {

        $obj = new Fiscal();

        $obj->setSocieteMere(true);
        $this->assertEquals(true, $obj->getSocieteMere());
    }

    /**
     * Tests the setTresorerie() method.
     *
     * @return void
     */
    public function testSetTresorerie(): void {

        $obj = new Fiscal();

        $obj->setTresorerie("tresorerie");
        $this->assertEquals("tresorerie", $obj->getTresorerie());
    }

    /**
     * Tests the setTresorerieIs() method.
     *
     * @return void
     */
    public function testSetTresorerieIs(): void {

        $obj = new Fiscal();

        $obj->setTresorerieIs("tresorerieIs");
        $this->assertEquals("tresorerieIs", $obj->getTresorerieIs());
    }

    /**
     * Tests the setTvaCa12Ae() method.
     *
     * @return void
     */
    public function testSetTvaCa12Ae(): void {

        $obj = new Fiscal();

        $obj->setTvaCa12Ae("tvaCa12Ae");
        $this->assertEquals("tvaCa12Ae", $obj->getTvaCa12Ae());
    }

    /**
     * Tests the setTvaDecaissements() method.
     *
     * @return void
     */
    public function testSetTvaDecaissements(): void {

        $obj = new Fiscal();

        $obj->setTvaDecaissements(true);
        $this->assertEquals(true, $obj->getTvaDecaissements());
    }

    /**
     * Tests the setTvaEtabBtq() method.
     *
     * @return void
     */
    public function testSetTvaEtabBtq(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabBtq("tvaEtabBtq");
        $this->assertEquals("tvaEtabBtq", $obj->getTvaEtabBtq());
    }

    /**
     * Tests the setTvaEtabBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetTvaEtabBureauDistributeur(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabBureauDistributeur("tvaEtabBureauDistributeur");
        $this->assertEquals("tvaEtabBureauDistributeur", $obj->getTvaEtabBureauDistributeur());
    }

    /**
     * Tests the setTvaEtabCodePostal() method.
     *
     * @return void
     */
    public function testSetTvaEtabCodePostal(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabCodePostal("tvaEtabCodePostal");
        $this->assertEquals("tvaEtabCodePostal", $obj->getTvaEtabCodePostal());
    }

    /**
     * Tests the setTvaEtabComplement() method.
     *
     * @return void
     */
    public function testSetTvaEtabComplement(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabComplement("tvaEtabComplement");
        $this->assertEquals("tvaEtabComplement", $obj->getTvaEtabComplement());
    }

    /**
     * Tests the setTvaEtabNomRs() method.
     *
     * @return void
     */
    public function testSetTvaEtabNomRs(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabNomRs("tvaEtabNomRs");
        $this->assertEquals("tvaEtabNomRs", $obj->getTvaEtabNomRs());
    }

    /**
     * Tests the setTvaEtabNomVoie() method.
     *
     * @return void
     */
    public function testSetTvaEtabNomVoie(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabNomVoie("tvaEtabNomVoie");
        $this->assertEquals("tvaEtabNomVoie", $obj->getTvaEtabNomVoie());
    }

    /**
     * Tests the setTvaEtabNumVoie() method.
     *
     * @return void
     */
    public function testSetTvaEtabNumVoie(): void {

        $obj = new Fiscal();

        $obj->setTvaEtabNumVoie("tvaEtabNumVoie");
        $this->assertEquals("tvaEtabNumVoie", $obj->getTvaEtabNumVoie());
    }

    /**
     * Tests the setTvaFaiteParClient() method.
     *
     * @return void
     */
    public function testSetTvaFaiteParClient(): void {

        $obj = new Fiscal();

        $obj->setTvaFaiteParClient(true);
        $this->assertEquals(true, $obj->getTvaFaiteParClient());
    }

    /**
     * Tests the setTvaNomVir() method.
     *
     * @return void
     */
    public function testSetTvaNomVir(): void {

        $obj = new Fiscal();

        $obj->setTvaNomVir("tvaNomVir");
        $this->assertEquals("tvaNomVir", $obj->getTvaNomVir());
    }

    /**
     * Tests the setTvaribVir() method.
     *
     * @return void
     */
    public function testSetTvaribVir(): void {

        $obj = new Fiscal();

        $obj->setTvaribVir("tvaribVir");
        $this->assertEquals("tvaribVir", $obj->getTvaribVir());
    }

    /**
     * Tests the setViseurConventionne() method.
     *
     * @return void
     */
    public function testSetViseurConventionne(): void {

        $obj = new Fiscal();

        $obj->setViseurConventionne(true);
        $this->assertEquals(true, $obj->getViseurConventionne());
    }

    /**
     * Tests the setViseurDtAttest() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetViseurDtAttest(): void {

        // Set a Date/time mock.
        $viseurDtAttest = new DateTime("2018-09-10");

        $obj = new Fiscal();

        $obj->setViseurDtAttest($viseurDtAttest);
        $this->assertSame($viseurDtAttest, $obj->getViseurDtAttest());
    }

    /**
     * Tests the setViseurNumAttest() method.
     *
     * @return void
     */
    public function testSetViseurNumAttest(): void {

        $obj = new Fiscal();

        $obj->setViseurNumAttest("viseurNumAttest");
        $this->assertEquals("viseurNumAttest", $obj->getViseurNumAttest());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Fiscal();

        $this->assertNull($obj->getAbattementCga());
        $this->assertNull($obj->getAssuranceControle());
        $this->assertNull($obj->getCdAssiette());
        $this->assertNull($obj->getCdi());
        $this->assertNull($obj->getCga());
        $this->assertNull($obj->getCodeCga());
        $this->assertNull($obj->getCodeCentreImpot());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeImpotDirect());
        $this->assertNull($obj->getCodeRecetteImpots());
        $this->assertNull($obj->getCodeRegimeTva());
        $this->assertNull($obj->getContactCga());
        $this->assertNull($obj->getContactCentreImpots());
        $this->assertNull($obj->getContactRecetteImpots());
        $this->assertNull($obj->getDateAdhesionCga());
        $this->assertNull($obj->getDateEffetAdhesionCga());
        $this->assertNull($obj->getDateEffetRadiationCga());
        $this->assertNull($obj->getDateRadiationCga());
        $this->assertNull($obj->getDeclarationSur());
        $this->assertNull($obj->getDureeExercice());
        $this->assertNull($obj->getEdiTdfcBdF());
        $this->assertNull($obj->getFrpCle());
        $this->assertNull($obj->getFrpDossier());
        $this->assertNull($obj->getFrpRecette());
        $this->assertNull($obj->getIdImpotsGouvFr());
        $this->assertNull($obj->getImpot());
        $this->assertNull($obj->getInsp());
        $this->assertNull($obj->getJourDeclaration());
        $this->assertNull($obj->getMandatDateDebutDads());
        $this->assertNull($obj->getMandatDateDebutDucsedi());
        $this->assertNull($obj->getMandatDateDebutEditva());
        $this->assertNull($obj->getMandatDateDebutEtebac());
        $this->assertNull($obj->getMandatDateDebutPedi());
        $this->assertNull($obj->getMandatDateDebutReq());
        $this->assertNull($obj->getMandatDateDebutTdfc());
        $this->assertNull($obj->getMandatDureeDads());
        $this->assertNull($obj->getMandatDureeDucsedi());
        $this->assertNull($obj->getMandatDureeEditva());
        $this->assertNull($obj->getMandatDureeEtebac());
        $this->assertNull($obj->getMandatDureePedi());
        $this->assertNull($obj->getMandatDureeReq());
        $this->assertNull($obj->getMandatDureeTdfc());
        $this->assertNull($obj->getMandatPieceJointeDads());
        $this->assertNull($obj->getMandatPieceJointeDucsedi());
        $this->assertNull($obj->getMandatPieceJointeEditva());
        $this->assertNull($obj->getMandatPieceJointeEtebac());
        $this->assertNull($obj->getMandatPieceJointePedi());
        $this->assertNull($obj->getMandatPieceJointeReq());
        $this->assertNull($obj->getMandatPieceJointeTdfc());
        $this->assertNull($obj->getMandatSuiviDads());
        $this->assertNull($obj->getMandatSuiviDucsedi());
        $this->assertNull($obj->getMandatSuiviEditva());
        $this->assertNull($obj->getMandatSuiviEtebac());
        $this->assertNull($obj->getMandatSuiviPedi());
        $this->assertNull($obj->getMandatSuiviReq());
        $this->assertNull($obj->getMandatSuiviTdfc());
        $this->assertNull($obj->getMdpImpotsGouvFr());
        $this->assertNull($obj->getMethodeCalcul());
        $this->assertNull($obj->getMotifRadiationCga());
        $this->assertNull($obj->getNumeroRegistre());
        $this->assertNull($obj->getPmeCommunautaire());
        $this->assertNull($obj->getPeriodiciteTva());
        $this->assertNull($obj->getPoleEnregistrement());
        $this->assertNull($obj->getRefObligFisc());
        $this->assertNull($obj->getRefPaiementDgi());
        $this->assertNull($obj->getRegime());
        $this->assertNull($obj->getRegimeAgricole());
        $this->assertNull($obj->getRegimeGroupe());
        $this->assertNull($obj->getRofCfe());
        $this->assertNull($obj->getRofCvae());
        $this->assertNull($obj->getRofCvaep());
        $this->assertNull($obj->getRofIs());
        $this->assertNull($obj->getRofRcm());
        $this->assertNull($obj->getRofTs());
        $this->assertNull($obj->getRofTva());
        $this->assertNull($obj->getRofTdfcGroup());
        $this->assertNull($obj->getSocieteMere());
        $this->assertNull($obj->getTvaEtabBtq());
        $this->assertNull($obj->getTvaEtabBureauDistributeur());
        $this->assertNull($obj->getTvaEtabCodePostal());
        $this->assertNull($obj->getTvaEtabComplement());
        $this->assertNull($obj->getTvaEtabNomRs());
        $this->assertNull($obj->getTvaEtabNomVoie());
        $this->assertNull($obj->getTvaEtabNumVoie());
        $this->assertNull($obj->getTvaNomVir());
        $this->assertNull($obj->getTvaribVir());
        $this->assertNull($obj->getTresorerie());
        $this->assertNull($obj->getTresorerieIs());
        $this->assertNull($obj->getTvaCa12Ae());
        $this->assertNull($obj->getTvaDecaissements());
        $this->assertNull($obj->getTvaFaiteParClient());
        $this->assertNull($obj->getViseurConventionne());
        $this->assertNull($obj->getViseurDtAttest());
        $this->assertNull($obj->getViseurNumAttest());
    }
}
