<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QCompta;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QCompta\Dossier4;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Dossier4 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QCompta
 */
class Dossier4Test extends AbstractTestCase {

    /**
     * Tests setAcompte1()
     *
     * @return void
     */
    public function testSetAcompte1(): void {

        $obj = new Dossier4();

        $obj->setAcompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte1());
    }

    /**
     * Tests setAcompte2()
     *
     * @return void
     */
    public function testSetAcompte2(): void {

        $obj = new Dossier4();

        $obj->setAcompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte2());
    }

    /**
     * Tests setAcompte3()
     *
     * @return void
     */
    public function testSetAcompte3(): void {

        $obj = new Dossier4();

        $obj->setAcompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte3());
    }

    /**
     * Tests setAcompte4()
     *
     * @return void
     */
    public function testSetAcompte4(): void {

        $obj = new Dossier4();

        $obj->setAcompte4(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte4());
    }

    /**
     * Tests setArchImp3519Tva()
     *
     * @return void
     */
    public function testSetArchImp3519Tva(): void {

        $obj = new Dossier4();

        $obj->setArchImp3519Tva(true);
        $this->assertEquals(true, $obj->getArchImp3519Tva());
    }

    /**
     * Tests setArchiveDeclTva()
     *
     * @return void
     */
    public function testSetArchiveDeclTva(): void {

        $obj = new Dossier4();

        $obj->setArchiveDeclTva(10);
        $this->assertEquals(10, $obj->getArchiveDeclTva());
    }

    /**
     * Tests setBalAgeeNbJoursInt1()
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt1(): void {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt1(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt1());
    }

    /**
     * Tests setBalAgeeNbJoursInt2()
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt2(): void {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt2(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt2());
    }

    /**
     * Tests setBalAgeeNbJoursInt3()
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt3(): void {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt3(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt3());
    }

    /**
     * Tests setBalAgeeNbJoursInt4()
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt4(): void {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt4(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt4());
    }

    /**
     * Tests setBase15pcent()
     *
     * @return void
     */
    public function testSetBase15pcent(): void {

        $obj = new Dossier4();

        $obj->setBase15pcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBase15pcent());
    }

    /**
     * Tests setBase33pcent()
     *
     * @return void
     */
    public function testSetBase33pcent(): void {

        $obj = new Dossier4();

        $obj->setBase33pcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBase33pcent());
    }

    /**
     * Tests setBaseTNpcent()
     *
     * @return void
     */
    public function testSetBaseTNpcent(): void {

        $obj = new Dossier4();

        $obj->setBaseTNpcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTNpcent());
    }

    /**
     * Tests setCategoriePme()
     *
     * @return void
     */
    public function testSetCategoriePme(): void {

        $obj = new Dossier4();

        $obj->setCategoriePme(10);
        $this->assertEquals(10, $obj->getCategoriePme());
    }

    /**
     * Tests setCdiBtq()
     *
     * @return void
     */
    public function testSetCdiBtq(): void {

        $obj = new Dossier4();

        $obj->setCdiBtq("cdiBtq");
        $this->assertEquals("cdiBtq", $obj->getCdiBtq());
    }

    /**
     * Tests setCdiBureauDistributeur()
     *
     * @return void
     */
    public function testSetCdiBureauDistributeur(): void {

        $obj = new Dossier4();

        $obj->setCdiBureauDistributeur("cdiBureauDistributeur");
        $this->assertEquals("cdiBureauDistributeur", $obj->getCdiBureauDistributeur());
    }

    /**
     * Tests setCdiCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCdiCodeOfficielCommune(): void {

        $obj = new Dossier4();

        $obj->setCdiCodeOfficielCommune("cdiCodeOfficielCommune");
        $this->assertEquals("cdiCodeOfficielCommune", $obj->getCdiCodeOfficielCommune());
    }

    /**
     * Tests setCdiCodePostal()
     *
     * @return void
     */
    public function testSetCdiCodePostal(): void {

        $obj = new Dossier4();

        $obj->setCdiCodePostal("cdiCodePostal");
        $this->assertEquals("cdiCodePostal", $obj->getCdiCodePostal());
    }

    /**
     * Tests setCdiComplement()
     *
     * @return void
     */
    public function testSetCdiComplement(): void {

        $obj = new Dossier4();

        $obj->setCdiComplement("cdiComplement");
        $this->assertEquals("cdiComplement", $obj->getCdiComplement());
    }

    /**
     * Tests setCdiNom()
     *
     * @return void
     */
    public function testSetCdiNom(): void {

        $obj = new Dossier4();

        $obj->setCdiNom("cdiNom");
        $this->assertEquals("cdiNom", $obj->getCdiNom());
    }

    /**
     * Tests setCdiNomVille()
     *
     * @return void
     */
    public function testSetCdiNomVille(): void {

        $obj = new Dossier4();

        $obj->setCdiNomVille("cdiNomVille");
        $this->assertEquals("cdiNomVille", $obj->getCdiNomVille());
    }

    /**
     * Tests setCdiNomVoie()
     *
     * @return void
     */
    public function testSetCdiNomVoie(): void {

        $obj = new Dossier4();

        $obj->setCdiNomVoie("cdiNomVoie");
        $this->assertEquals("cdiNomVoie", $obj->getCdiNomVoie());
    }

    /**
     * Tests setCdiNumVoie()
     *
     * @return void
     */
    public function testSetCdiNumVoie(): void {

        $obj = new Dossier4();

        $obj->setCdiNumVoie("cdiNumVoie");
        $this->assertEquals("cdiNumVoie", $obj->getCdiNumVoie());
    }

    /**
     * Tests setCdiTel1()
     *
     * @return void
     */
    public function testSetCdiTel1(): void {

        $obj = new Dossier4();

        $obj->setCdiTel1("cdiTel1");
        $this->assertEquals("cdiTel1", $obj->getCdiTel1());
    }

    /**
     * Tests setDatePlafondInterets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePlafondInterets(): void {

        // Set a Date/time mock.
        $datePlafondInterets = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setDatePlafondInterets($datePlafondInterets);
        $this->assertSame($datePlafondInterets, $obj->getDatePlafondInterets());
    }

    /**
     * Tests setDatePlafondInterets2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePlafondInterets2(): void {

        // Set a Date/time mock.
        $datePlafondInterets2 = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setDatePlafondInterets2($datePlafondInterets2);
        $this->assertSame($datePlafondInterets2, $obj->getDatePlafondInterets2());
    }

    /**
     * Tests setDateTransfLotCvae()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfLotCvae(): void {

        // Set a Date/time mock.
        $dateTransfLotCvae = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setDateTransfLotCvae($dateTransfLotCvae);
        $this->assertSame($dateTransfLotCvae, $obj->getDateTransfLotCvae());
    }

    /**
     * Tests setDateTransfLotIs()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfLotIs(): void {

        // Set a Date/time mock.
        $dateTransfLotIs = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setDateTransfLotIs($dateTransfLotIs);
        $this->assertSame($dateTransfLotIs, $obj->getDateTransfLotIs());
    }

    /**
     * Tests setDateTransfertInterets()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertInterets(): void {

        // Set a Date/time mock.
        $dateTransfertInterets = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setDateTransfertInterets($dateTransfertInterets);
        $this->assertSame($dateTransfertInterets, $obj->getDateTransfertInterets());
    }

    /**
     * Tests setDateTransfertInterets2()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertInterets2(): void {

        // Set a Date/time mock.
        $dateTransfertInterets2 = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setDateTransfertInterets2($dateTransfertInterets2);
        $this->assertSame($dateTransfertInterets2, $obj->getDateTransfertInterets2());
    }

    /**
     * Tests setDecTvaTypeReglement()
     *
     * @return void
     */
    public function testSetDecTvaTypeReglement(): void {

        $obj = new Dossier4();

        $obj->setDecTvaTypeReglement(10);
        $this->assertEquals(10, $obj->getDecTvaTypeReglement());
    }

    /**
     * Tests setDecalageQuinzaine()
     *
     * @return void
     */
    public function testSetDecalageQuinzaine(): void {

        $obj = new Dossier4();

        $obj->setDecalageQuinzaine(true);
        $this->assertEquals(true, $obj->getDecalageQuinzaine());
    }

    /**
     * Tests setDeclReferencePaiement()
     *
     * @return void
     */
    public function testSetDeclReferencePaiement(): void {

        $obj = new Dossier4();

        $obj->setDeclReferencePaiement("declReferencePaiement");
        $this->assertEquals("declReferencePaiement", $obj->getDeclReferencePaiement());
    }

    /**
     * Tests setDeclTvaCdi()
     *
     * @return void
     */
    public function testSetDeclTvaCdi(): void {

        $obj = new Dossier4();

        $obj->setDeclTvaCdi("declTvaCdi");
        $this->assertEquals("declTvaCdi", $obj->getDeclTvaCdi());
    }

    /**
     * Tests setDeclTvaInsp()
     *
     * @return void
     */
    public function testSetDeclTvaInsp(): void {

        $obj = new Dossier4();

        $obj->setDeclTvaInsp("declTvaInsp");
        $this->assertEquals("declTvaInsp", $obj->getDeclTvaInsp());
    }

    /**
     * Tests setDeclTvaRegime()
     *
     * @return void
     */
    public function testSetDeclTvaRegime(): void {

        $obj = new Dossier4();

        $obj->setDeclTvaRegime("declTvaRegime");
        $this->assertEquals("declTvaRegime", $obj->getDeclTvaRegime());
    }

    /**
     * Tests setFtisContribMtt()
     *
     * @return void
     */
    public function testSetFtisContribMtt(): void {

        $obj = new Dossier4();

        $obj->setFtisContribMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getFtisContribMtt());
    }

    /**
     * Tests setFtisCreditImpot()
     *
     * @return void
     */
    public function testSetFtisCreditImpot(): void {

        $obj = new Dossier4();

        $obj->setFtisCreditImpot(10.092018);
        $this->assertEquals(10.092018, $obj->getFtisCreditImpot());
    }

    /**
     * Tests setFtisDeficitsReportables()
     *
     * @return void
     */
    public function testSetFtisDeficitsReportables(): void {

        $obj = new Dossier4();

        $obj->setFtisDeficitsReportables(10.092018);
        $this->assertEquals(10.092018, $obj->getFtisDeficitsReportables());
    }

    /**
     * Tests setFtisNumCpt1()
     *
     * @return void
     */
    public function testSetFtisNumCpt1(): void {

        $obj = new Dossier4();

        $obj->setFtisNumCpt1("ftisNumCpt1");
        $this->assertEquals("ftisNumCpt1", $obj->getFtisNumCpt1());
    }

    /**
     * Tests setFtisNumCpt2()
     *
     * @return void
     */
    public function testSetFtisNumCpt2(): void {

        $obj = new Dossier4();

        $obj->setFtisNumCpt2("ftisNumCpt2");
        $this->assertEquals("ftisNumCpt2", $obj->getFtisNumCpt2());
    }

    /**
     * Tests setFtiscice()
     *
     * @return void
     */
    public function testSetFtiscice(): void {

        $obj = new Dossier4();

        $obj->setFtiscice(10.092018);
        $this->assertEquals(10.092018, $obj->getFtiscice());
    }

    /**
     * Tests setImmoRealloc()
     *
     * @return void
     */
    public function testSetImmoRealloc(): void {

        $obj = new Dossier4();

        $obj->setImmoRealloc(10);
        $this->assertEquals(10, $obj->getImmoRealloc());
    }

    /**
     * Tests setInteretBase()
     *
     * @return void
     */
    public function testSetInteretBase(): void {

        $obj = new Dossier4();

        $obj->setInteretBase(10.092018);
        $this->assertEquals(10.092018, $obj->getInteretBase());
    }

    /**
     * Tests setInteretsCap()
     *
     * @return void
     */
    public function testSetInteretsCap(): void {

        $obj = new Dossier4();

        $obj->setInteretsCap("interetsCap");
        $this->assertEquals("interetsCap", $obj->getInteretsCap());
    }

    /**
     * Tests setInteretsCap2()
     *
     * @return void
     */
    public function testSetInteretsCap2(): void {

        $obj = new Dossier4();

        $obj->setInteretsCap2("interetsCap2");
        $this->assertEquals("interetsCap2", $obj->getInteretsCap2());
    }

    /**
     * Tests setInteretsContrepartie()
     *
     * @return void
     */
    public function testSetInteretsContrepartie(): void {

        $obj = new Dossier4();

        $obj->setInteretsContrepartie("interetsContrepartie");
        $this->assertEquals("interetsContrepartie", $obj->getInteretsContrepartie());
    }

    /**
     * Tests setInteretsContrepartie2()
     *
     * @return void
     */
    public function testSetInteretsContrepartie2(): void {

        $obj = new Dossier4();

        $obj->setInteretsContrepartie2("interetsContrepartie2");
        $this->assertEquals("interetsContrepartie2", $obj->getInteretsContrepartie2());
    }

    /**
     * Tests setInteretsContrepartieDeduc()
     *
     * @return void
     */
    public function testSetInteretsContrepartieDeduc(): void {

        $obj = new Dossier4();

        $obj->setInteretsContrepartieDeduc("interetsContrepartieDeduc");
        $this->assertEquals("interetsContrepartieDeduc", $obj->getInteretsContrepartieDeduc());
    }

    /**
     * Tests setInteretsContrepartieDeduc2()
     *
     * @return void
     */
    public function testSetInteretsContrepartieDeduc2(): void {

        $obj = new Dossier4();

        $obj->setInteretsContrepartieDeduc2("interetsContrepartieDeduc2");
        $this->assertEquals("interetsContrepartieDeduc2", $obj->getInteretsContrepartieDeduc2());
    }

    /**
     * Tests setInteretsPca()
     *
     * @return void
     */
    public function testSetInteretsPca(): void {

        $obj = new Dossier4();

        $obj->setInteretsPca("interetsPca");
        $this->assertEquals("interetsPca", $obj->getInteretsPca());
    }

    /**
     * Tests setInteretsPca2()
     *
     * @return void
     */
    public function testSetInteretsPca2(): void {

        $obj = new Dossier4();

        $obj->setInteretsPca2("interetsPca2");
        $this->assertEquals("interetsPca2", $obj->getInteretsPca2());
    }

    /**
     * Tests setNoLotCptRecip()
     *
     * @return void
     */
    public function testSetNoLotCptRecip(): void {

        $obj = new Dossier4();

        $obj->setNoLotCptRecip(10);
        $this->assertEquals(10, $obj->getNoLotCptRecip());
    }

    /**
     * Tests setNoLotCreditIs()
     *
     * @return void
     */
    public function testSetNoLotCreditIs(): void {

        $obj = new Dossier4();

        $obj->setNoLotCreditIs(10);
        $this->assertEquals(10, $obj->getNoLotCreditIs());
    }

    /**
     * Tests setNoLotCvae()
     *
     * @return void
     */
    public function testSetNoLotCvae(): void {

        $obj = new Dossier4();

        $obj->setNoLotCvae(10);
        $this->assertEquals(10, $obj->getNoLotCvae());
    }

    /**
     * Tests setNoLotInterets()
     *
     * @return void
     */
    public function testSetNoLotInterets(): void {

        $obj = new Dossier4();

        $obj->setNoLotInterets(10);
        $this->assertEquals(10, $obj->getNoLotInterets());
    }

    /**
     * Tests setNoLotInterets2()
     *
     * @return void
     */
    public function testSetNoLotInterets2(): void {

        $obj = new Dossier4();

        $obj->setNoLotInterets2(10);
        $this->assertEquals(10, $obj->getNoLotInterets2());
    }

    /**
     * Tests setNoLotIs()
     *
     * @return void
     */
    public function testSetNoLotIs(): void {

        $obj = new Dossier4();

        $obj->setNoLotIs(10);
        $this->assertEquals(10, $obj->getNoLotIs());
    }

    /**
     * Tests setNoLotPaiementIs()
     *
     * @return void
     */
    public function testSetNoLotPaiementIs(): void {

        $obj = new Dossier4();

        $obj->setNoLotPaiementIs(10);
        $this->assertEquals(10, $obj->getNoLotPaiementIs());
    }

    /**
     * Tests setPeriodeTransfertStock()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfertStock(): void {

        // Set a Date/time mock.
        $periodeTransfertStock = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setPeriodeTransfertStock($periodeTransfertStock);
        $this->assertSame($periodeTransfertStock, $obj->getPeriodeTransfertStock());
    }

    /**
     * Tests setPrecedentNumLotStock()
     *
     * @return void
     */
    public function testSetPrecedentNumLotStock(): void {

        $obj = new Dossier4();

        $obj->setPrecedentNumLotStock(10);
        $this->assertEquals(10, $obj->getPrecedentNumLotStock());
    }

    /**
     * Tests setRegimeAgricole()
     *
     * @return void
     */
    public function testSetRegimeAgricole(): void {

        $obj = new Dossier4();

        $obj->setRegimeAgricole(true);
        $this->assertEquals(true, $obj->getRegimeAgricole());
    }

    /**
     * Tests setResultatNetCpt()
     *
     * @return void
     */
    public function testSetResultatNetCpt(): void {

        $obj = new Dossier4();

        $obj->setResultatNetCpt(10.092018);
        $this->assertEquals(10.092018, $obj->getResultatNetCpt());
    }

    /**
     * Tests setRofTva()
     *
     * @return void
     */
    public function testSetRofTva(): void {

        $obj = new Dossier4();

        $obj->setRofTva("rofTva");
        $this->assertEquals("rofTva", $obj->getRofTva());
    }

    /**
     * Tests setTauxPlafondInterets()
     *
     * @return void
     */
    public function testSetTauxPlafondInterets(): void {

        $obj = new Dossier4();

        $obj->setTauxPlafondInterets(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPlafondInterets());
    }

    /**
     * Tests setTauxPlafondInterets2()
     *
     * @return void
     */
    public function testSetTauxPlafondInterets2(): void {

        $obj = new Dossier4();

        $obj->setTauxPlafondInterets2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPlafondInterets2());
    }

    /**
     * Tests setTvaAchatsEnc()
     *
     * @return void
     */
    public function testSetTvaAchatsEnc(): void {

        $obj = new Dossier4();

        $obj->setTvaAchatsEnc(true);
        $this->assertEquals(true, $obj->getTvaAchatsEnc());
    }

    /**
     * Tests setTvaCa12Ae()
     *
     * @return void
     */
    public function testSetTvaCa12Ae(): void {

        $obj = new Dossier4();

        $obj->setTvaCa12Ae("tvaCa12Ae");
        $this->assertEquals("tvaCa12Ae", $obj->getTvaCa12Ae());
    }

    /**
     * Tests setTvaCadtm()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaCadtm(): void {

        // Set a Date/time mock.
        $tvaCadtm = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setTvaCadtm($tvaCadtm);
        $this->assertSame($tvaCadtm, $obj->getTvaCadtm());
    }

    /**
     * Tests setTvaCascade()
     *
     * @return void
     */
    public function testSetTvaCascade(): void {

        $obj = new Dossier4();

        $obj->setTvaCascade(true);
        $this->assertEquals(true, $obj->getTvaCascade());
    }

    /**
     * Tests setTvaClotureFaite()
     *
     * @return void
     */
    public function testSetTvaClotureFaite(): void {

        $obj = new Dossier4();

        $obj->setTvaClotureFaite(true);
        $this->assertEquals(true, $obj->getTvaClotureFaite());
    }

    /**
     * Tests setTvaCodeCabinet()
     *
     * @return void
     */
    public function testSetTvaCodeCabinet(): void {

        $obj = new Dossier4();

        $obj->setTvaCodeCabinet("tvaCodeCabinet");
        $this->assertEquals("tvaCodeCabinet", $obj->getTvaCodeCabinet());
    }

    /**
     * Tests setTvaCodeIntEmetteur()
     *
     * @return void
     */
    public function testSetTvaCodeIntEmetteur(): void {

        $obj = new Dossier4();

        $obj->setTvaCodeIntEmetteur("tvaCodeIntEmetteur");
        $this->assertEquals("tvaCodeIntEmetteur", $obj->getTvaCodeIntEmetteur());
    }

    /**
     * Tests setTvaCodeIntRecepteur()
     *
     * @return void
     */
    public function testSetTvaCodeIntRecepteur(): void {

        $obj = new Dossier4();

        $obj->setTvaCodeIntRecepteur("tvaCodeIntRecepteur");
        $this->assertEquals("tvaCodeIntRecepteur", $obj->getTvaCodeIntRecepteur());
    }

    /**
     * Tests setTvaCodeJournalBq()
     *
     * @return void
     */
    public function testSetTvaCodeJournalBq(): void {

        $obj = new Dossier4();

        $obj->setTvaCodeJournalBq("tvaCodeJournalBq");
        $this->assertEquals("tvaCodeJournalBq", $obj->getTvaCodeJournalBq());
    }

    /**
     * Tests setTvaCodeJournalOd()
     *
     * @return void
     */
    public function testSetTvaCodeJournalOd(): void {

        $obj = new Dossier4();

        $obj->setTvaCodeJournalOd("tvaCodeJournalOd");
        $this->assertEquals("tvaCodeJournalOd", $obj->getTvaCodeJournalOd());
    }

    /**
     * Tests setTvaCptAAjouter()
     *
     * @return void
     */
    public function testSetTvaCptAAjouter(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAAjouter("tvaCptAAjouter");
        $this->assertEquals("tvaCptAAjouter", $obj->getTvaCptAAjouter());
    }

    /**
     * Tests setTvaCptAAjouterG()
     *
     * @return void
     */
    public function testSetTvaCptAAjouterG(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAAjouterG("tvaCptAAjouterG");
        $this->assertEquals("tvaCptAAjouterG", $obj->getTvaCptAAjouterG());
    }

    /**
     * Tests setTvaCptADeduire()
     *
     * @return void
     */
    public function testSetTvaCptADeduire(): void {

        $obj = new Dossier4();

        $obj->setTvaCptADeduire("tvaCptADeduire");
        $this->assertEquals("tvaCptADeduire", $obj->getTvaCptADeduire());
    }

    /**
     * Tests setTvaCptAImputer()
     *
     * @return void
     */
    public function testSetTvaCptAImputer(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAImputer("tvaCptAImputer");
        $this->assertEquals("tvaCptAImputer", $obj->getTvaCptAImputer());
    }

    /**
     * Tests setTvaCptAImputerG()
     *
     * @return void
     */
    public function testSetTvaCptAImputerG(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAImputerG("tvaCptAImputerG");
        $this->assertEquals("tvaCptAImputerG", $obj->getTvaCptAImputerG());
    }

    /**
     * Tests setTvaCptAPayer()
     *
     * @return void
     */
    public function testSetTvaCptAPayer(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAPayer("tvaCptAPayer");
        $this->assertEquals("tvaCptAPayer", $obj->getTvaCptAPayer());
    }

    /**
     * Tests setTvaCptAPayerG()
     *
     * @return void
     */
    public function testSetTvaCptAPayerG(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAPayerG("tvaCptAPayerG");
        $this->assertEquals("tvaCptAPayerG", $obj->getTvaCptAPayerG());
    }

    /**
     * Tests setTvaCptAcqIntraCom()
     *
     * @return void
     */
    public function testSetTvaCptAcqIntraCom(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAcqIntraCom("tvaCptAcqIntraCom");
        $this->assertEquals("tvaCptAcqIntraCom", $obj->getTvaCptAcqIntraCom());
    }

    /**
     * Tests setTvaCptAncTaux()
     *
     * @return void
     */
    public function testSetTvaCptAncTaux(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAncTaux("tvaCptAncTaux");
        $this->assertEquals("tvaCptAncTaux", $obj->getTvaCptAncTaux());
    }

    /**
     * Tests setTvaCptAnteDeduit()
     *
     * @return void
     */
    public function testSetTvaCptAnteDeduit(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAnteDeduit("tvaCptAnteDeduit");
        $this->assertEquals("tvaCptAnteDeduit", $obj->getTvaCptAnteDeduit());
    }

    /**
     * Tests setTvaCptAssimil3310()
     *
     * @return void
     */
    public function testSetTvaCptAssimil3310(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAssimil3310("tvaCptAssimil3310");
        $this->assertEquals("tvaCptAssimil3310", $obj->getTvaCptAssimil3310());
    }

    /**
     * Tests setTvaCptAssimil3310G()
     *
     * @return void
     */
    public function testSetTvaCptAssimil3310G(): void {

        $obj = new Dossier4();

        $obj->setTvaCptAssimil3310G("tvaCptAssimil3310G");
        $this->assertEquals("tvaCptAssimil3310G", $obj->getTvaCptAssimil3310G());
    }

    /**
     * Tests setTvaCptBiens()
     *
     * @return void
     */
    public function testSetTvaCptBiens(): void {

        $obj = new Dossier4();

        $obj->setTvaCptBiens("tvaCptBiens");
        $this->assertEquals("tvaCptBiens", $obj->getTvaCptBiens());
    }

    /**
     * Tests setTvaCptBiensIntraCom()
     *
     * @return void
     */
    public function testSetTvaCptBiensIntraCom(): void {

        $obj = new Dossier4();

        $obj->setTvaCptBiensIntraCom("tvaCptBiensIntraCom");
        $this->assertEquals("tvaCptBiensIntraCom", $obj->getTvaCptBiensIntraCom());
    }

    /**
     * Tests setTvaCptDifference()
     *
     * @return void
     */
    public function testSetTvaCptDifference(): void {

        $obj = new Dossier4();

        $obj->setTvaCptDifference("tvaCptDifference");
        $this->assertEquals("tvaCptDifference", $obj->getTvaCptDifference());
    }

    /**
     * Tests setTvaCptDom()
     *
     * @return void
     */
    public function testSetTvaCptDom(): void {

        $obj = new Dossier4();

        $obj->setTvaCptDom("tvaCptDom");
        $this->assertEquals("tvaCptDom", $obj->getTvaCptDom());
    }

    /**
     * Tests setTvaCptGroupe()
     *
     * @return void
     */
    public function testSetTvaCptGroupe(): void {

        $obj = new Dossier4();

        $obj->setTvaCptGroupe("tvaCptGroupe");
        $this->assertEquals("tvaCptGroupe", $obj->getTvaCptGroupe());
    }

    /**
     * Tests setTvaCptImmos()
     *
     * @return void
     */
    public function testSetTvaCptImmos(): void {

        $obj = new Dossier4();

        $obj->setTvaCptImmos("tvaCptImmos");
        $this->assertEquals("tvaCptImmos", $obj->getTvaCptImmos());
    }

    /**
     * Tests setTvaCptImmosIntraCom()
     *
     * @return void
     */
    public function testSetTvaCptImmosIntraCom(): void {

        $obj = new Dossier4();

        $obj->setTvaCptImmosIntraCom("tvaCptImmosIntraCom");
        $this->assertEquals("tvaCptImmosIntraCom", $obj->getTvaCptImmosIntraCom());
    }

    /**
     * Tests setTvaCptRegul()
     *
     * @return void
     */
    public function testSetTvaCptRegul(): void {

        $obj = new Dossier4();

        $obj->setTvaCptRegul("tvaCptRegul");
        $this->assertEquals("tvaCptRegul", $obj->getTvaCptRegul());
    }

    /**
     * Tests setTvaCptRembours()
     *
     * @return void
     */
    public function testSetTvaCptRembours(): void {

        $obj = new Dossier4();

        $obj->setTvaCptRembours("tvaCptRembours");
        $this->assertEquals("tvaCptRembours", $obj->getTvaCptRembours());
    }

    /**
     * Tests setTvaCptRemboursG()
     *
     * @return void
     */
    public function testSetTvaCptRemboursG(): void {

        $obj = new Dossier4();

        $obj->setTvaCptRemboursG("tvaCptRemboursG");
        $this->assertEquals("tvaCptRemboursG", $obj->getTvaCptRemboursG());
    }

    /**
     * Tests setTvaCptReport()
     *
     * @return void
     */
    public function testSetTvaCptReport(): void {

        $obj = new Dossier4();

        $obj->setTvaCptReport("tvaCptReport");
        $this->assertEquals("tvaCptReport", $obj->getTvaCptReport());
    }

    /**
     * Tests setTvaCptReportG()
     *
     * @return void
     */
    public function testSetTvaCptReportG(): void {

        $obj = new Dossier4();

        $obj->setTvaCptReportG("tvaCptReportG");
        $this->assertEquals("tvaCptReportG", $obj->getTvaCptReportG());
    }

    /**
     * Tests setTvaCptTauxPart()
     *
     * @return void
     */
    public function testSetTvaCptTauxPart(): void {

        $obj = new Dossier4();

        $obj->setTvaCptTauxPart("tvaCptTauxPart");
        $this->assertEquals("tvaCptTauxPart", $obj->getTvaCptTauxPart());
    }

    /**
     * Tests setTvaCptVente()
     *
     * @return void
     */
    public function testSetTvaCptVente(): void {

        $obj = new Dossier4();

        $obj->setTvaCptVente("tvaCptVente");
        $this->assertEquals("tvaCptVente", $obj->getTvaCptVente());
    }

    /**
     * Tests setTvaDeb3JrnExclure()
     *
     * @return void
     */
    public function testSetTvaDeb3JrnExclure(): void {

        $obj = new Dossier4();

        $obj->setTvaDeb3JrnExclure("tvaDeb3JrnExclure");
        $this->assertEquals("tvaDeb3JrnExclure", $obj->getTvaDeb3JrnExclure());
    }

    /**
     * Tests setTvaDestAttn()
     *
     * @return void
     */
    public function testSetTvaDestAttn(): void {

        $obj = new Dossier4();

        $obj->setTvaDestAttn("tvaDestAttn");
        $this->assertEquals("tvaDestAttn", $obj->getTvaDestAttn());
    }

    /**
     * Tests setTvaDestFax()
     *
     * @return void
     */
    public function testSetTvaDestFax(): void {

        $obj = new Dossier4();

        $obj->setTvaDestFax("tvaDestFax");
        $this->assertEquals("tvaDestFax", $obj->getTvaDestFax());
    }

    /**
     * Tests setTvaDestNom()
     *
     * @return void
     */
    public function testSetTvaDestNom(): void {

        $obj = new Dossier4();

        $obj->setTvaDestNom("tvaDestNom");
        $this->assertEquals("tvaDestNom", $obj->getTvaDestNom());
    }

    /**
     * Tests setTvaE4Dbs()
     *
     * @return void
     */
    public function testSetTvaE4Dbs(): void {

        $obj = new Dossier4();

        $obj->setTvaE4Dbs("tvaE4Dbs");
        $this->assertEquals("tvaE4Dbs", $obj->getTvaE4Dbs());
    }

    /**
     * Tests setTvaE4Di()
     *
     * @return void
     */
    public function testSetTvaE4Di(): void {

        $obj = new Dossier4();

        $obj->setTvaE4Di("tvaE4Di");
        $this->assertEquals("tvaE4Di", $obj->getTvaE4Di());
    }

    /**
     * Tests setTvaE4RJrnOd()
     *
     * @return void
     */
    public function testSetTvaE4RJrnOd(): void {

        $obj = new Dossier4();

        $obj->setTvaE4RJrnOd("tvaE4RJrnOd");
        $this->assertEquals("tvaE4RJrnOd", $obj->getTvaE4RJrnOd());
    }

    /**
     * Tests setTvaE4Rbs()
     *
     * @return void
     */
    public function testSetTvaE4Rbs(): void {

        $obj = new Dossier4();

        $obj->setTvaE4Rbs("tvaE4Rbs");
        $this->assertEquals("tvaE4Rbs", $obj->getTvaE4Rbs());
    }

    /**
     * Tests setTvaE4Ri()
     *
     * @return void
     */
    public function testSetTvaE4Ri(): void {

        $obj = new Dossier4();

        $obj->setTvaE4Ri("tvaE4Ri");
        $this->assertEquals("tvaE4Ri", $obj->getTvaE4Ri());
    }

    /**
     * Tests setTvaEmetteurIsCab()
     *
     * @return void
     */
    public function testSetTvaEmetteurIsCab(): void {

        $obj = new Dossier4();

        $obj->setTvaEmetteurIsCab(true);
        $this->assertEquals(true, $obj->getTvaEmetteurIsCab());
    }

    /**
     * Tests setTvaEnc3DerPerRechDa()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaEnc3DerPerRechDa(): void {

        // Set a Date/time mock.
        $tvaEnc3DerPerRechDa = new DateTime("2018-09-10");

        $obj = new Dossier4();

        $obj->setTvaEnc3DerPerRechDa($tvaEnc3DerPerRechDa);
        $this->assertSame($tvaEnc3DerPerRechDa, $obj->getTvaEnc3DerPerRechDa());
    }

    /**
     * Tests setTvaEnvoyerMail()
     *
     * @return void
     */
    public function testSetTvaEnvoyerMail(): void {

        $obj = new Dossier4();

        $obj->setTvaEnvoyerMail(true);
        $this->assertEquals(true, $obj->getTvaEnvoyerMail());
    }

    /**
     * Tests setTvaEtabBtq()
     *
     * @return void
     */
    public function testSetTvaEtabBtq(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabBtq("tvaEtabBtq");
        $this->assertEquals("tvaEtabBtq", $obj->getTvaEtabBtq());
    }

    /**
     * Tests setTvaEtabBureauDistributeur()
     *
     * @return void
     */
    public function testSetTvaEtabBureauDistributeur(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabBureauDistributeur("tvaEtabBureauDistributeur");
        $this->assertEquals("tvaEtabBureauDistributeur", $obj->getTvaEtabBureauDistributeur());
    }

    /**
     * Tests setTvaEtabCodePostal()
     *
     * @return void
     */
    public function testSetTvaEtabCodePostal(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabCodePostal("tvaEtabCodePostal");
        $this->assertEquals("tvaEtabCodePostal", $obj->getTvaEtabCodePostal());
    }

    /**
     * Tests setTvaEtabComplement()
     *
     * @return void
     */
    public function testSetTvaEtabComplement(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabComplement("tvaEtabComplement");
        $this->assertEquals("tvaEtabComplement", $obj->getTvaEtabComplement());
    }

    /**
     * Tests setTvaEtabNom()
     *
     * @return void
     */
    public function testSetTvaEtabNom(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabNom("tvaEtabNom");
        $this->assertEquals("tvaEtabNom", $obj->getTvaEtabNom());
    }

    /**
     * Tests setTvaEtabNomVoie()
     *
     * @return void
     */
    public function testSetTvaEtabNomVoie(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabNomVoie("tvaEtabNomVoie");
        $this->assertEquals("tvaEtabNomVoie", $obj->getTvaEtabNomVoie());
    }

    /**
     * Tests setTvaEtabNumVoie()
     *
     * @return void
     */
    public function testSetTvaEtabNumVoie(): void {

        $obj = new Dossier4();

        $obj->setTvaEtabNumVoie("tvaEtabNumVoie");
        $this->assertEquals("tvaEtabNumVoie", $obj->getTvaEtabNumVoie());
    }

    /**
     * Tests setTvaExpNom()
     *
     * @return void
     */
    public function testSetTvaExpNom(): void {

        $obj = new Dossier4();

        $obj->setTvaExpNom("tvaExpNom");
        $this->assertEquals("tvaExpNom", $obj->getTvaExpNom());
    }

    /**
     * Tests setTvaJourDecla()
     *
     * @return void
     */
    public function testSetTvaJourDecla(): void {

        $obj = new Dossier4();

        $obj->setTvaJourDecla("tvaJourDecla");
        $this->assertEquals("tvaJourDecla", $obj->getTvaJourDecla());
    }

    /**
     * Tests setTvaMailPj()
     *
     * @return void
     */
    public function testSetTvaMailPj(): void {

        $obj = new Dossier4();

        $obj->setTvaMailPj(true);
        $this->assertEquals(true, $obj->getTvaMailPj());
    }

    /**
     * Tests setTvaMethode()
     *
     * @return void
     */
    public function testSetTvaMethode(): void {

        $obj = new Dossier4();

        $obj->setTvaMethode("tvaMethode");
        $this->assertEquals("tvaMethode", $obj->getTvaMethode());
    }

    /**
     * Tests setTvaMoyenPaiement()
     *
     * @return void
     */
    public function testSetTvaMoyenPaiement(): void {

        $obj = new Dossier4();

        $obj->setTvaMoyenPaiement(10);
        $this->assertEquals(10, $obj->getTvaMoyenPaiement());
    }

    /**
     * Tests setTvaNomVir()
     *
     * @return void
     */
    public function testSetTvaNomVir(): void {

        $obj = new Dossier4();

        $obj->setTvaNomVir("tvaNomVir");
        $this->assertEquals("tvaNomVir", $obj->getTvaNomVir());
    }

    /**
     * Tests setTvaParametrageOk()
     *
     * @return void
     */
    public function testSetTvaParametrageOk(): void {

        $obj = new Dossier4();

        $obj->setTvaParametrageOk(true);
        $this->assertEquals(true, $obj->getTvaParametrageOk());
    }

    /**
     * Tests setTvaPeriodicite()
     *
     * @return void
     */
    public function testSetTvaPeriodicite(): void {

        $obj = new Dossier4();

        $obj->setTvaPeriodicite("tvaPeriodicite");
        $this->assertEquals("tvaPeriodicite", $obj->getTvaPeriodicite());
    }

    /**
     * Tests setTvaPrefixeIntracom()
     *
     * @return void
     */
    public function testSetTvaPrefixeIntracom(): void {

        $obj = new Dossier4();

        $obj->setTvaPrefixeIntracom("tvaPrefixeIntracom");
        $this->assertEquals("tvaPrefixeIntracom", $obj->getTvaPrefixeIntracom());
    }

    /**
     * Tests setTvaRecepteurJeDeclare()
     *
     * @return void
     */
    public function testSetTvaRecepteurJeDeclare(): void {

        $obj = new Dossier4();

        $obj->setTvaRecepteurJeDeclare(true);
        $this->assertEquals(true, $obj->getTvaRecepteurJeDeclare());
    }

    /**
     * Tests setTvaRegime()
     *
     * @return void
     */
    public function testSetTvaRegime(): void {

        $obj = new Dossier4();

        $obj->setTvaRegime("tvaRegime");
        $this->assertEquals("tvaRegime", $obj->getTvaRegime());
    }

    /**
     * Tests setTvaSignataire()
     *
     * @return void
     */
    public function testSetTvaSignataire(): void {

        $obj = new Dossier4();

        $obj->setTvaSignataire("tvaSignataire");
        $this->assertEquals("tvaSignataire", $obj->getTvaSignataire());
    }

    /**
     * Tests setTvaType()
     *
     * @return void
     */
    public function testSetTvaType(): void {

        $obj = new Dossier4();

        $obj->setTvaType("tvaType");
        $this->assertEquals("tvaType", $obj->getTvaType());
    }

    /**
     * Tests setTvaVireCrlf()
     *
     * @return void
     */
    public function testSetTvaVireCrlf(): void {

        $obj = new Dossier4();

        $obj->setTvaVireCrlf(true);
        $this->assertEquals(true, $obj->getTvaVireCrlf());
    }

    /**
     * Tests setTvabicVir()
     *
     * @return void
     */
    public function testSetTvabicVir(): void {

        $obj = new Dossier4();

        $obj->setTvabicVir("tvabicVir");
        $this->assertEquals("tvabicVir", $obj->getTvabicVir());
    }

    /**
     * Tests setTvaediEdition()
     *
     * @return void
     */
    public function testSetTvaediEdition(): void {

        $obj = new Dossier4();

        $obj->setTvaediEdition(true);
        $this->assertEquals(true, $obj->getTvaediEdition());
    }

    /**
     * Tests setTvaibanVir()
     *
     * @return void
     */
    public function testSetTvaibanVir(): void {

        $obj = new Dossier4();

        $obj->setTvaibanVir("tvaibanVir");
        $this->assertEquals("tvaibanVir", $obj->getTvaibanVir());
    }

    /**
     * Tests setTvaribVir()
     *
     * @return void
     */
    public function testSetTvaribVir(): void {

        $obj = new Dossier4();

        $obj->setTvaribVir("tvaribVir");
        $this->assertEquals("tvaribVir", $obj->getTvaribVir());
    }

    /**
     * Tests setTvatlraBic1()
     *
     * @return void
     */
    public function testSetTvatlraBic1(): void {

        $obj = new Dossier4();

        $obj->setTvatlraBic1("tvatlraBic1");
        $this->assertEquals("tvatlraBic1", $obj->getTvatlraBic1());
    }

    /**
     * Tests setTvatlraBic2()
     *
     * @return void
     */
    public function testSetTvatlraBic2(): void {

        $obj = new Dossier4();

        $obj->setTvatlraBic2("tvatlraBic2");
        $this->assertEquals("tvatlraBic2", $obj->getTvatlraBic2());
    }

    /**
     * Tests setTvatlraBic3()
     *
     * @return void
     */
    public function testSetTvatlraBic3(): void {

        $obj = new Dossier4();

        $obj->setTvatlraBic3("tvatlraBic3");
        $this->assertEquals("tvatlraBic3", $obj->getTvatlraBic3());
    }

    /**
     * Tests setTvatlraIban1()
     *
     * @return void
     */
    public function testSetTvatlraIban1(): void {

        $obj = new Dossier4();

        $obj->setTvatlraIban1("tvatlraIban1");
        $this->assertEquals("tvatlraIban1", $obj->getTvatlraIban1());
    }

    /**
     * Tests setTvatlraIban2()
     *
     * @return void
     */
    public function testSetTvatlraIban2(): void {

        $obj = new Dossier4();

        $obj->setTvatlraIban2("tvatlraIban2");
        $this->assertEquals("tvatlraIban2", $obj->getTvatlraIban2());
    }

    /**
     * Tests setTvatlraIban3()
     *
     * @return void
     */
    public function testSetTvatlraIban3(): void {

        $obj = new Dossier4();

        $obj->setTvatlraIban3("tvatlraIban3");
        $this->assertEquals("tvatlraIban3", $obj->getTvatlraIban3());
    }

    /**
     * Tests setTvatlraRib1()
     *
     * @return void
     */
    public function testSetTvatlraRib1(): void {

        $obj = new Dossier4();

        $obj->setTvatlraRib1("tvatlraRib1");
        $this->assertEquals("tvatlraRib1", $obj->getTvatlraRib1());
    }

    /**
     * Tests setTvatlraRib2()
     *
     * @return void
     */
    public function testSetTvatlraRib2(): void {

        $obj = new Dossier4();

        $obj->setTvatlraRib2("tvatlraRib2");
        $this->assertEquals("tvatlraRib2", $obj->getTvatlraRib2());
    }

    /**
     * Tests setTvatlraRib3()
     *
     * @return void
     */
    public function testSetTvatlraRib3(): void {

        $obj = new Dossier4();

        $obj->setTvatlraRib3("tvatlraRib3");
        $this->assertEquals("tvatlraRib3", $obj->getTvatlraRib3());
    }

    /**
     * Tests setVmpCodeJrnPmv()
     *
     * @return void
     */
    public function testSetVmpCodeJrnPmv(): void {

        $obj = new Dossier4();

        $obj->setVmpCodeJrnPmv("vmpCodeJrnPmv");
        $this->assertEquals("vmpCodeJrnPmv", $obj->getVmpCodeJrnPmv());
    }

    /**
     * Tests setVmpCptMoinsValue()
     *
     * @return void
     */
    public function testSetVmpCptMoinsValue(): void {

        $obj = new Dossier4();

        $obj->setVmpCptMoinsValue("vmpCptMoinsValue");
        $this->assertEquals("vmpCptMoinsValue", $obj->getVmpCptMoinsValue());
    }

    /**
     * Tests setVmpCptPlusValue()
     *
     * @return void
     */
    public function testSetVmpCptPlusValue(): void {

        $obj = new Dossier4();

        $obj->setVmpCptPlusValue("vmpCptPlusValue");
        $this->assertEquals("vmpCptPlusValue", $obj->getVmpCptPlusValue());
    }

    /**
     * Tests setVmpGestEcrPmv()
     *
     * @return void
     */
    public function testSetVmpGestEcrPmv(): void {

        $obj = new Dossier4();

        $obj->setVmpGestEcrPmv(10);
        $this->assertEquals(10, $obj->getVmpGestEcrPmv());
    }

    /**
     * Tests setVmpGestionEnSaisie()
     *
     * @return void
     */
    public function testSetVmpGestionEnSaisie(): void {

        $obj = new Dossier4();

        $obj->setVmpGestionEnSaisie(true);
        $this->assertEquals(true, $obj->getVmpGestionEnSaisie());
    }

    /**
     * Tests setYaRepriseCice()
     *
     * @return void
     */
    public function testSetYaRepriseCice(): void {

        $obj = new Dossier4();

        $obj->setYaRepriseCice(true);
        $this->assertEquals(true, $obj->getYaRepriseCice());
    }

    /**
     * Tests setYaTauxReduit()
     *
     * @return void
     */
    public function testSetYaTauxReduit(): void {

        $obj = new Dossier4();

        $obj->setYaTauxReduit(true);
        $this->assertEquals(true, $obj->getYaTauxReduit());
    }

    /**
     * Tests setbCa12T()
     *
     * @return void
     */
    public function testSetbCa12T(): void {

        $obj = new Dossier4();

        $obj->setbCa12T(true);
        $this->assertEquals(true, $obj->getbCa12T());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Dossier4();

        $this->assertNull($obj->getAcompte1());
        $this->assertNull($obj->getAcompte2());
        $this->assertNull($obj->getAcompte3());
        $this->assertNull($obj->getAcompte4());
        $this->assertNull($obj->getArchImp3519Tva());
        $this->assertNull($obj->getArchiveDeclTva());
        $this->assertNull($obj->getBalAgeeNbJoursInt1());
        $this->assertNull($obj->getBalAgeeNbJoursInt2());
        $this->assertNull($obj->getBalAgeeNbJoursInt3());
        $this->assertNull($obj->getBalAgeeNbJoursInt4());
        $this->assertNull($obj->getBase15pcent());
        $this->assertNull($obj->getBase33pcent());
        $this->assertNull($obj->getBaseTNpcent());
        $this->assertNull($obj->getCategoriePme());
        $this->assertNull($obj->getCdiBtq());
        $this->assertNull($obj->getCdiBureauDistributeur());
        $this->assertNull($obj->getCdiCodeOfficielCommune());
        $this->assertNull($obj->getCdiCodePostal());
        $this->assertNull($obj->getCdiComplement());
        $this->assertNull($obj->getCdiNom());
        $this->assertNull($obj->getCdiNomVille());
        $this->assertNull($obj->getCdiNomVoie());
        $this->assertNull($obj->getCdiNumVoie());
        $this->assertNull($obj->getCdiTel1());
        $this->assertNull($obj->getDatePlafondInterets());
        $this->assertNull($obj->getDatePlafondInterets2());
        $this->assertNull($obj->getDateTransfLotCvae());
        $this->assertNull($obj->getDateTransfLotIs());
        $this->assertNull($obj->getDateTransfertInterets());
        $this->assertNull($obj->getDateTransfertInterets2());
        $this->assertNull($obj->getDecTvaTypeReglement());
        $this->assertNull($obj->getDecalageQuinzaine());
        $this->assertNull($obj->getDeclReferencePaiement());
        $this->assertNull($obj->getDeclTvaCdi());
        $this->assertNull($obj->getDeclTvaInsp());
        $this->assertNull($obj->getDeclTvaRegime());
        $this->assertNull($obj->getFtiscice());
        $this->assertNull($obj->getFtisContribMtt());
        $this->assertNull($obj->getFtisCreditImpot());
        $this->assertNull($obj->getFtisDeficitsReportables());
        $this->assertNull($obj->getFtisNumCpt1());
        $this->assertNull($obj->getFtisNumCpt2());
        $this->assertNull($obj->getImmoRealloc());
        $this->assertNull($obj->getInteretBase());
        $this->assertNull($obj->getInteretsCap());
        $this->assertNull($obj->getInteretsCap2());
        $this->assertNull($obj->getInteretsContrepartie());
        $this->assertNull($obj->getInteretsContrepartie2());
        $this->assertNull($obj->getInteretsContrepartieDeduc());
        $this->assertNull($obj->getInteretsContrepartieDeduc2());
        $this->assertNull($obj->getInteretsPca());
        $this->assertNull($obj->getInteretsPca2());
        $this->assertNull($obj->getNoLotCvae());
        $this->assertNull($obj->getNoLotCptRecip());
        $this->assertNull($obj->getNoLotCreditIs());
        $this->assertNull($obj->getNoLotIs());
        $this->assertNull($obj->getNoLotInterets());
        $this->assertNull($obj->getNoLotInterets2());
        $this->assertNull($obj->getNoLotPaiementIs());
        $this->assertNull($obj->getPeriodeTransfertStock());
        $this->assertNull($obj->getPrecedentNumLotStock());
        $this->assertNull($obj->getRegimeAgricole());
        $this->assertNull($obj->getResultatNetCpt());
        $this->assertNull($obj->getRofTva());
        $this->assertNull($obj->getTvabicVir());
        $this->assertNull($obj->getTvaClotureFaite());
        $this->assertNull($obj->getTvaCodeCabinet());
        $this->assertNull($obj->getTvaCodeIntEmetteur());
        $this->assertNull($obj->getTvaCodeIntRecepteur());
        $this->assertNull($obj->getTvaCptDifference());
        $this->assertNull($obj->getTvaDeb3JrnExclure());
        $this->assertNull($obj->getTvaDestAttn());
        $this->assertNull($obj->getTvaDestFax());
        $this->assertNull($obj->getTvaDestNom());
        $this->assertNull($obj->getTvaediEdition());
        $this->assertNull($obj->getTvaEmetteurIsCab());
        $this->assertNull($obj->getTvaEnvoyerMail());
        $this->assertNull($obj->getTvaEtabBtq());
        $this->assertNull($obj->getTvaEtabBureauDistributeur());
        $this->assertNull($obj->getTvaEtabCodePostal());
        $this->assertNull($obj->getTvaEtabComplement());
        $this->assertNull($obj->getTvaEtabNom());
        $this->assertNull($obj->getTvaEtabNomVoie());
        $this->assertNull($obj->getTvaEtabNumVoie());
        $this->assertNull($obj->getTvaExpNom());
        $this->assertNull($obj->getTvaibanVir());
        $this->assertNull($obj->getTvaMailPj());
        $this->assertNull($obj->getTvaMoyenPaiement());
        $this->assertNull($obj->getTvaNomVir());
        $this->assertNull($obj->getTvaribVir());
        $this->assertNull($obj->getTvaRecepteurJeDeclare());
        $this->assertNull($obj->getTvaSignataire());
        $this->assertNull($obj->getTvatlraBic1());
        $this->assertNull($obj->getTvatlraBic2());
        $this->assertNull($obj->getTvatlraBic3());
        $this->assertNull($obj->getTvatlraIban1());
        $this->assertNull($obj->getTvatlraIban2());
        $this->assertNull($obj->getTvatlraIban3());
        $this->assertNull($obj->getTvatlraRib1());
        $this->assertNull($obj->getTvatlraRib2());
        $this->assertNull($obj->getTvatlraRib3());
        $this->assertNull($obj->getTvaVireCrlf());
        $this->assertNull($obj->getTauxPlafondInterets());
        $this->assertNull($obj->getTauxPlafondInterets2());
        $this->assertNull($obj->getTvaAchatsEnc());
        $this->assertNull($obj->getTvaCa12Ae());
        $this->assertNull($obj->getTvaCadtm());
        $this->assertNull($obj->getTvaCascade());
        $this->assertNull($obj->getTvaCodeJournalBq());
        $this->assertNull($obj->getTvaCodeJournalOd());
        $this->assertNull($obj->getTvaCptAAjouter());
        $this->assertNull($obj->getTvaCptAAjouterG());
        $this->assertNull($obj->getTvaCptADeduire());
        $this->assertNull($obj->getTvaCptAImputer());
        $this->assertNull($obj->getTvaCptAImputerG());
        $this->assertNull($obj->getTvaCptAPayer());
        $this->assertNull($obj->getTvaCptAPayerG());
        $this->assertNull($obj->getTvaCptAcqIntraCom());
        $this->assertNull($obj->getTvaCptAncTaux());
        $this->assertNull($obj->getTvaCptAnteDeduit());
        $this->assertNull($obj->getTvaCptAssimil3310());
        $this->assertNull($obj->getTvaCptAssimil3310G());
        $this->assertNull($obj->getTvaCptBiens());
        $this->assertNull($obj->getTvaCptBiensIntraCom());
        $this->assertNull($obj->getTvaCptDom());
        $this->assertNull($obj->getTvaCptGroupe());
        $this->assertNull($obj->getTvaCptImmos());
        $this->assertNull($obj->getTvaCptImmosIntraCom());
        $this->assertNull($obj->getTvaCptRegul());
        $this->assertNull($obj->getTvaCptRembours());
        $this->assertNull($obj->getTvaCptRemboursG());
        $this->assertNull($obj->getTvaCptReport());
        $this->assertNull($obj->getTvaCptReportG());
        $this->assertNull($obj->getTvaCptTauxPart());
        $this->assertNull($obj->getTvaCptVente());
        $this->assertNull($obj->getTvaE4Dbs());
        $this->assertNull($obj->getTvaE4Di());
        $this->assertNull($obj->getTvaE4Rbs());
        $this->assertNull($obj->getTvaE4Ri());
        $this->assertNull($obj->getTvaE4RJrnOd());
        $this->assertNull($obj->getTvaEnc3DerPerRechDa());
        $this->assertNull($obj->getTvaJourDecla());
        $this->assertNull($obj->getTvaMethode());
        $this->assertNull($obj->getTvaParametrageOk());
        $this->assertNull($obj->getTvaPeriodicite());
        $this->assertNull($obj->getTvaPrefixeIntracom());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTvaType());
        $this->assertNull($obj->getVmpCodeJrnPmv());
        $this->assertNull($obj->getVmpCptMoinsValue());
        $this->assertNull($obj->getVmpCptPlusValue());
        $this->assertNull($obj->getVmpGestEcrPmv());
        $this->assertNull($obj->getVmpGestionEnSaisie());
        $this->assertNull($obj->getYaRepriseCice());
        $this->assertNull($obj->getYaTauxReduit());
        $this->assertNull($obj->getbCa12T());
    }
}
