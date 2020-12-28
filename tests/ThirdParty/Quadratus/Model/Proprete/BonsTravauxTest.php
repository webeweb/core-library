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
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\BonsTravaux;

/**
 * Bons travaux test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class BonsTravauxTest extends AbstractTestCase {

    /**
     * Tests the setAdBtBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdBtBureauDistributeur(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtBureauDistributeur("adBtBureauDistributeur");
        $this->assertEquals("adBtBureauDistributeur", $obj->getAdBtBureauDistributeur());
    }

    /**
     * Tests the setAdBtCivilite() method.
     *
     * @return void
     */
    public function testSetAdBtCivilite(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtCivilite("adBtCivilite");
        $this->assertEquals("adBtCivilite", $obj->getAdBtCivilite());
    }

    /**
     * Tests the setAdBtCodePays() method.
     *
     * @return void
     */
    public function testSetAdBtCodePays(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtCodePays("adBtCodePays");
        $this->assertEquals("adBtCodePays", $obj->getAdBtCodePays());
    }

    /**
     * Tests the setAdBtCodePostal() method.
     *
     * @return void
     */
    public function testSetAdBtCodePostal(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtCodePostal("adBtCodePostal");
        $this->assertEquals("adBtCodePostal", $obj->getAdBtCodePostal());
    }

    /**
     * Tests the setAdBtComplement() method.
     *
     * @return void
     */
    public function testSetAdBtComplement(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtComplement("adBtComplement");
        $this->assertEquals("adBtComplement", $obj->getAdBtComplement());
    }

    /**
     * Tests the setAdBtNom() method.
     *
     * @return void
     */
    public function testSetAdBtNom(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNom("adBtNom");
        $this->assertEquals("adBtNom", $obj->getAdBtNom());
    }

    /**
     * Tests the setAdBtNomSuite() method.
     *
     * @return void
     */
    public function testSetAdBtNomSuite(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNomSuite("adBtNomSuite");
        $this->assertEquals("adBtNomSuite", $obj->getAdBtNomSuite());
    }

    /**
     * Tests the setAdBtNomVoie() method.
     *
     * @return void
     */
    public function testSetAdBtNomVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNomVoie("adBtNomVoie");
        $this->assertEquals("adBtNomVoie", $obj->getAdBtNomVoie());
    }

    /**
     * Tests the setAdBtNumVoie() method.
     *
     * @return void
     */
    public function testSetAdBtNumVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNumVoie("adBtNumVoie");
        $this->assertEquals("adBtNumVoie", $obj->getAdBtNumVoie());
    }

    /**
     * Tests the setAdBtbtq() method.
     *
     * @return void
     */
    public function testSetAdBtbtq(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtbtq("adBtbtq");
        $this->assertEquals("adBtbtq", $obj->getAdBtbtq());
    }

    /**
     * Tests the setAdFBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur(): void {

        $obj = new BonsTravaux();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Tests the setAdFCivilite() method.
     *
     * @return void
     */
    public function testSetAdFCivilite(): void {

        $obj = new BonsTravaux();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Tests the setAdFCodePays() method.
     *
     * @return void
     */
    public function testSetAdFCodePays(): void {

        $obj = new BonsTravaux();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Tests the setAdFCodePostal() method.
     *
     * @return void
     */
    public function testSetAdFCodePostal(): void {

        $obj = new BonsTravaux();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Tests the setAdFComplement() method.
     *
     * @return void
     */
    public function testSetAdFComplement(): void {

        $obj = new BonsTravaux();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Tests the setAdFNom() method.
     *
     * @return void
     */
    public function testSetAdFNom(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNom("adFNom");
        $this->assertEquals("adFNom", $obj->getAdFNom());
    }

    /**
     * Tests the setAdFNomSuite() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Tests the setAdFNomSuite2() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite2(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Tests the setAdFNomSuite3() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite3(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Tests the setAdFNomVoie() method.
     *
     * @return void
     */
    public function testSetAdFNomVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Tests the setAdFNumVoie() method.
     *
     * @return void
     */
    public function testSetAdFNumVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Tests the setAdFbtq() method.
     *
     * @return void
     */
    public function testSetAdFbtq(): void {

        $obj = new BonsTravaux();

        $obj->setAdFbtq("adFbtq");
        $this->assertEquals("adFbtq", $obj->getAdFbtq());
    }

    /**
     * Tests the setAdresseBtSaisie() method.
     *
     * @return void
     */
    public function testSetAdresseBtSaisie(): void {

        $obj = new BonsTravaux();

        $obj->setAdresseBtSaisie(true);
        $this->assertEquals(true, $obj->getAdresseBtSaisie());
    }

    /**
     * Tests the setAdresseFacturationSaisie() method.
     *
     * @return void
     */
    public function testSetAdresseFacturationSaisie(): void {

        $obj = new BonsTravaux();

        $obj->setAdresseFacturationSaisie(true);
        $this->assertEquals(true, $obj->getAdresseFacturationSaisie());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new BonsTravaux();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new BonsTravaux();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BonsTravaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeFrequence() method.
     *
     * @return void
     */
    public function testSetCodeFrequence(): void {

        $obj = new BonsTravaux();

        $obj->setCodeFrequence("codeFrequence");
        $this->assertEquals("codeFrequence", $obj->getCodeFrequence());
    }

    /**
     * Tests the setCodeTacheBt() method.
     *
     * @return void
     */
    public function testSetCodeTacheBt(): void {

        $obj = new BonsTravaux();

        $obj->setCodeTacheBt("codeTacheBt");
        $this->assertEquals("codeTacheBt", $obj->getCodeTacheBt());
    }

    /**
     * Tests the setCodeTournee() method.
     *
     * @return void
     */
    public function testSetCodeTournee(): void {

        $obj = new BonsTravaux();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests the setCritereListe1() method.
     *
     * @return void
     */
    public function testSetCritereListe1(): void {

        $obj = new BonsTravaux();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Tests the setCritereListe2() method.
     *
     * @return void
     */
    public function testSetCritereListe2(): void {

        $obj = new BonsTravaux();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Tests the setCritereNumerique1() method.
     *
     * @return void
     */
    public function testSetCritereNumerique1(): void {

        $obj = new BonsTravaux();

        $obj->setCritereNumerique1(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique1());
    }

    /**
     * Tests the setCritereNumerique2() method.
     *
     * @return void
     */
    public function testSetCritereNumerique2(): void {

        $obj = new BonsTravaux();

        $obj->setCritereNumerique2(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique2());
    }

    /**
     * Tests the setCritereTexte1() method.
     *
     * @return void
     */
    public function testSetCritereTexte1(): void {

        $obj = new BonsTravaux();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Tests the setCritereTexte2() method.
     *
     * @return void
     */
    public function testSetCritereTexte2(): void {

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
    public function testSetDateDernierPassage(): void {

        // Set a Date/time mock.
        $dateDernierPassage = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDateDernierPassage($dateDernierPassage);
        $this->assertSame($dateDernierPassage, $obj->getDateDernierPassage());
    }

    /**
     * Tests the setDateFinValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinValidite(): void {

        // Set a Date/time mock.
        $dateFinValidite = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDateFinValidite($dateFinValidite);
        $this->assertSame($dateFinValidite, $obj->getDateFinValidite());
    }

    /**
     * Tests the setDatePremierPassage() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePremierPassage(): void {

        // Set a Date/time mock.
        $datePremierPassage = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDatePremierPassage($datePremierPassage);
        $this->assertSame($datePremierPassage, $obj->getDatePremierPassage());
    }

    /**
     * Tests the setDateValidite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidite(): void {

        // Set a Date/time mock.
        $dateValidite = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDateValidite($dateValidite);
        $this->assertSame($dateValidite, $obj->getDateValidite());
    }

    /**
     * Tests the setDescription() method.
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new BonsTravaux();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests the setEquipe() method.
     *
     * @return void
     */
    public function testSetEquipe(): void {

        $obj = new BonsTravaux();

        $obj->setEquipe("equipe");
        $this->assertEquals("equipe", $obj->getEquipe());
    }

    /**
     * Tests the setFrequence() method.
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new BonsTravaux();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Tests the setFrequenceSuite() method.
     *
     * @return void
     */
    public function testSetFrequenceSuite(): void {

        $obj = new BonsTravaux();

        $obj->setFrequenceSuite("frequenceSuite");
        $this->assertEquals("frequenceSuite", $obj->getFrequenceSuite());
    }

    /**
     * Tests the setGestionPlanning() method.
     *
     * @return void
     */
    public function testSetGestionPlanning(): void {

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
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Tests the setLatitude() method.
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new BonsTravaux();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Tests the setLongitude() method.
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new BonsTravaux();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Tests the setMentionSpeciale() method.
     *
     * @return void
     */
    public function testSetMentionSpeciale(): void {

        $obj = new BonsTravaux();

        $obj->setMentionSpeciale("mentionSpeciale");
        $this->assertEquals("mentionSpeciale", $obj->getMentionSpeciale());
    }

    /**
     * Tests the setNbHeures() method.
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new BonsTravaux();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Tests the setNbJours() method.
     *
     * @return void
     */
    public function testSetNbJours(): void {

        $obj = new BonsTravaux();

        $obj->setNbJours(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJours());
    }

    /**
     * Tests the setNumBt() method.
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new BonsTravaux();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests the setPosteRent() method.
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new BonsTravaux();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests the setSaisieInterJour() method.
     *
     * @return void
     */
    public function testSetSaisieInterJour(): void {

        $obj = new BonsTravaux();

        $obj->setSaisieInterJour(true);
        $this->assertEquals(true, $obj->getSaisieInterJour());
    }

    /**
     * Tests the setTravailleDimanche() method.
     *
     * @return void
     */
    public function testSetTravailleDimanche(): void {

        $obj = new BonsTravaux();

        $obj->setTravailleDimanche(true);
        $this->assertEquals(true, $obj->getTravailleDimanche());
    }

    /**
     * Tests the setTravailleJoursFeries() method.
     *
     * @return void
     */
    public function testSetTravailleJoursFeries(): void {

        $obj = new BonsTravaux();

        $obj->setTravailleJoursFeries(true);
        $this->assertEquals(true, $obj->getTravailleJoursFeries());
    }

    /**
     * Tests the setTravailleSamedi() method.
     *
     * @return void
     */
    public function testSetTravailleSamedi(): void {

        $obj = new BonsTravaux();

        $obj->setTravailleSamedi(true);
        $this->assertEquals(true, $obj->getTravailleSamedi());
    }

    /**
     * Tests the setTypeFrequence() method.
     *
     * @return void
     */
    public function testSetTypeFrequence(): void {

        $obj = new BonsTravaux();

        $obj->setTypeFrequence("typeFrequence");
        $this->assertEquals("typeFrequence", $obj->getTypeFrequence());
    }

    /**
     * Tests the setUnBonParMois() method.
     *
     * @return void
     */
    public function testSetUnBonParMois(): void {

        $obj = new BonsTravaux();

        $obj->setUnBonParMois(true);
        $this->assertEquals(true, $obj->getUnBonParMois());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BonsTravaux();

        $this->assertNull($obj->getAdBtbtq());
        $this->assertNull($obj->getAdBtBureauDistributeur());
        $this->assertNull($obj->getAdBtCivilite());
        $this->assertNull($obj->getAdBtCodePays());
        $this->assertNull($obj->getAdBtCodePostal());
        $this->assertNull($obj->getAdBtComplement());
        $this->assertNull($obj->getAdBtNom());
        $this->assertNull($obj->getAdBtNomSuite());
        $this->assertNull($obj->getAdBtNomVoie());
        $this->assertNull($obj->getAdBtNumVoie());
        $this->assertNull($obj->getAdFbtq());
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
        $this->assertNull($obj->getAdresseBtSaisie());
        $this->assertNull($obj->getAdresseFacturationSaisie());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeFrequence());
        $this->assertNull($obj->getCodeTacheBt());
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
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getPosteRent());
        $this->assertNull($obj->getSaisieInterJour());
        $this->assertNull($obj->getTravailleDimanche());
        $this->assertNull($obj->getTravailleJoursFeries());
        $this->assertNull($obj->getTravailleSamedi());
        $this->assertNull($obj->getTypeFrequence());
        $this->assertNull($obj->getUnBonParMois());
    }
}
