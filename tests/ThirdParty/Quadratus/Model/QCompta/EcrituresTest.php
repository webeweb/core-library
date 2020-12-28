<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
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
 * Ecritures test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class EcrituresTest extends AbstractTestCase {

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Ecritures();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setBic() method.
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Ecritures();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests the setBonsAPayer() method.
     *
     * @return void
     */
    public function testSetBonsAPayer(): void {

        $obj = new Ecritures();

        $obj->setBonsAPayer(true);
        $this->assertEquals(true, $obj->getBonsAPayer());
    }

    /**
     * Tests the setCentre() method.
     *
     * @return void
     */
    public function testSetCentre(): void {

        $obj = new Ecritures();

        $obj->setCentre("centre");
        $this->assertEquals("centre", $obj->getCentre());
    }

    /**
     * Tests the setCentreSimple() method.
     *
     * @return void
     */
    public function testSetCentreSimple(): void {

        $obj = new Ecritures();

        $obj->setCentreSimple("centreSimple");
        $this->assertEquals("centreSimple", $obj->getCentreSimple());
    }

    /**
     * Tests the setClientOuFrn() method.
     *
     * @return void
     */
    public function testSetClientOuFrn(): void {

        $obj = new Ecritures();

        $obj->setClientOuFrn("clientOuFrn");
        $this->assertEquals("clientOuFrn", $obj->getClientOuFrn());
    }

    /**
     * Tests the setCodeBanque() method.
     *
     * @return void
     */
    public function testSetCodeBanque(): void {

        $obj = new Ecritures();

        $obj->setCodeBanque("codeBanque");
        $this->assertEquals("codeBanque", $obj->getCodeBanque());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Ecritures();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeJournal() method.
     *
     * @return void
     */
    public function testSetCodeJournal(): void {

        $obj = new Ecritures();

        $obj->setCodeJournal("codeJournal");
        $this->assertEquals("codeJournal", $obj->getCodeJournal());
    }

    /**
     * Tests the setCodeLettrage() method.
     *
     * @return void
     */
    public function testSetCodeLettrage(): void {

        $obj = new Ecritures();

        $obj->setCodeLettrage("codeLettrage");
        $this->assertEquals("codeLettrage", $obj->getCodeLettrage());
    }

    /**
     * Tests the setCodeLettrageTiers() method.
     *
     * @return void
     */
    public function testSetCodeLettrageTiers(): void {

        $obj = new Ecritures();

        $obj->setCodeLettrageTiers("codeLettrageTiers");
        $this->assertEquals("codeLettrageTiers", $obj->getCodeLettrageTiers());
    }

    /**
     * Tests the setCodeLibelleAuto() method.
     *
     * @return void
     */
    public function testSetCodeLibelleAuto(): void {

        $obj = new Ecritures();

        $obj->setCodeLibelleAuto("codeLibelleAuto");
        $this->assertEquals("codeLibelleAuto", $obj->getCodeLibelleAuto());
    }

    /**
     * Tests the setCodeOperateur() method.
     *
     * @return void
     */
    public function testSetCodeOperateur(): void {

        $obj = new Ecritures();

        $obj->setCodeOperateur("codeOperateur");
        $this->assertEquals("codeOperateur", $obj->getCodeOperateur());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Ecritures();

        $obj->setCodeTva(10);
        $this->assertEquals(10, $obj->getCodeTva());
    }

    /**
     * Tests the setCompteContrepartie() method.
     *
     * @return void
     */
    public function testSetCompteContrepartie(): void {

        $obj = new Ecritures();

        $obj->setCompteContrepartie("compteContrepartie");
        $this->assertEquals("compteContrepartie", $obj->getCompteContrepartie());
    }

    /**
     * Tests the setDateDecTva() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDecTva(): void {

        // Set a Date/time mock.
        $dateDecTva = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateDecTva($dateDecTva);
        $this->assertSame($dateDecTva, $obj->getDateDecTva());
    }

    /**
     * Tests the setDateEcheance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests the setDatePointageAux() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePointageAux(): void {

        // Set a Date/time mock.
        $datePointageAux = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDatePointageAux($datePointageAux);
        $this->assertSame($datePointageAux, $obj->getDatePointageAux());
    }

    /**
     * Tests the setDateRapproBancaire() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRapproBancaire(): void {

        // Set a Date/time mock.
        $dateRapproBancaire = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateRapproBancaire($dateRapproBancaire);
        $this->assertSame($dateRapproBancaire, $obj->getDateRapproBancaire());
    }

    /**
     * Tests the setDateSysSaisie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysSaisie(): void {

        // Set a Date/time mock.
        $dateSysSaisie = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateSysSaisie($dateSysSaisie);
        $this->assertSame($dateSysSaisie, $obj->getDateSysSaisie());
    }

    /**
     * Tests the setDateSysValidation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSysValidation(): void {

        // Set a Date/time mock.
        $dateSysValidation = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setDateSysValidation($dateSysValidation);
        $this->assertSame($dateSysValidation, $obj->getDateSysValidation());
    }

    /**
     * Tests the setDomBanque() method.
     *
     * @return void
     */
    public function testSetDomBanque(): void {

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
    public function testSetEcheanceSimple(): void {

        // Set a Date/time mock.
        $echeanceSimple = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setEcheanceSimple($echeanceSimple);
        $this->assertSame($echeanceSimple, $obj->getEcheanceSimple());
    }

    /**
     * Tests the setEcritureNum() method.
     *
     * @return void
     */
    public function testSetEcritureNum(): void {

        $obj = new Ecritures();

        $obj->setEcritureNum("ecritureNum");
        $this->assertEquals("ecritureNum", $obj->getEcritureNum());
    }

    /**
     * Tests the setEnLitige() method.
     *
     * @return void
     */
    public function testSetEnLitige(): void {

        $obj = new Ecritures();

        $obj->setEnLitige(true);
        $this->assertEquals(true, $obj->getEnLitige());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new Ecritures();

        $obj->setEtat(10);
        $this->assertEquals(10, $obj->getEtat());
    }

    /**
     * Tests the setFolio() method.
     *
     * @return void
     */
    public function testSetFolio(): void {

        $obj = new Ecritures();

        $obj->setFolio(10);
        $this->assertEquals(10, $obj->getFolio());
    }

    /**
     * Tests the setIban() method.
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Ecritures();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests the setJourEcriture() method.
     *
     * @return void
     */
    public function testSetJourEcriture(): void {

        $obj = new Ecritures();

        $obj->setJourEcriture("jourEcriture");
        $this->assertEquals("jourEcriture", $obj->getJourEcriture());
    }

    /**
     * Tests the setJrnRapproBancaire() method.
     *
     * @return void
     */
    public function testSetJrnRapproBancaire(): void {

        $obj = new Ecritures();

        $obj->setJrnRapproBancaire("jrnRapproBancaire");
        $this->assertEquals("jrnRapproBancaire", $obj->getJrnRapproBancaire());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new Ecritures();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleMemo() method.
     *
     * @return void
     */
    public function testSetLibelleMemo(): void {

        $obj = new Ecritures();

        $obj->setLibelleMemo("libelleMemo");
        $this->assertEquals("libelleMemo", $obj->getLibelleMemo());
    }

    /**
     * Tests the setLigneFolio() method.
     *
     * @return void
     */
    public function testSetLigneFolio(): void {

        $obj = new Ecritures();

        $obj->setLigneFolio(10);
        $this->assertEquals(10, $obj->getLigneFolio());
    }

    /**
     * Tests the setMethodeTva() method.
     *
     * @return void
     */
    public function testSetMethodeTva(): void {

        $obj = new Ecritures();

        $obj->setMethodeTva("methodeTva");
        $this->assertEquals("methodeTva", $obj->getMethodeTva());
    }

    /**
     * Tests the setMilliemesAna() method.
     *
     * @return void
     */
    public function testSetMilliemesAna(): void {

        $obj = new Ecritures();

        $obj->setMilliemesAna(10.092018);
        $this->assertEquals(10.092018, $obj->getMilliemesAna());
    }

    /**
     * Tests the setModePaiement() method.
     *
     * @return void
     */
    public function testSetModePaiement(): void {

        $obj = new Ecritures();

        $obj->setModePaiement("modePaiement");
        $this->assertEquals("modePaiement", $obj->getModePaiement());
    }

    /**
     * Tests the setMontantAna() method.
     *
     * @return void
     */
    public function testSetMontantAna(): void {

        $obj = new Ecritures();

        $obj->setMontantAna(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAna());
    }

    /**
     * Tests the setMontantSaisiCredit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiCredit(): void {

        $obj = new Ecritures();

        $obj->setMontantSaisiCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiCredit());
    }

    /**
     * Tests the setMontantSaisiDebit() method.
     *
     * @return void
     */
    public function testSetMontantSaisiDebit(): void {

        $obj = new Ecritures();

        $obj->setMontantSaisiDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSaisiDebit());
    }

    /**
     * Tests the setMontantTenuCredit() method.
     *
     * @return void
     */
    public function testSetMontantTenuCredit(): void {

        $obj = new Ecritures();

        $obj->setMontantTenuCredit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuCredit());
    }

    /**
     * Tests the setMontantTenuDebit() method.
     *
     * @return void
     */
    public function testSetMontantTenuDebit(): void {

        $obj = new Ecritures();

        $obj->setMontantTenuDebit(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTenuDebit());
    }

    /**
     * Tests the setMtDevForce() method.
     *
     * @return void
     */
    public function testSetMtDevForce(): void {

        $obj = new Ecritures();

        $obj->setMtDevForce(true);
        $this->assertEquals(true, $obj->getMtDevForce());
    }

    /**
     * Tests the setNature() method.
     *
     * @return void
     */
    public function testSetNature(): void {

        $obj = new Ecritures();

        $obj->setNature("nature");
        $this->assertEquals("nature", $obj->getNature());
    }

    /**
     * Tests the setNoLotEcritures() method.
     *
     * @return void
     */
    public function testSetNoLotEcritures(): void {

        $obj = new Ecritures();

        $obj->setNoLotEcritures(10);
        $this->assertEquals(10, $obj->getNoLotEcritures());
    }

    /**
     * Tests the setNoLotFactor() method.
     *
     * @return void
     */
    public function testSetNoLotFactor(): void {

        $obj = new Ecritures();

        $obj->setNoLotFactor(10);
        $this->assertEquals(10, $obj->getNoLotFactor());
    }

    /**
     * Tests the setNoLotIs() method.
     *
     * @return void
     */
    public function testSetNoLotIs(): void {

        $obj = new Ecritures();

        $obj->setNoLotIs(10);
        $this->assertEquals(10, $obj->getNoLotIs());
    }

    /**
     * Tests the setNoLotTrace() method.
     *
     * @return void
     */
    public function testSetNoLotTrace(): void {

        $obj = new Ecritures();

        $obj->setNoLotTrace("noLotTrace");
        $this->assertEquals("noLotTrace", $obj->getNoLotTrace());
    }

    /**
     * Tests the setNumCptOrigine() method.
     *
     * @return void
     */
    public function testSetNumCptOrigine(): void {

        $obj = new Ecritures();

        $obj->setNumCptOrigine("numCptOrigine");
        $this->assertEquals("numCptOrigine", $obj->getNumCptOrigine());
    }

    /**
     * Tests the setNumEcrEco() method.
     *
     * @return void
     */
    public function testSetNumEcrEco(): void {

        $obj = new Ecritures();

        $obj->setNumEcrEco(10);
        $this->assertEquals(10, $obj->getNumEcrEco());
    }

    /**
     * Tests the setNumEditLettrePaiement() method.
     *
     * @return void
     */
    public function testSetNumEditLettrePaiement(): void {

        $obj = new Ecritures();

        $obj->setNumEditLettrePaiement(10);
        $this->assertEquals(10, $obj->getNumEditLettrePaiement());
    }

    /**
     * Tests the setNumLettrage() method.
     *
     * @return void
     */
    public function testSetNumLettrage(): void {

        $obj = new Ecritures();

        $obj->setNumLettrage(10);
        $this->assertEquals(10, $obj->getNumLettrage());
    }

    /**
     * Tests the setNumLigne() method.
     *
     * @return void
     */
    public function testSetNumLigne(): void {

        $obj = new Ecritures();

        $obj->setNumLigne(10);
        $this->assertEquals(10, $obj->getNumLigne());
    }

    /**
     * Tests the setNumMandat() method.
     *
     * @return void
     */
    public function testSetNumMandat(): void {

        $obj = new Ecritures();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Tests the setNumUniq() method.
     *
     * @return void
     */
    public function testSetNumUniq(): void {

        $obj = new Ecritures();

        $obj->setNumUniq(10);
        $this->assertEquals(10, $obj->getNumUniq());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Ecritures();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroPiece() method.
     *
     * @return void
     */
    public function testSetNumeroPiece(): void {

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
    public function testSetPeriodeEcriture(): void {

        // Set a Date/time mock.
        $periodeEcriture = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setPeriodeEcriture($periodeEcriture);
        $this->assertSame($periodeEcriture, $obj->getPeriodeEcriture());
    }

    /**
     * Tests the setPeriodiciteDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodiciteDebut(): void {

        // Set a Date/time mock.
        $periodiciteDebut = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setPeriodiciteDebut($periodiciteDebut);
        $this->assertSame($periodiciteDebut, $obj->getPeriodiciteDebut());
    }

    /**
     * Tests the setPeriodiciteFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodiciteFin(): void {

        // Set a Date/time mock.
        $periodiciteFin = new DateTime("2018-09-10");

        $obj = new Ecritures();

        $obj->setPeriodiciteFin($periodiciteFin);
        $this->assertSame($periodiciteFin, $obj->getPeriodiciteFin());
    }

    /**
     * Tests the setPieceInterne() method.
     *
     * @return void
     */
    public function testSetPieceInterne(): void {

        $obj = new Ecritures();

        $obj->setPieceInterne(10);
        $this->assertEquals(10, $obj->getPieceInterne());
    }

    /**
     * Tests the setPrctRepartition() method.
     *
     * @return void
     */
    public function testSetPrctRepartition(): void {

        $obj = new Ecritures();

        $obj->setPrctRepartition(10.092018);
        $this->assertEquals(10.092018, $obj->getPrctRepartition());
    }

    /**
     * Tests the setQuantite() method.
     *
     * @return void
     */
    public function testSetQuantite(): void {

        $obj = new Ecritures();

        $obj->setQuantite(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite());
    }

    /**
     * Tests the setQuantite2() method.
     *
     * @return void
     */
    public function testSetQuantite2(): void {

        $obj = new Ecritures();

        $obj->setQuantite2(10.092018);
        $this->assertEquals(10.092018, $obj->getQuantite2());
    }

    /**
     * Tests the setRapproBancaireOk() method.
     *
     * @return void
     */
    public function testSetRapproBancaireOk(): void {

        $obj = new Ecritures();

        $obj->setRapproBancaireOk(true);
        $this->assertEquals(true, $obj->getRapproBancaireOk());
    }

    /**
     * Tests the setRefImage() method.
     *
     * @return void
     */
    public function testSetRefImage(): void {

        $obj = new Ecritures();

        $obj->setRefImage("refImage");
        $this->assertEquals("refImage", $obj->getRefImage());
    }

    /**
     * Tests the setReferenceTire() method.
     *
     * @return void
     */
    public function testSetReferenceTire(): void {

        $obj = new Ecritures();

        $obj->setReferenceTire("referenceTire");
        $this->assertEquals("referenceTire", $obj->getReferenceTire());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Ecritures();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setTvaE4Bi() method.
     *
     * @return void
     */
    public function testSetTvaE4Bi(): void {

        $obj = new Ecritures();

        $obj->setTvaE4Bi("tvaE4Bi");
        $this->assertEquals("tvaE4Bi", $obj->getTvaE4Bi());
    }

    /**
     * Tests the setTvaE4Dr() method.
     *
     * @return void
     */
    public function testSetTvaE4Dr(): void {

        $obj = new Ecritures();

        $obj->setTvaE4Dr("tvaE4Dr");
        $this->assertEquals("tvaE4Dr", $obj->getTvaE4Dr());
    }

    /**
     * Tests the setTvaE4Mt() method.
     *
     * @return void
     */
    public function testSetTvaE4Mt(): void {

        $obj = new Ecritures();

        $obj->setTvaE4Mt(10.092018);
        $this->assertEquals(10.092018, $obj->getTvaE4Mt());
    }

    /**
     * Tests the setTypeLigne() method.
     *
     * @return void
     */
    public function testSetTypeLigne(): void {

        $obj = new Ecritures();

        $obj->setTypeLigne("typeLigne");
        $this->assertEquals("typeLigne", $obj->getTypeLigne());
    }

    /**
     * Tests the setTypeSaisie() method.
     *
     * @return void
     */
    public function testSetTypeSaisie(): void {

        $obj = new Ecritures();

        $obj->setTypeSaisie("typeSaisie");
        $this->assertEquals("typeSaisie", $obj->getTypeSaisie());
    }

    /**
     * Tests the setValidee() method.
     *
     * @return void
     */
    public function testSetValidee(): void {

        $obj = new Ecritures();

        $obj->setValidee(true);
        $this->assertEquals(true, $obj->getValidee());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Ecritures();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getBic());
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
        $this->assertNull($obj->getDateDecTva());
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
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getJourEcriture());
        $this->assertNull($obj->getJrnRapproBancaire());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleMemo());
        $this->assertNull($obj->getLigneFolio());
        $this->assertNull($obj->getMethodeTva());
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
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRapproBancaireOk());
        $this->assertNull($obj->getRefImage());
        $this->assertNull($obj->getReferenceTire());
        $this->assertNull($obj->getTvaE4Bi());
        $this->assertNull($obj->getTvaE4Dr());
        $this->assertNull($obj->getTvaE4Mt());
        $this->assertNull($obj->getTypeLigne());
        $this->assertNull($obj->getTypeSaisie());
        $this->assertNull($obj->getValidee());
    }
}
