<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie\Bulletins;

/**
 * Bulletins model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QPaie
 */
class BulletinsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Bulletins();

        $this->assertNull($obj->getAbatTheo());
        $this->assertNull($obj->getAbattementMax());
        $this->assertNull($obj->getAllegement());
        $this->assertNull($obj->getAllegementNonProratise());
        $this->assertNull($obj->getAvantageNature());
        $this->assertNull($obj->getBaseGMP());
        $this->assertNull($obj->getBaseSSPlafModif());
        $this->assertNull($obj->getBaseSecu());
        $this->assertNull($obj->getBornePerModifie());
        $this->assertNull($obj->getBrut());
        $this->assertNull($obj->getBrutAL());
        $this->assertNull($obj->getBrutANL());
        $this->assertNull($obj->getBrutCP());
        $this->assertNull($obj->getBrutCaisse1());
        $this->assertNull($obj->getBrutCaisse2());
        $this->assertNull($obj->getBrutCaisse3());
        $this->assertNull($obj->getBrutCaisseCP());
        $this->assertNull($obj->getBrutCsg());
        $this->assertNull($obj->getBrutSoumisAbat());
        $this->assertNull($obj->getBrutSoumisCRDS());
        $this->assertNull($obj->getBrutalLimiteSmic());
        $this->assertNull($obj->getBrutalModifie());
        $this->assertNull($obj->getBulletinPublie());
        $this->assertNull($obj->getCategTDS());
        $this->assertNull($obj->getChequeEdite());
        $this->assertNull($obj->getChomPartielCP());
        $this->assertNull($obj->getChomPartielCoeffIndem());
        $this->assertNull($obj->getChomPartielMinIndem());
        $this->assertNull($obj->getCodeATPer());
        $this->assertNull($obj->getCodeCentreUrssaf());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeTypeSal());
        $this->assertNull($obj->getCoeffIntemperie());
        $this->assertNull($obj->getContHSupReposComp());
        $this->assertNull($obj->getCoutGlobalMois());
        $this->assertNull($obj->getCum30SS());
        $this->assertNull($obj->getCumAntHSup());
        $this->assertNull($obj->getCumBaseGMP());
        $this->assertNull($obj->getCumBaseSS());
        $this->assertNull($obj->getCumBrut());
        $this->assertNull($obj->getCumBrutAL());
        $this->assertNull($obj->getCumBrutANL());
        $this->assertNull($obj->getCumBrutCaisse1());
        $this->assertNull($obj->getCumBrutCaisse2());
        $this->assertNull($obj->getCumBrutCaisse3());
        $this->assertNull($obj->getCumDIFDus());
        $this->assertNull($obj->getCumDIFDus_1());
        $this->assertNull($obj->getCumHBonifie());
        $this->assertNull($obj->getCumHReposComp());
        $this->assertNull($obj->getCumHReposRemplace());
        $this->assertNull($obj->getCumHService());
        $this->assertNull($obj->getCumImpos());
        $this->assertNull($obj->getCumJReposRecup());
        $this->assertNull($obj->getCumMtCpPris());
        $this->assertNull($obj->getCumMtCpPris_1());
        $this->assertNull($obj->getCumNetAPayer());
        $this->assertNull($obj->getCumPSS1());
        $this->assertNull($obj->getCumPSS2());
        $this->assertNull($obj->getCumPlaf1Caisse1());
        $this->assertNull($obj->getCumPlaf1Caisse2());
        $this->assertNull($obj->getCumPlaf1Caisse3());
        $this->assertNull($obj->getCumPlaf2Caisse1());
        $this->assertNull($obj->getCumPlaf2Caisse2());
        $this->assertNull($obj->getCumPlaf2Caisse3());
        $this->assertNull($obj->getCumPlafondGMP());
        $this->assertNull($obj->getCumRttDus());
        $this->assertNull($obj->getCumRttPris());
        $this->assertNull($obj->getCumTrACaisse1());
        $this->assertNull($obj->getCumTrACaisse2());
        $this->assertNull($obj->getCumTrACaisse3());
        $this->assertNull($obj->getCumTrBCaisse1());
        $this->assertNull($obj->getCumTrBCaisse2());
        $this->assertNull($obj->getCumTrBCaisse3());
        $this->assertNull($obj->getCumTrCCaisse1());
        $this->assertNull($obj->getCumTrCCaisse2());
        $this->assertNull($obj->getCumTrCCaisse3());
        $this->assertNull($obj->getCumTranche2());
        $this->assertNull($obj->getCumTrancheA());
        $this->assertNull($obj->getCumTrancheB());
        $this->assertNull($obj->getCumTrancheC());
        $this->assertNull($obj->getDelta());
        $this->assertNull($obj->getDroitCP());
        $this->assertNull($obj->getDtDebutPeriode());
        $this->assertNull($obj->getDtFinPeriode());
        $this->assertNull($obj->getEcartCumule());
        $this->assertNull($obj->getEtatBul());
        $this->assertNull($obj->getEtatEdition());
        $this->assertNull($obj->getForfaitJour());
        $this->assertNull($obj->getGestCalcNetPaye());
        $this->assertNull($obj->getGestionCoeff());
        $this->assertNull($obj->getHReelTrav());
        $this->assertNull($obj->getHTheoTrav());
        $this->assertNull($obj->getHeureAbsence());
        $this->assertNull($obj->getIndicePeriode());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLienJustificatif());
        $this->assertNull($obj->getMIG());
        $this->assertNull($obj->getMaxAbat());
        $this->assertNull($obj->getMensuelJournalier());
        $this->assertNull($obj->getMethodeIndemCp());
        $this->assertNull($obj->getMontant1());
        $this->assertNull($obj->getMontant2());
        $this->assertNull($obj->getMontant3());
        $this->assertNull($obj->getMontant4());
        $this->assertNull($obj->getMontant5());
        $this->assertNull($obj->getMtHSupBonif());
        $this->assertNull($obj->getMtICpCp());
        $this->assertNull($obj->getMtICpt());
        $this->assertNull($obj->getMtIInt());
        $this->assertNull($obj->getMtJCPArbitrage());
        $this->assertNull($obj->getMtJourneeCP());
        $this->assertNull($obj->getMtNetPayeTheo());
        $this->assertNull($obj->getMtTauxLigSalBase());
        $this->assertNull($obj->getNb30());
        $this->assertNull($obj->getNbHAbCP());
        $this->assertNull($obj->getNbHAbsenceIntemp());
        $this->assertNull($obj->getNbHAttente());
        $this->assertNull($obj->getNbHBonifieDues());
        $this->assertNull($obj->getNbHBonifiePrises());
        $this->assertNull($obj->getNbHCarenceIntemp());
        $this->assertNull($obj->getNbHChomPartCP());
        $this->assertNull($obj->getNbHChomPartTech());
        $this->assertNull($obj->getNbHConduite());
        $this->assertNull($obj->getNbHConting());
        $this->assertNull($obj->getNbHDble());
        $this->assertNull($obj->getNbHDifDus());
        $this->assertNull($obj->getNbHIntempIndem());
        $this->assertNull($obj->getNbHLigSalBase());
        $this->assertNull($obj->getNbHNormal());
        $this->assertNull($obj->getNbHPasDroitFillon());
        $this->assertNull($obj->getNbHRemplace());
        $this->assertNull($obj->getNbHRepoCompDues());
        $this->assertNull($obj->getNbHRepoCompPrises());
        $this->assertNull($obj->getNbHRepoRDues());
        $this->assertNull($obj->getNbHRepoRPrises());
        $this->assertNull($obj->getNbHSup1());
        $this->assertNull($obj->getNbHSup2());
        $this->assertNull($obj->getNbHSup3());
        $this->assertNull($obj->getNbHSup4());
        $this->assertNull($obj->getNbHSup5());
        $this->assertNull($obj->getNbHSupBonif());
        $this->assertNull($obj->getNbHSupBonifAbs());
        $this->assertNull($obj->getNbHTrav());
        $this->assertNull($obj->getNbHTravail());
        $this->assertNull($obj->getNbHeurePaye());
        $this->assertNull($obj->getNbHeureSup());
        $this->assertNull($obj->getNbHeureTrav());
        $this->assertNull($obj->getNbHeureTravMois());
        $this->assertNull($obj->getNbJChomPartCP());
        $this->assertNull($obj->getNbJDus());
        $this->assertNull($obj->getNbJDus_1());
        $this->assertNull($obj->getNbJPris());
        $this->assertNull($obj->getNbJPris_1());
        $this->assertNull($obj->getNbJRTTDus());
        $this->assertNull($obj->getNbJRTTPris());
        $this->assertNull($obj->getNbJRepoRecupDus());
        $this->assertNull($obj->getNbJRepoRecupPris());
        $this->assertNull($obj->getNbJTravForce());
        $this->assertNull($obj->getNbJTravMoisES());
        $this->assertNull($obj->getNbJourBase());
        $this->assertNull($obj->getNbJourBaseCP());
        $this->assertNull($obj->getNbJourCPAcquis());
        $this->assertNull($obj->getNbJourCPPris());
        $this->assertNull($obj->getNbJourNormaux());
        $this->assertNull($obj->getNbJourTrav());
        $this->assertNull($obj->getNetAPayer());
        $this->assertNull($obj->getNetImpos());
        $this->assertNull($obj->getNote1());
        $this->assertNull($obj->getNote2());
        $this->assertNull($obj->getNote3());
        $this->assertNull($obj->getNumeroEmploye());
        $this->assertNull($obj->getPPSoumisTaxe());
        $this->assertNull($obj->getPSS1());
        $this->assertNull($obj->getPSS2());
        $this->assertNull($obj->getPSS30());
        $this->assertNull($obj->getPSSMod());
        $this->assertNull($obj->getPaieEuro());
        $this->assertNull($obj->getPaiementCPNonPris());
        $this->assertNull($obj->getPeriode());
        $this->assertNull($obj->getPeriodicite());
        $this->assertNull($obj->getPeriodiciteModifie());
        $this->assertNull($obj->getPlafond1Caisse1());
        $this->assertNull($obj->getPlafond1Caisse2());
        $this->assertNull($obj->getPlafond1Caisse3());
        $this->assertNull($obj->getPlafond2Caisse1());
        $this->assertNull($obj->getPlafond2Caisse2());
        $this->assertNull($obj->getPlafond2Caisse3());
        $this->assertNull($obj->getPlafondGMP());
        $this->assertNull($obj->getPlafondGMPModifie());
        $this->assertNull($obj->getPlafondHeure());
        $this->assertNull($obj->getPlafondJour());
        $this->assertNull($obj->getPlafondSemaine());
        $this->assertNull($obj->getPourcentAbat());
        $this->assertNull($obj->getPourcentActForce());
        $this->assertNull($obj->getPourcentActivite());
        $this->assertNull($obj->getPourcentRemuHor());
        $this->assertNull($obj->getProvCP_1());
        $this->assertNull($obj->getProvCp());
        $this->assertNull($obj->getRemunMens());
        $this->assertNull($obj->getSBase());
        $this->assertNull($obj->getSmic1());
        $this->assertNull($obj->getSmicH());
        $this->assertNull($obj->getSmicH35());
        $this->assertNull($obj->getSmicH39());
        $this->assertNull($obj->getSmicM());
        $this->assertNull($obj->getSmicM35());
        $this->assertNull($obj->getSmicM39());
        $this->assertNull($obj->getSortieMois());
        $this->assertNull($obj->getTauxHAbCp());
        $this->assertNull($obj->getTauxHAbsence());
        $this->assertNull($obj->getTauxHNormal());
        $this->assertNull($obj->getTauxJournalier());
        $this->assertNull($obj->getTotAcompte());
        $this->assertNull($obj->getTotAcompteCP());
        $this->assertNull($obj->getTotCotisPatron());
        $this->assertNull($obj->getTotPrimeNI());
        $this->assertNull($obj->getTotPrimeNS());
        $this->assertNull($obj->getTotRetenue());
        $this->assertNull($obj->getTrACaisse1());
        $this->assertNull($obj->getTrACaisse2());
        $this->assertNull($obj->getTrACaisse3());
        $this->assertNull($obj->getTrBCaisse1());
        $this->assertNull($obj->getTrBCaisse2());
        $this->assertNull($obj->getTrBCaisse3());
        $this->assertNull($obj->getTrCCaisse1());
        $this->assertNull($obj->getTrCCaisse2());
        $this->assertNull($obj->getTrCCaisse3());
        $this->assertNull($obj->getTranche2());
        $this->assertNull($obj->getTrancheA());
        $this->assertNull($obj->getTrancheABAL());
        $this->assertNull($obj->getTrancheABANL());
        $this->assertNull($obj->getTrancheABNA());
        $this->assertNull($obj->getTrancheB());
        $this->assertNull($obj->getTrancheBBAL());
        $this->assertNull($obj->getTrancheBBANL());
        $this->assertNull($obj->getTrancheBBNA());
        $this->assertNull($obj->getTrancheC());
        $this->assertNull($obj->getTrancheCBAL());
        $this->assertNull($obj->getTrancheCBANL());
        $this->assertNull($obj->getTrancheCBNA());
        $this->assertNull($obj->getTrancheCPlaf());
        $this->assertNull($obj->getTxtNoteRTF());
        $this->assertNull($obj->getTypeBaseCaisse1());
        $this->assertNull($obj->getTypeBaseCaisse2());
        $this->assertNull($obj->getTypeBaseCaisse3());
        $this->assertNull($obj->getTypeGestionBal());
        $this->assertNull($obj->getTypePaiementBul());
        $this->assertNull($obj->getTypePaimentModifie());
        $this->assertNull($obj->getTypeSaisieAbs());
        $this->assertNull($obj->getTypeSaisieAbsence());
        $this->assertNull($obj->getValoriseCP());
    }

    /**
     * Tests the setAbatTheo() method.
     *
     * @return void
     */
    public function testSetAbatTheo() {

        $obj = new Bulletins();

        $obj->setAbatTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getAbatTheo());
    }

    /**
     * Tests the setAbattementMax() method.
     *
     * @return void
     */
    public function testSetAbattementMax() {

        $obj = new Bulletins();

        $obj->setAbattementMax(10.092018);
        $this->assertEquals(10.092018, $obj->getAbattementMax());
    }

    /**
     * Tests the setAllegement() method.
     *
     * @return void
     */
    public function testSetAllegement() {

        $obj = new Bulletins();

        $obj->setAllegement(10.092018);
        $this->assertEquals(10.092018, $obj->getAllegement());
    }

    /**
     * Tests the setAllegementNonProratise() method.
     *
     * @return void
     */
    public function testSetAllegementNonProratise() {

        $obj = new Bulletins();

        $obj->setAllegementNonProratise(10.092018);
        $this->assertEquals(10.092018, $obj->getAllegementNonProratise());
    }

    /**
     * Tests the setAvantageNature() method.
     *
     * @return void
     */
    public function testSetAvantageNature() {

        $obj = new Bulletins();

        $obj->setAvantageNature(10.092018);
        $this->assertEquals(10.092018, $obj->getAvantageNature());
    }

    /**
     * Tests the setBaseGMP() method.
     *
     * @return void
     */
    public function testSetBaseGMP() {

        $obj = new Bulletins();

        $obj->setBaseGMP(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseGMP());
    }

    /**
     * Tests the setBaseSSPlafModif() method.
     *
     * @return void
     */
    public function testSetBaseSSPlafModif() {

        $obj = new Bulletins();

        $obj->setBaseSSPlafModif(true);
        $this->assertEquals(true, $obj->getBaseSSPlafModif());
    }

    /**
     * Tests the setBaseSecu() method.
     *
     * @return void
     */
    public function testSetBaseSecu() {

        $obj = new Bulletins();

        $obj->setBaseSecu(10.092018);
        $this->assertEquals(10.092018, $obj->getBaseSecu());
    }

    /**
     * Tests the setBornePerModifie() method.
     *
     * @return void
     */
    public function testSetBornePerModifie() {

        $obj = new Bulletins();

        $obj->setBornePerModifie(true);
        $this->assertEquals(true, $obj->getBornePerModifie());
    }

    /**
     * Tests the setBrut() method.
     *
     * @return void
     */
    public function testSetBrut() {

        $obj = new Bulletins();

        $obj->setBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getBrut());
    }

    /**
     * Tests the setBrutAL() method.
     *
     * @return void
     */
    public function testSetBrutAL() {

        $obj = new Bulletins();

        $obj->setBrutAL(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutAL());
    }

    /**
     * Tests the setBrutANL() method.
     *
     * @return void
     */
    public function testSetBrutANL() {

        $obj = new Bulletins();

        $obj->setBrutANL(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutANL());
    }

    /**
     * Tests the setBrutCP() method.
     *
     * @return void
     */
    public function testSetBrutCP() {

        $obj = new Bulletins();

        $obj->setBrutCP(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCP());
    }

    /**
     * Tests the setBrutCaisse1() method.
     *
     * @return void
     */
    public function testSetBrutCaisse1() {

        $obj = new Bulletins();

        $obj->setBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse1());
    }

    /**
     * Tests the setBrutCaisse2() method.
     *
     * @return void
     */
    public function testSetBrutCaisse2() {

        $obj = new Bulletins();

        $obj->setBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse2());
    }

    /**
     * Tests the setBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetBrutCaisse3() {

        $obj = new Bulletins();

        $obj->setBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisse3());
    }

    /**
     * Tests the setBrutCaisseCP() method.
     *
     * @return void
     */
    public function testSetBrutCaisseCP() {

        $obj = new Bulletins();

        $obj->setBrutCaisseCP(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCaisseCP());
    }

    /**
     * Tests the setBrutCsg() method.
     *
     * @return void
     */
    public function testSetBrutCsg() {

        $obj = new Bulletins();

        $obj->setBrutCsg(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutCsg());
    }

    /**
     * Tests the setBrutSoumisAbat() method.
     *
     * @return void
     */
    public function testSetBrutSoumisAbat() {

        $obj = new Bulletins();

        $obj->setBrutSoumisAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutSoumisAbat());
    }

    /**
     * Tests the setBrutSoumisCRDS() method.
     *
     * @return void
     */
    public function testSetBrutSoumisCRDS() {

        $obj = new Bulletins();

        $obj->setBrutSoumisCRDS(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutSoumisCRDS());
    }

    /**
     * Tests the setBrutalLimiteSmic() method.
     *
     * @return void
     */
    public function testSetBrutalLimiteSmic() {

        $obj = new Bulletins();

        $obj->setBrutalLimiteSmic(10.092018);
        $this->assertEquals(10.092018, $obj->getBrutalLimiteSmic());
    }

    /**
     * Tests the setBrutalModifie() method.
     *
     * @return void
     */
    public function testSetBrutalModifie() {

        $obj = new Bulletins();

        $obj->setBrutalModifie(true);
        $this->assertEquals(true, $obj->getBrutalModifie());
    }

    /**
     * Tests the setBulletinPublie() method.
     *
     * @return void
     */
    public function testSetBulletinPublie() {

        $obj = new Bulletins();

        $obj->setBulletinPublie(true);
        $this->assertEquals(true, $obj->getBulletinPublie());
    }

    /**
     * Tests the setCategTDS() method.
     *
     * @return void
     */
    public function testSetCategTDS() {

        $obj = new Bulletins();

        $obj->setCategTDS("categTDS");
        $this->assertEquals("categTDS", $obj->getCategTDS());
    }

    /**
     * Tests the setChequeEdite() method.
     *
     * @return void
     */
    public function testSetChequeEdite() {

        $obj = new Bulletins();

        $obj->setChequeEdite(true);
        $this->assertEquals(true, $obj->getChequeEdite());
    }

    /**
     * Tests the setChomPartielCP() method.
     *
     * @return void
     */
    public function testSetChomPartielCP() {

        $obj = new Bulletins();

        $obj->setChomPartielCP(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielCP());
    }

    /**
     * Tests the setChomPartielCoeffIndem() method.
     *
     * @return void
     */
    public function testSetChomPartielCoeffIndem() {

        $obj = new Bulletins();

        $obj->setChomPartielCoeffIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielCoeffIndem());
    }

    /**
     * Tests the setChomPartielMinIndem() method.
     *
     * @return void
     */
    public function testSetChomPartielMinIndem() {

        $obj = new Bulletins();

        $obj->setChomPartielMinIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getChomPartielMinIndem());
    }

    /**
     * Tests the setCodeATPer() method.
     *
     * @return void
     */
    public function testSetCodeATPer() {

        $obj = new Bulletins();

        $obj->setCodeATPer(10);
        $this->assertEquals(10, $obj->getCodeATPer());
    }

    /**
     * Tests the setCodeCentreUrssaf() method.
     *
     * @return void
     */
    public function testSetCodeCentreUrssaf() {

        $obj = new Bulletins();

        $obj->setCodeCentreUrssaf("codeCentreUrssaf");
        $this->assertEquals("codeCentreUrssaf", $obj->getCodeCentreUrssaf());
    }

    /**
     * Tests the setCodeEtablissement() method.
     *
     * @return void
     */
    public function testSetCodeEtablissement() {

        $obj = new Bulletins();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests the setCodeTypeSal() method.
     *
     * @return void
     */
    public function testSetCodeTypeSal() {

        $obj = new Bulletins();

        $obj->setCodeTypeSal("codeTypeSal");
        $this->assertEquals("codeTypeSal", $obj->getCodeTypeSal());
    }

    /**
     * Tests the setCoeffIntemperie() method.
     *
     * @return void
     */
    public function testSetCoeffIntemperie() {

        $obj = new Bulletins();

        $obj->setCoeffIntemperie(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffIntemperie());
    }

    /**
     * Tests the setContHSupReposComp() method.
     *
     * @return void
     */
    public function testSetContHSupReposComp() {

        $obj = new Bulletins();

        $obj->setContHSupReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getContHSupReposComp());
    }

    /**
     * Tests the setCoutGlobalMois() method.
     *
     * @return void
     */
    public function testSetCoutGlobalMois() {

        $obj = new Bulletins();

        $obj->setCoutGlobalMois(10.092018);
        $this->assertEquals(10.092018, $obj->getCoutGlobalMois());
    }

    /**
     * Tests the setCum30SS() method.
     *
     * @return void
     */
    public function testSetCum30SS() {

        $obj = new Bulletins();

        $obj->setCum30SS(10.092018);
        $this->assertEquals(10.092018, $obj->getCum30SS());
    }

    /**
     * Tests the setCumAntHSup() method.
     *
     * @return void
     */
    public function testSetCumAntHSup() {

        $obj = new Bulletins();

        $obj->setCumAntHSup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumAntHSup());
    }

    /**
     * Tests the setCumBaseGMP() method.
     *
     * @return void
     */
    public function testSetCumBaseGMP() {

        $obj = new Bulletins();

        $obj->setCumBaseGMP(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseGMP());
    }

    /**
     * Tests the setCumBaseSS() method.
     *
     * @return void
     */
    public function testSetCumBaseSS() {

        $obj = new Bulletins();

        $obj->setCumBaseSS(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBaseSS());
    }

    /**
     * Tests the setCumBrut() method.
     *
     * @return void
     */
    public function testSetCumBrut() {

        $obj = new Bulletins();

        $obj->setCumBrut(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrut());
    }

    /**
     * Tests the setCumBrutAL() method.
     *
     * @return void
     */
    public function testSetCumBrutAL() {

        $obj = new Bulletins();

        $obj->setCumBrutAL(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutAL());
    }

    /**
     * Tests the setCumBrutANL() method.
     *
     * @return void
     */
    public function testSetCumBrutANL() {

        $obj = new Bulletins();

        $obj->setCumBrutANL(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutANL());
    }

    /**
     * Tests the setCumBrutCaisse1() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse1() {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse1());
    }

    /**
     * Tests the setCumBrutCaisse2() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse2() {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse2());
    }

    /**
     * Tests the setCumBrutCaisse3() method.
     *
     * @return void
     */
    public function testSetCumBrutCaisse3() {

        $obj = new Bulletins();

        $obj->setCumBrutCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumBrutCaisse3());
    }

    /**
     * Tests the setCumDIFDus() method.
     *
     * @return void
     */
    public function testSetCumDIFDus() {

        $obj = new Bulletins();

        $obj->setCumDIFDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDIFDus());
    }

    /**
     * Tests the setCumDIFDus_1() method.
     *
     * @return void
     */
    public function testSetCumDIFDus_1() {

        $obj = new Bulletins();

        $obj->setCumDIFDus_1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumDIFDus_1());
    }

    /**
     * Tests the setCumHBonifie() method.
     *
     * @return void
     */
    public function testSetCumHBonifie() {

        $obj = new Bulletins();

        $obj->setCumHBonifie(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHBonifie());
    }

    /**
     * Tests the setCumHReposComp() method.
     *
     * @return void
     */
    public function testSetCumHReposComp() {

        $obj = new Bulletins();

        $obj->setCumHReposComp(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposComp());
    }

    /**
     * Tests the setCumHReposRemplace() method.
     *
     * @return void
     */
    public function testSetCumHReposRemplace() {

        $obj = new Bulletins();

        $obj->setCumHReposRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHReposRemplace());
    }

    /**
     * Tests the setCumHService() method.
     *
     * @return void
     */
    public function testSetCumHService() {

        $obj = new Bulletins();

        $obj->setCumHService(10.092018);
        $this->assertEquals(10.092018, $obj->getCumHService());
    }

    /**
     * Tests the setCumImpos() method.
     *
     * @return void
     */
    public function testSetCumImpos() {

        $obj = new Bulletins();

        $obj->setCumImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getCumImpos());
    }

    /**
     * Tests the setCumJReposRecup() method.
     *
     * @return void
     */
    public function testSetCumJReposRecup() {

        $obj = new Bulletins();

        $obj->setCumJReposRecup(10.092018);
        $this->assertEquals(10.092018, $obj->getCumJReposRecup());
    }

    /**
     * Tests the setCumMtCpPris() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris() {

        $obj = new Bulletins();

        $obj->setCumMtCpPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris());
    }

    /**
     * Tests the setCumMtCpPris_1() method.
     *
     * @return void
     */
    public function testSetCumMtCpPris_1() {

        $obj = new Bulletins();

        $obj->setCumMtCpPris_1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumMtCpPris_1());
    }

    /**
     * Tests the setCumNetAPayer() method.
     *
     * @return void
     */
    public function testSetCumNetAPayer() {

        $obj = new Bulletins();

        $obj->setCumNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getCumNetAPayer());
    }

    /**
     * Tests the setCumPSS1() method.
     *
     * @return void
     */
    public function testSetCumPSS1() {

        $obj = new Bulletins();

        $obj->setCumPSS1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPSS1());
    }

    /**
     * Tests the setCumPSS2() method.
     *
     * @return void
     */
    public function testSetCumPSS2() {

        $obj = new Bulletins();

        $obj->setCumPSS2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPSS2());
    }

    /**
     * Tests the setCumPlaf1Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse1() {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse1());
    }

    /**
     * Tests the setCumPlaf1Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse2() {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse2());
    }

    /**
     * Tests the setCumPlaf1Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf1Caisse3() {

        $obj = new Bulletins();

        $obj->setCumPlaf1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf1Caisse3());
    }

    /**
     * Tests the setCumPlaf2Caisse1() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse1() {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse1());
    }

    /**
     * Tests the setCumPlaf2Caisse2() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse2() {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse2());
    }

    /**
     * Tests the setCumPlaf2Caisse3() method.
     *
     * @return void
     */
    public function testSetCumPlaf2Caisse3() {

        $obj = new Bulletins();

        $obj->setCumPlaf2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlaf2Caisse3());
    }

    /**
     * Tests the setCumPlafondGMP() method.
     *
     * @return void
     */
    public function testSetCumPlafondGMP() {

        $obj = new Bulletins();

        $obj->setCumPlafondGMP(10.092018);
        $this->assertEquals(10.092018, $obj->getCumPlafondGMP());
    }

    /**
     * Tests the setCumRttDus() method.
     *
     * @return void
     */
    public function testSetCumRttDus() {

        $obj = new Bulletins();

        $obj->setCumRttDus(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttDus());
    }

    /**
     * Tests the setCumRttPris() method.
     *
     * @return void
     */
    public function testSetCumRttPris() {

        $obj = new Bulletins();

        $obj->setCumRttPris(10.092018);
        $this->assertEquals(10.092018, $obj->getCumRttPris());
    }

    /**
     * Tests the setCumTrACaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrACaisse1() {

        $obj = new Bulletins();

        $obj->setCumTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse1());
    }

    /**
     * Tests the setCumTrACaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrACaisse2() {

        $obj = new Bulletins();

        $obj->setCumTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse2());
    }

    /**
     * Tests the setCumTrACaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrACaisse3() {

        $obj = new Bulletins();

        $obj->setCumTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrACaisse3());
    }

    /**
     * Tests the setCumTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrBCaisse1() {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse1());
    }

    /**
     * Tests the setCumTrBCaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrBCaisse2() {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse2());
    }

    /**
     * Tests the setCumTrBCaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrBCaisse3() {

        $obj = new Bulletins();

        $obj->setCumTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrBCaisse3());
    }

    /**
     * Tests the setCumTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse1() {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse1());
    }

    /**
     * Tests the setCumTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse2() {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse2());
    }

    /**
     * Tests the setCumTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetCumTrCCaisse3() {

        $obj = new Bulletins();

        $obj->setCumTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrCCaisse3());
    }

    /**
     * Tests the setCumTranche2() method.
     *
     * @return void
     */
    public function testSetCumTranche2() {

        $obj = new Bulletins();

        $obj->setCumTranche2(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTranche2());
    }

    /**
     * Tests the setCumTrancheA() method.
     *
     * @return void
     */
    public function testSetCumTrancheA() {

        $obj = new Bulletins();

        $obj->setCumTrancheA(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheA());
    }

    /**
     * Tests the setCumTrancheB() method.
     *
     * @return void
     */
    public function testSetCumTrancheB() {

        $obj = new Bulletins();

        $obj->setCumTrancheB(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheB());
    }

    /**
     * Tests the setCumTrancheC() method.
     *
     * @return void
     */
    public function testSetCumTrancheC() {

        $obj = new Bulletins();

        $obj->setCumTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getCumTrancheC());
    }

    /**
     * Tests the setDelta() method.
     *
     * @return void
     */
    public function testSetDelta() {

        $obj = new Bulletins();

        $obj->setDelta(10.092018);
        $this->assertEquals(10.092018, $obj->getDelta());
    }

    /**
     * Tests the setDroitCP() method.
     *
     * @return void
     */
    public function testSetDroitCP() {

        $obj = new Bulletins();

        $obj->setDroitCP(10.092018);
        $this->assertEquals(10.092018, $obj->getDroitCP());
    }

    /**
     * Tests the setDtDebutPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDebutPeriode() {

        $obj = new Bulletins();

        $obj->setDtDebutPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtDebutPeriode());
    }

    /**
     * Tests the setDtFinPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtFinPeriode() {

        $obj = new Bulletins();

        $obj->setDtFinPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDtFinPeriode());
    }

    /**
     * Tests the setEcartCumule() method.
     *
     * @return void
     */
    public function testSetEcartCumule() {

        $obj = new Bulletins();

        $obj->setEcartCumule(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartCumule());
    }

    /**
     * Tests the setEtatBul() method.
     *
     * @return void
     */
    public function testSetEtatBul() {

        $obj = new Bulletins();

        $obj->setEtatBul("etatBul");
        $this->assertEquals("etatBul", $obj->getEtatBul());
    }

    /**
     * Tests the setEtatEdition() method.
     *
     * @return void
     */
    public function testSetEtatEdition() {

        $obj = new Bulletins();

        $obj->setEtatEdition("etatEdition");
        $this->assertEquals("etatEdition", $obj->getEtatEdition());
    }

    /**
     * Tests the setForfaitJour() method.
     *
     * @return void
     */
    public function testSetForfaitJour() {

        $obj = new Bulletins();

        $obj->setForfaitJour(true);
        $this->assertEquals(true, $obj->getForfaitJour());
    }

    /**
     * Tests the setGestCalcNetPaye() method.
     *
     * @return void
     */
    public function testSetGestCalcNetPaye() {

        $obj = new Bulletins();

        $obj->setGestCalcNetPaye(true);
        $this->assertEquals(true, $obj->getGestCalcNetPaye());
    }

    /**
     * Tests the setGestionCoeff() method.
     *
     * @return void
     */
    public function testSetGestionCoeff() {

        $obj = new Bulletins();

        $obj->setGestionCoeff(true);
        $this->assertEquals(true, $obj->getGestionCoeff());
    }

    /**
     * Tests the setHReelTrav() method.
     *
     * @return void
     */
    public function testSetHReelTrav() {

        $obj = new Bulletins();

        $obj->setHReelTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHReelTrav());
    }

    /**
     * Tests the setHTheoTrav() method.
     *
     * @return void
     */
    public function testSetHTheoTrav() {

        $obj = new Bulletins();

        $obj->setHTheoTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getHTheoTrav());
    }

    /**
     * Tests the setHeureAbsence() method.
     *
     * @return void
     */
    public function testSetHeureAbsence() {

        $obj = new Bulletins();

        $obj->setHeureAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getHeureAbsence());
    }

    /**
     * Tests the setIndicePeriode() method.
     *
     * @return void
     */
    public function testSetIndicePeriode() {

        $obj = new Bulletins();

        $obj->setIndicePeriode(10);
        $this->assertEquals(10, $obj->getIndicePeriode());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new Bulletins();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new Bulletins();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLienJustificatif() method.
     *
     * @return void
     */
    public function testSetLienJustificatif() {

        $obj = new Bulletins();

        $obj->setLienJustificatif("lienJustificatif");
        $this->assertEquals("lienJustificatif", $obj->getLienJustificatif());
    }

    /**
     * Tests the setMIG() method.
     *
     * @return void
     */
    public function testSetMIG() {

        $obj = new Bulletins();

        $obj->setMIG(10.092018);
        $this->assertEquals(10.092018, $obj->getMIG());
    }

    /**
     * Tests the setMaxAbat() method.
     *
     * @return void
     */
    public function testSetMaxAbat() {

        $obj = new Bulletins();

        $obj->setMaxAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getMaxAbat());
    }

    /**
     * Tests the setMensuelJournalier() method.
     *
     * @return void
     */
    public function testSetMensuelJournalier() {

        $obj = new Bulletins();

        $obj->setMensuelJournalier(true);
        $this->assertEquals(true, $obj->getMensuelJournalier());
    }

    /**
     * Tests the setMethodeIndemCp() method.
     *
     * @return void
     */
    public function testSetMethodeIndemCp() {

        $obj = new Bulletins();

        $obj->setMethodeIndemCp("methodeIndemCp");
        $this->assertEquals("methodeIndemCp", $obj->getMethodeIndemCp());
    }

    /**
     * Tests the setMontant1() method.
     *
     * @return void
     */
    public function testSetMontant1() {

        $obj = new Bulletins();

        $obj->setMontant1(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant1());
    }

    /**
     * Tests the setMontant2() method.
     *
     * @return void
     */
    public function testSetMontant2() {

        $obj = new Bulletins();

        $obj->setMontant2(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant2());
    }

    /**
     * Tests the setMontant3() method.
     *
     * @return void
     */
    public function testSetMontant3() {

        $obj = new Bulletins();

        $obj->setMontant3(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant3());
    }

    /**
     * Tests the setMontant4() method.
     *
     * @return void
     */
    public function testSetMontant4() {

        $obj = new Bulletins();

        $obj->setMontant4(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant4());
    }

    /**
     * Tests the setMontant5() method.
     *
     * @return void
     */
    public function testSetMontant5() {

        $obj = new Bulletins();

        $obj->setMontant5(10.092018);
        $this->assertEquals(10.092018, $obj->getMontant5());
    }

    /**
     * Tests the setMtHSupBonif() method.
     *
     * @return void
     */
    public function testSetMtHSupBonif() {

        $obj = new Bulletins();

        $obj->setMtHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getMtHSupBonif());
    }

    /**
     * Tests the setMtICpCp() method.
     *
     * @return void
     */
    public function testSetMtICpCp() {

        $obj = new Bulletins();

        $obj->setMtICpCp(10.092018);
        $this->assertEquals(10.092018, $obj->getMtICpCp());
    }

    /**
     * Tests the setMtICpt() method.
     *
     * @return void
     */
    public function testSetMtICpt() {

        $obj = new Bulletins();

        $obj->setMtICpt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtICpt());
    }

    /**
     * Tests the setMtIInt() method.
     *
     * @return void
     */
    public function testSetMtIInt() {

        $obj = new Bulletins();

        $obj->setMtIInt(10.092018);
        $this->assertEquals(10.092018, $obj->getMtIInt());
    }

    /**
     * Tests the setMtJCPArbitrage() method.
     *
     * @return void
     */
    public function testSetMtJCPArbitrage() {

        $obj = new Bulletins();

        $obj->setMtJCPArbitrage(true);
        $this->assertEquals(true, $obj->getMtJCPArbitrage());
    }

    /**
     * Tests the setMtJourneeCP() method.
     *
     * @return void
     */
    public function testSetMtJourneeCP() {

        $obj = new Bulletins();

        $obj->setMtJourneeCP(10.092018);
        $this->assertEquals(10.092018, $obj->getMtJourneeCP());
    }

    /**
     * Tests the setMtNetPayeTheo() method.
     *
     * @return void
     */
    public function testSetMtNetPayeTheo() {

        $obj = new Bulletins();

        $obj->setMtNetPayeTheo(10.092018);
        $this->assertEquals(10.092018, $obj->getMtNetPayeTheo());
    }

    /**
     * Tests the setMtTauxLigSalBase() method.
     *
     * @return void
     */
    public function testSetMtTauxLigSalBase() {

        $obj = new Bulletins();

        $obj->setMtTauxLigSalBase(10.092018);
        $this->assertEquals(10.092018, $obj->getMtTauxLigSalBase());
    }

    /**
     * Tests the setNb30() method.
     *
     * @return void
     */
    public function testSetNb30() {

        $obj = new Bulletins();

        $obj->setNb30(10.092018);
        $this->assertEquals(10.092018, $obj->getNb30());
    }

    /**
     * Tests the setNbHAbCP() method.
     *
     * @return void
     */
    public function testSetNbHAbCP() {

        $obj = new Bulletins();

        $obj->setNbHAbCP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbCP());
    }

    /**
     * Tests the setNbHAbsenceIntemp() method.
     *
     * @return void
     */
    public function testSetNbHAbsenceIntemp() {

        $obj = new Bulletins();

        $obj->setNbHAbsenceIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAbsenceIntemp());
    }

    /**
     * Tests the setNbHAttente() method.
     *
     * @return void
     */
    public function testSetNbHAttente() {

        $obj = new Bulletins();

        $obj->setNbHAttente(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHAttente());
    }

    /**
     * Tests the setNbHBonifieDues() method.
     *
     * @return void
     */
    public function testSetNbHBonifieDues() {

        $obj = new Bulletins();

        $obj->setNbHBonifieDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifieDues());
    }

    /**
     * Tests the setNbHBonifiePrises() method.
     *
     * @return void
     */
    public function testSetNbHBonifiePrises() {

        $obj = new Bulletins();

        $obj->setNbHBonifiePrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHBonifiePrises());
    }

    /**
     * Tests the setNbHCarenceIntemp() method.
     *
     * @return void
     */
    public function testSetNbHCarenceIntemp() {

        $obj = new Bulletins();

        $obj->setNbHCarenceIntemp(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHCarenceIntemp());
    }

    /**
     * Tests the setNbHChomPartCP() method.
     *
     * @return void
     */
    public function testSetNbHChomPartCP() {

        $obj = new Bulletins();

        $obj->setNbHChomPartCP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartCP());
    }

    /**
     * Tests the setNbHChomPartTech() method.
     *
     * @return void
     */
    public function testSetNbHChomPartTech() {

        $obj = new Bulletins();

        $obj->setNbHChomPartTech(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHChomPartTech());
    }

    /**
     * Tests the setNbHConduite() method.
     *
     * @return void
     */
    public function testSetNbHConduite() {

        $obj = new Bulletins();

        $obj->setNbHConduite(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHConduite());
    }

    /**
     * Tests the setNbHConting() method.
     *
     * @return void
     */
    public function testSetNbHConting() {

        $obj = new Bulletins();

        $obj->setNbHConting(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHConting());
    }

    /**
     * Tests the setNbHDble() method.
     *
     * @return void
     */
    public function testSetNbHDble() {

        $obj = new Bulletins();

        $obj->setNbHDble(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDble());
    }

    /**
     * Tests the setNbHDifDus() method.
     *
     * @return void
     */
    public function testSetNbHDifDus() {

        $obj = new Bulletins();

        $obj->setNbHDifDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHDifDus());
    }

    /**
     * Tests the setNbHIntempIndem() method.
     *
     * @return void
     */
    public function testSetNbHIntempIndem() {

        $obj = new Bulletins();

        $obj->setNbHIntempIndem(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHIntempIndem());
    }

    /**
     * Tests the setNbHLigSalBase() method.
     *
     * @return void
     */
    public function testSetNbHLigSalBase() {

        $obj = new Bulletins();

        $obj->setNbHLigSalBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHLigSalBase());
    }

    /**
     * Tests the setNbHNormal() method.
     *
     * @return void
     */
    public function testSetNbHNormal() {

        $obj = new Bulletins();

        $obj->setNbHNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHNormal());
    }

    /**
     * Tests the setNbHPasDroitFillon() method.
     *
     * @return void
     */
    public function testSetNbHPasDroitFillon() {

        $obj = new Bulletins();

        $obj->setNbHPasDroitFillon(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHPasDroitFillon());
    }

    /**
     * Tests the setNbHRemplace() method.
     *
     * @return void
     */
    public function testSetNbHRemplace() {

        $obj = new Bulletins();

        $obj->setNbHRemplace(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRemplace());
    }

    /**
     * Tests the setNbHRepoCompDues() method.
     *
     * @return void
     */
    public function testSetNbHRepoCompDues() {

        $obj = new Bulletins();

        $obj->setNbHRepoCompDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoCompDues());
    }

    /**
     * Tests the setNbHRepoCompPrises() method.
     *
     * @return void
     */
    public function testSetNbHRepoCompPrises() {

        $obj = new Bulletins();

        $obj->setNbHRepoCompPrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoCompPrises());
    }

    /**
     * Tests the setNbHRepoRDues() method.
     *
     * @return void
     */
    public function testSetNbHRepoRDues() {

        $obj = new Bulletins();

        $obj->setNbHRepoRDues(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoRDues());
    }

    /**
     * Tests the setNbHRepoRPrises() method.
     *
     * @return void
     */
    public function testSetNbHRepoRPrises() {

        $obj = new Bulletins();

        $obj->setNbHRepoRPrises(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHRepoRPrises());
    }

    /**
     * Tests the setNbHSup1() method.
     *
     * @return void
     */
    public function testSetNbHSup1() {

        $obj = new Bulletins();

        $obj->setNbHSup1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup1());
    }

    /**
     * Tests the setNbHSup2() method.
     *
     * @return void
     */
    public function testSetNbHSup2() {

        $obj = new Bulletins();

        $obj->setNbHSup2(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup2());
    }

    /**
     * Tests the setNbHSup3() method.
     *
     * @return void
     */
    public function testSetNbHSup3() {

        $obj = new Bulletins();

        $obj->setNbHSup3(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup3());
    }

    /**
     * Tests the setNbHSup4() method.
     *
     * @return void
     */
    public function testSetNbHSup4() {

        $obj = new Bulletins();

        $obj->setNbHSup4(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup4());
    }

    /**
     * Tests the setNbHSup5() method.
     *
     * @return void
     */
    public function testSetNbHSup5() {

        $obj = new Bulletins();

        $obj->setNbHSup5(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSup5());
    }

    /**
     * Tests the setNbHSupBonif() method.
     *
     * @return void
     */
    public function testSetNbHSupBonif() {

        $obj = new Bulletins();

        $obj->setNbHSupBonif(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupBonif());
    }

    /**
     * Tests the setNbHSupBonifAbs() method.
     *
     * @return void
     */
    public function testSetNbHSupBonifAbs() {

        $obj = new Bulletins();

        $obj->setNbHSupBonifAbs(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHSupBonifAbs());
    }

    /**
     * Tests the setNbHTrav() method.
     *
     * @return void
     */
    public function testSetNbHTrav() {

        $obj = new Bulletins();

        $obj->setNbHTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTrav());
    }

    /**
     * Tests the setNbHTravail() method.
     *
     * @return void
     */
    public function testSetNbHTravail() {

        $obj = new Bulletins();

        $obj->setNbHTravail(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHTravail());
    }

    /**
     * Tests the setNbHeurePaye() method.
     *
     * @return void
     */
    public function testSetNbHeurePaye() {

        $obj = new Bulletins();

        $obj->setNbHeurePaye(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeurePaye());
    }

    /**
     * Tests the setNbHeureSup() method.
     *
     * @return void
     */
    public function testSetNbHeureSup() {

        $obj = new Bulletins();

        $obj->setNbHeureSup(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureSup());
    }

    /**
     * Tests the setNbHeureTrav() method.
     *
     * @return void
     */
    public function testSetNbHeureTrav() {

        $obj = new Bulletins();

        $obj->setNbHeureTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTrav());
    }

    /**
     * Tests the setNbHeureTravMois() method.
     *
     * @return void
     */
    public function testSetNbHeureTravMois() {

        $obj = new Bulletins();

        $obj->setNbHeureTravMois(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeureTravMois());
    }

    /**
     * Tests the setNbJChomPartCP() method.
     *
     * @return void
     */
    public function testSetNbJChomPartCP() {

        $obj = new Bulletins();

        $obj->setNbJChomPartCP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJChomPartCP());
    }

    /**
     * Tests the setNbJDus() method.
     *
     * @return void
     */
    public function testSetNbJDus() {

        $obj = new Bulletins();

        $obj->setNbJDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus());
    }

    /**
     * Tests the setNbJDus_1() method.
     *
     * @return void
     */
    public function testSetNbJDus_1() {

        $obj = new Bulletins();

        $obj->setNbJDus_1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJDus_1());
    }

    /**
     * Tests the setNbJPris() method.
     *
     * @return void
     */
    public function testSetNbJPris() {

        $obj = new Bulletins();

        $obj->setNbJPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris());
    }

    /**
     * Tests the setNbJPris_1() method.
     *
     * @return void
     */
    public function testSetNbJPris_1() {

        $obj = new Bulletins();

        $obj->setNbJPris_1(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJPris_1());
    }

    /**
     * Tests the setNbJRTTDus() method.
     *
     * @return void
     */
    public function testSetNbJRTTDus() {

        $obj = new Bulletins();

        $obj->setNbJRTTDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRTTDus());
    }

    /**
     * Tests the setNbJRTTPris() method.
     *
     * @return void
     */
    public function testSetNbJRTTPris() {

        $obj = new Bulletins();

        $obj->setNbJRTTPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRTTPris());
    }

    /**
     * Tests the setNbJRepoRecupDus() method.
     *
     * @return void
     */
    public function testSetNbJRepoRecupDus() {

        $obj = new Bulletins();

        $obj->setNbJRepoRecupDus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRepoRecupDus());
    }

    /**
     * Tests the setNbJRepoRecupPris() method.
     *
     * @return void
     */
    public function testSetNbJRepoRecupPris() {

        $obj = new Bulletins();

        $obj->setNbJRepoRecupPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJRepoRecupPris());
    }

    /**
     * Tests the setNbJTravForce() method.
     *
     * @return void
     */
    public function testSetNbJTravForce() {

        $obj = new Bulletins();

        $obj->setNbJTravForce(true);
        $this->assertEquals(true, $obj->getNbJTravForce());
    }

    /**
     * Tests the setNbJTravMoisES() method.
     *
     * @return void
     */
    public function testSetNbJTravMoisES() {

        $obj = new Bulletins();

        $obj->setNbJTravMoisES(10);
        $this->assertEquals(10, $obj->getNbJTravMoisES());
    }

    /**
     * Tests the setNbJourBase() method.
     *
     * @return void
     */
    public function testSetNbJourBase() {

        $obj = new Bulletins();

        $obj->setNbJourBase(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBase());
    }

    /**
     * Tests the setNbJourBaseCP() method.
     *
     * @return void
     */
    public function testSetNbJourBaseCP() {

        $obj = new Bulletins();

        $obj->setNbJourBaseCP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCP());
    }

    /**
     * Tests the setNbJourCPAcquis() method.
     *
     * @return void
     */
    public function testSetNbJourCPAcquis() {

        $obj = new Bulletins();

        $obj->setNbJourCPAcquis(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCPAcquis());
    }

    /**
     * Tests the setNbJourCPPris() method.
     *
     * @return void
     */
    public function testSetNbJourCPPris() {

        $obj = new Bulletins();

        $obj->setNbJourCPPris(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourCPPris());
    }

    /**
     * Tests the setNbJourNormaux() method.
     *
     * @return void
     */
    public function testSetNbJourNormaux() {

        $obj = new Bulletins();

        $obj->setNbJourNormaux(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourNormaux());
    }

    /**
     * Tests the setNbJourTrav() method.
     *
     * @return void
     */
    public function testSetNbJourTrav() {

        $obj = new Bulletins();

        $obj->setNbJourTrav(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourTrav());
    }

    /**
     * Tests the setNetAPayer() method.
     *
     * @return void
     */
    public function testSetNetAPayer() {

        $obj = new Bulletins();

        $obj->setNetAPayer(10.092018);
        $this->assertEquals(10.092018, $obj->getNetAPayer());
    }

    /**
     * Tests the setNetImpos() method.
     *
     * @return void
     */
    public function testSetNetImpos() {

        $obj = new Bulletins();

        $obj->setNetImpos(10.092018);
        $this->assertEquals(10.092018, $obj->getNetImpos());
    }

    /**
     * Tests the setNote1() method.
     *
     * @return void
     */
    public function testSetNote1() {

        $obj = new Bulletins();

        $obj->setNote1("note1");
        $this->assertEquals("note1", $obj->getNote1());
    }

    /**
     * Tests the setNote2() method.
     *
     * @return void
     */
    public function testSetNote2() {

        $obj = new Bulletins();

        $obj->setNote2("note2");
        $this->assertEquals("note2", $obj->getNote2());
    }

    /**
     * Tests the setNote3() method.
     *
     * @return void
     */
    public function testSetNote3() {

        $obj = new Bulletins();

        $obj->setNote3("note3");
        $this->assertEquals("note3", $obj->getNote3());
    }

    /**
     * Tests the setNumeroEmploye() method.
     *
     * @return void
     */
    public function testSetNumeroEmploye() {

        $obj = new Bulletins();

        $obj->setNumeroEmploye("numeroEmploye");
        $this->assertEquals("numeroEmploye", $obj->getNumeroEmploye());
    }

    /**
     * Tests the setPPSoumisTaxe() method.
     *
     * @return void
     */
    public function testSetPPSoumisTaxe() {

        $obj = new Bulletins();

        $obj->setPPSoumisTaxe(10.092018);
        $this->assertEquals(10.092018, $obj->getPPSoumisTaxe());
    }

    /**
     * Tests the setPSS1() method.
     *
     * @return void
     */
    public function testSetPSS1() {

        $obj = new Bulletins();

        $obj->setPSS1(10.092018);
        $this->assertEquals(10.092018, $obj->getPSS1());
    }

    /**
     * Tests the setPSS2() method.
     *
     * @return void
     */
    public function testSetPSS2() {

        $obj = new Bulletins();

        $obj->setPSS2(10.092018);
        $this->assertEquals(10.092018, $obj->getPSS2());
    }

    /**
     * Tests the setPSS30() method.
     *
     * @return void
     */
    public function testSetPSS30() {

        $obj = new Bulletins();

        $obj->setPSS30(true);
        $this->assertEquals(true, $obj->getPSS30());
    }

    /**
     * Tests the setPSSMod() method.
     *
     * @return void
     */
    public function testSetPSSMod() {

        $obj = new Bulletins();

        $obj->setPSSMod(true);
        $this->assertEquals(true, $obj->getPSSMod());
    }

    /**
     * Tests the setPaieEuro() method.
     *
     * @return void
     */
    public function testSetPaieEuro() {

        $obj = new Bulletins();

        $obj->setPaieEuro(true);
        $this->assertEquals(true, $obj->getPaieEuro());
    }

    /**
     * Tests the setPaiementCPNonPris() method.
     *
     * @return void
     */
    public function testSetPaiementCPNonPris() {

        $obj = new Bulletins();

        $obj->setPaiementCPNonPris(true);
        $this->assertEquals(true, $obj->getPaiementCPNonPris());
    }

    /**
     * Tests the setPeriode() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetPeriode() {

        $obj = new Bulletins();

        $obj->setPeriode(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getPeriode());
    }

    /**
     * Tests the setPeriodicite() method.
     *
     * @return void
     */
    public function testSetPeriodicite() {

        $obj = new Bulletins();

        $obj->setPeriodicite("periodicite");
        $this->assertEquals("periodicite", $obj->getPeriodicite());
    }

    /**
     * Tests the setPeriodiciteModifie() method.
     *
     * @return void
     */
    public function testSetPeriodiciteModifie() {

        $obj = new Bulletins();

        $obj->setPeriodiciteModifie(true);
        $this->assertEquals(true, $obj->getPeriodiciteModifie());
    }

    /**
     * Tests the setPlafond1Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse1() {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse1());
    }

    /**
     * Tests the setPlafond1Caisse2() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse2() {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse2());
    }

    /**
     * Tests the setPlafond1Caisse3() method.
     *
     * @return void
     */
    public function testSetPlafond1Caisse3() {

        $obj = new Bulletins();

        $obj->setPlafond1Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond1Caisse3());
    }

    /**
     * Tests the setPlafond2Caisse1() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse1() {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse1());
    }

    /**
     * Tests the setPlafond2Caisse2() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse2() {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse2());
    }

    /**
     * Tests the setPlafond2Caisse3() method.
     *
     * @return void
     */
    public function testSetPlafond2Caisse3() {

        $obj = new Bulletins();

        $obj->setPlafond2Caisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafond2Caisse3());
    }

    /**
     * Tests the setPlafondGMP() method.
     *
     * @return void
     */
    public function testSetPlafondGMP() {

        $obj = new Bulletins();

        $obj->setPlafondGMP(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondGMP());
    }

    /**
     * Tests the setPlafondGMPModifie() method.
     *
     * @return void
     */
    public function testSetPlafondGMPModifie() {

        $obj = new Bulletins();

        $obj->setPlafondGMPModifie(true);
        $this->assertEquals(true, $obj->getPlafondGMPModifie());
    }

    /**
     * Tests the setPlafondHeure() method.
     *
     * @return void
     */
    public function testSetPlafondHeure() {

        $obj = new Bulletins();

        $obj->setPlafondHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondHeure());
    }

    /**
     * Tests the setPlafondJour() method.
     *
     * @return void
     */
    public function testSetPlafondJour() {

        $obj = new Bulletins();

        $obj->setPlafondJour(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondJour());
    }

    /**
     * Tests the setPlafondSemaine() method.
     *
     * @return void
     */
    public function testSetPlafondSemaine() {

        $obj = new Bulletins();

        $obj->setPlafondSemaine(10.092018);
        $this->assertEquals(10.092018, $obj->getPlafondSemaine());
    }

    /**
     * Tests the setPourcentAbat() method.
     *
     * @return void
     */
    public function testSetPourcentAbat() {

        $obj = new Bulletins();

        $obj->setPourcentAbat(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentAbat());
    }

    /**
     * Tests the setPourcentActForce() method.
     *
     * @return void
     */
    public function testSetPourcentActForce() {

        $obj = new Bulletins();

        $obj->setPourcentActForce(10);
        $this->assertEquals(10, $obj->getPourcentActForce());
    }

    /**
     * Tests the setPourcentActivite() method.
     *
     * @return void
     */
    public function testSetPourcentActivite() {

        $obj = new Bulletins();

        $obj->setPourcentActivite(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentActivite());
    }

    /**
     * Tests the setPourcentRemuHor() method.
     *
     * @return void
     */
    public function testSetPourcentRemuHor() {

        $obj = new Bulletins();

        $obj->setPourcentRemuHor(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcentRemuHor());
    }

    /**
     * Tests the setProvCP_1() method.
     *
     * @return void
     */
    public function testSetProvCP_1() {

        $obj = new Bulletins();

        $obj->setProvCP_1(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCP_1());
    }

    /**
     * Tests the setProvCp() method.
     *
     * @return void
     */
    public function testSetProvCp() {

        $obj = new Bulletins();

        $obj->setProvCp(10.092018);
        $this->assertEquals(10.092018, $obj->getProvCp());
    }

    /**
     * Tests the setRemunMens() method.
     *
     * @return void
     */
    public function testSetRemunMens() {

        $obj = new Bulletins();

        $obj->setRemunMens(10.092018);
        $this->assertEquals(10.092018, $obj->getRemunMens());
    }

    /**
     * Tests the setSBase() method.
     *
     * @return void
     */
    public function testSetSBase() {

        $obj = new Bulletins();

        $obj->setSBase(10.092018);
        $this->assertEquals(10.092018, $obj->getSBase());
    }

    /**
     * Tests the setSmic1() method.
     *
     * @return void
     */
    public function testSetSmic1() {

        $obj = new Bulletins();

        $obj->setSmic1(10.092018);
        $this->assertEquals(10.092018, $obj->getSmic1());
    }

    /**
     * Tests the setSmicH() method.
     *
     * @return void
     */
    public function testSetSmicH() {

        $obj = new Bulletins();

        $obj->setSmicH(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH());
    }

    /**
     * Tests the setSmicH35() method.
     *
     * @return void
     */
    public function testSetSmicH35() {

        $obj = new Bulletins();

        $obj->setSmicH35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH35());
    }

    /**
     * Tests the setSmicH39() method.
     *
     * @return void
     */
    public function testSetSmicH39() {

        $obj = new Bulletins();

        $obj->setSmicH39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicH39());
    }

    /**
     * Tests the setSmicM() method.
     *
     * @return void
     */
    public function testSetSmicM() {

        $obj = new Bulletins();

        $obj->setSmicM(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM());
    }

    /**
     * Tests the setSmicM35() method.
     *
     * @return void
     */
    public function testSetSmicM35() {

        $obj = new Bulletins();

        $obj->setSmicM35(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM35());
    }

    /**
     * Tests the setSmicM39() method.
     *
     * @return void
     */
    public function testSetSmicM39() {

        $obj = new Bulletins();

        $obj->setSmicM39(10.092018);
        $this->assertEquals(10.092018, $obj->getSmicM39());
    }

    /**
     * Tests the setSortieMois() method.
     *
     * @return void
     */
    public function testSetSortieMois() {

        $obj = new Bulletins();

        $obj->setSortieMois(true);
        $this->assertEquals(true, $obj->getSortieMois());
    }

    /**
     * Tests the setTauxHAbCp() method.
     *
     * @return void
     */
    public function testSetTauxHAbCp() {

        $obj = new Bulletins();

        $obj->setTauxHAbCp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHAbCp());
    }

    /**
     * Tests the setTauxHAbsence() method.
     *
     * @return void
     */
    public function testSetTauxHAbsence() {

        $obj = new Bulletins();

        $obj->setTauxHAbsence(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHAbsence());
    }

    /**
     * Tests the setTauxHNormal() method.
     *
     * @return void
     */
    public function testSetTauxHNormal() {

        $obj = new Bulletins();

        $obj->setTauxHNormal(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHNormal());
    }

    /**
     * Tests the setTauxJournalier() method.
     *
     * @return void
     */
    public function testSetTauxJournalier() {

        $obj = new Bulletins();

        $obj->setTauxJournalier(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxJournalier());
    }

    /**
     * Tests the setTotAcompte() method.
     *
     * @return void
     */
    public function testSetTotAcompte() {

        $obj = new Bulletins();

        $obj->setTotAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTotAcompte());
    }

    /**
     * Tests the setTotAcompteCP() method.
     *
     * @return void
     */
    public function testSetTotAcompteCP() {

        $obj = new Bulletins();

        $obj->setTotAcompteCP(10.092018);
        $this->assertEquals(10.092018, $obj->getTotAcompteCP());
    }

    /**
     * Tests the setTotCotisPatron() method.
     *
     * @return void
     */
    public function testSetTotCotisPatron() {

        $obj = new Bulletins();

        $obj->setTotCotisPatron(10.092018);
        $this->assertEquals(10.092018, $obj->getTotCotisPatron());
    }

    /**
     * Tests the setTotPrimeNI() method.
     *
     * @return void
     */
    public function testSetTotPrimeNI() {

        $obj = new Bulletins();

        $obj->setTotPrimeNI(10.092018);
        $this->assertEquals(10.092018, $obj->getTotPrimeNI());
    }

    /**
     * Tests the setTotPrimeNS() method.
     *
     * @return void
     */
    public function testSetTotPrimeNS() {

        $obj = new Bulletins();

        $obj->setTotPrimeNS(10.092018);
        $this->assertEquals(10.092018, $obj->getTotPrimeNS());
    }

    /**
     * Tests the setTotRetenue() method.
     *
     * @return void
     */
    public function testSetTotRetenue() {

        $obj = new Bulletins();

        $obj->setTotRetenue(10.092018);
        $this->assertEquals(10.092018, $obj->getTotRetenue());
    }

    /**
     * Tests the setTrACaisse1() method.
     *
     * @return void
     */
    public function testSetTrACaisse1() {

        $obj = new Bulletins();

        $obj->setTrACaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse1());
    }

    /**
     * Tests the setTrACaisse2() method.
     *
     * @return void
     */
    public function testSetTrACaisse2() {

        $obj = new Bulletins();

        $obj->setTrACaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse2());
    }

    /**
     * Tests the setTrACaisse3() method.
     *
     * @return void
     */
    public function testSetTrACaisse3() {

        $obj = new Bulletins();

        $obj->setTrACaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrACaisse3());
    }

    /**
     * Tests the setTrBCaisse1() method.
     *
     * @return void
     */
    public function testSetTrBCaisse1() {

        $obj = new Bulletins();

        $obj->setTrBCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse1());
    }

    /**
     * Tests the setTrBCaisse2() method.
     *
     * @return void
     */
    public function testSetTrBCaisse2() {

        $obj = new Bulletins();

        $obj->setTrBCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse2());
    }

    /**
     * Tests the setTrBCaisse3() method.
     *
     * @return void
     */
    public function testSetTrBCaisse3() {

        $obj = new Bulletins();

        $obj->setTrBCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrBCaisse3());
    }

    /**
     * Tests the setTrCCaisse1() method.
     *
     * @return void
     */
    public function testSetTrCCaisse1() {

        $obj = new Bulletins();

        $obj->setTrCCaisse1(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse1());
    }

    /**
     * Tests the setTrCCaisse2() method.
     *
     * @return void
     */
    public function testSetTrCCaisse2() {

        $obj = new Bulletins();

        $obj->setTrCCaisse2(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse2());
    }

    /**
     * Tests the setTrCCaisse3() method.
     *
     * @return void
     */
    public function testSetTrCCaisse3() {

        $obj = new Bulletins();

        $obj->setTrCCaisse3(10.092018);
        $this->assertEquals(10.092018, $obj->getTrCCaisse3());
    }

    /**
     * Tests the setTranche2() method.
     *
     * @return void
     */
    public function testSetTranche2() {

        $obj = new Bulletins();

        $obj->setTranche2(10.092018);
        $this->assertEquals(10.092018, $obj->getTranche2());
    }

    /**
     * Tests the setTrancheA() method.
     *
     * @return void
     */
    public function testSetTrancheA() {

        $obj = new Bulletins();

        $obj->setTrancheA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheA());
    }

    /**
     * Tests the setTrancheABAL() method.
     *
     * @return void
     */
    public function testSetTrancheABAL() {

        $obj = new Bulletins();

        $obj->setTrancheABAL(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheABAL());
    }

    /**
     * Tests the setTrancheABANL() method.
     *
     * @return void
     */
    public function testSetTrancheABANL() {

        $obj = new Bulletins();

        $obj->setTrancheABANL(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheABANL());
    }

    /**
     * Tests the setTrancheABNA() method.
     *
     * @return void
     */
    public function testSetTrancheABNA() {

        $obj = new Bulletins();

        $obj->setTrancheABNA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheABNA());
    }

    /**
     * Tests the setTrancheB() method.
     *
     * @return void
     */
    public function testSetTrancheB() {

        $obj = new Bulletins();

        $obj->setTrancheB(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheB());
    }

    /**
     * Tests the setTrancheBBAL() method.
     *
     * @return void
     */
    public function testSetTrancheBBAL() {

        $obj = new Bulletins();

        $obj->setTrancheBBAL(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBBAL());
    }

    /**
     * Tests the setTrancheBBANL() method.
     *
     * @return void
     */
    public function testSetTrancheBBANL() {

        $obj = new Bulletins();

        $obj->setTrancheBBANL(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBBANL());
    }

    /**
     * Tests the setTrancheBBNA() method.
     *
     * @return void
     */
    public function testSetTrancheBBNA() {

        $obj = new Bulletins();

        $obj->setTrancheBBNA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheBBNA());
    }

    /**
     * Tests the setTrancheC() method.
     *
     * @return void
     */
    public function testSetTrancheC() {

        $obj = new Bulletins();

        $obj->setTrancheC(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheC());
    }

    /**
     * Tests the setTrancheCBAL() method.
     *
     * @return void
     */
    public function testSetTrancheCBAL() {

        $obj = new Bulletins();

        $obj->setTrancheCBAL(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCBAL());
    }

    /**
     * Tests the setTrancheCBANL() method.
     *
     * @return void
     */
    public function testSetTrancheCBANL() {

        $obj = new Bulletins();

        $obj->setTrancheCBANL(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCBANL());
    }

    /**
     * Tests the setTrancheCBNA() method.
     *
     * @return void
     */
    public function testSetTrancheCBNA() {

        $obj = new Bulletins();

        $obj->setTrancheCBNA(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCBNA());
    }

    /**
     * Tests the setTrancheCPlaf() method.
     *
     * @return void
     */
    public function testSetTrancheCPlaf() {

        $obj = new Bulletins();

        $obj->setTrancheCPlaf(10.092018);
        $this->assertEquals(10.092018, $obj->getTrancheCPlaf());
    }

    /**
     * Tests the setTxtNoteRTF() method.
     *
     * @return void
     */
    public function testSetTxtNoteRTF() {

        $obj = new Bulletins();

        $obj->setTxtNoteRTF("txtNoteRTF");
        $this->assertEquals("txtNoteRTF", $obj->getTxtNoteRTF());
    }

    /**
     * Tests the setTypeBaseCaisse1() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse1() {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse1("typeBaseCaisse1");
        $this->assertEquals("typeBaseCaisse1", $obj->getTypeBaseCaisse1());
    }

    /**
     * Tests the setTypeBaseCaisse2() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse2() {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse2("typeBaseCaisse2");
        $this->assertEquals("typeBaseCaisse2", $obj->getTypeBaseCaisse2());
    }

    /**
     * Tests the setTypeBaseCaisse3() method.
     *
     * @return void
     */
    public function testSetTypeBaseCaisse3() {

        $obj = new Bulletins();

        $obj->setTypeBaseCaisse3("typeBaseCaisse3");
        $this->assertEquals("typeBaseCaisse3", $obj->getTypeBaseCaisse3());
    }

    /**
     * Tests the setTypeGestionBal() method.
     *
     * @return void
     */
    public function testSetTypeGestionBal() {

        $obj = new Bulletins();

        $obj->setTypeGestionBal("typeGestionBal");
        $this->assertEquals("typeGestionBal", $obj->getTypeGestionBal());
    }

    /**
     * Tests the setTypePaiementBul() method.
     *
     * @return void
     */
    public function testSetTypePaiementBul() {

        $obj = new Bulletins();

        $obj->setTypePaiementBul("typePaiementBul");
        $this->assertEquals("typePaiementBul", $obj->getTypePaiementBul());
    }

    /**
     * Tests the setTypePaimentModifie() method.
     *
     * @return void
     */
    public function testSetTypePaimentModifie() {

        $obj = new Bulletins();

        $obj->setTypePaimentModifie(true);
        $this->assertEquals(true, $obj->getTypePaimentModifie());
    }

    /**
     * Tests the setTypeSaisieAbs() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbs() {

        $obj = new Bulletins();

        $obj->setTypeSaisieAbs("typeSaisieAbs");
        $this->assertEquals("typeSaisieAbs", $obj->getTypeSaisieAbs());
    }

    /**
     * Tests the setTypeSaisieAbsence() method.
     *
     * @return void
     */
    public function testSetTypeSaisieAbsence() {

        $obj = new Bulletins();

        $obj->setTypeSaisieAbsence("typeSaisieAbsence");
        $this->assertEquals("typeSaisieAbsence", $obj->getTypeSaisieAbsence());
    }

    /**
     * Tests the setValoriseCP() method.
     *
     * @return void
     */
    public function testSetValoriseCP() {

        $obj = new Bulletins();

        $obj->setValoriseCP(10.092018);
        $this->assertEquals(10.092018, $obj->getValoriseCP());
    }
}
