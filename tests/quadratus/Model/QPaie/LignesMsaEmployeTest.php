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
use WBW\Library\Quadratus\Model\QPaie\LignesMsaEmploye;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Lignes msa employe test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class LignesMsaEmployeTest extends AbstractTestCase {

    /**
     * Tests setAgirc()
     *
     * @return void
     */
    public function testSetAgirc(): void {

        $obj = new LignesMsaEmploye();

        $obj->setAgirc("agirc");
        $this->assertEquals("agirc", $obj->getAgirc());
    }

    /**
     * Tests setAgircEvo()
     *
     * @return void
     */
    public function testSetAgircEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setAgircEvo("agircEvo");
        $this->assertEquals("agircEvo", $obj->getAgircEvo());
    }

    /**
     * Tests setCadre()
     *
     * @return void
     */
    public function testSetCadre(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCadre("cadre");
        $this->assertEquals("cadre", $obj->getCadre());
    }

    /**
     * Tests setCadreEvo()
     *
     * @return void
     */
    public function testSetCadreEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCadreEvo("cadreEvo");
        $this->assertEquals("cadreEvo", $obj->getCadreEvo());
    }

    /**
     * Tests setCddcdi()
     *
     * @return void
     */
    public function testSetCddcdi(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCddcdi("cddcdi");
        $this->assertEquals("cddcdi", $obj->getCddcdi());
    }

    /**
     * Tests setCddcdiEvo()
     *
     * @return void
     */
    public function testSetCddcdiEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCddcdiEvo("cddcdiEvo");
        $this->assertEquals("cddcdiEvo", $obj->getCddcdiEvo());
    }

    /**
     * Tests setCodeCollegePrud()
     *
     * @return void
     */
    public function testSetCodeCollegePrud(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCodeCollegePrud("codeCollegePrud");
        $this->assertEquals("codeCollegePrud", $obj->getCodeCollegePrud());
    }

    /**
     * Tests setCodeCollegePrudPrec()
     *
     * @return void
     */
    public function testSetCodeCollegePrudPrec(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCodeCollegePrudPrec("codeCollegePrudPrec");
        $this->assertEquals("codeCollegePrudPrec", $obj->getCodeCollegePrudPrec());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeSectionPrud()
     *
     * @return void
     */
    public function testSetCodeSectionPrud(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCodeSectionPrud("codeSectionPrud");
        $this->assertEquals("codeSectionPrud", $obj->getCodeSectionPrud());
    }

    /**
     * Tests setCodeSectionPrudPrec()
     *
     * @return void
     */
    public function testSetCodeSectionPrudPrec(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCodeSectionPrudPrec("codeSectionPrudPrec");
        $this->assertEquals("codeSectionPrudPrec", $obj->getCodeSectionPrudPrec());
    }

    /**
     * Tests setCodeUnite()
     *
     * @return void
     */
    public function testSetCodeUnite(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCodeUnite("codeUnite");
        $this->assertEquals("codeUnite", $obj->getCodeUnite());
    }

    /**
     * Tests setCoeffEmploi()
     *
     * @return void
     */
    public function testSetCoeffEmploi(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCoeffEmploi("coeffEmploi");
        $this->assertEquals("coeffEmploi", $obj->getCoeffEmploi());
    }

    /**
     * Tests setCoeffEmploiEvo()
     *
     * @return void
     */
    public function testSetCoeffEmploiEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCoeffEmploiEvo("coeffEmploiEvo");
        $this->assertEquals("coeffEmploiEvo", $obj->getCoeffEmploiEvo());
    }

    /**
     * Tests setCommentaires()
     *
     * @return void
     */
    public function testSetCommentaires(): void {

        $obj = new LignesMsaEmploye();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests setContrat()
     *
     * @return void
     */
    public function testSetContrat(): void {

        $obj = new LignesMsaEmploye();

        $obj->setContrat("contrat");
        $this->assertEquals("contrat", $obj->getContrat());
    }

    /**
     * Tests setContratEvo()
     *
     * @return void
     */
    public function testSetContratEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setContratEvo("contratEvo");
        $this->assertEquals("contratEvo", $obj->getContratEvo());
    }

    /**
     * Tests setDateEntree()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests setDateEvo()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEvo(): void {

        // Set a Date/time mock.
        $dateEvo = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setDateEvo($dateEvo);
        $this->assertSame($dateEvo, $obj->getDateEvo());
    }

    /**
     * Tests setDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests setDtDebAbs()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebAbs(): void {

        // Set a Date/time mock.
        $dtDebAbs = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setDtDebAbs($dtDebAbs);
        $this->assertSame($dtDebAbs, $obj->getDtDebAbs());
    }

    /**
     * Tests setDtFinAbs()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinAbs(): void {

        // Set a Date/time mock.
        $dtFinAbs = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setDtFinAbs($dtFinAbs);
        $this->assertSame($dtFinAbs, $obj->getDtFinAbs());
    }

    /**
     * Tests setDureeTrav()
     *
     * @return void
     */
    public function testSetDureeTrav(): void {

        $obj = new LignesMsaEmploye();

        $obj->setDureeTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTrav());
    }

    /**
     * Tests setDureeTravPrec()
     *
     * @return void
     */
    public function testSetDureeTravPrec(): void {

        $obj = new LignesMsaEmploye();

        $obj->setDureeTravPrec(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeTravPrec());
    }

    /**
     * Tests setEmploi()
     *
     * @return void
     */
    public function testSetEmploi(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEmploi("emploi");
        $this->assertEquals("emploi", $obj->getEmploi());
    }

    /**
     * Tests setEmploiEvo()
     *
     * @return void
     */
    public function testSetEmploiEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEmploiEvo("emploiEvo");
        $this->assertEquals("emploiEvo", $obj->getEmploiEvo());
    }

    /**
     * Tests setEvoAgirc()
     *
     * @return void
     */
    public function testSetEvoAgirc(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoAgirc(true);
        $this->assertEquals(true, $obj->getEvoAgirc());
    }

    /**
     * Tests setEvoCadre()
     *
     * @return void
     */
    public function testSetEvoCadre(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoCadre(true);
        $this->assertEquals(true, $obj->getEvoCadre());
    }

    /**
     * Tests setEvoCddcdi()
     *
     * @return void
     */
    public function testSetEvoCddcdi(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoCddcdi(true);
        $this->assertEquals(true, $obj->getEvoCddcdi());
    }

    /**
     * Tests setEvoContrat()
     *
     * @return void
     */
    public function testSetEvoContrat(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoContrat(true);
        $this->assertEquals(true, $obj->getEvoContrat());
    }

    /**
     * Tests setEvoCrcca36()
     *
     * @return void
     */
    public function testSetEvoCrcca36(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoCrcca36(true);
        $this->assertEquals(true, $obj->getEvoCrcca36());
    }

    /**
     * Tests setEvoCrcca4Bis()
     *
     * @return void
     */
    public function testSetEvoCrcca4Bis(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoCrcca4Bis(true);
        $this->assertEquals(true, $obj->getEvoCrcca4Bis());
    }

    /**
     * Tests setEvoEmploi()
     *
     * @return void
     */
    public function testSetEvoEmploi(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoEmploi(true);
        $this->assertEquals(true, $obj->getEvoEmploi());
    }

    /**
     * Tests setEvoFisc()
     *
     * @return void
     */
    public function testSetEvoFisc(): void {

        $obj = new LignesMsaEmploye();

        $obj->setEvoFisc(true);
        $this->assertEquals(true, $obj->getEvoFisc());
    }

    /**
     * Tests setFisc()
     *
     * @return void
     */
    public function testSetFisc(): void {

        $obj = new LignesMsaEmploye();

        $obj->setFisc("fisc");
        $this->assertEquals("fisc", $obj->getFisc());
    }

    /**
     * Tests setFiscEvo()
     *
     * @return void
     */
    public function testSetFiscEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setFiscEvo("fiscEvo");
        $this->assertEquals("fiscEvo", $obj->getFiscEvo());
    }

    /**
     * Tests setHEquivalence()
     *
     * @return void
     */
    public function testSetHEquivalence(): void {

        $obj = new LignesMsaEmploye();

        $obj->setHEquivalence("hEquivalence");
        $this->assertEquals("hEquivalence", $obj->getHEquivalence());
    }

    /**
     * Tests setHEquivalencePrec()
     *
     * @return void
     */
    public function testSetHEquivalencePrec(): void {

        $obj = new LignesMsaEmploye();

        $obj->setHEquivalencePrec("hEquivalencePrec");
        $this->assertEquals("hEquivalencePrec", $obj->getHEquivalencePrec());
    }

    /**
     * Tests setLieuTravail()
     *
     * @return void
     */
    public function testSetLieuTravail(): void {

        $obj = new LignesMsaEmploye();

        $obj->setLieuTravail("lieuTravail");
        $this->assertEquals("lieuTravail", $obj->getLieuTravail());
    }

    /**
     * Tests setLieuTravailEvo()
     *
     * @return void
     */
    public function testSetLieuTravailEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setLieuTravailEvo("lieuTravailEvo");
        $this->assertEquals("lieuTravailEvo", $obj->getLieuTravailEvo());
    }

    /**
     * Tests setMontant11()
     *
     * @return void
     */
    public function testSetMontant11(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant11(10);
        $this->assertEquals(10, $obj->getMontant11());
    }

    /**
     * Tests setMontant12()
     *
     * @return void
     */
    public function testSetMontant12(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant12(10);
        $this->assertEquals(10, $obj->getMontant12());
    }

    /**
     * Tests setMontant13()
     *
     * @return void
     */
    public function testSetMontant13(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant13(10);
        $this->assertEquals(10, $obj->getMontant13());
    }

    /**
     * Tests setMontant14()
     *
     * @return void
     */
    public function testSetMontant14(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant14(10);
        $this->assertEquals(10, $obj->getMontant14());
    }

    /**
     * Tests setMontant21()
     *
     * @return void
     */
    public function testSetMontant21(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant21(10);
        $this->assertEquals(10, $obj->getMontant21());
    }

    /**
     * Tests setMontant22()
     *
     * @return void
     */
    public function testSetMontant22(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant22(10);
        $this->assertEquals(10, $obj->getMontant22());
    }

    /**
     * Tests setMontant23()
     *
     * @return void
     */
    public function testSetMontant23(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant23(10);
        $this->assertEquals(10, $obj->getMontant23());
    }

    /**
     * Tests setMontant24()
     *
     * @return void
     */
    public function testSetMontant24(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant24(10);
        $this->assertEquals(10, $obj->getMontant24());
    }

    /**
     * Tests setMontant31()
     *
     * @return void
     */
    public function testSetMontant31(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant31(10);
        $this->assertEquals(10, $obj->getMontant31());
    }

    /**
     * Tests setMontant32()
     *
     * @return void
     */
    public function testSetMontant32(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant32(10);
        $this->assertEquals(10, $obj->getMontant32());
    }

    /**
     * Tests setMontant33()
     *
     * @return void
     */
    public function testSetMontant33(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant33(10);
        $this->assertEquals(10, $obj->getMontant33());
    }

    /**
     * Tests setMontant34()
     *
     * @return void
     */
    public function testSetMontant34(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontant34(10);
        $this->assertEquals(10, $obj->getMontant34());
    }

    /**
     * Tests setMontantAutre11()
     *
     * @return void
     */
    public function testSetMontantAutre11(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre11(10);
        $this->assertEquals(10, $obj->getMontantAutre11());
    }

    /**
     * Tests setMontantAutre12()
     *
     * @return void
     */
    public function testSetMontantAutre12(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre12(10);
        $this->assertEquals(10, $obj->getMontantAutre12());
    }

    /**
     * Tests setMontantAutre13()
     *
     * @return void
     */
    public function testSetMontantAutre13(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre13(10);
        $this->assertEquals(10, $obj->getMontantAutre13());
    }

    /**
     * Tests setMontantAutre14()
     *
     * @return void
     */
    public function testSetMontantAutre14(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre14(10);
        $this->assertEquals(10, $obj->getMontantAutre14());
    }

    /**
     * Tests setMontantAutre21()
     *
     * @return void
     */
    public function testSetMontantAutre21(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre21(10);
        $this->assertEquals(10, $obj->getMontantAutre21());
    }

    /**
     * Tests setMontantAutre22()
     *
     * @return void
     */
    public function testSetMontantAutre22(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre22(10);
        $this->assertEquals(10, $obj->getMontantAutre22());
    }

    /**
     * Tests setMontantAutre23()
     *
     * @return void
     */
    public function testSetMontantAutre23(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre23(10);
        $this->assertEquals(10, $obj->getMontantAutre23());
    }

    /**
     * Tests setMontantAutre24()
     *
     * @return void
     */
    public function testSetMontantAutre24(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre24(10);
        $this->assertEquals(10, $obj->getMontantAutre24());
    }

    /**
     * Tests setMontantAutre31()
     *
     * @return void
     */
    public function testSetMontantAutre31(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre31(10);
        $this->assertEquals(10, $obj->getMontantAutre31());
    }

    /**
     * Tests setMontantAutre32()
     *
     * @return void
     */
    public function testSetMontantAutre32(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre32(10);
        $this->assertEquals(10, $obj->getMontantAutre32());
    }

    /**
     * Tests setMontantAutre33()
     *
     * @return void
     */
    public function testSetMontantAutre33(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre33(10);
        $this->assertEquals(10, $obj->getMontantAutre33());
    }

    /**
     * Tests setMontantAutre34()
     *
     * @return void
     */
    public function testSetMontantAutre34(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantAutre34(10);
        $this->assertEquals(10, $obj->getMontantAutre34());
    }

    /**
     * Tests setMontantSmicRetenu1()
     *
     * @return void
     */
    public function testSetMontantSmicRetenu1(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantSmicRetenu1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSmicRetenu1());
    }

    /**
     * Tests setMontantSmicRetenu2()
     *
     * @return void
     */
    public function testSetMontantSmicRetenu2(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantSmicRetenu2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSmicRetenu2());
    }

    /**
     * Tests setMontantSmicRetenu3()
     *
     * @return void
     */
    public function testSetMontantSmicRetenu3(): void {

        $obj = new LignesMsaEmploye();

        $obj->setMontantSmicRetenu3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantSmicRetenu3());
    }

    /**
     * Tests setNbHeures1()
     *
     * @return void
     */
    public function testSetNbHeures1(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNbHeures1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures1());
    }

    /**
     * Tests setNbHeures2()
     *
     * @return void
     */
    public function testSetNbHeures2(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNbHeures2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures2());
    }

    /**
     * Tests setNbHeures3()
     *
     * @return void
     */
    public function testSetNbHeures3(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNbHeures3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures3());
    }

    /**
     * Tests setNbJours1()
     *
     * @return void
     */
    public function testSetNbJours1(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNbJours1(10);
        $this->assertEquals(10, $obj->getNbJours1());
    }

    /**
     * Tests setNbJours2()
     *
     * @return void
     */
    public function testSetNbJours2(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNbJours2(10);
        $this->assertEquals(10, $obj->getNbJours2());
    }

    /**
     * Tests setNbJours3()
     *
     * @return void
     */
    public function testSetNbJours3(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNbJours3(10);
        $this->assertEquals(10, $obj->getNbJours3());
    }

    /**
     * Tests setNir()
     *
     * @return void
     */
    public function testSetNir(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNir("nir");
        $this->assertEquals("nir", $obj->getNir());
    }

    /**
     * Tests setNomEmploye()
     *
     * @return void
     */
    public function testSetNomEmploye(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNomEmploye("nomEmploye");
        $this->assertEquals("nomEmploye", $obj->getNomEmploye());
    }

    /**
     * Tests setNumeroEmploye()
     *
     * @return void
     */
    public function testSetNumeroEmploye(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests setNumeroEmploye2()
     *
     * @return void
     */
    public function testSetNumeroEmploye2(): void {

        $obj = new LignesMsaEmploye();

        $obj->setNumeroEmploye2("numeroEmploye2");
        $this->assertEquals("numeroEmploye2", $obj->getNumeroEmploye2());
    }

    /**
     * Tests setPCentPartiel()
     *
     * @return void
     */
    public function testSetPCentPartiel(): void {

        $obj = new LignesMsaEmploye();

        $obj->setPCentPartiel(10);
        $this->assertEquals(10, $obj->getPCentPartiel());
    }

    /**
     * Tests setPerDeb1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb1(): void {

        // Set a Date/time mock.
        $perDeb1 = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPerDeb1($perDeb1);
        $this->assertSame($perDeb1, $obj->getPerDeb1());
    }

    /**
     * Tests setPerDeb2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb2(): void {

        // Set a Date/time mock.
        $perDeb2 = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPerDeb2($perDeb2);
        $this->assertSame($perDeb2, $obj->getPerDeb2());
    }

    /**
     * Tests setPerDeb3()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerDeb3(): void {

        // Set a Date/time mock.
        $perDeb3 = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPerDeb3($perDeb3);
        $this->assertSame($perDeb3, $obj->getPerDeb3());
    }

    /**
     * Tests setPerFin1()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFin1(): void {

        // Set a Date/time mock.
        $perFin1 = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPerFin1($perFin1);
        $this->assertSame($perFin1, $obj->getPerFin1());
    }

    /**
     * Tests setPerFin2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFin2(): void {

        // Set a Date/time mock.
        $perFin2 = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPerFin2($perFin2);
        $this->assertSame($perFin2, $obj->getPerFin2());
    }

    /**
     * Tests setPerFin3()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPerFin3(): void {

        // Set a Date/time mock.
        $perFin3 = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPerFin3($perFin3);
        $this->assertSame($perFin3, $obj->getPerFin3());
    }

    /**
     * Tests setPeriodeDecla()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeDecla(): void {

        // Set a Date/time mock.
        $periodeDecla = new DateTime("2018-09-10");

        $obj = new LignesMsaEmploye();

        $obj->setPeriodeDecla($periodeDecla);
        $this->assertSame($periodeDecla, $obj->getPeriodeDecla());
    }

    /**
     * Tests setPeriodicite()
     *
     * @return void
     */
    public function testSetPeriodicite(): void {

        $obj = new LignesMsaEmploye();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests setPeriodicitePrec()
     *
     * @return void
     */
    public function testSetPeriodicitePrec(): void {

        $obj = new LignesMsaEmploye();

        $obj->setPeriodicitePrec("periodicitePrec");
        $this->assertEquals("periodicitePrec", $obj->getPeriodicitePrec());
    }

    /**
     * Tests setPrenomEmploye()
     *
     * @return void
     */
    public function testSetPrenomEmploye(): void {

        $obj = new LignesMsaEmploye();

        $obj->setPrenomEmploye("prenomEmploye");
        $this->assertEquals("prenomEmploye", $obj->getPrenomEmploye());
    }

    /**
     * Tests setSaisonnier()
     *
     * @return void
     */
    public function testSetSaisonnier(): void {

        $obj = new LignesMsaEmploye();

        $obj->setSaisonnier("saisonnier");
        $this->assertEquals("saisonnier", $obj->getSaisonnier());
    }

    /**
     * Tests setSaisonnierPrec()
     *
     * @return void
     */
    public function testSetSaisonnierPrec(): void {

        $obj = new LignesMsaEmploye();

        $obj->setSaisonnierPrec("saisonnierPrec");
        $this->assertEquals("saisonnierPrec", $obj->getSaisonnierPrec());
    }

    /**
     * Tests setService()
     *
     * @return void
     */
    public function testSetService(): void {

        $obj = new LignesMsaEmploye();

        $obj->setService("service");
        $this->assertEquals("service", $obj->getService());
    }

    /**
     * Tests setServiceEvo()
     *
     * @return void
     */
    public function testSetServiceEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setServiceEvo("serviceEvo");
        $this->assertEquals("serviceEvo", $obj->getServiceEvo());
    }

    /**
     * Tests setSuspensionZrrzru1()
     *
     * @return void
     */
    public function testSetSuspensionZrrzru1(): void {

        $obj = new LignesMsaEmploye();

        $obj->setSuspensionZrrzru1("suspensionZrrzru1");
        $this->assertEquals("suspensionZrrzru1", $obj->getSuspensionZrrzru1());
    }

    /**
     * Tests setSuspensionZrrzru2()
     *
     * @return void
     */
    public function testSetSuspensionZrrzru2(): void {

        $obj = new LignesMsaEmploye();

        $obj->setSuspensionZrrzru2("suspensionZrrzru2");
        $this->assertEquals("suspensionZrrzru2", $obj->getSuspensionZrrzru2());
    }

    /**
     * Tests setSuspensionZrrzru3()
     *
     * @return void
     */
    public function testSetSuspensionZrrzru3(): void {

        $obj = new LignesMsaEmploye();

        $obj->setSuspensionZrrzru3("suspensionZrrzru3");
        $this->assertEquals("suspensionZrrzru3", $obj->getSuspensionZrrzru3());
    }

    /**
     * Tests setTauxSmicFillon1()
     *
     * @return void
     */
    public function testSetTauxSmicFillon1(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTauxSmicFillon1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon1());
    }

    /**
     * Tests setTauxSmicFillon2()
     *
     * @return void
     */
    public function testSetTauxSmicFillon2(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTauxSmicFillon2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon2());
    }

    /**
     * Tests setTauxSmicFillon3()
     *
     * @return void
     */
    public function testSetTauxSmicFillon3(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTauxSmicFillon3(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxSmicFillon3());
    }

    /**
     * Tests setTempsPartiel()
     *
     * @return void
     */
    public function testSetTempsPartiel(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTempsPartiel("tempsPartiel");
        $this->assertEquals("tempsPartiel", $obj->getTempsPartiel());
    }

    /**
     * Tests setTempsPartielEvo()
     *
     * @return void
     */
    public function testSetTempsPartielEvo(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTempsPartielEvo("tempsPartielEvo");
        $this->assertEquals("tempsPartielEvo", $obj->getTempsPartielEvo());
    }

    /**
     * Tests setTotalGeneral()
     *
     * @return void
     */
    public function testSetTotalGeneral(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTotalGeneral(10);
        $this->assertEquals(10, $obj->getTotalGeneral());
    }

    /**
     * Tests setTypeAbsence()
     *
     * @return void
     */
    public function testSetTypeAbsence(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAbsence("typeAbsence");
        $this->assertEquals("typeAbsence", $obj->getTypeAbsence());
    }

    /**
     * Tests setTypeAutreRemun11()
     *
     * @return void
     */
    public function testSetTypeAutreRemun11(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun11("typeAutreRemun11");
        $this->assertEquals("typeAutreRemun11", $obj->getTypeAutreRemun11());
    }

    /**
     * Tests setTypeAutreRemun12()
     *
     * @return void
     */
    public function testSetTypeAutreRemun12(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun12("typeAutreRemun12");
        $this->assertEquals("typeAutreRemun12", $obj->getTypeAutreRemun12());
    }

    /**
     * Tests setTypeAutreRemun13()
     *
     * @return void
     */
    public function testSetTypeAutreRemun13(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun13("typeAutreRemun13");
        $this->assertEquals("typeAutreRemun13", $obj->getTypeAutreRemun13());
    }

    /**
     * Tests setTypeAutreRemun14()
     *
     * @return void
     */
    public function testSetTypeAutreRemun14(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun14("typeAutreRemun14");
        $this->assertEquals("typeAutreRemun14", $obj->getTypeAutreRemun14());
    }

    /**
     * Tests setTypeAutreRemun21()
     *
     * @return void
     */
    public function testSetTypeAutreRemun21(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun21("typeAutreRemun21");
        $this->assertEquals("typeAutreRemun21", $obj->getTypeAutreRemun21());
    }

    /**
     * Tests setTypeAutreRemun22()
     *
     * @return void
     */
    public function testSetTypeAutreRemun22(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun22("typeAutreRemun22");
        $this->assertEquals("typeAutreRemun22", $obj->getTypeAutreRemun22());
    }

    /**
     * Tests setTypeAutreRemun23()
     *
     * @return void
     */
    public function testSetTypeAutreRemun23(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun23("typeAutreRemun23");
        $this->assertEquals("typeAutreRemun23", $obj->getTypeAutreRemun23());
    }

    /**
     * Tests setTypeAutreRemun24()
     *
     * @return void
     */
    public function testSetTypeAutreRemun24(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun24("typeAutreRemun24");
        $this->assertEquals("typeAutreRemun24", $obj->getTypeAutreRemun24());
    }

    /**
     * Tests setTypeAutreRemun31()
     *
     * @return void
     */
    public function testSetTypeAutreRemun31(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun31("typeAutreRemun31");
        $this->assertEquals("typeAutreRemun31", $obj->getTypeAutreRemun31());
    }

    /**
     * Tests setTypeAutreRemun32()
     *
     * @return void
     */
    public function testSetTypeAutreRemun32(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun32("typeAutreRemun32");
        $this->assertEquals("typeAutreRemun32", $obj->getTypeAutreRemun32());
    }

    /**
     * Tests setTypeAutreRemun33()
     *
     * @return void
     */
    public function testSetTypeAutreRemun33(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun33("typeAutreRemun33");
        $this->assertEquals("typeAutreRemun33", $obj->getTypeAutreRemun33());
    }

    /**
     * Tests setTypeAutreRemun34()
     *
     * @return void
     */
    public function testSetTypeAutreRemun34(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeAutreRemun34("typeAutreRemun34");
        $this->assertEquals("typeAutreRemun34", $obj->getTypeAutreRemun34());
    }

    /**
     * Tests setTypeCrccaEmp()
     *
     * @return void
     */
    public function testSetTypeCrccaEmp(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeCrccaEmp("typeCrccaEmp");
        $this->assertEquals("typeCrccaEmp", $obj->getTypeCrccaEmp());
    }

    /**
     * Tests setTypeRemun11()
     *
     * @return void
     */
    public function testSetTypeRemun11(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun11("typeRemun11");
        $this->assertEquals("typeRemun11", $obj->getTypeRemun11());
    }

    /**
     * Tests setTypeRemun12()
     *
     * @return void
     */
    public function testSetTypeRemun12(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun12("typeRemun12");
        $this->assertEquals("typeRemun12", $obj->getTypeRemun12());
    }

    /**
     * Tests setTypeRemun13()
     *
     * @return void
     */
    public function testSetTypeRemun13(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun13("typeRemun13");
        $this->assertEquals("typeRemun13", $obj->getTypeRemun13());
    }

    /**
     * Tests setTypeRemun14()
     *
     * @return void
     */
    public function testSetTypeRemun14(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun14("typeRemun14");
        $this->assertEquals("typeRemun14", $obj->getTypeRemun14());
    }

    /**
     * Tests setTypeRemun21()
     *
     * @return void
     */
    public function testSetTypeRemun21(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun21("typeRemun21");
        $this->assertEquals("typeRemun21", $obj->getTypeRemun21());
    }

    /**
     * Tests setTypeRemun22()
     *
     * @return void
     */
    public function testSetTypeRemun22(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun22("typeRemun22");
        $this->assertEquals("typeRemun22", $obj->getTypeRemun22());
    }

    /**
     * Tests setTypeRemun23()
     *
     * @return void
     */
    public function testSetTypeRemun23(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun23("typeRemun23");
        $this->assertEquals("typeRemun23", $obj->getTypeRemun23());
    }

    /**
     * Tests setTypeRemun24()
     *
     * @return void
     */
    public function testSetTypeRemun24(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun24("typeRemun24");
        $this->assertEquals("typeRemun24", $obj->getTypeRemun24());
    }

    /**
     * Tests setTypeRemun31()
     *
     * @return void
     */
    public function testSetTypeRemun31(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun31("typeRemun31");
        $this->assertEquals("typeRemun31", $obj->getTypeRemun31());
    }

    /**
     * Tests setTypeRemun32()
     *
     * @return void
     */
    public function testSetTypeRemun32(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun32("typeRemun32");
        $this->assertEquals("typeRemun32", $obj->getTypeRemun32());
    }

    /**
     * Tests setTypeRemun33()
     *
     * @return void
     */
    public function testSetTypeRemun33(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun33("typeRemun33");
        $this->assertEquals("typeRemun33", $obj->getTypeRemun33());
    }

    /**
     * Tests setTypeRemun34()
     *
     * @return void
     */
    public function testSetTypeRemun34(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeRemun34("typeRemun34");
        $this->assertEquals("typeRemun34", $obj->getTypeRemun34());
    }

    /**
     * Tests setTypeTravail()
     *
     * @return void
     */
    public function testSetTypeTravail(): void {

        $obj = new LignesMsaEmploye();

        $obj->setTypeTravail("typeTravail");
        $this->assertEquals("typeTravail", $obj->getTypeTravail());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LignesMsaEmploye();

        $this->assertNull($obj->getAgirc());
        $this->assertNull($obj->getAgircEvo());
        $this->assertNull($obj->getCddcdi());
        $this->assertNull($obj->getCddcdiEvo());
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
        $this->assertNull($obj->getEvoAgirc());
        $this->assertNull($obj->getEvoCddcdi());
        $this->assertNull($obj->getEvoCrcca36());
        $this->assertNull($obj->getEvoCrcca4Bis());
        $this->assertNull($obj->getEvoCadre());
        $this->assertNull($obj->getEvoContrat());
        $this->assertNull($obj->getEvoEmploi());
        $this->assertNull($obj->getEvoFisc());
        $this->assertNull($obj->getFisc());
        $this->assertNull($obj->getFiscEvo());
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
        $this->assertNull($obj->getMontantSmicRetenu1());
        $this->assertNull($obj->getMontantSmicRetenu2());
        $this->assertNull($obj->getMontantSmicRetenu3());
        $this->assertNull($obj->getNir());
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
        $this->assertNull($obj->getSuspensionZrrzru1());
        $this->assertNull($obj->getSuspensionZrrzru2());
        $this->assertNull($obj->getSuspensionZrrzru3());
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
        $this->assertNull($obj->getTypeCrccaEmp());
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
}
