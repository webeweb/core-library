<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Ecritures;

/**
 * Ecritures model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Ecritures();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBIC());
        $this->assertNull($obj->getBonsAPayer());
        $this->assertNull($obj->getCentre());
        $this->assertNull($obj->getCentreSimple());
        $this->assertNull($obj->getClientOuFrn());
        $this->assertNull($obj->getCodeBanque());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeJournal());
        $this->assertNull($obj->getCodeLettrage());
        $this->assertNull($obj->getCodeLettrageTiers());
        $this->assertNull($obj->getCodeLibelleAuto());
        $this->assertNull($obj->getCodeOperateur());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCompteContrepartie());
        $this->assertNull($obj->getDateDecTVA());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDatePointageAux());
        $this->assertNull($obj->getDateRapproBancaire());
        $this->assertNull($obj->getDateSysSaisie());
        $this->assertNull($obj->getDateSysValidation());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getEcheanceSimple());
        $this->assertNull($obj->getEcritureNum());
        $this->assertNull($obj->getEnLitige());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFolio());
        $this->assertNull($obj->getIBAN());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getJrnRapproBancaire());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMethodeTVA());
        $this->assertNull($obj->getMilliemesAna());
        $this->assertNull($obj->getModePaiement());
        $this->assertNull($obj->getMontantAna());
        $this->assertNull($obj->getMontantSaisiCredit());
        $this->assertNull($obj->getMontantSaisiDebit());
        $this->assertNull($obj->getMontantTenuCredit());
        $this->assertNull($obj->getMontantTenuDebit());
        $this->assertNull($obj->getMtDevForce());
        $this->assertNull($obj->getNature());
        $this->assertNull($obj->getNoLotEcritures());
        $this->assertNull($obj->getNoLotFactor());
        $this->assertNull($obj->getNoLotIs());
        $this->assertNull($obj->getNoLotTrace());
        $this->assertNull($obj->getNumCptOrigine());
        $this->assertNull($obj->getNumEcrEco());
        $this->assertNull($obj->getNumEditLettrePaiement());
        $this->assertNull($obj->getNumLettrage());
        $this->assertNull($obj->getNumLigne());
        $this->assertNull($obj->getNumMandat());
        $this->assertNull($obj->getNumUniq());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroPiece());
        $this->assertNull($obj->getPeriodeEcriture());
        $this->assertNull($obj->getPeriodiciteDebut());
        $this->assertNull($obj->getPeriodiciteFin());
        $this->assertNull($obj->getPieceInterne());
        $this->assertNull($obj->getPrctRepartition());
        $this->assertNull($obj->getQuantite());
        $this->assertNull($obj->getQuantite2());
        $this->assertNull($obj->getRIB());
        $this->assertNull($obj->getRapproBancaireOk());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTvaE4BI());
        $this->assertNull($obj->getTvaE4DR());
        $this->assertNull($obj->getTvaE4Mt());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeSaisie());
        $this->assertNull($obj->getValidee());
    }

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new Ecritures();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setBIC() method.
     *
     * @return void
     */
    public function testSetBIC() {

        $obj = new Ecritures();

        $obj->setBIC("bIC");
        $this->assertEquals("bIC", $obj->getBIC());
    }

    /**
     * Tests the setBonsAPayer() method.
     *
     * @return void
     */
    public function testSetBonsAPayer() {

        $obj = new Ecritures();

        $obj->setBonsAPayer(true);
        $this->assertEquals(true, $obj->getBonsAPayer());
    }

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre() {

        $obj = new Ecritures();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setCentreSimple() method.
     *
     * @return void
     */
    public function testSetCentreSimple() {

        $obj = new Ecritures();

        $obj->setCentreSimple("centreSimple");
        $this->assertEquals("centreSimple", $obj->getCentreSimple());
    }

    /**
     * Tests the setClientOuFrn() method.
     *
     * @return void
     */
    public function testSetClientOuFrn() {

        $obj = new Ecritures();

        $obj->setClientOuFrn("clientOuFrn");
        $this->assertEquals("clientOuFrn", $obj->getClientOuFrn());
    }

    /**
     * Tests the setCodeBanque() method.
     *
     * @return void
     */
    public function testSetCodeBanque() {

        $obj = new Ecritures();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Ecritures();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal() {

        $obj = new Ecritures();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeLettrage() method.
     *
     * @return void
     */
    public function testSetCodeLettrage() {

        $obj = new Ecritures();

        $obj->setCodeLettrage("codeLettrage");
        $this->assertEquals("codeLettrage", $obj->getCodeLettrage());
    }

    /**
     * Tests the setCodeLettrageTiers() method.
     *
     * @return void
     */
    public function testSetCodeLettrageTiers() {

        $obj = new Ecritures();

        $obj->setCodeLettrageTiers("codeLettrageTiers");
        $this->assertEquals("codeLettrageTiers", $obj->getCodeLettrageTiers());
    }

    /**
     * Tests the setCodeLibelleAuto() method.
     *
     * @return void
     */
    public function testSetCodeLibelleAuto() {

        $obj = new Ecritures();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Tests the setCodeOperateur() method.
     *
     * @return void
     */
    public function testSetCodeOperateur() {

        $obj = new Ecritures();

        $obj->setCodeOperateur("codeOperateur");
        $this->assertEquals("codeOperateur", $obj->getCodeOperateur());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new Ecritures();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests the setCompteContrepartie() method.
     *
     * @return void
     */
    public function testSetCompteContrepartie() {

        $obj = new Ecritures();

        $obj->setCompteContrepartie("compteContrepartie");
        $this->assertEquals("compteContrepartie", $obj->getCompteContrepartie());
    }

    /**
     * Tests the setDateDecTVA() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDecTVA() {

        $obj = new Ecritures();

        $obj->setDateDecTVA(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDecTVA());
    }

    /**
     * Tests the setDateEcheance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance() {

        $obj = new Ecritures();

        $obj->setDateEcheance(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEcheance());
    }

    /**
     * Tests the setDatePointageAux() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePointageAux() {

        $obj = new Ecritures();

        $obj->setDatePointageAux(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePointageAux());
    }

    /**
     * Tests the setDateRapproBancaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRapproBancaire() {

        $obj = new Ecritures();

        $obj->setDateRapproBancaire(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRapproBancaire());
    }

    /**
     * Tests the setDateSysSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie() {

        $obj = new Ecritures();

        $obj->setDateSysSaisie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysSaisie());
    }

    /**
     * Tests the setDateSysValidation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysValidation() {

        $obj = new Ecritures();

        $obj->setDateSysValidation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSysValidation());
    }

    /**
     * Tests the setDomBanque() method.
     *
     * @return void
     */
    public function testSetDomBanque() {

        $obj = new Ecritures();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests the setEcheanceSimple() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetEcheanceSimple() {

        $obj = new Ecritures();

        $obj->setEcheanceSimple(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getEcheanceSimple());
    }

    /**
     * Tests the setEcritureNum() method.
     *
     * @return void
     */
    public function testSetEcritureNum() {

        $obj = new Ecritures();

        $obj->setEcritureNum("ecritureNum");
        $this->assertEquals("ecritureNum", $obj->getEcritureNum());
    }

    /**
     * Tests the setEnLitige() method.
     *
     * @return void
     */
    public function testSetEnLitige() {

        $obj = new Ecritures();

        $obj->setEnLitige(true);
        $this->assertEquals(true, $obj->getEnLitige());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new Ecritures();

        $obj->setEtat(10);
        $this->assertEquals(10, $obj->getEtat());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio() {

        $obj = new Ecritures();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setIBAN() method.
     *
     * @return void
     */
    public function testSetIBAN() {

        $obj = new Ecritures();

        $obj->setIBAN("iBAN");
        $this->assertEquals("iBAN", $obj->getIBAN());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture() {

        $obj = new Ecritures();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setJrnRapproBancaire() method.
     *
     * @return void
     */
    public function testSetJrnRapproBancaire() {

        $obj = new Ecritures();

        $obj->setJrnRapproBancaire("jrnRapproBancaire");
        $this->assertEquals("jrnRapproBancaire", $obj->getJrnRapproBancaire());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Ecritures();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleMemo() method.
     *
     * @return void
     */
    public function testSetLibelleMemo() {

        $obj = new Ecritures();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests the setLigneFolio() method.
     *
     * @return void
     */
    public function testSetLigneFolio() {

        $obj = new Ecritures();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests the setMethodeTVA() method.
     *
     * @return void
     */
    public function testSetMethodeTVA() {

        $obj = new Ecritures();

        $obj->setMethodeTVA("methodeTVA");
        $this->assertEquals("methodeTVA", $obj->getMethodeTVA());
    }

    /**
     * Tests the setMilliemesAna() method.
     *
     * @return void
     */
    public function testSetMilliemesAna() {

        $obj = new Ecritures();

        $obj->setMilliemesAna(10.092018);
        $this->assertEquals(10.092018, $obj->getMilliemesAna());
    }

    /**
     * Tests the setModePaiement() method.
     *
     * @return void
     */
    public function testSetModePaiement() {

        $obj = new Ecritures();

        $obj->setModePaiement("modePaiement");
        $this->assertEquals("modePaiement", $obj->getModePaiement());
    }

    /**
     * Tests the setMontantAna() method.
     *
     * @return void
     */
    public function testSetMontantAna() {

        $obj = new Ecritures();

        $obj->setMontantAna(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAna());
    }

    /**
     * Tests the setMontantSaisiCredit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiCredit() {

        $obj = new Ecritures();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Tests the setMontantSaisiDebit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiDebit() {

        $obj = new Ecritures();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit() {

        $obj = new Ecritures();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit() {

        $obj = new Ecritures();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setMtDevForce() method.
     *
     * @return void
     */
    public function testSetMtDevForce() {

        $obj = new Ecritures();

        $obj->setMtDevForce(true);
        $this->assertEquals(true, $obj->getMtDevForce());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature() {

        $obj = new Ecritures();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNoLotEcritures() method.
     *
     * @return void
     */
    public function testSetNoLotEcritures() {

        $obj = new Ecritures();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Tests the setNoLotFactor() method.
     *
     * @return void
     */
    public function testSetNoLotFactor() {

        $obj = new Ecritures();

        $obj->setNoLotFactor(10);
        $this->assertEquals(10, $obj->getNoLotFactor());
    }

    /**
     * Tests the setNoLotIs() method.
     *
     * @return void
     */
    public function testSetNoLotIs() {

        $obj = new Ecritures();

        $obj->setNoLotIs(10);
        $this->assertEquals(10, $obj->getNoLotIs());
    }

    /**
     * Tests the setNoLotTrace() method.
     *
     * @return void
     */
    public function testSetNoLotTrace() {

        $obj = new Ecritures();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Tests the setNumCptOrigine() method.
     *
     * @return void
     */
    public function testSetNumCptOrigine() {

        $obj = new Ecritures();

        $obj->setNumCptOrigine("numCptOrigine");
        $this->assertEquals("numCptOrigine", $obj->getNumCptOrigine());
    }

    /**
     * Tests the setNumEcrEco() method.
     *
     * @return void
     */
    public function testSetNumEcrEco() {

        $obj = new Ecritures();

        $obj->setNumEcrEco(10);
        $this->assertEquals(10, $obj->getNumEcrEco());
    }

    /**
     * Tests the setNumEditLettrePaiement() method.
     *
     * @return void
     */
    public function testSetNumEditLettrePaiement() {

        $obj = new Ecritures();

        $obj->setNumEditLettrePaiement(10);
        $this->assertEquals(10, $obj->getNumEditLettrePaiement());
    }

    /**
     * Tests the setNumLettrage() method.
     *
     * @return void
     */
    public function testSetNumLettrage() {

        $obj = new Ecritures();

        $obj->setNumLettrage(10);
        $this->assertEquals(10, $obj->getNumLettrage());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne() {

        $obj = new Ecritures();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumMandat() method.
     *
     * @return void
     */
    public function testSetNumMandat() {

        $obj = new Ecritures();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq() {

        $obj = new Ecritures();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new Ecritures();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroPiece() method.
     *
     * @return void
     */
    public function testSetNumeroPiece() {

        $obj = new Ecritures();

        $obj->setNumeroPiece("numeroPiece");
        $this->assertEquals("numeroPiece", $obj->getNumeroPiece());
    }

    /**
     * Tests the setPeriodeEcriture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeEcriture() {

        $obj = new Ecritures();

        $obj->setPeriodeEcriture(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setPeriodiciteDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodiciteDebut() {

        $obj = new Ecritures();

        $obj->setPeriodiciteDebut(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodiciteDebut());
    }

    /**
     * Tests the setPeriodiciteFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodiciteFin() {

        $obj = new Ecritures();

        $obj->setPeriodiciteFin(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodiciteFin());
    }

    /**
     * Tests the setPieceInterne() method.
     *
     * @return void
     */
    public function testSetPieceInterne() {

        $obj = new Ecritures();

        $obj->setPieceInterne(10);
        $this->assertEquals(10, $obj->getPieceInterne());
    }

    /**
     * Tests the setPrctRepartition() method.
     *
     * @return void
     */
    public function testSetPrctRepartition() {

        $obj = new Ecritures();

        $obj->setPrctRepartition(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctRepartition());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite() {

        $obj = new Ecritures();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setQuantite2() method.
     *
     * @return void
     */
    public function testSetQuantite2() {

        $obj = new Ecritures();

        $obj->setQuantite2(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite2());
    }

    /**
     * Tests the setRIB() method.
     *
     * @return void
     */
    public function testSetRIB() {

        $obj = new Ecritures();

        $obj->setRIB("rIB");
        $this->assertEquals("rIB", $obj->getRIB());
    }

    /**
     * Tests the setRapproBancaireOk() method.
     *
     * @return void
     */
    public function testSetRapproBancaireOk() {

        $obj = new Ecritures();

        $obj->setRapproBancaireOk(true);
        $this->assertEquals(true, $obj->getRapproBancaireOk());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage() {

        $obj = new Ecritures();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setReferenceTire() method.
     *
     * @return void
     */
    public function testSetReferenceTire() {

        $obj = new Ecritures();

        $obj->setReferenceTire("referenceTire");
        $this->assertEquals("referenceTire", $obj->getReferenceTire());
    }

    /**
     * Tests the setTvaE4BI() method.
     *
     * @return void
     */
    public function testSetTvaE4BI() {

        $obj = new Ecritures();

        $obj->setTvaE4BI("tvaE4BI");
        $this->assertEquals("tvaE4BI", $obj->getTvaE4BI());
    }

    /**
     * Tests the setTvaE4DR() method.
     *
     * @return void
     */
    public function testSetTvaE4DR() {

        $obj = new Ecritures();

        $obj->setTvaE4DR("tvaE4DR");
        $this->assertEquals("tvaE4DR", $obj->getTvaE4DR());
    }

    /**
     * Tests the setTvaE4Mt() method.
     *
     * @return void
     */
    public function testSetTvaE4Mt() {

        $obj = new Ecritures();

        $obj->setTvaE4Mt(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaE4Mt());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne() {

        $obj = new Ecritures();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setTypeSaisie() method.
     *
     * @return void
     */
    public function testSetTypeSaisie() {

        $obj = new Ecritures();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }

    /**
     * Tests the setValidee() method.
     *
     * @return void
     */
    public function testSetValidee() {

        $obj = new Ecritures();

        $obj->setValidee(true);
        $this->assertEquals(true, $obj->getValidee());
    }
}
