<?php

declare(strict_types = 1);

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\Proprete\BonsTravaux;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bons travaux test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class BonsTravauxTest extends AbstractTestCase {

    /**
     * Test setAdBtBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdBtBureauDistributeur(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtBureauDistributeur("adBtBureauDistributeur");
        $this->assertEquals("adBtBureauDistributeur", $obj->getAdBtBureauDistributeur());
    }

    /**
     * Test setAdBtCivilite()
     *
     * @return void
     */
    public function testSetAdBtCivilite(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtCivilite("adBtCivilite");
        $this->assertEquals("adBtCivilite", $obj->getAdBtCivilite());
    }

    /**
     * Test setAdBtCodePays()
     *
     * @return void
     */
    public function testSetAdBtCodePays(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtCodePays("adBtCodePays");
        $this->assertEquals("adBtCodePays", $obj->getAdBtCodePays());
    }

    /**
     * Test setAdBtCodePostal()
     *
     * @return void
     */
    public function testSetAdBtCodePostal(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtCodePostal("adBtCodePostal");
        $this->assertEquals("adBtCodePostal", $obj->getAdBtCodePostal());
    }

    /**
     * Test setAdBtComplement()
     *
     * @return void
     */
    public function testSetAdBtComplement(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtComplement("adBtComplement");
        $this->assertEquals("adBtComplement", $obj->getAdBtComplement());
    }

    /**
     * Test setAdBtNom()
     *
     * @return void
     */
    public function testSetAdBtNom(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNom("adBtNom");
        $this->assertEquals("adBtNom", $obj->getAdBtNom());
    }

    /**
     * Test setAdBtNomSuite()
     *
     * @return void
     */
    public function testSetAdBtNomSuite(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNomSuite("adBtNomSuite");
        $this->assertEquals("adBtNomSuite", $obj->getAdBtNomSuite());
    }

    /**
     * Test setAdBtNomVoie()
     *
     * @return void
     */
    public function testSetAdBtNomVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNomVoie("adBtNomVoie");
        $this->assertEquals("adBtNomVoie", $obj->getAdBtNomVoie());
    }

    /**
     * Test setAdBtNumVoie()
     *
     * @return void
     */
    public function testSetAdBtNumVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtNumVoie("adBtNumVoie");
        $this->assertEquals("adBtNumVoie", $obj->getAdBtNumVoie());
    }

    /**
     * Test setAdBtbtq()
     *
     * @return void
     */
    public function testSetAdBtbtq(): void {

        $obj = new BonsTravaux();

        $obj->setAdBtbtq("adBtbtq");
        $this->assertEquals("adBtbtq", $obj->getAdBtbtq());
    }

    /**
     * Test setAdFBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur(): void {

        $obj = new BonsTravaux();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Test setAdFCivilite()
     *
     * @return void
     */
    public function testSetAdFCivilite(): void {

        $obj = new BonsTravaux();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Test setAdFCodePays()
     *
     * @return void
     */
    public function testSetAdFCodePays(): void {

        $obj = new BonsTravaux();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Test setAdFCodePostal()
     *
     * @return void
     */
    public function testSetAdFCodePostal(): void {

        $obj = new BonsTravaux();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Test setAdFComplement()
     *
     * @return void
     */
    public function testSetAdFComplement(): void {

        $obj = new BonsTravaux();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Test setAdFNom()
     *
     * @return void
     */
    public function testSetAdFNom(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNom("adFNom");
        $this->assertEquals("adFNom", $obj->getAdFNom());
    }

    /**
     * Test setAdFNomSuite()
     *
     * @return void
     */
    public function testSetAdFNomSuite(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Test setAdFNomSuite2()
     *
     * @return void
     */
    public function testSetAdFNomSuite2(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Test setAdFNomSuite3()
     *
     * @return void
     */
    public function testSetAdFNomSuite3(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Test setAdFNomVoie()
     *
     * @return void
     */
    public function testSetAdFNomVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Test setAdFNumVoie()
     *
     * @return void
     */
    public function testSetAdFNumVoie(): void {

        $obj = new BonsTravaux();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Test setAdFbtq()
     *
     * @return void
     */
    public function testSetAdFbtq(): void {

        $obj = new BonsTravaux();

        $obj->setAdFbtq("adFbtq");
        $this->assertEquals("adFbtq", $obj->getAdFbtq());
    }

    /**
     * Test setAdresseBtSaisie()
     *
     * @return void
     */
    public function testSetAdresseBtSaisie(): void {

        $obj = new BonsTravaux();

        $obj->setAdresseBtSaisie(true);
        $this->assertTrue($obj->getAdresseBtSaisie());
    }

    /**
     * Test setAdresseFacturationSaisie()
     *
     * @return void
     */
    public function testSetAdresseFacturationSaisie(): void {

        $obj = new BonsTravaux();

        $obj->setAdresseFacturationSaisie(true);
        $this->assertTrue($obj->getAdresseFacturationSaisie());
    }

    /**
     * Test setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new BonsTravaux();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Test setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new BonsTravaux();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Test setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BonsTravaux();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Test setCodeFrequence()
     *
     * @return void
     */
    public function testSetCodeFrequence(): void {

        $obj = new BonsTravaux();

        $obj->setCodeFrequence("codeFrequence");
        $this->assertEquals("codeFrequence", $obj->getCodeFrequence());
    }

    /**
     * Test setCodeTacheBt()
     *
     * @return void
     */
    public function testSetCodeTacheBt(): void {

        $obj = new BonsTravaux();

        $obj->setCodeTacheBt("codeTacheBt");
        $this->assertEquals("codeTacheBt", $obj->getCodeTacheBt());
    }

    /**
     * Test setCodeTournee()
     *
     * @return void
     */
    public function testSetCodeTournee(): void {

        $obj = new BonsTravaux();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Test setCritereListe1()
     *
     * @return void
     */
    public function testSetCritereListe1(): void {

        $obj = new BonsTravaux();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Test setCritereListe2()
     *
     * @return void
     */
    public function testSetCritereListe2(): void {

        $obj = new BonsTravaux();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Test setCritereNumerique1()
     *
     * @return void
     */
    public function testSetCritereNumerique1(): void {

        $obj = new BonsTravaux();

        $obj->setCritereNumerique1(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique1());
    }

    /**
     * Test setCritereNumerique2()
     *
     * @return void
     */
    public function testSetCritereNumerique2(): void {

        $obj = new BonsTravaux();

        $obj->setCritereNumerique2(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique2());
    }

    /**
     * Test setCritereTexte1()
     *
     * @return void
     */
    public function testSetCritereTexte1(): void {

        $obj = new BonsTravaux();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Test setCritereTexte2()
     *
     * @return void
     */
    public function testSetCritereTexte2(): void {

        $obj = new BonsTravaux();

        $obj->setCritereTexte2("critereTexte2");
        $this->assertEquals("critereTexte2", $obj->getCritereTexte2());
    }

    /**
     * Test setDateDernierPassage()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDernierPassage(): void {

        // Set a Date/time mock.
        $dateDernierPassage = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDateDernierPassage($dateDernierPassage);
        $this->assertSame($dateDernierPassage, $obj->getDateDernierPassage());
    }

    /**
     * Test setDateFinValidite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinValidite(): void {

        // Set a Date/time mock.
        $dateFinValidite = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDateFinValidite($dateFinValidite);
        $this->assertSame($dateFinValidite, $obj->getDateFinValidite());
    }

    /**
     * Test setDatePremierPassage()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDatePremierPassage(): void {

        // Set a Date/time mock.
        $datePremierPassage = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDatePremierPassage($datePremierPassage);
        $this->assertSame($datePremierPassage, $obj->getDatePremierPassage());
    }

    /**
     * Test setDateValidite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateValidite(): void {

        // Set a Date/time mock.
        $dateValidite = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setDateValidite($dateValidite);
        $this->assertSame($dateValidite, $obj->getDateValidite());
    }

    /**
     * Test setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new BonsTravaux();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Test setEquipe()
     *
     * @return void
     */
    public function testSetEquipe(): void {

        $obj = new BonsTravaux();

        $obj->setEquipe("equipe");
        $this->assertEquals("equipe", $obj->getEquipe());
    }

    /**
     * Test setFrequence()
     *
     * @return void
     */
    public function testSetFrequence(): void {

        $obj = new BonsTravaux();

        $obj->setFrequence("frequence");
        $this->assertEquals("frequence", $obj->getFrequence());
    }

    /**
     * Test setFrequenceSuite()
     *
     * @return void
     */
    public function testSetFrequenceSuite(): void {

        $obj = new BonsTravaux();

        $obj->setFrequenceSuite("frequenceSuite");
        $this->assertEquals("frequenceSuite", $obj->getFrequenceSuite());
    }

    /**
     * Test setGestionPlanning()
     *
     * @return void
     */
    public function testSetGestionPlanning(): void {

        $obj = new BonsTravaux();

        $obj->setGestionPlanning(true);
        $this->assertTrue($obj->getGestionPlanning());
    }

    /**
     * Test setHeureDeb()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new BonsTravaux();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Test setLatitude()
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new BonsTravaux();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Test setLongitude()
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new BonsTravaux();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Test setMentionSpeciale()
     *
     * @return void
     */
    public function testSetMentionSpeciale(): void {

        $obj = new BonsTravaux();

        $obj->setMentionSpeciale("mentionSpeciale");
        $this->assertEquals("mentionSpeciale", $obj->getMentionSpeciale());
    }

    /**
     * Test setNbHeures()
     *
     * @return void
     */
    public function testSetNbHeures(): void {

        $obj = new BonsTravaux();

        $obj->setNbHeures(10.092018);
        $this->assertEquals(10.092018, $obj->getNbHeures());
    }

    /**
     * Test setNbJours()
     *
     * @return void
     */
    public function testSetNbJours(): void {

        $obj = new BonsTravaux();

        $obj->setNbJours(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJours());
    }

    /**
     * Test setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new BonsTravaux();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Test setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new BonsTravaux();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Test setSaisieInterJour()
     *
     * @return void
     */
    public function testSetSaisieInterJour(): void {

        $obj = new BonsTravaux();

        $obj->setSaisieInterJour(true);
        $this->assertTrue($obj->getSaisieInterJour());
    }

    /**
     * Test setTravailleDimanche()
     *
     * @return void
     */
    public function testSetTravailleDimanche(): void {

        $obj = new BonsTravaux();

        $obj->setTravailleDimanche(true);
        $this->assertTrue($obj->getTravailleDimanche());
    }

    /**
     * Test setTravailleJoursFeries()
     *
     * @return void
     */
    public function testSetTravailleJoursFeries(): void {

        $obj = new BonsTravaux();

        $obj->setTravailleJoursFeries(true);
        $this->assertTrue($obj->getTravailleJoursFeries());
    }

    /**
     * Test setTravailleSamedi()
     *
     * @return void
     */
    public function testSetTravailleSamedi(): void {

        $obj = new BonsTravaux();

        $obj->setTravailleSamedi(true);
        $this->assertTrue($obj->getTravailleSamedi());
    }

    /**
     * Test setTypeFrequence()
     *
     * @return void
     */
    public function testSetTypeFrequence(): void {

        $obj = new BonsTravaux();

        $obj->setTypeFrequence("typeFrequence");
        $this->assertEquals("typeFrequence", $obj->getTypeFrequence());
    }

    /**
     * Test setUnBonParMois()
     *
     * @return void
     */
    public function testSetUnBonParMois(): void {

        $obj = new BonsTravaux();

        $obj->setUnBonParMois(true);
        $this->assertTrue($obj->getUnBonParMois());
    }

    /**
     * Test __construct()
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
