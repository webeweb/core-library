<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonsTravaux;

/**
 * Bons travaux model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BonsTravaux();

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
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFrequence());
        $this->assertNull($obj->getCodeTacheBT());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCritereListe1());
        $this->assertNull($obj->getCritereListe2());
        $this->assertNull($obj->getCritereNumerique1());
        $this->assertNull($obj->getCritereNumerique2());
        $this->assertNull($obj->getCritereTexte1());
        $this->assertNull($obj->getCritereTexte2());
        $this->assertNull($obj->getDateDernierPassage());
        $this->assertNull($obj->getDateFinValidite());
        $this->assertNull($obj->getDatePremierPassage());
        $this->assertNull($obj->getDateValidite());
        $this->assertNull($obj->getDescription());
        $this->assertNull($obj->getEquipe());
        $this->assertNull($obj->getFrequence());
        $this->assertNull($obj->getFrequenceSuite());
        $this->assertNull($obj->getGestionPlanning());
        $this->assertNull($obj->getHeureDeb());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMentionSpeciale());
        $this->assertNull($obj->getNbHeures());
        $this->assertNull($obj->getNbJours());
        $this->assertNull($obj->getNumBT());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getSaisieInterJour());
        $this->assertNull($obj->getTravailleDimanche());
        $this->assertNull($obj->getTravailleJoursFeries());
        $this->assertNull($obj->getTravailleSamedi());
        $this->assertNull($obj->getTypeFrequence());
        $this->assertNull($obj->getUnBonParMois());
    }

    /**
     * Tests the setAdBTBTQ() method.
     *
     * @return void
     */
    public function testSetAdBTBTQ() {

        $obj = new BonsTravaux();

        $obj->setAdBTBTQ("adBTBTQ");
        $this->assertEquals("adBTBTQ", $obj->getAdBTBTQ());
    }

    /**
     * Tests the setAdBTBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdBTBureauDistributeur() {

        $obj = new BonsTravaux();

        $obj->setAdBTBureauDistributeur("adBTBureauDistributeur");
        $this->assertEquals("adBTBureauDistributeur", $obj->getAdBTBureauDistributeur());
    }

    /**
     * Tests the setAdBTCivilite() method.
     *
     * @return void
     */
    public function testSetAdBTCivilite() {

        $obj = new BonsTravaux();

        $obj->setAdBTCivilite("adBTCivilite");
        $this->assertEquals("adBTCivilite", $obj->getAdBTCivilite());
    }

    /**
     * Tests the setAdBTCodePays() method.
     *
     * @return void
     */
    public function testSetAdBTCodePays() {

        $obj = new BonsTravaux();

        $obj->setAdBTCodePays("adBTCodePays");
        $this->assertEquals("adBTCodePays", $obj->getAdBTCodePays());
    }

    /**
     * Tests the setAdBTCodePostal() method.
     *
     * @return void
     */
    public function testSetAdBTCodePostal() {

        $obj = new BonsTravaux();

        $obj->setAdBTCodePostal("adBTCodePostal");
        $this->assertEquals("adBTCodePostal", $obj->getAdBTCodePostal());
    }

    /**
     * Tests the setAdBTComplement() method.
     *
     * @return void
     */
    public function testSetAdBTComplement() {

        $obj = new BonsTravaux();

        $obj->setAdBTComplement("adBTComplement");
        $this->assertEquals("adBTComplement", $obj->getAdBTComplement());
    }

    /**
     * Tests the setAdBTNom() method.
     *
     * @return void
     */
    public function testSetAdBTNom() {

        $obj = new BonsTravaux();

        $obj->setAdBTNom("adBTNom");
        $this->assertEquals("adBTNom", $obj->getAdBTNom());
    }

    /**
     * Tests the setAdBTNomSuite() method.
     *
     * @return void
     */
    public function testSetAdBTNomSuite() {

        $obj = new BonsTravaux();

        $obj->setAdBTNomSuite("adBTNomSuite");
        $this->assertEquals("adBTNomSuite", $obj->getAdBTNomSuite());
    }

    /**
     * Tests the setAdBTNomVoie() method.
     *
     * @return void
     */
    public function testSetAdBTNomVoie() {

        $obj = new BonsTravaux();

        $obj->setAdBTNomVoie("adBTNomVoie");
        $this->assertEquals("adBTNomVoie", $obj->getAdBTNomVoie());
    }

    /**
     * Tests the setAdBTNumVoie() method.
     *
     * @return void
     */
    public function testSetAdBTNumVoie() {

        $obj = new BonsTravaux();

        $obj->setAdBTNumVoie("adBTNumVoie");
        $this->assertEquals("adBTNumVoie", $obj->getAdBTNumVoie());
    }

    /**
     * Tests the setAdFBTQ() method.
     *
     * @return void
     */
    public function testSetAdFBTQ() {

        $obj = new BonsTravaux();

        $obj->setAdFBTQ("adFBTQ");
        $this->assertEquals("adFBTQ", $obj->getAdFBTQ());
    }

    /**
     * Tests the setAdFBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur() {

        $obj = new BonsTravaux();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Tests the setAdFCivilite() method.
     *
     * @return void
     */
    public function testSetAdFCivilite() {

        $obj = new BonsTravaux();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Tests the setAdFCodePays() method.
     *
     * @return void
     */
    public function testSetAdFCodePays() {

        $obj = new BonsTravaux();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Tests the setAdFCodePostal() method.
     *
     * @return void
     */
    public function testSetAdFCodePostal() {

        $obj = new BonsTravaux();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Tests the setAdFComplement() method.
     *
     * @return void
     */
    public function testSetAdFComplement() {

        $obj = new BonsTravaux();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Tests the setAdFNom() method.
     *
     * @return void
     */
    public function testSetAdFNom() {

        $obj = new BonsTravaux();

        $obj->setAdFNom("adFNom");
        $this->assertEquals("adFNom", $obj->getAdFNom());
    }

    /**
     * Tests the setAdFNomSuite() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite() {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Tests the setAdFNomSuite2() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite2() {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Tests the setAdFNomSuite3() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite3() {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Tests the setAdFNomVoie() method.
     *
     * @return void
     */
    public function testSetAdFNomVoie() {

        $obj = new BonsTravaux();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Tests the setAdFNumVoie() method.
     *
     * @return void
     */
    public function testSetAdFNumVoie() {

        $obj = new BonsTravaux();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Tests the setAdresseBTSaisie() method.
     *
     * @return void
     */
    public function testSetAdresseBTSaisie() {

        $obj = new BonsTravaux();

        $obj->setAdresseBTSaisie(true);
        $this->assertEquals(true, $obj->getAdresseBTSaisie());
    }

    /**
     * Tests the setAdresseFacturationSaisie() method.
     *
     * @return void
     */
    public function testSetAdresseFacturationSaisie() {

        $obj = new BonsTravaux();

        $obj->setAdresseFacturationSaisie(true);
        $this->assertEquals(true, $obj->getAdresseFacturationSaisie());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new BonsTravaux();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new BonsTravaux();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new BonsTravaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeFrequence() method.
     *
     * @return void
     */
    public function testSetCodeFrequence() {

        $obj = new BonsTravaux();

        $obj->setCodeFrequence("codeFrequence");
        $this->assertEquals("codeFrequence", $obj->getCodeFrequence());
    }

    /**
     * Tests the setCodeTacheBT() method.
     *
     * @return void
     */
    public function testSetCodeTacheBT() {

        $obj = new BonsTravaux();

        $obj->setCodeTacheBT("codeTacheBT");
        $this->assertEquals("codeTacheBT", $obj->getCodeTacheBT());
    }

    /**
     * Tests the setCodeTournee() method.
     *
     * @return void
     */
    public function testSetCodeTournee() {

        $obj = new BonsTravaux();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests the setCritereListe1() method.
     *
     * @return void
     */
    public function testSetCritereListe1() {

        $obj = new BonsTravaux();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Tests the setCritereListe2() method.
     *
     * @return void
     */
    public function testSetCritereListe2() {

        $obj = new BonsTravaux();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Tests the setCritereNumerique1() method.
     *
     * @return void
     */
    public function testSetCritereNumerique1() {

        $obj = new BonsTravaux();

        $obj->setCritereNumerique1(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique1());
    }

    /**
     * Tests the setCritereNumerique2() method.
     *
     * @return void
     */
    public function testSetCritereNumerique2() {

        $obj = new BonsTravaux();

        $obj->setCritereNumerique2(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique2());
    }

    /**
     * Tests the setCritereTexte1() method.
     *
     * @return void
     */
    public function testSetCritereTexte1() {

        $obj = new BonsTravaux();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Tests the setCritereTexte2() method.
     *
     * @return void
     */
    public function testSetCritereTexte2() {

        $obj = new BonsTravaux();

        $obj->setCritereTexte2("critereTexte2");
        $this->assertEquals("critereTexte2", $obj->getCritereTexte2());
    }

    /**
     * Tests the setDateDernierPassage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDernierPassage() {

        $obj = new BonsTravaux();

        $obj->setDateDernierPassage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDernierPassage());
    }

    /**
     * Tests the setDateFinValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinValidite() {

        $obj = new BonsTravaux();

        $obj->setDateFinValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinValidite());
    }

    /**
     * Tests the setDatePremierPassage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePremierPassage() {

        $obj = new BonsTravaux();

        $obj->setDatePremierPassage(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDatePremierPassage());
    }

    /**
     * Tests the setDateValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidite() {

        $obj = new BonsTravaux();

        $obj->setDateValidite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateValidite());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription() {

        $obj = new BonsTravaux();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setEquipe() method.
     *
     * @return void
     */
    public function testSetEquipe() {

        $obj = new BonsTravaux();

        $obj->setEquipe("equipe");
        $this->assertEquals("equipe", $obj->getEquipe());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence() {

        $obj = new BonsTravaux();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setFrequenceSuite() method.
     *
     * @return void
     */
    public function testSetFrequenceSuite() {

        $obj = new BonsTravaux();

        $obj->setFrequenceSuite("frequenceSuite");
        $this->assertEquals("frequenceSuite", $obj->getFrequenceSuite());
    }

    /**
     * Tests the setGestionPlanning() method.
     *
     * @return void
     */
    public function testSetGestionPlanning() {

        $obj = new BonsTravaux();

        $obj->setGestionPlanning(true);
        $this->assertEquals(true, $obj->getGestionPlanning());
    }

    /**
     * Tests the setHeureDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb() {

        $obj = new BonsTravaux();

        $obj->setHeureDeb(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getHeureDeb());
    }

    /**
     * Tests the setLatitude() method.
     *
     * @return void
     */
    public function testSetLatitude() {

        $obj = new BonsTravaux();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Tests the setLongitude() method.
     *
     * @return void
     */
    public function testSetLongitude() {

        $obj = new BonsTravaux();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Tests the setMentionSpeciale() method.
     *
     * @return void
     */
    public function testSetMentionSpeciale() {

        $obj = new BonsTravaux();

        $obj->setMentionSpeciale("mentionSpeciale");
        $this->assertEquals("mentionSpeciale", $obj->getMentionSpeciale());
    }

    /**
     * Tests the setNbHeures() method.
     *
     * @return void
     */
    public function testSetNbHeures() {

        $obj = new BonsTravaux();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests the setNbJours() method.
     *
     * @return void
     */
    public function testSetNbJours() {

        $obj = new BonsTravaux();

        $obj->setNbJours(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJours());
    }

    /**
     * Tests the setNumBT() method.
     *
     * @return void
     */
    public function testSetNumBT() {

        $obj = new BonsTravaux();

        $obj->setNumBT(10);
        $this->assertEquals(10, $obj->getNumBT());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent() {

        $obj = new BonsTravaux();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setSaisieInterJour() method.
     *
     * @return void
     */
    public function testSetSaisieInterJour() {

        $obj = new BonsTravaux();

        $obj->setSaisieInterJour(true);
        $this->assertEquals(true, $obj->getSaisieInterJour());
    }

    /**
     * Tests the setTravailleDimanche() method.
     *
     * @return void
     */
    public function testSetTravailleDimanche() {

        $obj = new BonsTravaux();

        $obj->setTravailleDimanche(true);
        $this->assertEquals(true, $obj->getTravailleDimanche());
    }

    /**
     * Tests the setTravailleJoursFeries() method.
     *
     * @return void
     */
    public function testSetTravailleJoursFeries() {

        $obj = new BonsTravaux();

        $obj->setTravailleJoursFeries(true);
        $this->assertEquals(true, $obj->getTravailleJoursFeries());
    }

    /**
     * Tests the setTravailleSamedi() method.
     *
     * @return void
     */
    public function testSetTravailleSamedi() {

        $obj = new BonsTravaux();

        $obj->setTravailleSamedi(true);
        $this->assertEquals(true, $obj->getTravailleSamedi());
    }

    /**
     * Tests the setTypeFrequence() method.
     *
     * @return void
     */
    public function testSetTypeFrequence() {

        $obj = new BonsTravaux();

        $obj->setTypeFrequence("typeFrequence");
        $this->assertEquals("typeFrequence", $obj->getTypeFrequence());
    }

    /**
     * Tests the setUnBonParMois() method.
     *
     * @return void
     */
    public function testSetUnBonParMois() {

        $obj = new BonsTravaux();

        $obj->setUnBonParMois(true);
        $this->assertEquals(true, $obj->getUnBonParMois());
    }
}
