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
use WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta\Dossier2;
use WBW\Library\Core\Tests\AbstractTestCase;

/**
 * Dossier2 model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier2Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Dossier2();

        $this->assertNull($obj->getAnneeRecolte());
        $this->assertNull($obj->getAppliquerRegroupement());
        $this->assertNull($obj->getCCA_Memo());
        $this->assertNull($obj->getClasse4ClientDebut());
        $this->assertNull($obj->getClasse4ClientFin());
        $this->assertNull($obj->getClasse4FrnDebut());
        $this->assertNull($obj->getClasse4FrnFin());
        $this->assertNull($obj->getCodifClasse0());
        $this->assertNull($obj->getCodifClasse0Seule());
        $this->assertNull($obj->getCodifClasse9());
        $this->assertNull($obj->getCodifClasse9Seule());
        $this->assertNull($obj->getCollectifClientDebut());
        $this->assertNull($obj->getCollectifClientDefaut());
        $this->assertNull($obj->getCollectifClientFin());
        $this->assertNull($obj->getCollectifFrnDebut());
        $this->assertNull($obj->getCollectifFrnDefaut());
        $this->assertNull($obj->getCollectifFrnFin());
        $this->assertNull($obj->getCollectifSocDebut());
        $this->assertNull($obj->getCollectifSocFin());
        $this->assertNull($obj->getCombiLettrageAuto());
        $this->assertNull($obj->getCommentaireDossier());
        $this->assertNull($obj->getControlSalaireCptEx());
        $this->assertNull($obj->getControlSalaireObs());
        $this->assertNull($obj->getDADS1LivrePaie());
        $this->assertNull($obj->getDADS1Paie());
        $this->assertNull($obj->getDADS1RemuMoins());
        $this->assertNull($obj->getDADS1RemuPlus());
        $this->assertNull($obj->getDSCodeCollab());
        $this->assertNull($obj->getDSDateRetour());
        $this->assertNull($obj->getDSDateSortie());
        $this->assertNull($obj->getDateCalculProvCP());
        $this->assertNull($obj->getDatePublication());
        $this->assertNull($obj->getDateRazEcritures());
        $this->assertNull($obj->getDernierCompteClient());
        $this->assertNull($obj->getDernierCompteFrn());
        $this->assertNull($obj->getDiffLettrageCodeJournal());
        $this->assertNull($obj->getDiffLettrageCodeLibelle());
        $this->assertNull($obj->getDiffLettrageFolio());
        $this->assertNull($obj->getDiffLettrageGains());
        $this->assertNull($obj->getDiffLettrageLibelle());
        $this->assertNull($obj->getDiffLettragePertes());
        $this->assertNull($obj->getEcartMaxiLettrageAuto());
        $this->assertNull($obj->getEcartMiniCtrlTva());
        $this->assertNull($obj->getEditerEnCFA());
        $this->assertNull($obj->getEtatProvCPObs());
        $this->assertNull($obj->getFaireControleLettrage());
        $this->assertNull($obj->getIncrementCompteAuto());
        $this->assertNull($obj->getLibellePlusDe30Carac());
        $this->assertNull($obj->getLienSaiImmos());
        $this->assertNull($obj->getLongueurPieceLettrage());
        $this->assertNull($obj->getNbComptesRaz());
        $this->assertNull($obj->getNbDecimalesMt());
        $this->assertNull($obj->getNbEcrAFacturerCloture());
        $this->assertNull($obj->getNbEcrituresRaz());
        $this->assertNull($obj->getNbJourBaseCP());
        $this->assertNull($obj->getNivRuptClasse0());
        $this->assertNull($obj->getNivRuptClasse1());
        $this->assertNull($obj->getNivRuptClasse2());
        $this->assertNull($obj->getNivRuptClasse3());
        $this->assertNull($obj->getNivRuptClasse4());
        $this->assertNull($obj->getNivRuptClasse5());
        $this->assertNull($obj->getNivRuptClasse6());
        $this->assertNull($obj->getNivRuptClasse7());
        $this->assertNull($obj->getNivRuptClasse8());
        $this->assertNull($obj->getNivRuptClasse9());
        $this->assertNull($obj->getPositionPieceLettrage());
        $this->assertNull($obj->getProchainLotEcrit());
        $this->assertNull($obj->getProchainLotFactor());
        $this->assertNull($obj->getProchainNumEcrEco());
        $this->assertNull($obj->getProchainNumLotVMP());
        $this->assertNull($obj->getProvCPCptBrut());
        $this->assertNull($obj->getProvCPCptCAPCP());
        $this->assertNull($obj->getProvCPCptCAPCh());
        $this->assertNull($obj->getProvCPCptCharges());
        $this->assertNull($obj->getProvMini());
        $this->assertNull($obj->getPublication());
        $this->assertNull($obj->getQIMG2CptEncours());
        $this->assertNull($obj->getQIMG2CptEnvoi());
        $this->assertNull($obj->getRFF_CptExploitant());
        $this->assertNull($obj->getRFF_CptInterets());
        $this->assertNull($obj->getRFF_CptRegul());
        $this->assertNull($obj->getRFF_DateLotEcr());
        $this->assertNull($obj->getRFF_DecouvertsAvances());
        $this->assertNull($obj->getRFF_InteretsEmprunts());
        $this->assertNull($obj->getRFF_Limite());
        $this->assertNull($obj->getRFF_MttRFF());
        $this->assertNull($obj->getRFF_MttRegul());
        $this->assertNull($obj->getRFF_NumLotEcr());
        $this->assertNull($obj->getRFF_Type());
        $this->assertNull($obj->getRappDADS1Obs());
        $this->assertNull($obj->getRelanceAdresseCpt());
        $this->assertNull($obj->getTexteRelance0());
        $this->assertNull($obj->getTexteRelance1());
        $this->assertNull($obj->getTexteRelance2());
        $this->assertNull($obj->getTexteRelance3());
        $this->assertNull($obj->getTexteRelance4());
        $this->assertNull($obj->getTresoComptesAExclure());
        $this->assertNull($obj->getUtiliseQuantite2());
    }

    /**
     * Tests the setAnneeRecolte() method.
     *
     * @return void
     */
    public function testSetAnneeRecolte() {

        $obj = new Dossier2();

        $obj->setAnneeRecolte("anneeRecolte");
        $this->assertEquals("anneeRecolte", $obj->getAnneeRecolte());
    }

    /**
     * Tests the setAppliquerRegroupement() method.
     *
     * @return void
     */
    public function testSetAppliquerRegroupement() {

        $obj = new Dossier2();

        $obj->setAppliquerRegroupement(true);
        $this->assertEquals(true, $obj->getAppliquerRegroupement());
    }

    /**
     * Tests the setCCA_Memo() method.
     *
     * @return void
     */
    public function testSetCCA_Memo() {

        $obj = new Dossier2();

        $obj->setCCA_Memo("cCA_Memo");
        $this->assertEquals("cCA_Memo", $obj->getCCA_Memo());
    }

    /**
     * Tests the setClasse4ClientDebut() method.
     *
     * @return void
     */
    public function testSetClasse4ClientDebut() {

        $obj = new Dossier2();

        $obj->setClasse4ClientDebut("classe4ClientDebut");
        $this->assertEquals("classe4ClientDebut", $obj->getClasse4ClientDebut());
    }

    /**
     * Tests the setClasse4ClientFin() method.
     *
     * @return void
     */
    public function testSetClasse4ClientFin() {

        $obj = new Dossier2();

        $obj->setClasse4ClientFin("classe4ClientFin");
        $this->assertEquals("classe4ClientFin", $obj->getClasse4ClientFin());
    }

    /**
     * Tests the setClasse4FrnDebut() method.
     *
     * @return void
     */
    public function testSetClasse4FrnDebut() {

        $obj = new Dossier2();

        $obj->setClasse4FrnDebut("classe4FrnDebut");
        $this->assertEquals("classe4FrnDebut", $obj->getClasse4FrnDebut());
    }

    /**
     * Tests the setClasse4FrnFin() method.
     *
     * @return void
     */
    public function testSetClasse4FrnFin() {

        $obj = new Dossier2();

        $obj->setClasse4FrnFin("classe4FrnFin");
        $this->assertEquals("classe4FrnFin", $obj->getClasse4FrnFin());
    }

    /**
     * Tests the setCodifClasse0() method.
     *
     * @return void
     */
    public function testSetCodifClasse0() {

        $obj = new Dossier2();

        $obj->setCodifClasse0("codifClasse0");
        $this->assertEquals("codifClasse0", $obj->getCodifClasse0());
    }

    /**
     * Tests the setCodifClasse0Seule() method.
     *
     * @return void
     */
    public function testSetCodifClasse0Seule() {

        $obj = new Dossier2();

        $obj->setCodifClasse0Seule("codifClasse0Seule");
        $this->assertEquals("codifClasse0Seule", $obj->getCodifClasse0Seule());
    }

    /**
     * Tests the setCodifClasse9() method.
     *
     * @return void
     */
    public function testSetCodifClasse9() {

        $obj = new Dossier2();

        $obj->setCodifClasse9("codifClasse9");
        $this->assertEquals("codifClasse9", $obj->getCodifClasse9());
    }

    /**
     * Tests the setCodifClasse9Seule() method.
     *
     * @return void
     */
    public function testSetCodifClasse9Seule() {

        $obj = new Dossier2();

        $obj->setCodifClasse9Seule("codifClasse9Seule");
        $this->assertEquals("codifClasse9Seule", $obj->getCodifClasse9Seule());
    }

    /**
     * Tests the setCollectifClientDebut() method.
     *
     * @return void
     */
    public function testSetCollectifClientDebut() {

        $obj = new Dossier2();

        $obj->setCollectifClientDebut("collectifClientDebut");
        $this->assertEquals("collectifClientDebut", $obj->getCollectifClientDebut());
    }

    /**
     * Tests the setCollectifClientDefaut() method.
     *
     * @return void
     */
    public function testSetCollectifClientDefaut() {

        $obj = new Dossier2();

        $obj->setCollectifClientDefaut("collectifClientDefaut");
        $this->assertEquals("collectifClientDefaut", $obj->getCollectifClientDefaut());
    }

    /**
     * Tests the setCollectifClientFin() method.
     *
     * @return void
     */
    public function testSetCollectifClientFin() {

        $obj = new Dossier2();

        $obj->setCollectifClientFin("collectifClientFin");
        $this->assertEquals("collectifClientFin", $obj->getCollectifClientFin());
    }

    /**
     * Tests the setCollectifFrnDebut() method.
     *
     * @return void
     */
    public function testSetCollectifFrnDebut() {

        $obj = new Dossier2();

        $obj->setCollectifFrnDebut("collectifFrnDebut");
        $this->assertEquals("collectifFrnDebut", $obj->getCollectifFrnDebut());
    }

    /**
     * Tests the setCollectifFrnDefaut() method.
     *
     * @return void
     */
    public function testSetCollectifFrnDefaut() {

        $obj = new Dossier2();

        $obj->setCollectifFrnDefaut("collectifFrnDefaut");
        $this->assertEquals("collectifFrnDefaut", $obj->getCollectifFrnDefaut());
    }

    /**
     * Tests the setCollectifFrnFin() method.
     *
     * @return void
     */
    public function testSetCollectifFrnFin() {

        $obj = new Dossier2();

        $obj->setCollectifFrnFin("collectifFrnFin");
        $this->assertEquals("collectifFrnFin", $obj->getCollectifFrnFin());
    }

    /**
     * Tests the setCollectifSocDebut() method.
     *
     * @return void
     */
    public function testSetCollectifSocDebut() {

        $obj = new Dossier2();

        $obj->setCollectifSocDebut("collectifSocDebut");
        $this->assertEquals("collectifSocDebut", $obj->getCollectifSocDebut());
    }

    /**
     * Tests the setCollectifSocFin() method.
     *
     * @return void
     */
    public function testSetCollectifSocFin() {

        $obj = new Dossier2();

        $obj->setCollectifSocFin("collectifSocFin");
        $this->assertEquals("collectifSocFin", $obj->getCollectifSocFin());
    }

    /**
     * Tests the setCombiLettrageAuto() method.
     *
     * @return void
     */
    public function testSetCombiLettrageAuto() {

        $obj = new Dossier2();

        $obj->setCombiLettrageAuto(10);
        $this->assertEquals(10, $obj->getCombiLettrageAuto());
    }

    /**
     * Tests the setCommentaireDossier() method.
     *
     * @return void
     */
    public function testSetCommentaireDossier() {

        $obj = new Dossier2();

        $obj->setCommentaireDossier("commentaireDossier");
        $this->assertEquals("commentaireDossier", $obj->getCommentaireDossier());
    }

    /**
     * Tests the setControlSalaireCptEx() method.
     *
     * @return void
     */
    public function testSetControlSalaireCptEx() {

        $obj = new Dossier2();

        $obj->setControlSalaireCptEx("controlSalaireCptEx");
        $this->assertEquals("controlSalaireCptEx", $obj->getControlSalaireCptEx());
    }

    /**
     * Tests the setControlSalaireObs() method.
     *
     * @return void
     */
    public function testSetControlSalaireObs() {

        $obj = new Dossier2();

        $obj->setControlSalaireObs("controlSalaireObs");
        $this->assertEquals("controlSalaireObs", $obj->getControlSalaireObs());
    }

    /**
     * Tests the setDADS1LivrePaie() method.
     *
     * @return void
     */
    public function testSetDADS1LivrePaie() {

        $obj = new Dossier2();

        $obj->setDADS1LivrePaie(10.092018);
        $this->assertEquals(10.092018, $obj->getDADS1LivrePaie());
    }

    /**
     * Tests the setDADS1Paie() method.
     *
     * @return void
     */
    public function testSetDADS1Paie() {

        $obj = new Dossier2();

        $obj->setDADS1Paie(10.092018);
        $this->assertEquals(10.092018, $obj->getDADS1Paie());
    }

    /**
     * Tests the setDADS1RemuMoins() method.
     *
     * @return void
     */
    public function testSetDADS1RemuMoins() {

        $obj = new Dossier2();

        $obj->setDADS1RemuMoins(10.092018);
        $this->assertEquals(10.092018, $obj->getDADS1RemuMoins());
    }

    /**
     * Tests the setDADS1RemuPlus() method.
     *
     * @return void
     */
    public function testSetDADS1RemuPlus() {

        $obj = new Dossier2();

        $obj->setDADS1RemuPlus(10.092018);
        $this->assertEquals(10.092018, $obj->getDADS1RemuPlus());
    }

    /**
     * Tests the setDSCodeCollab() method.
     *
     * @return void
     */
    public function testSetDSCodeCollab() {

        $obj = new Dossier2();

        $obj->setDSCodeCollab("dSCodeCollab");
        $this->assertEquals("dSCodeCollab", $obj->getDSCodeCollab());
    }

    /**
     * Tests the setDSDateRetour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDSDateRetour() {

        $obj = new Dossier2();

        $obj->setDSDateRetour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDSDateRetour());
    }

    /**
     * Tests the setDSDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDSDateSortie() {

        $obj = new Dossier2();

        $obj->setDSDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDSDateSortie());
    }

    /**
     * Tests the setDateCalculProvCP() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCalculProvCP() {

        $obj = new Dossier2();

        $obj->setDateCalculProvCP(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCalculProvCP());
    }

    /**
     * Tests the setDatePublication() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePublication() {

        $obj = new Dossier2();

        $obj->setDatePublication(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePublication());
    }

    /**
     * Tests the setDateRazEcritures() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRazEcritures() {

        $obj = new Dossier2();

        $obj->setDateRazEcritures(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateRazEcritures());
    }

    /**
     * Tests the setDernierCompteClient() method.
     *
     * @return void
     */
    public function testSetDernierCompteClient() {

        $obj = new Dossier2();

        $obj->setDernierCompteClient("dernierCompteClient");
        $this->assertEquals("dernierCompteClient", $obj->getDernierCompteClient());
    }

    /**
     * Tests the setDernierCompteFrn() method.
     *
     * @return void
     */
    public function testSetDernierCompteFrn() {

        $obj = new Dossier2();

        $obj->setDernierCompteFrn("dernierCompteFrn");
        $this->assertEquals("dernierCompteFrn", $obj->getDernierCompteFrn());
    }

    /**
     * Tests the setDiffLettrageCodeJournal() method.
     *
     * @return void
     */
    public function testSetDiffLettrageCodeJournal() {

        $obj = new Dossier2();

        $obj->setDiffLettrageCodeJournal("diffLettrageCodeJournal");
        $this->assertEquals("diffLettrageCodeJournal", $obj->getDiffLettrageCodeJournal());
    }

    /**
     * Tests the setDiffLettrageCodeLibelle() method.
     *
     * @return void
     */
    public function testSetDiffLettrageCodeLibelle() {

        $obj = new Dossier2();

        $obj->setDiffLettrageCodeLibelle("diffLettrageCodeLibelle");
        $this->assertEquals("diffLettrageCodeLibelle", $obj->getDiffLettrageCodeLibelle());
    }

    /**
     * Tests the setDiffLettrageFolio() method.
     *
     * @return void
     */
    public function testSetDiffLettrageFolio() {

        $obj = new Dossier2();

        $obj->setDiffLettrageFolio(10);
        $this->assertEquals(10, $obj->getDiffLettrageFolio());
    }

    /**
     * Tests the setDiffLettrageGains() method.
     *
     * @return void
     */
    public function testSetDiffLettrageGains() {

        $obj = new Dossier2();

        $obj->setDiffLettrageGains("diffLettrageGains");
        $this->assertEquals("diffLettrageGains", $obj->getDiffLettrageGains());
    }

    /**
     * Tests the setDiffLettrageLibelle() method.
     *
     * @return void
     */
    public function testSetDiffLettrageLibelle() {

        $obj = new Dossier2();

        $obj->setDiffLettrageLibelle("diffLettrageLibelle");
        $this->assertEquals("diffLettrageLibelle", $obj->getDiffLettrageLibelle());
    }

    /**
     * Tests the setDiffLettragePertes() method.
     *
     * @return void
     */
    public function testSetDiffLettragePertes() {

        $obj = new Dossier2();

        $obj->setDiffLettragePertes("diffLettragePertes");
        $this->assertEquals("diffLettragePertes", $obj->getDiffLettragePertes());
    }

    /**
     * Tests the setEcartMaxiLettrageAuto() method.
     *
     * @return void
     */
    public function testSetEcartMaxiLettrageAuto() {

        $obj = new Dossier2();

        $obj->setEcartMaxiLettrageAuto(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartMaxiLettrageAuto());
    }

    /**
     * Tests the setEcartMiniCtrlTva() method.
     *
     * @return void
     */
    public function testSetEcartMiniCtrlTva() {

        $obj = new Dossier2();

        $obj->setEcartMiniCtrlTva(10.092018);
        $this->assertEquals(10.092018, $obj->getEcartMiniCtrlTva());
    }

    /**
     * Tests the setEditerEnCFA() method.
     *
     * @return void
     */
    public function testSetEditerEnCFA() {

        $obj = new Dossier2();

        $obj->setEditerEnCFA(true);
        $this->assertEquals(true, $obj->getEditerEnCFA());
    }

    /**
     * Tests the setEtatProvCPObs() method.
     *
     * @return void
     */
    public function testSetEtatProvCPObs() {

        $obj = new Dossier2();

        $obj->setEtatProvCPObs("etatProvCPObs");
        $this->assertEquals("etatProvCPObs", $obj->getEtatProvCPObs());
    }

    /**
     * Tests the setFaireControleLettrage() method.
     *
     * @return void
     */
    public function testSetFaireControleLettrage() {

        $obj = new Dossier2();

        $obj->setFaireControleLettrage("faireControleLettrage");
        $this->assertEquals("faireControleLettrage", $obj->getFaireControleLettrage());
    }

    /**
     * Tests the setIncrementCompteAuto() method.
     *
     * @return void
     */
    public function testSetIncrementCompteAuto() {

        $obj = new Dossier2();

        $obj->setIncrementCompteAuto(10);
        $this->assertEquals(10, $obj->getIncrementCompteAuto());
    }

    /**
     * Tests the setLibellePlusDe30Carac() method.
     *
     * @return void
     */
    public function testSetLibellePlusDe30Carac() {

        $obj = new Dossier2();

        $obj->setLibellePlusDe30Carac(true);
        $this->assertEquals(true, $obj->getLibellePlusDe30Carac());
    }

    /**
     * Tests the setLienSaiImmos() method.
     *
     * @return void
     */
    public function testSetLienSaiImmos() {

        $obj = new Dossier2();

        $obj->setLienSaiImmos(true);
        $this->assertEquals(true, $obj->getLienSaiImmos());
    }

    /**
     * Tests the setLongueurPieceLettrage() method.
     *
     * @return void
     */
    public function testSetLongueurPieceLettrage() {

        $obj = new Dossier2();

        $obj->setLongueurPieceLettrage(10);
        $this->assertEquals(10, $obj->getLongueurPieceLettrage());
    }

    /**
     * Tests the setNbComptesRaz() method.
     *
     * @return void
     */
    public function testSetNbComptesRaz() {

        $obj = new Dossier2();

        $obj->setNbComptesRaz(10);
        $this->assertEquals(10, $obj->getNbComptesRaz());
    }

    /**
     * Tests the setNbDecimalesMt() method.
     *
     * @return void
     */
    public function testSetNbDecimalesMt() {

        $obj = new Dossier2();

        $obj->setNbDecimalesMt("nbDecimalesMt");
        $this->assertEquals("nbDecimalesMt", $obj->getNbDecimalesMt());
    }

    /**
     * Tests the setNbEcrAFacturerCloture() method.
     *
     * @return void
     */
    public function testSetNbEcrAFacturerCloture() {

        $obj = new Dossier2();

        $obj->setNbEcrAFacturerCloture(10);
        $this->assertEquals(10, $obj->getNbEcrAFacturerCloture());
    }

    /**
     * Tests the setNbEcrituresRaz() method.
     *
     * @return void
     */
    public function testSetNbEcrituresRaz() {

        $obj = new Dossier2();

        $obj->setNbEcrituresRaz(10);
        $this->assertEquals(10, $obj->getNbEcrituresRaz());
    }

    /**
     * Tests the setNbJourBaseCP() method.
     *
     * @return void
     */
    public function testSetNbJourBaseCP() {

        $obj = new Dossier2();

        $obj->setNbJourBaseCP(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJourBaseCP());
    }

    /**
     * Tests the setNivRuptClasse0() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse0() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse0("nivRuptClasse0");
        $this->assertEquals("nivRuptClasse0", $obj->getNivRuptClasse0());
    }

    /**
     * Tests the setNivRuptClasse1() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse1() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse1("nivRuptClasse1");
        $this->assertEquals("nivRuptClasse1", $obj->getNivRuptClasse1());
    }

    /**
     * Tests the setNivRuptClasse2() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse2() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse2("nivRuptClasse2");
        $this->assertEquals("nivRuptClasse2", $obj->getNivRuptClasse2());
    }

    /**
     * Tests the setNivRuptClasse3() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse3() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse3("nivRuptClasse3");
        $this->assertEquals("nivRuptClasse3", $obj->getNivRuptClasse3());
    }

    /**
     * Tests the setNivRuptClasse4() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse4() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse4("nivRuptClasse4");
        $this->assertEquals("nivRuptClasse4", $obj->getNivRuptClasse4());
    }

    /**
     * Tests the setNivRuptClasse5() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse5() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse5("nivRuptClasse5");
        $this->assertEquals("nivRuptClasse5", $obj->getNivRuptClasse5());
    }

    /**
     * Tests the setNivRuptClasse6() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse6() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse6("nivRuptClasse6");
        $this->assertEquals("nivRuptClasse6", $obj->getNivRuptClasse6());
    }

    /**
     * Tests the setNivRuptClasse7() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse7() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse7("nivRuptClasse7");
        $this->assertEquals("nivRuptClasse7", $obj->getNivRuptClasse7());
    }

    /**
     * Tests the setNivRuptClasse8() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse8() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse8("nivRuptClasse8");
        $this->assertEquals("nivRuptClasse8", $obj->getNivRuptClasse8());
    }

    /**
     * Tests the setNivRuptClasse9() method.
     *
     * @return void
     */
    public function testSetNivRuptClasse9() {

        $obj = new Dossier2();

        $obj->setNivRuptClasse9("nivRuptClasse9");
        $this->assertEquals("nivRuptClasse9", $obj->getNivRuptClasse9());
    }

    /**
     * Tests the setPositionPieceLettrage() method.
     *
     * @return void
     */
    public function testSetPositionPieceLettrage() {

        $obj = new Dossier2();

        $obj->setPositionPieceLettrage(10);
        $this->assertEquals(10, $obj->getPositionPieceLettrage());
    }

    /**
     * Tests the setProchainLotEcrit() method.
     *
     * @return void
     */
    public function testSetProchainLotEcrit() {

        $obj = new Dossier2();

        $obj->setProchainLotEcrit(10);
        $this->assertEquals(10, $obj->getProchainLotEcrit());
    }

    /**
     * Tests the setProchainLotFactor() method.
     *
     * @return void
     */
    public function testSetProchainLotFactor() {

        $obj = new Dossier2();

        $obj->setProchainLotFactor(10);
        $this->assertEquals(10, $obj->getProchainLotFactor());
    }

    /**
     * Tests the setProchainNumEcrEco() method.
     *
     * @return void
     */
    public function testSetProchainNumEcrEco() {

        $obj = new Dossier2();

        $obj->setProchainNumEcrEco(10);
        $this->assertEquals(10, $obj->getProchainNumEcrEco());
    }

    /**
     * Tests the setProchainNumLotVMP() method.
     *
     * @return void
     */
    public function testSetProchainNumLotVMP() {

        $obj = new Dossier2();

        $obj->setProchainNumLotVMP(10);
        $this->assertEquals(10, $obj->getProchainNumLotVMP());
    }

    /**
     * Tests the setProvCPCptBrut() method.
     *
     * @return void
     */
    public function testSetProvCPCptBrut() {

        $obj = new Dossier2();

        $obj->setProvCPCptBrut("provCPCptBrut");
        $this->assertEquals("provCPCptBrut", $obj->getProvCPCptBrut());
    }

    /**
     * Tests the setProvCPCptCAPCP() method.
     *
     * @return void
     */
    public function testSetProvCPCptCAPCP() {

        $obj = new Dossier2();

        $obj->setProvCPCptCAPCP("provCPCptCAPCP");
        $this->assertEquals("provCPCptCAPCP", $obj->getProvCPCptCAPCP());
    }

    /**
     * Tests the setProvCPCptCAPCh() method.
     *
     * @return void
     */
    public function testSetProvCPCptCAPCh() {

        $obj = new Dossier2();

        $obj->setProvCPCptCAPCh("provCPCptCAPCh");
        $this->assertEquals("provCPCptCAPCh", $obj->getProvCPCptCAPCh());
    }

    /**
     * Tests the setProvCPCptCharges() method.
     *
     * @return void
     */
    public function testSetProvCPCptCharges() {

        $obj = new Dossier2();

        $obj->setProvCPCptCharges("provCPCptCharges");
        $this->assertEquals("provCPCptCharges", $obj->getProvCPCptCharges());
    }

    /**
     * Tests the setProvMini() method.
     *
     * @return void
     */
    public function testSetProvMini() {

        $obj = new Dossier2();

        $obj->setProvMini(10.092018);
        $this->assertEquals(10.092018, $obj->getProvMini());
    }

    /**
     * Tests the setPublication() method.
     *
     * @return void
     */
    public function testSetPublication() {

        $obj = new Dossier2();

        $obj->setPublication(true);
        $this->assertEquals(true, $obj->getPublication());
    }

    /**
     * Tests the setQIMG2CptEncours() method.
     *
     * @return void
     */
    public function testSetQIMG2CptEncours() {

        $obj = new Dossier2();

        $obj->setQIMG2CptEncours(10);
        $this->assertEquals(10, $obj->getQIMG2CptEncours());
    }

    /**
     * Tests the setQIMG2CptEnvoi() method.
     *
     * @return void
     */
    public function testSetQIMG2CptEnvoi() {

        $obj = new Dossier2();

        $obj->setQIMG2CptEnvoi(10);
        $this->assertEquals(10, $obj->getQIMG2CptEnvoi());
    }

    /**
     * Tests the setRFF_CptExploitant() method.
     *
     * @return void
     */
    public function testSetRFF_CptExploitant() {

        $obj = new Dossier2();

        $obj->setRFF_CptExploitant("rFF_CptExploitant");
        $this->assertEquals("rFF_CptExploitant", $obj->getRFF_CptExploitant());
    }

    /**
     * Tests the setRFF_CptInterets() method.
     *
     * @return void
     */
    public function testSetRFF_CptInterets() {

        $obj = new Dossier2();

        $obj->setRFF_CptInterets("rFF_CptInterets");
        $this->assertEquals("rFF_CptInterets", $obj->getRFF_CptInterets());
    }

    /**
     * Tests the setRFF_CptRegul() method.
     *
     * @return void
     */
    public function testSetRFF_CptRegul() {

        $obj = new Dossier2();

        $obj->setRFF_CptRegul("rFF_CptRegul");
        $this->assertEquals("rFF_CptRegul", $obj->getRFF_CptRegul());
    }

    /**
     * Tests the setRFF_DateLotEcr() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetRFF_DateLotEcr() {

        $obj = new Dossier2();

        $obj->setRFF_DateLotEcr(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getRFF_DateLotEcr());
    }

    /**
     * Tests the setRFF_DecouvertsAvances() method.
     *
     * @return void
     */
    public function testSetRFF_DecouvertsAvances() {

        $obj = new Dossier2();

        $obj->setRFF_DecouvertsAvances(10.092018);
        $this->assertEquals(10.092018, $obj->getRFF_DecouvertsAvances());
    }

    /**
     * Tests the setRFF_InteretsEmprunts() method.
     *
     * @return void
     */
    public function testSetRFF_InteretsEmprunts() {

        $obj = new Dossier2();

        $obj->setRFF_InteretsEmprunts(10.092018);
        $this->assertEquals(10.092018, $obj->getRFF_InteretsEmprunts());
    }

    /**
     * Tests the setRFF_Limite() method.
     *
     * @return void
     */
    public function testSetRFF_Limite() {

        $obj = new Dossier2();

        $obj->setRFF_Limite(10.092018);
        $this->assertEquals(10.092018, $obj->getRFF_Limite());
    }

    /**
     * Tests the setRFF_MttRFF() method.
     *
     * @return void
     */
    public function testSetRFF_MttRFF() {

        $obj = new Dossier2();

        $obj->setRFF_MttRFF(10.092018);
        $this->assertEquals(10.092018, $obj->getRFF_MttRFF());
    }

    /**
     * Tests the setRFF_MttRegul() method.
     *
     * @return void
     */
    public function testSetRFF_MttRegul() {

        $obj = new Dossier2();

        $obj->setRFF_MttRegul(10.092018);
        $this->assertEquals(10.092018, $obj->getRFF_MttRegul());
    }

    /**
     * Tests the setRFF_NumLotEcr() method.
     *
     * @return void
     */
    public function testSetRFF_NumLotEcr() {

        $obj = new Dossier2();

        $obj->setRFF_NumLotEcr(10);
        $this->assertEquals(10, $obj->getRFF_NumLotEcr());
    }

    /**
     * Tests the setRFF_Type() method.
     *
     * @return void
     */
    public function testSetRFF_Type() {

        $obj = new Dossier2();

        $obj->setRFF_Type(10);
        $this->assertEquals(10, $obj->getRFF_Type());
    }

    /**
     * Tests the setRappDADS1Obs() method.
     *
     * @return void
     */
    public function testSetRappDADS1Obs() {

        $obj = new Dossier2();

        $obj->setRappDADS1Obs("rappDADS1Obs");
        $this->assertEquals("rappDADS1Obs", $obj->getRappDADS1Obs());
    }

    /**
     * Tests the setRelanceAdresseCpt() method.
     *
     * @return void
     */
    public function testSetRelanceAdresseCpt() {

        $obj = new Dossier2();

        $obj->setRelanceAdresseCpt(true);
        $this->assertEquals(true, $obj->getRelanceAdresseCpt());
    }

    /**
     * Tests the setTexteRelance0() method.
     *
     * @return void
     */
    public function testSetTexteRelance0() {

        $obj = new Dossier2();

        $obj->setTexteRelance0("texteRelance0");
        $this->assertEquals("texteRelance0", $obj->getTexteRelance0());
    }

    /**
     * Tests the setTexteRelance1() method.
     *
     * @return void
     */
    public function testSetTexteRelance1() {

        $obj = new Dossier2();

        $obj->setTexteRelance1("texteRelance1");
        $this->assertEquals("texteRelance1", $obj->getTexteRelance1());
    }

    /**
     * Tests the setTexteRelance2() method.
     *
     * @return void
     */
    public function testSetTexteRelance2() {

        $obj = new Dossier2();

        $obj->setTexteRelance2("texteRelance2");
        $this->assertEquals("texteRelance2", $obj->getTexteRelance2());
    }

    /**
     * Tests the setTexteRelance3() method.
     *
     * @return void
     */
    public function testSetTexteRelance3() {

        $obj = new Dossier2();

        $obj->setTexteRelance3("texteRelance3");
        $this->assertEquals("texteRelance3", $obj->getTexteRelance3());
    }

    /**
     * Tests the setTexteRelance4() method.
     *
     * @return void
     */
    public function testSetTexteRelance4() {

        $obj = new Dossier2();

        $obj->setTexteRelance4("texteRelance4");
        $this->assertEquals("texteRelance4", $obj->getTexteRelance4());
    }

    /**
     * Tests the setTresoComptesAExclure() method.
     *
     * @return void
     */
    public function testSetTresoComptesAExclure() {

        $obj = new Dossier2();

        $obj->setTresoComptesAExclure("tresoComptesAExclure");
        $this->assertEquals("tresoComptesAExclure", $obj->getTresoComptesAExclure());
    }

    /**
     * Tests the setUtiliseQuantite2() method.
     *
     * @return void
     */
    public function testSetUtiliseQuantite2() {

        $obj = new Dossier2();

        $obj->setUtiliseQuantite2(true);
        $this->assertEquals(true, $obj->getUtiliseQuantite2());
    }
}
