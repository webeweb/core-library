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
use WBW\Library\Core\Quadratus\Model\QPaie\LignesMSAEmploye;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Lignes m s a employe model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QPaie
 */
class LignesMSAEmployeTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LignesMSAEmploye();

        $this->assertNull($obj->getAGIRC());
        $this->assertNull($obj->getAGIRCEvo());
        $this->assertNull($obj->getCDDCDI());
        $this->assertNull($obj->getCDDCDIEvo());
        $this->assertNull($obj->getCadre());
        $this->assertNull($obj->getCadreEvo());
        $this->assertNull($obj->getCodeCollegePrud());
        $this->assertNull($obj->getCodeCollegePrudPrec());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeSectionPrud());
        $this->assertNull($obj->getCodeSectionPrudPrec());
        $this->assertNull($obj->getCodeUnite());
        $this->assertNull($obj->getCoeffEmploi());
        $this->assertNull($obj->getCoeffEmploiEvo());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getContrat());
        $this->assertNull($obj->getContratEvo());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateEvo());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDtDebAbs());
        $this->assertNull($obj->getDtFinAbs());
        $this->assertNull($obj->getDureeTrav());
        $this->assertNull($obj->getDureeTravPrec());
        $this->assertNull($obj->getEmploi());
        $this->assertNull($obj->getEmploiEvo());
        $this->assertNull($obj->getEvoAGIRC());
        $this->assertNull($obj->getEvoCDDCDI());
        $this->assertNull($obj->getEvoCRCCA36());
        $this->assertNull($obj->getEvoCRCCA4Bis());
        $this->assertNull($obj->getEvoCadre());
        $this->assertNull($obj->getEvoContrat());
        $this->assertNull($obj->getEvoEmploi());
        $this->assertNull($obj->getEvoFisc());
        $this->assertNull($obj->getFISC());
        $this->assertNull($obj->getFISCEvo());
        $this->assertNull($obj->getHEquivalence());
        $this->assertNull($obj->getHEquivalencePrec());
        $this->assertNull($obj->getLieuTravail());
        $this->assertNull($obj->getLieuTravailEvo());
        $this->assertNull($obj->getMontant11());
        $this->assertNull($obj->getMontant12());
        $this->assertNull($obj->getMontant13());
        $this->assertNull($obj->getMontant14());
        $this->assertNull($obj->getMontant21());
        $this->assertNull($obj->getMontant22());
        $this->assertNull($obj->getMontant23());
        $this->assertNull($obj->getMontant24());
        $this->assertNull($obj->getMontant31());
        $this->assertNull($obj->getMontant32());
        $this->assertNull($obj->getMontant33());
        $this->assertNull($obj->getMontant34());
        $this->assertNull($obj->getMontantAutre11());
        $this->assertNull($obj->getMontantAutre12());
        $this->assertNull($obj->getMontantAutre13());
        $this->assertNull($obj->getMontantAutre14());
        $this->assertNull($obj->getMontantAutre21());
        $this->assertNull($obj->getMontantAutre22());
        $this->assertNull($obj->getMontantAutre23());
        $this->assertNull($obj->getMontantAutre24());
        $this->assertNull($obj->getMontantAutre31());
        $this->assertNull($obj->getMontantAutre32());
        $this->assertNull($obj->getMontantAutre33());
        $this->assertNull($obj->getMontantAutre34());
        $this->assertNull($obj->getMontantSMICRetenu1());
        $this->assertNull($obj->getMontantSMICRetenu2());
        $this->assertNull($obj->getMontantSMICRetenu3());
        $this->assertNull($obj->getNIR());
        $this->assertNull($obj->getNbHeures1());
        $this->assertNull($obj->getNbHeures2());
        $this->assertNull($obj->getNbHeures3());
        $this->assertNull($obj->getNbJours1());
        $this->assertNull($obj->getNbJours2());
        $this->assertNull($obj->getNbJours3());
        $this->assertNull($obj->getNomEmploye());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getNumeroEmploye2());
        $this->assertNull($obj->getPCentPartiel());
        $this->assertNull($obj->getPerDeb1());
        $this->assertNull($obj->getPerDeb2());
        $this->assertNull($obj->getPerDeb3());
        $this->assertNull($obj->getPerFin1());
        $this->assertNull($obj->getPerFin2());
        $this->assertNull($obj->getPerFin3());
        $this->assertNull($obj->getPeriodeDecla());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPeriodicitePrec());
        $this->assertNull($obj->getPrenomEmploye());
        $this->assertNull($obj->getSaisonnier());
        $this->assertNull($obj->getSaisonnierPrec());
        $this->assertNull($obj->getService());
        $this->assertNull($obj->getServiceEvo());
        $this->assertNull($obj->getSuspensionZRRZRU1());
        $this->assertNull($obj->getSuspensionZRRZRU2());
        $this->assertNull($obj->getSuspensionZRRZRU3());
        $this->assertNull($obj->getTauxSmicFillon1());
        $this->assertNull($obj->getTauxSmicFillon2());
        $this->assertNull($obj->getTauxSmicFillon3());
        $this->assertNull($obj->getTempsPartiel());
        $this->assertNull($obj->getTempsPartielEvo());
        $this->assertNull($obj->getTotalGeneral());
        $this->assertNull($obj->getTypeAbsence());
        $this->assertNull($obj->getTypeAutreRemun11());
        $this->assertNull($obj->getTypeAutreRemun12());
        $this->assertNull($obj->getTypeAutreRemun13());
        $this->assertNull($obj->getTypeAutreRemun14());
        $this->assertNull($obj->getTypeAutreRemun21());
        $this->assertNull($obj->getTypeAutreRemun22());
        $this->assertNull($obj->getTypeAutreRemun23());
        $this->assertNull($obj->getTypeAutreRemun24());
        $this->assertNull($obj->getTypeAutreRemun31());
        $this->assertNull($obj->getTypeAutreRemun32());
        $this->assertNull($obj->getTypeAutreRemun33());
        $this->assertNull($obj->getTypeAutreRemun34());
        $this->assertNull($obj->getTypeCRCCAEmp());
        $this->assertNull($obj->getTypeRemun11());
        $this->assertNull($obj->getTypeRemun12());
        $this->assertNull($obj->getTypeRemun13());
        $this->assertNull($obj->getTypeRemun14());
        $this->assertNull($obj->getTypeRemun21());
        $this->assertNull($obj->getTypeRemun22());
        $this->assertNull($obj->getTypeRemun23());
        $this->assertNull($obj->getTypeRemun24());
        $this->assertNull($obj->getTypeRemun31());
        $this->assertNull($obj->getTypeRemun32());
        $this->assertNull($obj->getTypeRemun33());
        $this->assertNull($obj->getTypeRemun34());
        $this->assertNull($obj->getTypeTravail());
    }

    /**
     * Tests the setAGIRC() method.
     *
     * @return void
     */
    public function testSetAGIRC() {

        $obj = new LignesMSAEmploye();

        $obj->setAGIRC("aGIRC");
        $this->assertEquals("aGIRC", $obj->getAGIRC());
    }

    /**
     * Tests the setAGIRCEvo() method.
     *
     * @return void
     */
    public function testSetAGIRCEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setAGIRCEvo("aGIRCEvo");
        $this->assertEquals("aGIRCEvo", $obj->getAGIRCEvo());
    }

    /**
     * Tests the setCDDCDI() method.
     *
     * @return void
     */
    public function testSetCDDCDI() {

        $obj = new LignesMSAEmploye();

        $obj->setCDDCDI("cDDCDI");
        $this->assertEquals("cDDCDI", $obj->getCDDCDI());
    }

    /**
     * Tests the setCDDCDIEvo() method.
     *
     * @return void
     */
    public function testSetCDDCDIEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setCDDCDIEvo("cDDCDIEvo");
        $this->assertEquals("cDDCDIEvo", $obj->getCDDCDIEvo());
    }

    /**
     * Tests the setCadre() method.
     *
     * @return void
     */
    public function testSetCadre() {

        $obj = new LignesMSAEmploye();

        $obj->setCadre("cadre");
        $this->assertEquals("cadre", $obj->getCadre());
    }

    /**
     * Tests the setCadreEvo() method.
     *
     * @return void
     */
    public function testSetCadreEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setCadreEvo("cadreEvo");
        $this->assertEquals("cadreEvo", $obj->getCadreEvo());
    }

    /**
     * Tests the setCodeCollegePrud() method.
     *
     * @return void
     */
    public function testSetCodeCollegePrud() {

        $obj = new LignesMSAEmploye();

        $obj->setCodeCollegePrud("codeCollegePrud");
        $this->assertEquals("codeCollegePrud", $obj->getCodeCollegePrud());
    }

    /**
     * Tests the setCodeCollegePrudPrec() method.
     *
     * @return void
     */
    public function testSetCodeCollegePrudPrec() {

        $obj = new LignesMSAEmploye();

        $obj->setCodeCollegePrudPrec("codeCollegePrudPrec");
        $this->assertEquals("codeCollegePrudPrec", $obj->getCodeCollegePrudPrec());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new LignesMSAEmploye();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeSectionPrud() method.
     *
     * @return void
     */
    public function testSetCodeSectionPrud() {

        $obj = new LignesMSAEmploye();

        $obj->setCodeSectionPrud("codeSectionPrud");
        $this->assertEquals("codeSectionPrud", $obj->getCodeSectionPrud());
    }

    /**
     * Tests the setCodeSectionPrudPrec() method.
     *
     * @return void
     */
    public function testSetCodeSectionPrudPrec() {

        $obj = new LignesMSAEmploye();

        $obj->setCodeSectionPrudPrec("codeSectionPrudPrec");
        $this->assertEquals("codeSectionPrudPrec", $obj->getCodeSectionPrudPrec());
    }

    /**
     * Tests the setCodeUnite() method.
     *
     * @return void
     */
    public function testSetCodeUnite() {

        $obj = new LignesMSAEmploye();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests the setCoeffEmploi() method.
     *
     * @return void
     */
    public function testSetCoeffEmploi() {

        $obj = new LignesMSAEmploye();

        $obj->setCoeffEmploi("coeffEmploi");
        $this->assertEquals("coeffEmploi", $obj->getCoeffEmploi());
    }

    /**
     * Tests the setCoeffEmploiEvo() method.
     *
     * @return void
     */
    public function testSetCoeffEmploiEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setCoeffEmploiEvo("coeffEmploiEvo");
        $this->assertEquals("coeffEmploiEvo", $obj->getCoeffEmploiEvo());
    }

    /**
     * Tests the setCommentaires() method.
     *
     * @return void
     */
    public function testSetCommentaires() {

        $obj = new LignesMSAEmploye();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests the setContrat() method.
     *
     * @return void
     */
    public function testSetContrat() {

        $obj = new LignesMSAEmploye();

        $obj->setContrat("contrat");
        $this->assertEquals("contrat", $obj->getContrat());
    }

    /**
     * Tests the setContratEvo() method.
     *
     * @return void
     */
    public function testSetContratEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setContratEvo("contratEvo");
        $this->assertEquals("contratEvo", $obj->getContratEvo());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     */
    public function testSetDateEntree() {

        $obj = new LignesMSAEmploye();

        $obj->setDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
    }

    /**
     * Tests the setDateEvo() method.
     *
     * @return void
     */
    public function testSetDateEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setDateEvo(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEvo());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     */
    public function testSetDateSortie() {

        $obj = new LignesMSAEmploye();

        $obj->setDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie());
    }

    /**
     * Tests the setDtDebAbs() method.
     *
     * @return void
     */
    public function testSetDtDebAbs() {

        $obj = new LignesMSAEmploye();

        $obj->setDtDebAbs(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebAbs());
    }

    /**
     * Tests the setDtFinAbs() method.
     *
     * @return void
     */
    public function testSetDtFinAbs() {

        $obj = new LignesMSAEmploye();

        $obj->setDtFinAbs(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinAbs());
    }

    /**
     * Tests the setDureeTrav() method.
     *
     * @return void
     */
    public function testSetDureeTrav() {

        $obj = new LignesMSAEmploye();

        $obj->setDureeTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTrav());
    }

    /**
     * Tests the setDureeTravPrec() method.
     *
     * @return void
     */
    public function testSetDureeTravPrec() {

        $obj = new LignesMSAEmploye();

        $obj->setDureeTravPrec(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTravPrec());
    }

    /**
     * Tests the setEmploi() method.
     *
     * @return void
     */
    public function testSetEmploi() {

        $obj = new LignesMSAEmploye();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests the setEmploiEvo() method.
     *
     * @return void
     */
    public function testSetEmploiEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setEmploiEvo("emploiEvo");
        $this->assertEquals("emploiEvo", $obj->getEmploiEvo());
    }

    /**
     * Tests the setEvoAGIRC() method.
     *
     * @return void
     */
    public function testSetEvoAGIRC() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoAGIRC(true);
        $this->assertEquals(true, $obj->getEvoAGIRC());
    }

    /**
     * Tests the setEvoCDDCDI() method.
     *
     * @return void
     */
    public function testSetEvoCDDCDI() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoCDDCDI(true);
        $this->assertEquals(true, $obj->getEvoCDDCDI());
    }

    /**
     * Tests the setEvoCRCCA36() method.
     *
     * @return void
     */
    public function testSetEvoCRCCA36() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoCRCCA36(true);
        $this->assertEquals(true, $obj->getEvoCRCCA36());
    }

    /**
     * Tests the setEvoCRCCA4Bis() method.
     *
     * @return void
     */
    public function testSetEvoCRCCA4Bis() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoCRCCA4Bis(true);
        $this->assertEquals(true, $obj->getEvoCRCCA4Bis());
    }

    /**
     * Tests the setEvoCadre() method.
     *
     * @return void
     */
    public function testSetEvoCadre() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoCadre(true);
        $this->assertEquals(true, $obj->getEvoCadre());
    }

    /**
     * Tests the setEvoContrat() method.
     *
     * @return void
     */
    public function testSetEvoContrat() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoContrat(true);
        $this->assertEquals(true, $obj->getEvoContrat());
    }

    /**
     * Tests the setEvoEmploi() method.
     *
     * @return void
     */
    public function testSetEvoEmploi() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoEmploi(true);
        $this->assertEquals(true, $obj->getEvoEmploi());
    }

    /**
     * Tests the setEvoFisc() method.
     *
     * @return void
     */
    public function testSetEvoFisc() {

        $obj = new LignesMSAEmploye();

        $obj->setEvoFisc(true);
        $this->assertEquals(true, $obj->getEvoFisc());
    }

    /**
     * Tests the setFISC() method.
     *
     * @return void
     */
    public function testSetFISC() {

        $obj = new LignesMSAEmploye();

        $obj->setFISC("fISC");
        $this->assertEquals("fISC", $obj->getFISC());
    }

    /**
     * Tests the setFISCEvo() method.
     *
     * @return void
     */
    public function testSetFISCEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setFISCEvo("fISCEvo");
        $this->assertEquals("fISCEvo", $obj->getFISCEvo());
    }

    /**
     * Tests the setHEquivalence() method.
     *
     * @return void
     */
    public function testSetHEquivalence() {

        $obj = new LignesMSAEmploye();

        $obj->setHEquivalence("hEquivalence");
        $this->assertEquals("hEquivalence", $obj->getHEquivalence());
    }

    /**
     * Tests the setHEquivalencePrec() method.
     *
     * @return void
     */
    public function testSetHEquivalencePrec() {

        $obj = new LignesMSAEmploye();

        $obj->setHEquivalencePrec("hEquivalencePrec");
        $this->assertEquals("hEquivalencePrec", $obj->getHEquivalencePrec());
    }

    /**
     * Tests the setLieuTravail() method.
     *
     * @return void
     */
    public function testSetLieuTravail() {

        $obj = new LignesMSAEmploye();

        $obj->setLieuTravail("lieuTravail");
        $this->assertEquals("lieuTravail", $obj->getLieuTravail());
    }

    /**
     * Tests the setLieuTravailEvo() method.
     *
     * @return void
     */
    public function testSetLieuTravailEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setLieuTravailEvo("lieuTravailEvo");
        $this->assertEquals("lieuTravailEvo", $obj->getLieuTravailEvo());
    }

    /**
     * Tests the setMontant11() method.
     *
     * @return void
     */
    public function testSetMontant11() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant11(10);
        $this->assertEquals(10, $obj->getMontant11());
    }

    /**
     * Tests the setMontant12() method.
     *
     * @return void
     */
    public function testSetMontant12() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant12(10);
        $this->assertEquals(10, $obj->getMontant12());
    }

    /**
     * Tests the setMontant13() method.
     *
     * @return void
     */
    public function testSetMontant13() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant13(10);
        $this->assertEquals(10, $obj->getMontant13());
    }

    /**
     * Tests the setMontant14() method.
     *
     * @return void
     */
    public function testSetMontant14() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant14(10);
        $this->assertEquals(10, $obj->getMontant14());
    }

    /**
     * Tests the setMontant21() method.
     *
     * @return void
     */
    public function testSetMontant21() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant21(10);
        $this->assertEquals(10, $obj->getMontant21());
    }

    /**
     * Tests the setMontant22() method.
     *
     * @return void
     */
    public function testSetMontant22() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant22(10);
        $this->assertEquals(10, $obj->getMontant22());
    }

    /**
     * Tests the setMontant23() method.
     *
     * @return void
     */
    public function testSetMontant23() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant23(10);
        $this->assertEquals(10, $obj->getMontant23());
    }

    /**
     * Tests the setMontant24() method.
     *
     * @return void
     */
    public function testSetMontant24() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant24(10);
        $this->assertEquals(10, $obj->getMontant24());
    }

    /**
     * Tests the setMontant31() method.
     *
     * @return void
     */
    public function testSetMontant31() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant31(10);
        $this->assertEquals(10, $obj->getMontant31());
    }

    /**
     * Tests the setMontant32() method.
     *
     * @return void
     */
    public function testSetMontant32() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant32(10);
        $this->assertEquals(10, $obj->getMontant32());
    }

    /**
     * Tests the setMontant33() method.
     *
     * @return void
     */
    public function testSetMontant33() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant33(10);
        $this->assertEquals(10, $obj->getMontant33());
    }

    /**
     * Tests the setMontant34() method.
     *
     * @return void
     */
    public function testSetMontant34() {

        $obj = new LignesMSAEmploye();

        $obj->setMontant34(10);
        $this->assertEquals(10, $obj->getMontant34());
    }

    /**
     * Tests the setMontantAutre11() method.
     *
     * @return void
     */
    public function testSetMontantAutre11() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre11(10);
        $this->assertEquals(10, $obj->getMontantAutre11());
    }

    /**
     * Tests the setMontantAutre12() method.
     *
     * @return void
     */
    public function testSetMontantAutre12() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre12(10);
        $this->assertEquals(10, $obj->getMontantAutre12());
    }

    /**
     * Tests the setMontantAutre13() method.
     *
     * @return void
     */
    public function testSetMontantAutre13() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre13(10);
        $this->assertEquals(10, $obj->getMontantAutre13());
    }

    /**
     * Tests the setMontantAutre14() method.
     *
     * @return void
     */
    public function testSetMontantAutre14() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre14(10);
        $this->assertEquals(10, $obj->getMontantAutre14());
    }

    /**
     * Tests the setMontantAutre21() method.
     *
     * @return void
     */
    public function testSetMontantAutre21() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre21(10);
        $this->assertEquals(10, $obj->getMontantAutre21());
    }

    /**
     * Tests the setMontantAutre22() method.
     *
     * @return void
     */
    public function testSetMontantAutre22() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre22(10);
        $this->assertEquals(10, $obj->getMontantAutre22());
    }

    /**
     * Tests the setMontantAutre23() method.
     *
     * @return void
     */
    public function testSetMontantAutre23() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre23(10);
        $this->assertEquals(10, $obj->getMontantAutre23());
    }

    /**
     * Tests the setMontantAutre24() method.
     *
     * @return void
     */
    public function testSetMontantAutre24() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre24(10);
        $this->assertEquals(10, $obj->getMontantAutre24());
    }

    /**
     * Tests the setMontantAutre31() method.
     *
     * @return void
     */
    public function testSetMontantAutre31() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre31(10);
        $this->assertEquals(10, $obj->getMontantAutre31());
    }

    /**
     * Tests the setMontantAutre32() method.
     *
     * @return void
     */
    public function testSetMontantAutre32() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre32(10);
        $this->assertEquals(10, $obj->getMontantAutre32());
    }

    /**
     * Tests the setMontantAutre33() method.
     *
     * @return void
     */
    public function testSetMontantAutre33() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre33(10);
        $this->assertEquals(10, $obj->getMontantAutre33());
    }

    /**
     * Tests the setMontantAutre34() method.
     *
     * @return void
     */
    public function testSetMontantAutre34() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantAutre34(10);
        $this->assertEquals(10, $obj->getMontantAutre34());
    }

    /**
     * Tests the setMontantSMICRetenu1() method.
     *
     * @return void
     */
    public function testSetMontantSMICRetenu1() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantSMICRetenu1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSMICRetenu1());
    }

    /**
     * Tests the setMontantSMICRetenu2() method.
     *
     * @return void
     */
    public function testSetMontantSMICRetenu2() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantSMICRetenu2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSMICRetenu2());
    }

    /**
     * Tests the setMontantSMICRetenu3() method.
     *
     * @return void
     */
    public function testSetMontantSMICRetenu3() {

        $obj = new LignesMSAEmploye();

        $obj->setMontantSMICRetenu3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSMICRetenu3());
    }

    /**
     * Tests the setNIR() method.
     *
     * @return void
     */
    public function testSetNIR() {

        $obj = new LignesMSAEmploye();

        $obj->setNIR("nIR");
        $this->assertEquals("nIR", $obj->getNIR());
    }

    /**
     * Tests the setNbHeures1() method.
     *
     * @return void
     */
    public function testSetNbHeures1() {

        $obj = new LignesMSAEmploye();

        $obj->setNbHeures1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1());
    }

    /**
     * Tests the setNbHeures2() method.
     *
     * @return void
     */
    public function testSetNbHeures2() {

        $obj = new LignesMSAEmploye();

        $obj->setNbHeures2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2());
    }

    /**
     * Tests the setNbHeures3() method.
     *
     * @return void
     */
    public function testSetNbHeures3() {

        $obj = new LignesMSAEmploye();

        $obj->setNbHeures3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures3());
    }

    /**
     * Tests the setNbJours1() method.
     *
     * @return void
     */
    public function testSetNbJours1() {

        $obj = new LignesMSAEmploye();

        $obj->setNbJours1(10);
        $this->assertEquals(10, $obj->getNbJours1());
    }

    /**
     * Tests the setNbJours2() method.
     *
     * @return void
     */
    public function testSetNbJours2() {

        $obj = new LignesMSAEmploye();

        $obj->setNbJours2(10);
        $this->assertEquals(10, $obj->getNbJours2());
    }

    /**
     * Tests the setNbJours3() method.
     *
     * @return void
     */
    public function testSetNbJours3() {

        $obj = new LignesMSAEmploye();

        $obj->setNbJours3(10);
        $this->assertEquals(10, $obj->getNbJours3());
    }

    /**
     * Tests the setNomEmploye() method.
     *
     * @return void
     */
    public function testSetNomEmploye() {

        $obj = new LignesMSAEmploye();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new LignesMSAEmploye();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setNumeroEmploye2() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye2() {

        $obj = new LignesMSAEmploye();

        $obj->setNumeroEmploye2("numeroEmploye2");
        $this->assertEquals("numeroEmploye2", $obj->getNumeroEmploye2());
    }

    /**
     * Tests the setPCentPartiel() method.
     *
     * @return void
     */
    public function testSetPCentPartiel() {

        $obj = new LignesMSAEmploye();

        $obj->setPCentPartiel(10);
        $this->assertEquals(10, $obj->getPCentPartiel());
    }

    /**
     * Tests the setPerDeb1() method.
     *
     * @return void
     */
    public function testSetPerDeb1() {

        $obj = new LignesMSAEmploye();

        $obj->setPerDeb1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDeb1());
    }

    /**
     * Tests the setPerDeb2() method.
     *
     * @return void
     */
    public function testSetPerDeb2() {

        $obj = new LignesMSAEmploye();

        $obj->setPerDeb2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDeb2());
    }

    /**
     * Tests the setPerDeb3() method.
     *
     * @return void
     */
    public function testSetPerDeb3() {

        $obj = new LignesMSAEmploye();

        $obj->setPerDeb3(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerDeb3());
    }

    /**
     * Tests the setPerFin1() method.
     *
     * @return void
     */
    public function testSetPerFin1() {

        $obj = new LignesMSAEmploye();

        $obj->setPerFin1(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerFin1());
    }

    /**
     * Tests the setPerFin2() method.
     *
     * @return void
     */
    public function testSetPerFin2() {

        $obj = new LignesMSAEmploye();

        $obj->setPerFin2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerFin2());
    }

    /**
     * Tests the setPerFin3() method.
     *
     * @return void
     */
    public function testSetPerFin3() {

        $obj = new LignesMSAEmploye();

        $obj->setPerFin3(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPerFin3());
    }

    /**
     * Tests the setPeriodeDecla() method.
     *
     * @return void
     */
    public function testSetPeriodeDecla() {

        $obj = new LignesMSAEmploye();

        $obj->setPeriodeDecla(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeDecla());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite() {

        $obj = new LignesMSAEmploye();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setPeriodicitePrec() method.
     *
     * @return void
     */
    public function testSetPeriodicitePrec() {

        $obj = new LignesMSAEmploye();

        $obj->setPeriodicitePrec("periodicitePrec");
        $this->assertEquals("periodicitePrec", $obj->getPeriodicitePrec());
    }

    /**
     * Tests the setPrenomEmploye() method.
     *
     * @return void
     */
    public function testSetPrenomEmploye() {

        $obj = new LignesMSAEmploye();

        $obj->setPrenomEmploye("prenomEmploye");
        $this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
    }

    /**
     * Tests the setSaisonnier() method.
     *
     * @return void
     */
    public function testSetSaisonnier() {

        $obj = new LignesMSAEmploye();

        $obj->setSaisonnier("saisonnier");
        $this->assertEquals("saisonnier", $obj->getSaisonnier());
    }

    /**
     * Tests the setSaisonnierPrec() method.
     *
     * @return void
     */
    public function testSetSaisonnierPrec() {

        $obj = new LignesMSAEmploye();

        $obj->setSaisonnierPrec("saisonnierPrec");
        $this->assertEquals("saisonnierPrec", $obj->getSaisonnierPrec());
    }

    /**
     * Tests the setService() method.
     *
     * @return void
     */
    public function testSetService() {

        $obj = new LignesMSAEmploye();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests the setServiceEvo() method.
     *
     * @return void
     */
    public function testSetServiceEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setServiceEvo("serviceEvo");
        $this->assertEquals("serviceEvo", $obj->getServiceEvo());
    }

    /**
     * Tests the setSuspensionZRRZRU1() method.
     *
     * @return void
     */
    public function testSetSuspensionZRRZRU1() {

        $obj = new LignesMSAEmploye();

        $obj->setSuspensionZRRZRU1("suspensionZRRZRU1");
        $this->assertEquals("suspensionZRRZRU1", $obj->getSuspensionZRRZRU1());
    }

    /**
     * Tests the setSuspensionZRRZRU2() method.
     *
     * @return void
     */
    public function testSetSuspensionZRRZRU2() {

        $obj = new LignesMSAEmploye();

        $obj->setSuspensionZRRZRU2("suspensionZRRZRU2");
        $this->assertEquals("suspensionZRRZRU2", $obj->getSuspensionZRRZRU2());
    }

    /**
     * Tests the setSuspensionZRRZRU3() method.
     *
     * @return void
     */
    public function testSetSuspensionZRRZRU3() {

        $obj = new LignesMSAEmploye();

        $obj->setSuspensionZRRZRU3("suspensionZRRZRU3");
        $this->assertEquals("suspensionZRRZRU3", $obj->getSuspensionZRRZRU3());
    }

    /**
     * Tests the setTauxSmicFillon1() method.
     *
     * @return void
     */
    public function testSetTauxSmicFillon1() {

        $obj = new LignesMSAEmploye();

        $obj->setTauxSmicFillon1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon1());
    }

    /**
     * Tests the setTauxSmicFillon2() method.
     *
     * @return void
     */
    public function testSetTauxSmicFillon2() {

        $obj = new LignesMSAEmploye();

        $obj->setTauxSmicFillon2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon2());
    }

    /**
     * Tests the setTauxSmicFillon3() method.
     *
     * @return void
     */
    public function testSetTauxSmicFillon3() {

        $obj = new LignesMSAEmploye();

        $obj->setTauxSmicFillon3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon3());
    }

    /**
     * Tests the setTempsPartiel() method.
     *
     * @return void
     */
    public function testSetTempsPartiel() {

        $obj = new LignesMSAEmploye();

        $obj->setTempsPartiel("tempsPartiel");
        $this->assertEquals("tempsPartiel", $obj->getTempsPartiel());
    }

    /**
     * Tests the setTempsPartielEvo() method.
     *
     * @return void
     */
    public function testSetTempsPartielEvo() {

        $obj = new LignesMSAEmploye();

        $obj->setTempsPartielEvo("tempsPartielEvo");
        $this->assertEquals("tempsPartielEvo", $obj->getTempsPartielEvo());
    }

    /**
     * Tests the setTotalGeneral() method.
     *
     * @return void
     */
    public function testSetTotalGeneral() {

        $obj = new LignesMSAEmploye();

        $obj->setTotalGeneral(10);
        $this->assertEquals(10, $obj->getTotalGeneral());
    }

    /**
     * Tests the setTypeAbsence() method.
     *
     * @return void
     */
    public function testSetTypeAbsence() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests the setTypeAutreRemun11() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun11() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun11("typeAutreRemun11");
        $this->assertEquals("typeAutreRemun11", $obj->getTypeAutreRemun11());
    }

    /**
     * Tests the setTypeAutreRemun12() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun12() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun12("typeAutreRemun12");
        $this->assertEquals("typeAutreRemun12", $obj->getTypeAutreRemun12());
    }

    /**
     * Tests the setTypeAutreRemun13() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun13() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun13("typeAutreRemun13");
        $this->assertEquals("typeAutreRemun13", $obj->getTypeAutreRemun13());
    }

    /**
     * Tests the setTypeAutreRemun14() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun14() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun14("typeAutreRemun14");
        $this->assertEquals("typeAutreRemun14", $obj->getTypeAutreRemun14());
    }

    /**
     * Tests the setTypeAutreRemun21() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun21() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun21("typeAutreRemun21");
        $this->assertEquals("typeAutreRemun21", $obj->getTypeAutreRemun21());
    }

    /**
     * Tests the setTypeAutreRemun22() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun22() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun22("typeAutreRemun22");
        $this->assertEquals("typeAutreRemun22", $obj->getTypeAutreRemun22());
    }

    /**
     * Tests the setTypeAutreRemun23() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun23() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun23("typeAutreRemun23");
        $this->assertEquals("typeAutreRemun23", $obj->getTypeAutreRemun23());
    }

    /**
     * Tests the setTypeAutreRemun24() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun24() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun24("typeAutreRemun24");
        $this->assertEquals("typeAutreRemun24", $obj->getTypeAutreRemun24());
    }

    /**
     * Tests the setTypeAutreRemun31() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun31() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun31("typeAutreRemun31");
        $this->assertEquals("typeAutreRemun31", $obj->getTypeAutreRemun31());
    }

    /**
     * Tests the setTypeAutreRemun32() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun32() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun32("typeAutreRemun32");
        $this->assertEquals("typeAutreRemun32", $obj->getTypeAutreRemun32());
    }

    /**
     * Tests the setTypeAutreRemun33() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun33() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun33("typeAutreRemun33");
        $this->assertEquals("typeAutreRemun33", $obj->getTypeAutreRemun33());
    }

    /**
     * Tests the setTypeAutreRemun34() method.
     *
     * @return void
     */
    public function testSetTypeAutreRemun34() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeAutreRemun34("typeAutreRemun34");
        $this->assertEquals("typeAutreRemun34", $obj->getTypeAutreRemun34());
    }

    /**
     * Tests the setTypeCRCCAEmp() method.
     *
     * @return void
     */
    public function testSetTypeCRCCAEmp() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeCRCCAEmp("typeCRCCAEmp");
        $this->assertEquals("typeCRCCAEmp", $obj->getTypeCRCCAEmp());
    }

    /**
     * Tests the setTypeRemun11() method.
     *
     * @return void
     */
    public function testSetTypeRemun11() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun11("typeRemun11");
        $this->assertEquals("typeRemun11", $obj->getTypeRemun11());
    }

    /**
     * Tests the setTypeRemun12() method.
     *
     * @return void
     */
    public function testSetTypeRemun12() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun12("typeRemun12");
        $this->assertEquals("typeRemun12", $obj->getTypeRemun12());
    }

    /**
     * Tests the setTypeRemun13() method.
     *
     * @return void
     */
    public function testSetTypeRemun13() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun13("typeRemun13");
        $this->assertEquals("typeRemun13", $obj->getTypeRemun13());
    }

    /**
     * Tests the setTypeRemun14() method.
     *
     * @return void
     */
    public function testSetTypeRemun14() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun14("typeRemun14");
        $this->assertEquals("typeRemun14", $obj->getTypeRemun14());
    }

    /**
     * Tests the setTypeRemun21() method.
     *
     * @return void
     */
    public function testSetTypeRemun21() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun21("typeRemun21");
        $this->assertEquals("typeRemun21", $obj->getTypeRemun21());
    }

    /**
     * Tests the setTypeRemun22() method.
     *
     * @return void
     */
    public function testSetTypeRemun22() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun22("typeRemun22");
        $this->assertEquals("typeRemun22", $obj->getTypeRemun22());
    }

    /**
     * Tests the setTypeRemun23() method.
     *
     * @return void
     */
    public function testSetTypeRemun23() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun23("typeRemun23");
        $this->assertEquals("typeRemun23", $obj->getTypeRemun23());
    }

    /**
     * Tests the setTypeRemun24() method.
     *
     * @return void
     */
    public function testSetTypeRemun24() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun24("typeRemun24");
        $this->assertEquals("typeRemun24", $obj->getTypeRemun24());
    }

    /**
     * Tests the setTypeRemun31() method.
     *
     * @return void
     */
    public function testSetTypeRemun31() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun31("typeRemun31");
        $this->assertEquals("typeRemun31", $obj->getTypeRemun31());
    }

    /**
     * Tests the setTypeRemun32() method.
     *
     * @return void
     */
    public function testSetTypeRemun32() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun32("typeRemun32");
        $this->assertEquals("typeRemun32", $obj->getTypeRemun32());
    }

    /**
     * Tests the setTypeRemun33() method.
     *
     * @return void
     */
    public function testSetTypeRemun33() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun33("typeRemun33");
        $this->assertEquals("typeRemun33", $obj->getTypeRemun33());
    }

    /**
     * Tests the setTypeRemun34() method.
     *
     * @return void
     */
    public function testSetTypeRemun34() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeRemun34("typeRemun34");
        $this->assertEquals("typeRemun34", $obj->getTypeRemun34());
    }

    /**
     * Tests the setTypeTravail() method.
     *
     * @return void
     */
    public function testSetTypeTravail() {

        $obj = new LignesMSAEmploye();

        $obj->setTypeTravail("typeTravail");
        $this->assertEquals("typeTravail", $obj->getTypeTravail());
    }

}
