<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\Proprete;

use DateTime;
use WBW\Library\Core\Quadratus\Model\Proprete\BonTravPrev;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Bon trav prev model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\Proprete
 */
class BonTravPrevTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonTravPrev();

        $this->assertNull($obj->getAdBTBTQ());
        $this->assertNull($obj->getAdBTBureauDistributeur());
        $this->assertNull($obj->getAdBTCivilite());
        $this->assertNull($obj->getAdBTCodePays());
        $this->assertNull($obj->getAdBTCodePostal());
        $this->assertNull($obj->getAdBTComplement());
        $this->assertNull($obj->getAdBTNom());
        $this->assertNull($obj->getAdBTNomSuite());
        $this->assertNull($obj->getAdBTNomVoie());
        $this->assertNull($obj->getAdBTNumVoie());
        $this->assertNull($obj->getAdFBTQ());
        $this->assertNull($obj->getAdFBureauDistributeur());
        $this->assertNull($obj->getAdFCivilite());
        $this->assertNull($obj->getAdFCodePays());
        $this->assertNull($obj->getAdFCodePostal());
        $this->assertNull($obj->getAdFComplement());
        $this->assertNull($obj->getAdFNom());
        $this->assertNull($obj->getAdFNomSuite());
        $this->assertNull($obj->getAdFNomSuite2());
        $this->assertNull($obj->getAdFNomSuite3());
        $this->assertNull($obj->getAdFNomVoie());
        $this->assertNull($obj->getAdFNumVoie());
        $this->assertNull($obj->getAdresseBTSaisie());
        $this->assertNull($obj->getAdresseFacturationSaisie());
        $this->assertNull($obj->getBTCopie());
        $this->assertNull($obj->getBTDevisDejaFacture());
        $this->assertNull($obj->getBTValide());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeEquipe());
        $this->assertNull($obj->getCodeRegroupementDevis());
        $this->assertNull($obj->getCodeTacheType());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCritereBool1());
        $this->assertNull($obj->getCritereBool2());
        $this->assertNull($obj->getCritereByte1());
        $this->assertNull($obj->getCritereListe1());
        $this->assertNull($obj->getCritereListe2());
        $this->assertNull($obj->getCritereNumerique1());
        $this->assertNull($obj->getCritereNumerique2());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getCritereTexte2());
        $this->assertNull($obj->getDatePassage());
        $this->assertNull($obj->getDatePremierPassage());
        $this->assertNull($obj->getDateTransfert());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getDureePointee());
        $this->assertNull($obj->getDureePrevue());
        $this->assertNull($obj->getDureeValidee());
        $this->assertNull($obj->getEmployeSigneMob());
        $this->assertNull($obj->getGestionPlanning());
        $this->assertNull($obj->getGuidMob());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMontantHTDevis());
        $this->assertNull($obj->getNbJoursPointes());
        $this->assertNull($obj->getNbJoursPrevus());
        $this->assertNull($obj->getNombreEmployes());
        $this->assertNull($obj->getNonTraite());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroPJ());
        $this->assertNull($obj->getObservationClient());
        $this->assertNull($obj->getObservationInterne());
        $this->assertNull($obj->getOccasionnel());
        $this->assertNull($obj->getPlusieursJours());
        $this->assertNull($obj->getPlusieursMois());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getProratise());
        $this->assertNull($obj->getSignataire());
        $this->assertNull($obj->getSigne());
        $this->assertNull($obj->getStartMob());
        $this->assertNull($obj->getTypeBT());
        $this->assertNull($obj->getTypeBTSaisi());
        $this->assertNull($obj->getUniqIDBlocage());
        $this->assertNull($obj->getVia());
        $this->assertNull($obj->getreference1Devis());
        $this->assertNull($obj->getreference2Devis());
    }

    /**
     * Tests the setAdBTBTQ() method.
     *
     * @return void
     */
    public function testSetAdBTBTQ() {

        $obj = new BonTravPrev();

        $obj->setAdBTBTQ("adBTBTQ");
        $this->assertEquals("adBTBTQ", $obj->getAdBTBTQ());
    }

    /**
     * Tests the setAdBTBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdBTBureauDistributeur() {

        $obj = new BonTravPrev();

        $obj->setAdBTBureauDistributeur("adBTBureauDistributeur");
        $this->assertEquals("adBTBureauDistributeur", $obj->getAdBTBureauDistributeur());
    }

    /**
     * Tests the setAdBTCivilite() method.
     *
     * @return void
     */
    public function testSetAdBTCivilite() {

        $obj = new BonTravPrev();

        $obj->setAdBTCivilite("adBTCivilite");
        $this->assertEquals("adBTCivilite", $obj->getAdBTCivilite());
    }

    /**
     * Tests the setAdBTCodePays() method.
     *
     * @return void
     */
    public function testSetAdBTCodePays() {

        $obj = new BonTravPrev();

        $obj->setAdBTCodePays("adBTCodePays");
        $this->assertEquals("adBTCodePays", $obj->getAdBTCodePays());
    }

    /**
     * Tests the setAdBTCodePostal() method.
     *
     * @return void
     */
    public function testSetAdBTCodePostal() {

        $obj = new BonTravPrev();

        $obj->setAdBTCodePostal("adBTCodePostal");
        $this->assertEquals("adBTCodePostal", $obj->getAdBTCodePostal());
    }

    /**
     * Tests the setAdBTComplement() method.
     *
     * @return void
     */
    public function testSetAdBTComplement() {

        $obj = new BonTravPrev();

        $obj->setAdBTComplement("adBTComplement");
        $this->assertEquals("adBTComplement", $obj->getAdBTComplement());
    }

    /**
     * Tests the setAdBTNom() method.
     *
     * @return void
     */
    public function testSetAdBTNom() {

        $obj = new BonTravPrev();

        $obj->setAdBTNom("adBTNom");
        $this->assertEquals("adBTNom", $obj->getAdBTNom());
    }

    /**
     * Tests the setAdBTNomSuite() method.
     *
     * @return void
     */
    public function testSetAdBTNomSuite() {

        $obj = new BonTravPrev();

        $obj->setAdBTNomSuite("adBTNomSuite");
        $this->assertEquals("adBTNomSuite", $obj->getAdBTNomSuite());
    }

    /**
     * Tests the setAdBTNomVoie() method.
     *
     * @return void
     */
    public function testSetAdBTNomVoie() {

        $obj = new BonTravPrev();

        $obj->setAdBTNomVoie("adBTNomVoie");
        $this->assertEquals("adBTNomVoie", $obj->getAdBTNomVoie());
    }

    /**
     * Tests the setAdBTNumVoie() method.
     *
     * @return void
     */
    public function testSetAdBTNumVoie() {

        $obj = new BonTravPrev();

        $obj->setAdBTNumVoie("adBTNumVoie");
        $this->assertEquals("adBTNumVoie", $obj->getAdBTNumVoie());
    }

    /**
     * Tests the setAdFBTQ() method.
     *
     * @return void
     */
    public function testSetAdFBTQ() {

        $obj = new BonTravPrev();

        $obj->setAdFBTQ("adFBTQ");
        $this->assertEquals("adFBTQ", $obj->getAdFBTQ());
    }

    /**
     * Tests the setAdFBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur() {

        $obj = new BonTravPrev();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Tests the setAdFCivilite() method.
     *
     * @return void
     */
    public function testSetAdFCivilite() {

        $obj = new BonTravPrev();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Tests the setAdFCodePays() method.
     *
     * @return void
     */
    public function testSetAdFCodePays() {

        $obj = new BonTravPrev();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Tests the setAdFCodePostal() method.
     *
     * @return void
     */
    public function testSetAdFCodePostal() {

        $obj = new BonTravPrev();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Tests the setAdFComplement() method.
     *
     * @return void
     */
    public function testSetAdFComplement() {

        $obj = new BonTravPrev();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Tests the setAdFNom() method.
     *
     * @return void
     */
    public function testSetAdFNom() {

        $obj = new BonTravPrev();

        $obj->setAdFNom("adFNom");
        $this->assertEquals("adFNom", $obj->getAdFNom());
    }

    /**
     * Tests the setAdFNomSuite() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite() {

        $obj = new BonTravPrev();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Tests the setAdFNomSuite2() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite2() {

        $obj = new BonTravPrev();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Tests the setAdFNomSuite3() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite3() {

        $obj = new BonTravPrev();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Tests the setAdFNomVoie() method.
     *
     * @return void
     */
    public function testSetAdFNomVoie() {

        $obj = new BonTravPrev();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Tests the setAdFNumVoie() method.
     *
     * @return void
     */
    public function testSetAdFNumVoie() {

        $obj = new BonTravPrev();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Tests the setAdresseBTSaisie() method.
     *
     * @return void
     */
    public function testSetAdresseBTSaisie() {

        $obj = new BonTravPrev();

        $obj->setAdresseBTSaisie(true);
        $this->assertEquals(true, $obj->getAdresseBTSaisie());
    }

    /**
     * Tests the setAdresseFacturationSaisie() method.
     *
     * @return void
     */
    public function testSetAdresseFacturationSaisie() {

        $obj = new BonTravPrev();

        $obj->setAdresseFacturationSaisie(true);
        $this->assertEquals(true, $obj->getAdresseFacturationSaisie());
    }

    /**
     * Tests the setBTCopie() method.
     *
     * @return void
     */
    public function testSetBTCopie() {

        $obj = new BonTravPrev();

        $obj->setBTCopie(true);
        $this->assertEquals(true, $obj->getBTCopie());
    }

    /**
     * Tests the setBTDevisDejaFacture() method.
     *
     * @return void
     */
    public function testSetBTDevisDejaFacture() {

        $obj = new BonTravPrev();

        $obj->setBTDevisDejaFacture(true);
        $this->assertEquals(true, $obj->getBTDevisDejaFacture());
    }

    /**
     * Tests the setBTValide() method.
     *
     * @return void
     */
    public function testSetBTValide() {

        $obj = new BonTravPrev();

        $obj->setBTValide(true);
        $this->assertEquals(true, $obj->getBTValide());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new BonTravPrev();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new BonTravPrev();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new BonTravPrev();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new BonTravPrev();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeEquipe() method.
     *
     * @return void
     */
    public function testSetCodeEquipe() {

        $obj = new BonTravPrev();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests the setCodeRegroupementDevis() method.
     *
     * @return void
     */
    public function testSetCodeRegroupementDevis() {

        $obj = new BonTravPrev();

        $obj->setCodeRegroupementDevis("codeRegroupementDevis");
        $this->assertEquals("codeRegroupementDevis", $obj->getCodeRegroupementDevis());
    }

    /**
     * Tests the setCodeTacheType() method.
     *
     * @return void
     */
    public function testSetCodeTacheType() {

        $obj = new BonTravPrev();

        $obj->setCodeTacheType("codeTacheType");
        $this->assertEquals("codeTacheType", $obj->getCodeTacheType());
    }

    /**
     * Tests the setCodeTournee() method.
     *
     * @return void
     */
    public function testSetCodeTournee() {

        $obj = new BonTravPrev();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests the setCritereBool1() method.
     *
     * @return void
     */
    public function testSetCritereBool1() {

        $obj = new BonTravPrev();

        $obj->setCritereBool1(true);
        $this->assertEquals(true, $obj->getCritereBool1());
    }

    /**
     * Tests the setCritereBool2() method.
     *
     * @return void
     */
    public function testSetCritereBool2() {

        $obj = new BonTravPrev();

        $obj->setCritereBool2(true);
        $this->assertEquals(true, $obj->getCritereBool2());
    }

    /**
     * Tests the setCritereByte1() method.
     *
     * @return void
     */
    public function testSetCritereByte1() {

        $obj = new BonTravPrev();

        $obj->setCritereByte1("critereByte1");
        $this->assertEquals("critereByte1", $obj->getCritereByte1());
    }

    /**
     * Tests the setCritereListe1() method.
     *
     * @return void
     */
    public function testSetCritereListe1() {

        $obj = new BonTravPrev();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Tests the setCritereListe2() method.
     *
     * @return void
     */
    public function testSetCritereListe2() {

        $obj = new BonTravPrev();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Tests the setCritereNumerique1() method.
     *
     * @return void
     */
    public function testSetCritereNumerique1() {

        $obj = new BonTravPrev();

        $obj->setCritereNumerique1(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique1());
    }

    /**
     * Tests the setCritereNumerique2() method.
     *
     * @return void
     */
    public function testSetCritereNumerique2() {

        $obj = new BonTravPrev();

        $obj->setCritereNumerique2(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique2());
    }

    /**
     * Tests the setCritereTexte1() method.
     *
     * @return void
     */
    public function testSetCritereTexte1() {

        $obj = new BonTravPrev();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Tests the setCritereTexte2() method.
     *
     * @return void
     */
    public function testSetCritereTexte2() {

        $obj = new BonTravPrev();

        $obj->setCritereTexte2("critereTexte2");
        $this->assertEquals("critereTexte2", $obj->getCritereTexte2());
    }

    /**
     * Tests the setDatePassage() method.
     *
     * @return void
     */
    public function testSetDatePassage() {

        $obj = new BonTravPrev();

        $obj->setDatePassage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePassage());
    }

    /**
     * Tests the setDatePremierPassage() method.
     *
     * @return void
     */
    public function testSetDatePremierPassage() {

        $obj = new BonTravPrev();

        $obj->setDatePremierPassage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePremierPassage());
    }

    /**
     * Tests the setDateTransfert() method.
     *
     * @return void
     */
    public function testSetDateTransfert() {

        $obj = new BonTravPrev();

        $obj->setDateTransfert(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateTransfert());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new BonTravPrev();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setDureePointee() method.
     *
     * @return void
     */
    public function testSetDureePointee() {

        $obj = new BonTravPrev();

        $obj->setDureePointee(10.092018);
        $this->assertEquals(10.092018, $obj->getDureePointee());
    }

    /**
     * Tests the setDureePrevue() method.
     *
     * @return void
     */
    public function testSetDureePrevue() {

        $obj = new BonTravPrev();

        $obj->setDureePrevue(10.092018);
        $this->assertEquals(10.092018, $obj->getDureePrevue());
    }

    /**
     * Tests the setDureeValidee() method.
     *
     * @return void
     */
    public function testSetDureeValidee() {

        $obj = new BonTravPrev();

        $obj->setDureeValidee(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeValidee());
    }

    /**
     * Tests the setEmployeSigneMob() method.
     *
     * @return void
     */
    public function testSetEmployeSigneMob() {

        $obj = new BonTravPrev();

        $obj->setEmployeSigneMob("employeSigneMob");
        $this->assertEquals("employeSigneMob", $obj->getEmployeSigneMob());
    }

    /**
     * Tests the setGestionPlanning() method.
     *
     * @return void
     */
    public function testSetGestionPlanning() {

        $obj = new BonTravPrev();

        $obj->setGestionPlanning(true);
        $this->assertEquals(true, $obj->getGestionPlanning());
    }

    /**
     * Tests the setGuidMob() method.
     *
     * @return void
     */
    public function testSetGuidMob() {

        $obj = new BonTravPrev();

        $obj->setGuidMob("guidMob");
        $this->assertEquals("guidMob", $obj->getGuidMob());
    }

    /**
     * Tests the setHeureDeb() method.
     *
     * @return void
     */
    public function testSetHeureDeb() {

        $obj = new BonTravPrev();

        $obj->setHeureDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
    }

    /**
     * Tests the setLatitude() method.
     *
     * @return void
     */
    public function testSetLatitude() {

        $obj = new BonTravPrev();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new BonTravPrev();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new BonTravPrev();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setLongitude() method.
     *
     * @return void
     */
    public function testSetLongitude() {

        $obj = new BonTravPrev();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Tests the setMontantHTDevis() method.
     *
     * @return void
     */
    public function testSetMontantHTDevis() {

        $obj = new BonTravPrev();

        $obj->setMontantHTDevis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHTDevis());
    }

    /**
     * Tests the setNbJoursPointes() method.
     *
     * @return void
     */
    public function testSetNbJoursPointes() {

        $obj = new BonTravPrev();

        $obj->setNbJoursPointes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursPointes());
    }

    /**
     * Tests the setNbJoursPrevus() method.
     *
     * @return void
     */
    public function testSetNbJoursPrevus() {

        $obj = new BonTravPrev();

        $obj->setNbJoursPrevus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursPrevus());
    }

    /**
     * Tests the setNombreEmployes() method.
     *
     * @return void
     */
    public function testSetNombreEmployes() {

        $obj = new BonTravPrev();

        $obj->setNombreEmployes(10);
        $this->assertEquals(10, $obj->getNombreEmployes());
    }

    /**
     * Tests the setNonTraite() method.
     *
     * @return void
     */
    public function testSetNonTraite() {

        $obj = new BonTravPrev();

        $obj->setNonTraite(true);
        $this->assertEquals(true, $obj->getNonTraite());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new BonTravPrev();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setNumeroDevis() method.
     *
     * @return void
     */
    public function testSetNumeroDevis() {

        $obj = new BonTravPrev();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests the setNumeroFacture() method.
     *
     * @return void
     */
    public function testSetNumeroFacture() {

        $obj = new BonTravPrev();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests the setNumeroPJ() method.
     *
     * @return void
     */
    public function testSetNumeroPJ() {

        $obj = new BonTravPrev();

        $obj->setNumeroPJ(10);
        $this->assertEquals(10, $obj->getNumeroPJ());
    }

    /**
     * Tests the setObservationClient() method.
     *
     * @return void
     */
    public function testSetObservationClient() {

        $obj = new BonTravPrev();

        $obj->setObservationClient("observationClient");
        $this->assertEquals("observationClient", $obj->getObservationClient());
    }

    /**
     * Tests the setObservationInterne() method.
     *
     * @return void
     */
    public function testSetObservationInterne() {

        $obj = new BonTravPrev();

        $obj->setObservationInterne("observationInterne");
        $this->assertEquals("observationInterne", $obj->getObservationInterne());
    }

    /**
     * Tests the setOccasionnel() method.
     *
     * @return void
     */
    public function testSetOccasionnel() {

        $obj = new BonTravPrev();

        $obj->setOccasionnel(true);
        $this->assertEquals(true, $obj->getOccasionnel());
    }

    /**
     * Tests the setPlusieursJours() method.
     *
     * @return void
     */
    public function testSetPlusieursJours() {

        $obj = new BonTravPrev();

        $obj->setPlusieursJours(true);
        $this->assertEquals(true, $obj->getPlusieursJours());
    }

    /**
     * Tests the setPlusieursMois() method.
     *
     * @return void
     */
    public function testSetPlusieursMois() {

        $obj = new BonTravPrev();

        $obj->setPlusieursMois(true);
        $this->assertEquals(true, $obj->getPlusieursMois());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new BonTravPrev();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setProratise() method.
     *
     * @return void
     */
    public function testSetProratise() {

        $obj = new BonTravPrev();

        $obj->setProratise(true);
        $this->assertEquals(true, $obj->getProratise());
    }

    /**
     * Tests the setSignataire() method.
     *
     * @return void
     */
    public function testSetSignataire() {

        $obj = new BonTravPrev();

        $obj->setSignataire("signataire");
        $this->assertEquals("signataire", $obj->getSignataire());
    }

    /**
     * Tests the setSigne() method.
     *
     * @return void
     */
    public function testSetSigne() {

        $obj = new BonTravPrev();

        $obj->setSigne(true);
        $this->assertEquals(true, $obj->getSigne());
    }

    /**
     * Tests the setStartMob() method.
     *
     * @return void
     */
    public function testSetStartMob() {

        $obj = new BonTravPrev();

        $obj->setStartMob("startMob");
        $this->assertEquals("startMob", $obj->getStartMob());
    }

    /**
     * Tests the setTypeBT() method.
     *
     * @return void
     */
    public function testSetTypeBT() {

        $obj = new BonTravPrev();

        $obj->setTypeBT("typeBT");
        $this->assertEquals("typeBT", $obj->getTypeBT());
    }

    /**
     * Tests the setTypeBTSaisi() method.
     *
     * @return void
     */
    public function testSetTypeBTSaisi() {

        $obj = new BonTravPrev();

        $obj->setTypeBTSaisi("typeBTSaisi");
        $this->assertEquals("typeBTSaisi", $obj->getTypeBTSaisi());
    }

    /**
     * Tests the setUniqIDBlocage() method.
     *
     * @return void
     */
    public function testSetUniqIDBlocage() {

        $obj = new BonTravPrev();

        $obj->setUniqIDBlocage("uniqIDBlocage");
        $this->assertEquals("uniqIDBlocage", $obj->getUniqIDBlocage());
    }

    /**
     * Tests the setVia() method.
     *
     * @return void
     */
    public function testSetVia() {

        $obj = new BonTravPrev();

        $obj->setVia("via");
        $this->assertEquals("via", $obj->getVia());
    }

    /**
     * Tests the setreference1Devis() method.
     *
     * @return void
     */
    public function testSetreference1Devis() {

        $obj = new BonTravPrev();

        $obj->setreference1Devis("reference1Devis");
        $this->assertEquals("reference1Devis", $obj->getreference1Devis());
    }

    /**
     * Tests the setreference2Devis() method.
     *
     * @return void
     */
    public function testSetreference2Devis() {

        $obj = new BonTravPrev();

        $obj->setreference2Devis("reference2Devis");
        $this->assertEquals("reference2Devis", $obj->getreference2Devis());
    }

}
