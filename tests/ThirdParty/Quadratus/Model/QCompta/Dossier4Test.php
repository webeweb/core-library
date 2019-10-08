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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier4;

/**
 * Dossier4 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier4Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier4();

        $this->assertNull($obj->getAcompte1());
        $this->assertNull($obj->getAcompte2());
        $this->assertNull($obj->getAcompte3());
        $this->assertNull($obj->getAcompte4());
        $this->assertNull($obj->getArchImp3519TVA());
        $this->assertNull($obj->getArchiveDeclTVA());
        $this->assertNull($obj->getBalAgeeNbJoursInt1());
        $this->assertNull($obj->getBalAgeeNbJoursInt2());
        $this->assertNull($obj->getBalAgeeNbJoursInt3());
        $this->assertNull($obj->getBalAgeeNbJoursInt4());
        $this->assertNull($obj->getBase15pcent());
        $this->assertNull($obj->getBase33pcent());
        $this->assertNull($obj->getBaseTNpcent());
        $this->assertNull($obj->getCategoriePME());
        $this->assertNull($obj->getCdiBTQ());
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
        $this->assertNull($obj->getDateTransfLotCVAE());
        $this->assertNull($obj->getDateTransfLotIS());
        $this->assertNull($obj->getDateTransfertInterets());
        $this->assertNull($obj->getDateTransfertInterets2());
        $this->assertNull($obj->getDecTvaTypeReglement());
        $this->assertNull($obj->getDecalageQuinzaine());
        $this->assertNull($obj->getDeclReferencePaiement());
        $this->assertNull($obj->getDeclTvaCdi());
        $this->assertNull($obj->getDeclTvaInsp());
        $this->assertNull($obj->getDeclTvaRegime());
        $this->assertNull($obj->getFTISCICE());
        $this->assertNull($obj->getFTISContribMtt());
        $this->assertNull($obj->getFTISCreditImpot());
        $this->assertNull($obj->getFTISDeficitsReportables());
        $this->assertNull($obj->getFTISNumCpt1());
        $this->assertNull($obj->getFTISNumCpt2());
        $this->assertNull($obj->getImmoRealloc());
        $this->assertNull($obj->getInteretBase());
        $this->assertNull($obj->getInteretsCAP());
        $this->assertNull($obj->getInteretsCAP2());
        $this->assertNull($obj->getInteretsContrepartie());
        $this->assertNull($obj->getInteretsContrepartie2());
        $this->assertNull($obj->getInteretsContrepartieDeduc());
        $this->assertNull($obj->getInteretsContrepartieDeduc2());
        $this->assertNull($obj->getInteretsPCA());
        $this->assertNull($obj->getInteretsPCA2());
        $this->assertNull($obj->getNoLotCVAE());
        $this->assertNull($obj->getNoLotCptRecip());
        $this->assertNull($obj->getNoLotCreditIS());
        $this->assertNull($obj->getNoLotIS());
        $this->assertNull($obj->getNoLotInterets());
        $this->assertNull($obj->getNoLotInterets2());
        $this->assertNull($obj->getNoLotPaiementIS());
        $this->assertNull($obj->getPeriodeTransfertStock());
        $this->assertNull($obj->getPrecedentNumLotStock());
        $this->assertNull($obj->getRegimeAgricole());
        $this->assertNull($obj->getResultatNetCpt());
        $this->assertNull($obj->getRofTVA());
        $this->assertNull($obj->getTVABICVir());
        $this->assertNull($obj->getTVAClotureFaite());
        $this->assertNull($obj->getTVACodeCabinet());
        $this->assertNull($obj->getTVACodeIntEmetteur());
        $this->assertNull($obj->getTVACodeIntRecepteur());
        $this->assertNull($obj->getTVACptDifference());
        $this->assertNull($obj->getTVADeb3JrnExclure());
        $this->assertNull($obj->getTVADestAttn());
        $this->assertNull($obj->getTVADestFax());
        $this->assertNull($obj->getTVADestNom());
        $this->assertNull($obj->getTVAEDIEdition());
        $this->assertNull($obj->getTVAEmetteurIsCab());
        $this->assertNull($obj->getTVAEnvoyerMail());
        $this->assertNull($obj->getTVAEtab_BTQ());
        $this->assertNull($obj->getTVAEtab_BureauDistributeur());
        $this->assertNull($obj->getTVAEtab_CodePostal());
        $this->assertNull($obj->getTVAEtab_Complement());
        $this->assertNull($obj->getTVAEtab_Nom());
        $this->assertNull($obj->getTVAEtab_NomVoie());
        $this->assertNull($obj->getTVAEtab_NumVoie());
        $this->assertNull($obj->getTVAExpNom());
        $this->assertNull($obj->getTVAIBANVir());
        $this->assertNull($obj->getTVAMailPJ());
        $this->assertNull($obj->getTVAMoyenPaiement());
        $this->assertNull($obj->getTVANomVir());
        $this->assertNull($obj->getTVARIBVir());
        $this->assertNull($obj->getTVARecepteurJeDeclare());
        $this->assertNull($obj->getTVASignataire());
        $this->assertNull($obj->getTVATLRABic1());
        $this->assertNull($obj->getTVATLRABic2());
        $this->assertNull($obj->getTVATLRABic3());
        $this->assertNull($obj->getTVATLRAIban1());
        $this->assertNull($obj->getTVATLRAIban2());
        $this->assertNull($obj->getTVATLRAIban3());
        $this->assertNull($obj->getTVATLRARib1());
        $this->assertNull($obj->getTVATLRARib2());
        $this->assertNull($obj->getTVATLRARib3());
        $this->assertNull($obj->getTVAVireCRLF());
        $this->assertNull($obj->getTauxPlafondInterets());
        $this->assertNull($obj->getTauxPlafondInterets2());
        $this->assertNull($obj->getTvaAchatsEnc());
        $this->assertNull($obj->getTvaCA12AE());
        $this->assertNull($obj->getTvaCADTM());
        $this->assertNull($obj->getTvaCascade());
        $this->assertNull($obj->getTvaCodeJournalBQ());
        $this->assertNull($obj->getTvaCodeJournalOD());
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
        $this->assertNull($obj->getTvaCptDOM());
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
        $this->assertNull($obj->getTvaE4DBS());
        $this->assertNull($obj->getTvaE4DI());
        $this->assertNull($obj->getTvaE4RBS());
        $this->assertNull($obj->getTvaE4RI());
        $this->assertNull($obj->getTvaE4RJrnOD());
        $this->assertNull($obj->getTvaEnc3DerPerRechDA());
        $this->assertNull($obj->getTvaJourDecla());
        $this->assertNull($obj->getTvaMethode());
        $this->assertNull($obj->getTvaParametrageOk());
        $this->assertNull($obj->getTvaPeriodicite());
        $this->assertNull($obj->getTvaPrefixeIntracom());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTvaType());
        $this->assertNull($obj->getVMPCodeJrnPMV());
        $this->assertNull($obj->getVMPCptMoinsValue());
        $this->assertNull($obj->getVMPCptPlusValue());
        $this->assertNull($obj->getVMPGestEcrPMV());
        $this->assertNull($obj->getVMPGestionEnSaisie());
        $this->assertNull($obj->getYaRepriseCICE());
        $this->assertNull($obj->getYaTauxReduit());
        $this->assertNull($obj->getbCa12T());
    }

    /**
     * Tests the setAcompte1() method.
     *
     * @return void
     */
    public function testSetAcompte1() {

        $obj = new Dossier4();

        $obj->setAcompte1(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte1());
    }

    /**
     * Tests the setAcompte2() method.
     *
     * @return void
     */
    public function testSetAcompte2() {

        $obj = new Dossier4();

        $obj->setAcompte2(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte2());
    }

    /**
     * Tests the setAcompte3() method.
     *
     * @return void
     */
    public function testSetAcompte3() {

        $obj = new Dossier4();

        $obj->setAcompte3(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte3());
    }

    /**
     * Tests the setAcompte4() method.
     *
     * @return void
     */
    public function testSetAcompte4() {

        $obj = new Dossier4();

        $obj->setAcompte4(10.092018);
        $this->assertEquals(10.092018, $obj->getAcompte4());
    }

    /**
     * Tests the setArchImp3519TVA() method.
     *
     * @return void
     */
    public function testSetArchImp3519TVA() {

        $obj = new Dossier4();

        $obj->setArchImp3519TVA(true);
        $this->assertEquals(true, $obj->getArchImp3519TVA());
    }

    /**
     * Tests the setArchiveDeclTVA() method.
     *
     * @return void
     */
    public function testSetArchiveDeclTVA() {

        $obj = new Dossier4();

        $obj->setArchiveDeclTVA(10);
        $this->assertEquals(10, $obj->getArchiveDeclTVA());
    }

    /**
     * Tests the setBalAgeeNbJoursInt1() method.
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt1() {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt1(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt1());
    }

    /**
     * Tests the setBalAgeeNbJoursInt2() method.
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt2() {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt2(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt2());
    }

    /**
     * Tests the setBalAgeeNbJoursInt3() method.
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt3() {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt3(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt3());
    }

    /**
     * Tests the setBalAgeeNbJoursInt4() method.
     *
     * @return void
     */
    public function testSetBalAgeeNbJoursInt4() {

        $obj = new Dossier4();

        $obj->setBalAgeeNbJoursInt4(10);
        $this->assertEquals(10, $obj->getBalAgeeNbJoursInt4());
    }

    /**
     * Tests the setBase15pcent() method.
     *
     * @return void
     */
    public function testSetBase15pcent() {

        $obj = new Dossier4();

        $obj->setBase15pcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBase15pcent());
    }

    /**
     * Tests the setBase33pcent() method.
     *
     * @return void
     */
    public function testSetBase33pcent() {

        $obj = new Dossier4();

        $obj->setBase33pcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBase33pcent());
    }

    /**
     * Tests the setBaseTNpcent() method.
     *
     * @return void
     */
    public function testSetBaseTNpcent() {

        $obj = new Dossier4();

        $obj->setBaseTNpcent(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseTNpcent());
    }

    /**
     * Tests the setCategoriePME() method.
     *
     * @return void
     */
    public function testSetCategoriePME() {

        $obj = new Dossier4();

        $obj->setCategoriePME(10);
        $this->assertEquals(10, $obj->getCategoriePME());
    }

    /**
     * Tests the setCdiBTQ() method.
     *
     * @return void
     */
    public function testSetCdiBTQ() {

        $obj = new Dossier4();

        $obj->setCdiBTQ("cdiBTQ");
        $this->assertEquals("cdiBTQ", $obj->getCdiBTQ());
    }

    /**
     * Tests the setCdiBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetCdiBureauDistributeur() {

        $obj = new Dossier4();

        $obj->setCdiBureauDistributeur("cdiBureauDistributeur");
        $this->assertEquals("cdiBureauDistributeur", $obj->getCdiBureauDistributeur());
    }

    /**
     * Tests the setCdiCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCdiCodeOfficielCommune() {

        $obj = new Dossier4();

        $obj->setCdiCodeOfficielCommune("cdiCodeOfficielCommune");
        $this->assertEquals("cdiCodeOfficielCommune", $obj->getCdiCodeOfficielCommune());
    }

    /**
     * Tests the setCdiCodePostal() method.
     *
     * @return void
     */
    public function testSetCdiCodePostal() {

        $obj = new Dossier4();

        $obj->setCdiCodePostal("cdiCodePostal");
        $this->assertEquals("cdiCodePostal", $obj->getCdiCodePostal());
    }

    /**
     * Tests the setCdiComplement() method.
     *
     * @return void
     */
    public function testSetCdiComplement() {

        $obj = new Dossier4();

        $obj->setCdiComplement("cdiComplement");
        $this->assertEquals("cdiComplement", $obj->getCdiComplement());
    }

    /**
     * Tests the setCdiNom() method.
     *
     * @return void
     */
    public function testSetCdiNom() {

        $obj = new Dossier4();

        $obj->setCdiNom("cdiNom");
        $this->assertEquals("cdiNom", $obj->getCdiNom());
    }

    /**
     * Tests the setCdiNomVille() method.
     *
     * @return void
     */
    public function testSetCdiNomVille() {

        $obj = new Dossier4();

        $obj->setCdiNomVille("cdiNomVille");
        $this->assertEquals("cdiNomVille", $obj->getCdiNomVille());
    }

    /**
     * Tests the setCdiNomVoie() method.
     *
     * @return void
     */
    public function testSetCdiNomVoie() {

        $obj = new Dossier4();

        $obj->setCdiNomVoie("cdiNomVoie");
        $this->assertEquals("cdiNomVoie", $obj->getCdiNomVoie());
    }

    /**
     * Tests the setCdiNumVoie() method.
     *
     * @return void
     */
    public function testSetCdiNumVoie() {

        $obj = new Dossier4();

        $obj->setCdiNumVoie("cdiNumVoie");
        $this->assertEquals("cdiNumVoie", $obj->getCdiNumVoie());
    }

    /**
     * Tests the setCdiTel1() method.
     *
     * @return void
     */
    public function testSetCdiTel1() {

        $obj = new Dossier4();

        $obj->setCdiTel1("cdiTel1");
        $this->assertEquals("cdiTel1", $obj->getCdiTel1());
    }

    /**
     * Tests the setDatePlafondInterets() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePlafondInterets() {

        $obj = new Dossier4();

        $obj->setDatePlafondInterets(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePlafondInterets());
    }

    /**
     * Tests the setDatePlafondInterets2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePlafondInterets2() {

        $obj = new Dossier4();

        $obj->setDatePlafondInterets2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePlafondInterets2());
    }

    /**
     * Tests the setDateTransfLotCVAE() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfLotCVAE() {

        $obj = new Dossier4();

        $obj->setDateTransfLotCVAE(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfLotCVAE());
    }

    /**
     * Tests the setDateTransfLotIS() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfLotIS() {

        $obj = new Dossier4();

        $obj->setDateTransfLotIS(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfLotIS());
    }

    /**
     * Tests the setDateTransfertInterets() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertInterets() {

        $obj = new Dossier4();

        $obj->setDateTransfertInterets(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfertInterets());
    }

    /**
     * Tests the setDateTransfertInterets2() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfertInterets2() {

        $obj = new Dossier4();

        $obj->setDateTransfertInterets2(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfertInterets2());
    }

    /**
     * Tests the setDecTvaTypeReglement() method.
     *
     * @return void
     */
    public function testSetDecTvaTypeReglement() {

        $obj = new Dossier4();

        $obj->setDecTvaTypeReglement(10);
        $this->assertEquals(10, $obj->getDecTvaTypeReglement());
    }

    /**
     * Tests the setDecalageQuinzaine() method.
     *
     * @return void
     */
    public function testSetDecalageQuinzaine() {

        $obj = new Dossier4();

        $obj->setDecalageQuinzaine(true);
        $this->assertEquals(true, $obj->getDecalageQuinzaine());
    }

    /**
     * Tests the setDeclReferencePaiement() method.
     *
     * @return void
     */
    public function testSetDeclReferencePaiement() {

        $obj = new Dossier4();

        $obj->setDeclReferencePaiement("declReferencePaiement");
        $this->assertEquals("declReferencePaiement", $obj->getDeclReferencePaiement());
    }

    /**
     * Tests the setDeclTvaCdi() method.
     *
     * @return void
     */
    public function testSetDeclTvaCdi() {

        $obj = new Dossier4();

        $obj->setDeclTvaCdi("declTvaCdi");
        $this->assertEquals("declTvaCdi", $obj->getDeclTvaCdi());
    }

    /**
     * Tests the setDeclTvaInsp() method.
     *
     * @return void
     */
    public function testSetDeclTvaInsp() {

        $obj = new Dossier4();

        $obj->setDeclTvaInsp("declTvaInsp");
        $this->assertEquals("declTvaInsp", $obj->getDeclTvaInsp());
    }

    /**
     * Tests the setDeclTvaRegime() method.
     *
     * @return void
     */
    public function testSetDeclTvaRegime() {

        $obj = new Dossier4();

        $obj->setDeclTvaRegime("declTvaRegime");
        $this->assertEquals("declTvaRegime", $obj->getDeclTvaRegime());
    }

    /**
     * Tests the setFTISCICE() method.
     *
     * @return void
     */
    public function testSetFTISCICE() {

        $obj = new Dossier4();

        $obj->setFTISCICE(10.092018);
        $this->assertEquals(10.092018, $obj->getFTISCICE());
    }

    /**
     * Tests the setFTISContribMtt() method.
     *
     * @return void
     */
    public function testSetFTISContribMtt() {

        $obj = new Dossier4();

        $obj->setFTISContribMtt(10.092018);
        $this->assertEquals(10.092018, $obj->getFTISContribMtt());
    }

    /**
     * Tests the setFTISCreditImpot() method.
     *
     * @return void
     */
    public function testSetFTISCreditImpot() {

        $obj = new Dossier4();

        $obj->setFTISCreditImpot(10.092018);
        $this->assertEquals(10.092018, $obj->getFTISCreditImpot());
    }

    /**
     * Tests the setFTISDeficitsReportables() method.
     *
     * @return void
     */
    public function testSetFTISDeficitsReportables() {

        $obj = new Dossier4();

        $obj->setFTISDeficitsReportables(10.092018);
        $this->assertEquals(10.092018, $obj->getFTISDeficitsReportables());
    }

    /**
     * Tests the setFTISNumCpt1() method.
     *
     * @return void
     */
    public function testSetFTISNumCpt1() {

        $obj = new Dossier4();

        $obj->setFTISNumCpt1("fTISNumCpt1");
        $this->assertEquals("fTISNumCpt1", $obj->getFTISNumCpt1());
    }

    /**
     * Tests the setFTISNumCpt2() method.
     *
     * @return void
     */
    public function testSetFTISNumCpt2() {

        $obj = new Dossier4();

        $obj->setFTISNumCpt2("fTISNumCpt2");
        $this->assertEquals("fTISNumCpt2", $obj->getFTISNumCpt2());
    }

    /**
     * Tests the setImmoRealloc() method.
     *
     * @return void
     */
    public function testSetImmoRealloc() {

        $obj = new Dossier4();

        $obj->setImmoRealloc(10);
        $this->assertEquals(10, $obj->getImmoRealloc());
    }

    /**
     * Tests the setInteretBase() method.
     *
     * @return void
     */
    public function testSetInteretBase() {

        $obj = new Dossier4();

        $obj->setInteretBase(10.092018);
        $this->assertEquals(10.092018, $obj->getInteretBase());
    }

    /**
     * Tests the setInteretsCAP() method.
     *
     * @return void
     */
    public function testSetInteretsCAP() {

        $obj = new Dossier4();

        $obj->setInteretsCAP("interetsCAP");
        $this->assertEquals("interetsCAP", $obj->getInteretsCAP());
    }

    /**
     * Tests the setInteretsCAP2() method.
     *
     * @return void
     */
    public function testSetInteretsCAP2() {

        $obj = new Dossier4();

        $obj->setInteretsCAP2("interetsCAP2");
        $this->assertEquals("interetsCAP2", $obj->getInteretsCAP2());
    }

    /**
     * Tests the setInteretsContrepartie() method.
     *
     * @return void
     */
    public function testSetInteretsContrepartie() {

        $obj = new Dossier4();

        $obj->setInteretsContrepartie("interetsContrepartie");
        $this->assertEquals("interetsContrepartie", $obj->getInteretsContrepartie());
    }

    /**
     * Tests the setInteretsContrepartie2() method.
     *
     * @return void
     */
    public function testSetInteretsContrepartie2() {

        $obj = new Dossier4();

        $obj->setInteretsContrepartie2("interetsContrepartie2");
        $this->assertEquals("interetsContrepartie2", $obj->getInteretsContrepartie2());
    }

    /**
     * Tests the setInteretsContrepartieDeduc() method.
     *
     * @return void
     */
    public function testSetInteretsContrepartieDeduc() {

        $obj = new Dossier4();

        $obj->setInteretsContrepartieDeduc("interetsContrepartieDeduc");
        $this->assertEquals("interetsContrepartieDeduc", $obj->getInteretsContrepartieDeduc());
    }

    /**
     * Tests the setInteretsContrepartieDeduc2() method.
     *
     * @return void
     */
    public function testSetInteretsContrepartieDeduc2() {

        $obj = new Dossier4();

        $obj->setInteretsContrepartieDeduc2("interetsContrepartieDeduc2");
        $this->assertEquals("interetsContrepartieDeduc2", $obj->getInteretsContrepartieDeduc2());
    }

    /**
     * Tests the setInteretsPCA() method.
     *
     * @return void
     */
    public function testSetInteretsPCA() {

        $obj = new Dossier4();

        $obj->setInteretsPCA("interetsPCA");
        $this->assertEquals("interetsPCA", $obj->getInteretsPCA());
    }

    /**
     * Tests the setInteretsPCA2() method.
     *
     * @return void
     */
    public function testSetInteretsPCA2() {

        $obj = new Dossier4();

        $obj->setInteretsPCA2("interetsPCA2");
        $this->assertEquals("interetsPCA2", $obj->getInteretsPCA2());
    }

    /**
     * Tests the setNoLotCVAE() method.
     *
     * @return void
     */
    public function testSetNoLotCVAE() {

        $obj = new Dossier4();

        $obj->setNoLotCVAE(10);
        $this->assertEquals(10, $obj->getNoLotCVAE());
    }

    /**
     * Tests the setNoLotCptRecip() method.
     *
     * @return void
     */
    public function testSetNoLotCptRecip() {

        $obj = new Dossier4();

        $obj->setNoLotCptRecip(10);
        $this->assertEquals(10, $obj->getNoLotCptRecip());
    }

    /**
     * Tests the setNoLotCreditIS() method.
     *
     * @return void
     */
    public function testSetNoLotCreditIS() {

        $obj = new Dossier4();

        $obj->setNoLotCreditIS(10);
        $this->assertEquals(10, $obj->getNoLotCreditIS());
    }

    /**
     * Tests the setNoLotIS() method.
     *
     * @return void
     */
    public function testSetNoLotIS() {

        $obj = new Dossier4();

        $obj->setNoLotIS(10);
        $this->assertEquals(10, $obj->getNoLotIS());
    }

    /**
     * Tests the setNoLotInterets() method.
     *
     * @return void
     */
    public function testSetNoLotInterets() {

        $obj = new Dossier4();

        $obj->setNoLotInterets(10);
        $this->assertEquals(10, $obj->getNoLotInterets());
    }

    /**
     * Tests the setNoLotInterets2() method.
     *
     * @return void
     */
    public function testSetNoLotInterets2() {

        $obj = new Dossier4();

        $obj->setNoLotInterets2(10);
        $this->assertEquals(10, $obj->getNoLotInterets2());
    }

    /**
     * Tests the setNoLotPaiementIS() method.
     *
     * @return void
     */
    public function testSetNoLotPaiementIS() {

        $obj = new Dossier4();

        $obj->setNoLotPaiementIS(10);
        $this->assertEquals(10, $obj->getNoLotPaiementIS());
    }

    /**
     * Tests the setPeriodeTransfertStock() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriodeTransfertStock() {

        $obj = new Dossier4();

        $obj->setPeriodeTransfertStock(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriodeTransfertStock());
    }

    /**
     * Tests the setPrecedentNumLotStock() method.
     *
     * @return void
     */
    public function testSetPrecedentNumLotStock() {

        $obj = new Dossier4();

        $obj->setPrecedentNumLotStock(10);
        $this->assertEquals(10, $obj->getPrecedentNumLotStock());
    }

    /**
     * Tests the setRegimeAgricole() method.
     *
     * @return void
     */
    public function testSetRegimeAgricole() {

        $obj = new Dossier4();

        $obj->setRegimeAgricole(true);
        $this->assertEquals(true, $obj->getRegimeAgricole());
    }

    /**
     * Tests the setResultatNetCpt() method.
     *
     * @return void
     */
    public function testSetResultatNetCpt() {

        $obj = new Dossier4();

        $obj->setResultatNetCpt(10.092018);
        $this->assertEquals(10.092018, $obj->getResultatNetCpt());
    }

    /**
     * Tests the setRofTVA() method.
     *
     * @return void
     */
    public function testSetRofTVA() {

        $obj = new Dossier4();

        $obj->setRofTVA("rofTVA");
        $this->assertEquals("rofTVA", $obj->getRofTVA());
    }

    /**
     * Tests the setTVABICVir() method.
     *
     * @return void
     */
    public function testSetTVABICVir() {

        $obj = new Dossier4();

        $obj->setTVABICVir("tVABICVir");
        $this->assertEquals("tVABICVir", $obj->getTVABICVir());
    }

    /**
     * Tests the setTVAClotureFaite() method.
     *
     * @return void
     */
    public function testSetTVAClotureFaite() {

        $obj = new Dossier4();

        $obj->setTVAClotureFaite(true);
        $this->assertEquals(true, $obj->getTVAClotureFaite());
    }

    /**
     * Tests the setTVACodeCabinet() method.
     *
     * @return void
     */
    public function testSetTVACodeCabinet() {

        $obj = new Dossier4();

        $obj->setTVACodeCabinet("tVACodeCabinet");
        $this->assertEquals("tVACodeCabinet", $obj->getTVACodeCabinet());
    }

    /**
     * Tests the setTVACodeIntEmetteur() method.
     *
     * @return void
     */
    public function testSetTVACodeIntEmetteur() {

        $obj = new Dossier4();

        $obj->setTVACodeIntEmetteur("tVACodeIntEmetteur");
        $this->assertEquals("tVACodeIntEmetteur", $obj->getTVACodeIntEmetteur());
    }

    /**
     * Tests the setTVACodeIntRecepteur() method.
     *
     * @return void
     */
    public function testSetTVACodeIntRecepteur() {

        $obj = new Dossier4();

        $obj->setTVACodeIntRecepteur("tVACodeIntRecepteur");
        $this->assertEquals("tVACodeIntRecepteur", $obj->getTVACodeIntRecepteur());
    }

    /**
     * Tests the setTVACptDifference() method.
     *
     * @return void
     */
    public function testSetTVACptDifference() {

        $obj = new Dossier4();

        $obj->setTVACptDifference("tVACptDifference");
        $this->assertEquals("tVACptDifference", $obj->getTVACptDifference());
    }

    /**
     * Tests the setTVADeb3JrnExclure() method.
     *
     * @return void
     */
    public function testSetTVADeb3JrnExclure() {

        $obj = new Dossier4();

        $obj->setTVADeb3JrnExclure("tVADeb3JrnExclure");
        $this->assertEquals("tVADeb3JrnExclure", $obj->getTVADeb3JrnExclure());
    }

    /**
     * Tests the setTVADestAttn() method.
     *
     * @return void
     */
    public function testSetTVADestAttn() {

        $obj = new Dossier4();

        $obj->setTVADestAttn("tVADestAttn");
        $this->assertEquals("tVADestAttn", $obj->getTVADestAttn());
    }

    /**
     * Tests the setTVADestFax() method.
     *
     * @return void
     */
    public function testSetTVADestFax() {

        $obj = new Dossier4();

        $obj->setTVADestFax("tVADestFax");
        $this->assertEquals("tVADestFax", $obj->getTVADestFax());
    }

    /**
     * Tests the setTVADestNom() method.
     *
     * @return void
     */
    public function testSetTVADestNom() {

        $obj = new Dossier4();

        $obj->setTVADestNom("tVADestNom");
        $this->assertEquals("tVADestNom", $obj->getTVADestNom());
    }

    /**
     * Tests the setTVAEDIEdition() method.
     *
     * @return void
     */
    public function testSetTVAEDIEdition() {

        $obj = new Dossier4();

        $obj->setTVAEDIEdition(true);
        $this->assertEquals(true, $obj->getTVAEDIEdition());
    }

    /**
     * Tests the setTVAEmetteurIsCab() method.
     *
     * @return void
     */
    public function testSetTVAEmetteurIsCab() {

        $obj = new Dossier4();

        $obj->setTVAEmetteurIsCab(true);
        $this->assertEquals(true, $obj->getTVAEmetteurIsCab());
    }

    /**
     * Tests the setTVAEnvoyerMail() method.
     *
     * @return void
     */
    public function testSetTVAEnvoyerMail() {

        $obj = new Dossier4();

        $obj->setTVAEnvoyerMail(true);
        $this->assertEquals(true, $obj->getTVAEnvoyerMail());
    }

    /**
     * Tests the setTVAEtab_BTQ() method.
     *
     * @return void
     */
    public function testSetTVAEtab_BTQ() {

        $obj = new Dossier4();

        $obj->setTVAEtab_BTQ("tVAEtab_BTQ");
        $this->assertEquals("tVAEtab_BTQ", $obj->getTVAEtab_BTQ());
    }

    /**
     * Tests the setTVAEtab_BureauDistributeur() method.
     *
     * @return void
     */
    public function testSetTVAEtab_BureauDistributeur() {

        $obj = new Dossier4();

        $obj->setTVAEtab_BureauDistributeur("tVAEtab_BureauDistributeur");
        $this->assertEquals("tVAEtab_BureauDistributeur", $obj->getTVAEtab_BureauDistributeur());
    }

    /**
     * Tests the setTVAEtab_CodePostal() method.
     *
     * @return void
     */
    public function testSetTVAEtab_CodePostal() {

        $obj = new Dossier4();

        $obj->setTVAEtab_CodePostal("tVAEtab_CodePostal");
        $this->assertEquals("tVAEtab_CodePostal", $obj->getTVAEtab_CodePostal());
    }

    /**
     * Tests the setTVAEtab_Complement() method.
     *
     * @return void
     */
    public function testSetTVAEtab_Complement() {

        $obj = new Dossier4();

        $obj->setTVAEtab_Complement("tVAEtab_Complement");
        $this->assertEquals("tVAEtab_Complement", $obj->getTVAEtab_Complement());
    }

    /**
     * Tests the setTVAEtab_Nom() method.
     *
     * @return void
     */
    public function testSetTVAEtab_Nom() {

        $obj = new Dossier4();

        $obj->setTVAEtab_Nom("tVAEtab_Nom");
        $this->assertEquals("tVAEtab_Nom", $obj->getTVAEtab_Nom());
    }

    /**
     * Tests the setTVAEtab_NomVoie() method.
     *
     * @return void
     */
    public function testSetTVAEtab_NomVoie() {

        $obj = new Dossier4();

        $obj->setTVAEtab_NomVoie("tVAEtab_NomVoie");
        $this->assertEquals("tVAEtab_NomVoie", $obj->getTVAEtab_NomVoie());
    }

    /**
     * Tests the setTVAEtab_NumVoie() method.
     *
     * @return void
     */
    public function testSetTVAEtab_NumVoie() {

        $obj = new Dossier4();

        $obj->setTVAEtab_NumVoie("tVAEtab_NumVoie");
        $this->assertEquals("tVAEtab_NumVoie", $obj->getTVAEtab_NumVoie());
    }

    /**
     * Tests the setTVAExpNom() method.
     *
     * @return void
     */
    public function testSetTVAExpNom() {

        $obj = new Dossier4();

        $obj->setTVAExpNom("tVAExpNom");
        $this->assertEquals("tVAExpNom", $obj->getTVAExpNom());
    }

    /**
     * Tests the setTVAIBANVir() method.
     *
     * @return void
     */
    public function testSetTVAIBANVir() {

        $obj = new Dossier4();

        $obj->setTVAIBANVir("tVAIBANVir");
        $this->assertEquals("tVAIBANVir", $obj->getTVAIBANVir());
    }

    /**
     * Tests the setTVAMailPJ() method.
     *
     * @return void
     */
    public function testSetTVAMailPJ() {

        $obj = new Dossier4();

        $obj->setTVAMailPJ(true);
        $this->assertEquals(true, $obj->getTVAMailPJ());
    }

    /**
     * Tests the setTVAMoyenPaiement() method.
     *
     * @return void
     */
    public function testSetTVAMoyenPaiement() {

        $obj = new Dossier4();

        $obj->setTVAMoyenPaiement(10);
        $this->assertEquals(10, $obj->getTVAMoyenPaiement());
    }

    /**
     * Tests the setTVANomVir() method.
     *
     * @return void
     */
    public function testSetTVANomVir() {

        $obj = new Dossier4();

        $obj->setTVANomVir("tVANomVir");
        $this->assertEquals("tVANomVir", $obj->getTVANomVir());
    }

    /**
     * Tests the setTVARIBVir() method.
     *
     * @return void
     */
    public function testSetTVARIBVir() {

        $obj = new Dossier4();

        $obj->setTVARIBVir("tVARIBVir");
        $this->assertEquals("tVARIBVir", $obj->getTVARIBVir());
    }

    /**
     * Tests the setTVARecepteurJeDeclare() method.
     *
     * @return void
     */
    public function testSetTVARecepteurJeDeclare() {

        $obj = new Dossier4();

        $obj->setTVARecepteurJeDeclare(true);
        $this->assertEquals(true, $obj->getTVARecepteurJeDeclare());
    }

    /**
     * Tests the setTVASignataire() method.
     *
     * @return void
     */
    public function testSetTVASignataire() {

        $obj = new Dossier4();

        $obj->setTVASignataire("tVASignataire");
        $this->assertEquals("tVASignataire", $obj->getTVASignataire());
    }

    /**
     * Tests the setTVATLRABic1() method.
     *
     * @return void
     */
    public function testSetTVATLRABic1() {

        $obj = new Dossier4();

        $obj->setTVATLRABic1("tVATLRABic1");
        $this->assertEquals("tVATLRABic1", $obj->getTVATLRABic1());
    }

    /**
     * Tests the setTVATLRABic2() method.
     *
     * @return void
     */
    public function testSetTVATLRABic2() {

        $obj = new Dossier4();

        $obj->setTVATLRABic2("tVATLRABic2");
        $this->assertEquals("tVATLRABic2", $obj->getTVATLRABic2());
    }

    /**
     * Tests the setTVATLRABic3() method.
     *
     * @return void
     */
    public function testSetTVATLRABic3() {

        $obj = new Dossier4();

        $obj->setTVATLRABic3("tVATLRABic3");
        $this->assertEquals("tVATLRABic3", $obj->getTVATLRABic3());
    }

    /**
     * Tests the setTVATLRAIban1() method.
     *
     * @return void
     */
    public function testSetTVATLRAIban1() {

        $obj = new Dossier4();

        $obj->setTVATLRAIban1("tVATLRAIban1");
        $this->assertEquals("tVATLRAIban1", $obj->getTVATLRAIban1());
    }

    /**
     * Tests the setTVATLRAIban2() method.
     *
     * @return void
     */
    public function testSetTVATLRAIban2() {

        $obj = new Dossier4();

        $obj->setTVATLRAIban2("tVATLRAIban2");
        $this->assertEquals("tVATLRAIban2", $obj->getTVATLRAIban2());
    }

    /**
     * Tests the setTVATLRAIban3() method.
     *
     * @return void
     */
    public function testSetTVATLRAIban3() {

        $obj = new Dossier4();

        $obj->setTVATLRAIban3("tVATLRAIban3");
        $this->assertEquals("tVATLRAIban3", $obj->getTVATLRAIban3());
    }

    /**
     * Tests the setTVATLRARib1() method.
     *
     * @return void
     */
    public function testSetTVATLRARib1() {

        $obj = new Dossier4();

        $obj->setTVATLRARib1("tVATLRARib1");
        $this->assertEquals("tVATLRARib1", $obj->getTVATLRARib1());
    }

    /**
     * Tests the setTVATLRARib2() method.
     *
     * @return void
     */
    public function testSetTVATLRARib2() {

        $obj = new Dossier4();

        $obj->setTVATLRARib2("tVATLRARib2");
        $this->assertEquals("tVATLRARib2", $obj->getTVATLRARib2());
    }

    /**
     * Tests the setTVATLRARib3() method.
     *
     * @return void
     */
    public function testSetTVATLRARib3() {

        $obj = new Dossier4();

        $obj->setTVATLRARib3("tVATLRARib3");
        $this->assertEquals("tVATLRARib3", $obj->getTVATLRARib3());
    }

    /**
     * Tests the setTVAVireCRLF() method.
     *
     * @return void
     */
    public function testSetTVAVireCRLF() {

        $obj = new Dossier4();

        $obj->setTVAVireCRLF(true);
        $this->assertEquals(true, $obj->getTVAVireCRLF());
    }

    /**
     * Tests the setTauxPlafondInterets() method.
     *
     * @return void
     */
    public function testSetTauxPlafondInterets() {

        $obj = new Dossier4();

        $obj->setTauxPlafondInterets(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPlafondInterets());
    }

    /**
     * Tests the setTauxPlafondInterets2() method.
     *
     * @return void
     */
    public function testSetTauxPlafondInterets2() {

        $obj = new Dossier4();

        $obj->setTauxPlafondInterets2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxPlafondInterets2());
    }

    /**
     * Tests the setTvaAchatsEnc() method.
     *
     * @return void
     */
    public function testSetTvaAchatsEnc() {

        $obj = new Dossier4();

        $obj->setTvaAchatsEnc(true);
        $this->assertEquals(true, $obj->getTvaAchatsEnc());
    }

    /**
     * Tests the setTvaCA12AE() method.
     *
     * @return void
     */
    public function testSetTvaCA12AE() {

        $obj = new Dossier4();

        $obj->setTvaCA12AE("tvaCA12AE");
        $this->assertEquals("tvaCA12AE", $obj->getTvaCA12AE());
    }

    /**
     * Tests the setTvaCADTM() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaCADTM() {

        $obj = new Dossier4();

        $obj->setTvaCADTM(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTvaCADTM());
    }

    /**
     * Tests the setTvaCascade() method.
     *
     * @return void
     */
    public function testSetTvaCascade() {

        $obj = new Dossier4();

        $obj->setTvaCascade(true);
        $this->assertEquals(true, $obj->getTvaCascade());
    }

    /**
     * Tests the setTvaCodeJournalBQ() method.
     *
     * @return void
     */
    public function testSetTvaCodeJournalBQ() {

        $obj = new Dossier4();

        $obj->setTvaCodeJournalBQ("tvaCodeJournalBQ");
        $this->assertEquals("tvaCodeJournalBQ", $obj->getTvaCodeJournalBQ());
    }

    /**
     * Tests the setTvaCodeJournalOD() method.
     *
     * @return void
     */
    public function testSetTvaCodeJournalOD() {

        $obj = new Dossier4();

        $obj->setTvaCodeJournalOD("tvaCodeJournalOD");
        $this->assertEquals("tvaCodeJournalOD", $obj->getTvaCodeJournalOD());
    }

    /**
     * Tests the setTvaCptAAjouter() method.
     *
     * @return void
     */
    public function testSetTvaCptAAjouter() {

        $obj = new Dossier4();

        $obj->setTvaCptAAjouter("tvaCptAAjouter");
        $this->assertEquals("tvaCptAAjouter", $obj->getTvaCptAAjouter());
    }

    /**
     * Tests the setTvaCptAAjouterG() method.
     *
     * @return void
     */
    public function testSetTvaCptAAjouterG() {

        $obj = new Dossier4();

        $obj->setTvaCptAAjouterG("tvaCptAAjouterG");
        $this->assertEquals("tvaCptAAjouterG", $obj->getTvaCptAAjouterG());
    }

    /**
     * Tests the setTvaCptADeduire() method.
     *
     * @return void
     */
    public function testSetTvaCptADeduire() {

        $obj = new Dossier4();

        $obj->setTvaCptADeduire("tvaCptADeduire");
        $this->assertEquals("tvaCptADeduire", $obj->getTvaCptADeduire());
    }

    /**
     * Tests the setTvaCptAImputer() method.
     *
     * @return void
     */
    public function testSetTvaCptAImputer() {

        $obj = new Dossier4();

        $obj->setTvaCptAImputer("tvaCptAImputer");
        $this->assertEquals("tvaCptAImputer", $obj->getTvaCptAImputer());
    }

    /**
     * Tests the setTvaCptAImputerG() method.
     *
     * @return void
     */
    public function testSetTvaCptAImputerG() {

        $obj = new Dossier4();

        $obj->setTvaCptAImputerG("tvaCptAImputerG");
        $this->assertEquals("tvaCptAImputerG", $obj->getTvaCptAImputerG());
    }

    /**
     * Tests the setTvaCptAPayer() method.
     *
     * @return void
     */
    public function testSetTvaCptAPayer() {

        $obj = new Dossier4();

        $obj->setTvaCptAPayer("tvaCptAPayer");
        $this->assertEquals("tvaCptAPayer", $obj->getTvaCptAPayer());
    }

    /**
     * Tests the setTvaCptAPayerG() method.
     *
     * @return void
     */
    public function testSetTvaCptAPayerG() {

        $obj = new Dossier4();

        $obj->setTvaCptAPayerG("tvaCptAPayerG");
        $this->assertEquals("tvaCptAPayerG", $obj->getTvaCptAPayerG());
    }

    /**
     * Tests the setTvaCptAcqIntraCom() method.
     *
     * @return void
     */
    public function testSetTvaCptAcqIntraCom() {

        $obj = new Dossier4();

        $obj->setTvaCptAcqIntraCom("tvaCptAcqIntraCom");
        $this->assertEquals("tvaCptAcqIntraCom", $obj->getTvaCptAcqIntraCom());
    }

    /**
     * Tests the setTvaCptAncTaux() method.
     *
     * @return void
     */
    public function testSetTvaCptAncTaux() {

        $obj = new Dossier4();

        $obj->setTvaCptAncTaux("tvaCptAncTaux");
        $this->assertEquals("tvaCptAncTaux", $obj->getTvaCptAncTaux());
    }

    /**
     * Tests the setTvaCptAnteDeduit() method.
     *
     * @return void
     */
    public function testSetTvaCptAnteDeduit() {

        $obj = new Dossier4();

        $obj->setTvaCptAnteDeduit("tvaCptAnteDeduit");
        $this->assertEquals("tvaCptAnteDeduit", $obj->getTvaCptAnteDeduit());
    }

    /**
     * Tests the setTvaCptAssimil3310() method.
     *
     * @return void
     */
    public function testSetTvaCptAssimil3310() {

        $obj = new Dossier4();

        $obj->setTvaCptAssimil3310("tvaCptAssimil3310");
        $this->assertEquals("tvaCptAssimil3310", $obj->getTvaCptAssimil3310());
    }

    /**
     * Tests the setTvaCptAssimil3310G() method.
     *
     * @return void
     */
    public function testSetTvaCptAssimil3310G() {

        $obj = new Dossier4();

        $obj->setTvaCptAssimil3310G("tvaCptAssimil3310G");
        $this->assertEquals("tvaCptAssimil3310G", $obj->getTvaCptAssimil3310G());
    }

    /**
     * Tests the setTvaCptBiens() method.
     *
     * @return void
     */
    public function testSetTvaCptBiens() {

        $obj = new Dossier4();

        $obj->setTvaCptBiens("tvaCptBiens");
        $this->assertEquals("tvaCptBiens", $obj->getTvaCptBiens());
    }

    /**
     * Tests the setTvaCptBiensIntraCom() method.
     *
     * @return void
     */
    public function testSetTvaCptBiensIntraCom() {

        $obj = new Dossier4();

        $obj->setTvaCptBiensIntraCom("tvaCptBiensIntraCom");
        $this->assertEquals("tvaCptBiensIntraCom", $obj->getTvaCptBiensIntraCom());
    }

    /**
     * Tests the setTvaCptDOM() method.
     *
     * @return void
     */
    public function testSetTvaCptDOM() {

        $obj = new Dossier4();

        $obj->setTvaCptDOM("tvaCptDOM");
        $this->assertEquals("tvaCptDOM", $obj->getTvaCptDOM());
    }

    /**
     * Tests the setTvaCptGroupe() method.
     *
     * @return void
     */
    public function testSetTvaCptGroupe() {

        $obj = new Dossier4();

        $obj->setTvaCptGroupe("tvaCptGroupe");
        $this->assertEquals("tvaCptGroupe", $obj->getTvaCptGroupe());
    }

    /**
     * Tests the setTvaCptImmos() method.
     *
     * @return void
     */
    public function testSetTvaCptImmos() {

        $obj = new Dossier4();

        $obj->setTvaCptImmos("tvaCptImmos");
        $this->assertEquals("tvaCptImmos", $obj->getTvaCptImmos());
    }

    /**
     * Tests the setTvaCptImmosIntraCom() method.
     *
     * @return void
     */
    public function testSetTvaCptImmosIntraCom() {

        $obj = new Dossier4();

        $obj->setTvaCptImmosIntraCom("tvaCptImmosIntraCom");
        $this->assertEquals("tvaCptImmosIntraCom", $obj->getTvaCptImmosIntraCom());
    }

    /**
     * Tests the setTvaCptRegul() method.
     *
     * @return void
     */
    public function testSetTvaCptRegul() {

        $obj = new Dossier4();

        $obj->setTvaCptRegul("tvaCptRegul");
        $this->assertEquals("tvaCptRegul", $obj->getTvaCptRegul());
    }

    /**
     * Tests the setTvaCptRembours() method.
     *
     * @return void
     */
    public function testSetTvaCptRembours() {

        $obj = new Dossier4();

        $obj->setTvaCptRembours("tvaCptRembours");
        $this->assertEquals("tvaCptRembours", $obj->getTvaCptRembours());
    }

    /**
     * Tests the setTvaCptRemboursG() method.
     *
     * @return void
     */
    public function testSetTvaCptRemboursG() {

        $obj = new Dossier4();

        $obj->setTvaCptRemboursG("tvaCptRemboursG");
        $this->assertEquals("tvaCptRemboursG", $obj->getTvaCptRemboursG());
    }

    /**
     * Tests the setTvaCptReport() method.
     *
     * @return void
     */
    public function testSetTvaCptReport() {

        $obj = new Dossier4();

        $obj->setTvaCptReport("tvaCptReport");
        $this->assertEquals("tvaCptReport", $obj->getTvaCptReport());
    }

    /**
     * Tests the setTvaCptReportG() method.
     *
     * @return void
     */
    public function testSetTvaCptReportG() {

        $obj = new Dossier4();

        $obj->setTvaCptReportG("tvaCptReportG");
        $this->assertEquals("tvaCptReportG", $obj->getTvaCptReportG());
    }

    /**
     * Tests the setTvaCptTauxPart() method.
     *
     * @return void
     */
    public function testSetTvaCptTauxPart() {

        $obj = new Dossier4();

        $obj->setTvaCptTauxPart("tvaCptTauxPart");
        $this->assertEquals("tvaCptTauxPart", $obj->getTvaCptTauxPart());
    }

    /**
     * Tests the setTvaCptVente() method.
     *
     * @return void
     */
    public function testSetTvaCptVente() {

        $obj = new Dossier4();

        $obj->setTvaCptVente("tvaCptVente");
        $this->assertEquals("tvaCptVente", $obj->getTvaCptVente());
    }

    /**
     * Tests the setTvaE4DBS() method.
     *
     * @return void
     */
    public function testSetTvaE4DBS() {

        $obj = new Dossier4();

        $obj->setTvaE4DBS("tvaE4DBS");
        $this->assertEquals("tvaE4DBS", $obj->getTvaE4DBS());
    }

    /**
     * Tests the setTvaE4DI() method.
     *
     * @return void
     */
    public function testSetTvaE4DI() {

        $obj = new Dossier4();

        $obj->setTvaE4DI("tvaE4DI");
        $this->assertEquals("tvaE4DI", $obj->getTvaE4DI());
    }

    /**
     * Tests the setTvaE4RBS() method.
     *
     * @return void
     */
    public function testSetTvaE4RBS() {

        $obj = new Dossier4();

        $obj->setTvaE4RBS("tvaE4RBS");
        $this->assertEquals("tvaE4RBS", $obj->getTvaE4RBS());
    }

    /**
     * Tests the setTvaE4RI() method.
     *
     * @return void
     */
    public function testSetTvaE4RI() {

        $obj = new Dossier4();

        $obj->setTvaE4RI("tvaE4RI");
        $this->assertEquals("tvaE4RI", $obj->getTvaE4RI());
    }

    /**
     * Tests the setTvaE4RJrnOD() method.
     *
     * @return void
     */
    public function testSetTvaE4RJrnOD() {

        $obj = new Dossier4();

        $obj->setTvaE4RJrnOD("tvaE4RJrnOD");
        $this->assertEquals("tvaE4RJrnOD", $obj->getTvaE4RJrnOD());
    }

    /**
     * Tests the setTvaEnc3DerPerRechDA() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetTvaEnc3DerPerRechDA() {

        $obj = new Dossier4();

        $obj->setTvaEnc3DerPerRechDA(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getTvaEnc3DerPerRechDA());
    }

    /**
     * Tests the setTvaJourDecla() method.
     *
     * @return void
     */
    public function testSetTvaJourDecla() {

        $obj = new Dossier4();

        $obj->setTvaJourDecla("tvaJourDecla");
        $this->assertEquals("tvaJourDecla", $obj->getTvaJourDecla());
    }

    /**
     * Tests the setTvaMethode() method.
     *
     * @return void
     */
    public function testSetTvaMethode() {

        $obj = new Dossier4();

        $obj->setTvaMethode("tvaMethode");
        $this->assertEquals("tvaMethode", $obj->getTvaMethode());
    }

    /**
     * Tests the setTvaParametrageOk() method.
     *
     * @return void
     */
    public function testSetTvaParametrageOk() {

        $obj = new Dossier4();

        $obj->setTvaParametrageOk(true);
        $this->assertEquals(true, $obj->getTvaParametrageOk());
    }

    /**
     * Tests the setTvaPeriodicite() method.
     *
     * @return void
     */
    public function testSetTvaPeriodicite() {

        $obj = new Dossier4();

        $obj->setTvaPeriodicite("tvaPeriodicite");
        $this->assertEquals("tvaPeriodicite", $obj->getTvaPeriodicite());
    }

    /**
     * Tests the setTvaPrefixeIntracom() method.
     *
     * @return void
     */
    public function testSetTvaPrefixeIntracom() {

        $obj = new Dossier4();

        $obj->setTvaPrefixeIntracom("tvaPrefixeIntracom");
        $this->assertEquals("tvaPrefixeIntracom", $obj->getTvaPrefixeIntracom());
    }

    /**
     * Tests the setTvaRegime() method.
     *
     * @return void
     */
    public function testSetTvaRegime() {

        $obj = new Dossier4();

        $obj->setTvaRegime("tvaRegime");
        $this->assertEquals("tvaRegime", $obj->getTvaRegime());
    }

    /**
     * Tests the setTvaType() method.
     *
     * @return void
     */
    public function testSetTvaType() {

        $obj = new Dossier4();

        $obj->setTvaType("tvaType");
        $this->assertEquals("tvaType", $obj->getTvaType());
    }

    /**
     * Tests the setVMPCodeJrnPMV() method.
     *
     * @return void
     */
    public function testSetVMPCodeJrnPMV() {

        $obj = new Dossier4();

        $obj->setVMPCodeJrnPMV("vMPCodeJrnPMV");
        $this->assertEquals("vMPCodeJrnPMV", $obj->getVMPCodeJrnPMV());
    }

    /**
     * Tests the setVMPCptMoinsValue() method.
     *
     * @return void
     */
    public function testSetVMPCptMoinsValue() {

        $obj = new Dossier4();

        $obj->setVMPCptMoinsValue("vMPCptMoinsValue");
        $this->assertEquals("vMPCptMoinsValue", $obj->getVMPCptMoinsValue());
    }

    /**
     * Tests the setVMPCptPlusValue() method.
     *
     * @return void
     */
    public function testSetVMPCptPlusValue() {

        $obj = new Dossier4();

        $obj->setVMPCptPlusValue("vMPCptPlusValue");
        $this->assertEquals("vMPCptPlusValue", $obj->getVMPCptPlusValue());
    }

    /**
     * Tests the setVMPGestEcrPMV() method.
     *
     * @return void
     */
    public function testSetVMPGestEcrPMV() {

        $obj = new Dossier4();

        $obj->setVMPGestEcrPMV(10);
        $this->assertEquals(10, $obj->getVMPGestEcrPMV());
    }

    /**
     * Tests the setVMPGestionEnSaisie() method.
     *
     * @return void
     */
    public function testSetVMPGestionEnSaisie() {

        $obj = new Dossier4();

        $obj->setVMPGestionEnSaisie(true);
        $this->assertEquals(true, $obj->getVMPGestionEnSaisie());
    }

    /**
     * Tests the setYaRepriseCICE() method.
     *
     * @return void
     */
    public function testSetYaRepriseCICE() {

        $obj = new Dossier4();

        $obj->setYaRepriseCICE(true);
        $this->assertEquals(true, $obj->getYaRepriseCICE());
    }

    /**
     * Tests the setYaTauxReduit() method.
     *
     * @return void
     */
    public function testSetYaTauxReduit() {

        $obj = new Dossier4();

        $obj->setYaTauxReduit(true);
        $this->assertEquals(true, $obj->getYaTauxReduit());
    }

    /**
     * Tests the setbCa12T() method.
     *
     * @return void
     */
    public function testSetbCa12T() {

        $obj = new Dossier4();

        $obj->setbCa12T(true);
        $this->assertEquals(true, $obj->getbCa12T());
    }
}
