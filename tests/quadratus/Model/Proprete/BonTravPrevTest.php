<?php

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
use Exception;
use WBW\Library\Quadratus\Model\Proprete\BonTravPrev;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Bon trav prev test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class BonTravPrevTest extends AbstractTestCase {

    /**
     * Tests setAdBtBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdBtBureauDistributeur(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtBureauDistributeur("adBtBureauDistributeur");
        $this->assertEquals("adBtBureauDistributeur", $obj->getAdBtBureauDistributeur());
    }

    /**
     * Tests setAdBtCivilite()
     *
     * @return void
     */
    public function testSetAdBtCivilite(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtCivilite("adBtCivilite");
        $this->assertEquals("adBtCivilite", $obj->getAdBtCivilite());
    }

    /**
     * Tests setAdBtCodePays()
     *
     * @return void
     */
    public function testSetAdBtCodePays(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtCodePays("adBtCodePays");
        $this->assertEquals("adBtCodePays", $obj->getAdBtCodePays());
    }

    /**
     * Tests setAdBtCodePostal()
     *
     * @return void
     */
    public function testSetAdBtCodePostal(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtCodePostal("adBtCodePostal");
        $this->assertEquals("adBtCodePostal", $obj->getAdBtCodePostal());
    }

    /**
     * Tests setAdBtComplement()
     *
     * @return void
     */
    public function testSetAdBtComplement(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtComplement("adBtComplement");
        $this->assertEquals("adBtComplement", $obj->getAdBtComplement());
    }

    /**
     * Tests setAdBtNom()
     *
     * @return void
     */
    public function testSetAdBtNom(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtNom("adBtNom");
        $this->assertEquals("adBtNom", $obj->getAdBtNom());
    }

    /**
     * Tests setAdBtNomSuite()
     *
     * @return void
     */
    public function testSetAdBtNomSuite(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtNomSuite("adBtNomSuite");
        $this->assertEquals("adBtNomSuite", $obj->getAdBtNomSuite());
    }

    /**
     * Tests setAdBtNomVoie()
     *
     * @return void
     */
    public function testSetAdBtNomVoie(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtNomVoie("adBtNomVoie");
        $this->assertEquals("adBtNomVoie", $obj->getAdBtNomVoie());
    }

    /**
     * Tests setAdBtNumVoie()
     *
     * @return void
     */
    public function testSetAdBtNumVoie(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtNumVoie("adBtNumVoie");
        $this->assertEquals("adBtNumVoie", $obj->getAdBtNumVoie());
    }

    /**
     * Tests setAdBtbtq()
     *
     * @return void
     */
    public function testSetAdBtbtq(): void {

        $obj = new BonTravPrev();

        $obj->setAdBtbtq("adBtbtq");
        $this->assertEquals("adBtbtq", $obj->getAdBtbtq());
    }

    /**
     * Tests setAdFBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur(): void {

        $obj = new BonTravPrev();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Tests setAdFCivilite()
     *
     * @return void
     */
    public function testSetAdFCivilite(): void {

        $obj = new BonTravPrev();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Tests setAdFCodePays()
     *
     * @return void
     */
    public function testSetAdFCodePays(): void {

        $obj = new BonTravPrev();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Tests setAdFCodePostal()
     *
     * @return void
     */
    public function testSetAdFCodePostal(): void {

        $obj = new BonTravPrev();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Tests setAdFComplement()
     *
     * @return void
     */
    public function testSetAdFComplement(): void {

        $obj = new BonTravPrev();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Tests setAdFNom()
     *
     * @return void
     */
    public function testSetAdFNom(): void {

        $obj = new BonTravPrev();

        $obj->setAdFNom("adFNom");
        $this->assertEquals("adFNom", $obj->getAdFNom());
    }

    /**
     * Tests setAdFNomSuite()
     *
     * @return void
     */
    public function testSetAdFNomSuite(): void {

        $obj = new BonTravPrev();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Tests setAdFNomSuite2()
     *
     * @return void
     */
    public function testSetAdFNomSuite2(): void {

        $obj = new BonTravPrev();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Tests setAdFNomSuite3()
     *
     * @return void
     */
    public function testSetAdFNomSuite3(): void {

        $obj = new BonTravPrev();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Tests setAdFNomVoie()
     *
     * @return void
     */
    public function testSetAdFNomVoie(): void {

        $obj = new BonTravPrev();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Tests setAdFNumVoie()
     *
     * @return void
     */
    public function testSetAdFNumVoie(): void {

        $obj = new BonTravPrev();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Tests setAdFbtq()
     *
     * @return void
     */
    public function testSetAdFbtq(): void {

        $obj = new BonTravPrev();

        $obj->setAdFbtq("adFbtq");
        $this->assertEquals("adFbtq", $obj->getAdFbtq());
    }

    /**
     * Tests setAdresseBtSaisie()
     *
     * @return void
     */
    public function testSetAdresseBtSaisie(): void {

        $obj = new BonTravPrev();

        $obj->setAdresseBtSaisie(true);
        $this->assertEquals(true, $obj->getAdresseBtSaisie());
    }

    /**
     * Tests setAdresseFacturationSaisie()
     *
     * @return void
     */
    public function testSetAdresseFacturationSaisie(): void {

        $obj = new BonTravPrev();

        $obj->setAdresseFacturationSaisie(true);
        $this->assertEquals(true, $obj->getAdresseFacturationSaisie());
    }

    /**
     * Tests setBtCopie()
     *
     * @return void
     */
    public function testSetBtCopie(): void {

        $obj = new BonTravPrev();

        $obj->setBtCopie(true);
        $this->assertEquals(true, $obj->getBtCopie());
    }

    /**
     * Tests setBtDevisDejaFacture()
     *
     * @return void
     */
    public function testSetBtDevisDejaFacture(): void {

        $obj = new BonTravPrev();

        $obj->setBtDevisDejaFacture(true);
        $this->assertEquals(true, $obj->getBtDevisDejaFacture());
    }

    /**
     * Tests setBtValide()
     *
     * @return void
     */
    public function testSetBtValide(): void {

        $obj = new BonTravPrev();

        $obj->setBtValide(true);
        $this->assertEquals(true, $obj->getBtValide());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new BonTravPrev();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new BonTravPrev();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new BonTravPrev();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new BonTravPrev();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeEquipe()
     *
     * @return void
     */
    public function testSetCodeEquipe(): void {

        $obj = new BonTravPrev();

        $obj->setCodeEquipe("codeEquipe");
        $this->assertEquals("codeEquipe", $obj->getCodeEquipe());
    }

    /**
     * Tests setCodeRegroupementDevis()
     *
     * @return void
     */
    public function testSetCodeRegroupementDevis(): void {

        $obj = new BonTravPrev();

        $obj->setCodeRegroupementDevis("codeRegroupementDevis");
        $this->assertEquals("codeRegroupementDevis", $obj->getCodeRegroupementDevis());
    }

    /**
     * Tests setCodeTacheType()
     *
     * @return void
     */
    public function testSetCodeTacheType(): void {

        $obj = new BonTravPrev();

        $obj->setCodeTacheType("codeTacheType");
        $this->assertEquals("codeTacheType", $obj->getCodeTacheType());
    }

    /**
     * Tests setCodeTournee()
     *
     * @return void
     */
    public function testSetCodeTournee(): void {

        $obj = new BonTravPrev();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests setCritereBool1()
     *
     * @return void
     */
    public function testSetCritereBool1(): void {

        $obj = new BonTravPrev();

        $obj->setCritereBool1(true);
        $this->assertEquals(true, $obj->getCritereBool1());
    }

    /**
     * Tests setCritereBool2()
     *
     * @return void
     */
    public function testSetCritereBool2(): void {

        $obj = new BonTravPrev();

        $obj->setCritereBool2(true);
        $this->assertEquals(true, $obj->getCritereBool2());
    }

    /**
     * Tests setCritereByte1()
     *
     * @return void
     */
    public function testSetCritereByte1(): void {

        $obj = new BonTravPrev();

        $obj->setCritereByte1("critereByte1");
        $this->assertEquals("critereByte1", $obj->getCritereByte1());
    }

    /**
     * Tests setCritereListe1()
     *
     * @return void
     */
    public function testSetCritereListe1(): void {

        $obj = new BonTravPrev();

        $obj->setCritereListe1("critereListe1");
        $this->assertEquals("critereListe1", $obj->getCritereListe1());
    }

    /**
     * Tests setCritereListe2()
     *
     * @return void
     */
    public function testSetCritereListe2(): void {

        $obj = new BonTravPrev();

        $obj->setCritereListe2("critereListe2");
        $this->assertEquals("critereListe2", $obj->getCritereListe2());
    }

    /**
     * Tests setCritereNumerique1()
     *
     * @return void
     */
    public function testSetCritereNumerique1(): void {

        $obj = new BonTravPrev();

        $obj->setCritereNumerique1(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique1());
    }

    /**
     * Tests setCritereNumerique2()
     *
     * @return void
     */
    public function testSetCritereNumerique2(): void {

        $obj = new BonTravPrev();

        $obj->setCritereNumerique2(10.092018);
        $this->assertEquals(10.092018, $obj->getCritereNumerique2());
    }

    /**
     * Tests setCritereTexte1()
     *
     * @return void
     */
    public function testSetCritereTexte1(): void {

        $obj = new BonTravPrev();

        $obj->setCritereTexte1("critereTexte1");
        $this->assertEquals("critereTexte1", $obj->getCritereTexte1());
    }

    /**
     * Tests setCritereTexte2()
     *
     * @return void
     */
    public function testSetCritereTexte2(): void {

        $obj = new BonTravPrev();

        $obj->setCritereTexte2("critereTexte2");
        $this->assertEquals("critereTexte2", $obj->getCritereTexte2());
    }

    /**
     * Tests setDatePassage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePassage(): void {

        // Set a Date/time mock.
        $datePassage = new DateTime("2018-09-10");

        $obj = new BonTravPrev();

        $obj->setDatePassage($datePassage);
        $this->assertSame($datePassage, $obj->getDatePassage());
    }

    /**
     * Tests setDatePremierPassage()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePremierPassage(): void {

        // Set a Date/time mock.
        $datePremierPassage = new DateTime("2018-09-10");

        $obj = new BonTravPrev();

        $obj->setDatePremierPassage($datePremierPassage);
        $this->assertSame($datePremierPassage, $obj->getDatePremierPassage());
    }

    /**
     * Tests setDateTransfert()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateTransfert(): void {

        // Set a Date/time mock.
        $dateTransfert = new DateTime("2018-09-10");

        $obj = new BonTravPrev();

        $obj->setDateTransfert($dateTransfert);
        $this->assertSame($dateTransfert, $obj->getDateTransfert());
    }

    /**
     * Tests setDescription()
     *
     * @return void
     */
    public function testSetDescription(): void {

        $obj = new BonTravPrev();

        $obj->setDescription("description");
        $this->assertEquals("description", $obj->getDescription());
    }

    /**
     * Tests setDureePointee()
     *
     * @return void
     */
    public function testSetDureePointee(): void {

        $obj = new BonTravPrev();

        $obj->setDureePointee(10.092018);
        $this->assertEquals(10.092018, $obj->getDureePointee());
    }

    /**
     * Tests setDureePrevue()
     *
     * @return void
     */
    public function testSetDureePrevue(): void {

        $obj = new BonTravPrev();

        $obj->setDureePrevue(10.092018);
        $this->assertEquals(10.092018, $obj->getDureePrevue());
    }

    /**
     * Tests setDureeValidee()
     *
     * @return void
     */
    public function testSetDureeValidee(): void {

        $obj = new BonTravPrev();

        $obj->setDureeValidee(10.092018);
        $this->assertEquals(10.092018, $obj->getDureeValidee());
    }

    /**
     * Tests setEmployeSigneMob()
     *
     * @return void
     */
    public function testSetEmployeSigneMob(): void {

        $obj = new BonTravPrev();

        $obj->setEmployeSigneMob("employeSigneMob");
        $this->assertEquals("employeSigneMob", $obj->getEmployeSigneMob());
    }

    /**
     * Tests setGestionPlanning()
     *
     * @return void
     */
    public function testSetGestionPlanning(): void {

        $obj = new BonTravPrev();

        $obj->setGestionPlanning(true);
        $this->assertEquals(true, $obj->getGestionPlanning());
    }

    /**
     * Tests setGuidMob()
     *
     * @return void
     */
    public function testSetGuidMob(): void {

        $obj = new BonTravPrev();

        $obj->setGuidMob("guidMob");
        $this->assertEquals("guidMob", $obj->getGuidMob());
    }

    /**
     * Tests setHeureDeb()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetHeureDeb(): void {

        // Set a Date/time mock.
        $heureDeb = new DateTime("2018-09-10");

        $obj = new BonTravPrev();

        $obj->setHeureDeb($heureDeb);
        $this->assertSame($heureDeb, $obj->getHeureDeb());
    }

    /**
     * Tests setLatitude()
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new BonTravPrev();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new BonTravPrev();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new BonTravPrev();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setLongitude()
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new BonTravPrev();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Tests setMontantHtDevis()
     *
     * @return void
     */
    public function testSetMontantHtDevis(): void {

        $obj = new BonTravPrev();

        $obj->setMontantHtDevis(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtDevis());
    }

    /**
     * Tests setNbJoursPointes()
     *
     * @return void
     */
    public function testSetNbJoursPointes(): void {

        $obj = new BonTravPrev();

        $obj->setNbJoursPointes(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursPointes());
    }

    /**
     * Tests setNbJoursPrevus()
     *
     * @return void
     */
    public function testSetNbJoursPrevus(): void {

        $obj = new BonTravPrev();

        $obj->setNbJoursPrevus(10.092018);
        $this->assertEquals(10.092018, $obj->getNbJoursPrevus());
    }

    /**
     * Tests setNombreEmployes()
     *
     * @return void
     */
    public function testSetNombreEmployes(): void {

        $obj = new BonTravPrev();

        $obj->setNombreEmployes(10);
        $this->assertEquals(10, $obj->getNombreEmployes());
    }

    /**
     * Tests setNonTraite()
     *
     * @return void
     */
    public function testSetNonTraite(): void {

        $obj = new BonTravPrev();

        $obj->setNonTraite(true);
        $this->assertEquals(true, $obj->getNonTraite());
    }

    /**
     * Tests setNumBt()
     *
     * @return void
     */
    public function testSetNumBt(): void {

        $obj = new BonTravPrev();

        $obj->setNumBt(10);
        $this->assertEquals(10, $obj->getNumBt());
    }

    /**
     * Tests setNumeroDevis()
     *
     * @return void
     */
    public function testSetNumeroDevis(): void {

        $obj = new BonTravPrev();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests setNumeroFacture()
     *
     * @return void
     */
    public function testSetNumeroFacture(): void {

        $obj = new BonTravPrev();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new BonTravPrev();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setObservationClient()
     *
     * @return void
     */
    public function testSetObservationClient(): void {

        $obj = new BonTravPrev();

        $obj->setObservationClient("observationClient");
        $this->assertEquals("observationClient", $obj->getObservationClient());
    }

    /**
     * Tests setObservationInterne()
     *
     * @return void
     */
    public function testSetObservationInterne(): void {

        $obj = new BonTravPrev();

        $obj->setObservationInterne("observationInterne");
        $this->assertEquals("observationInterne", $obj->getObservationInterne());
    }

    /**
     * Tests setOccasionnel()
     *
     * @return void
     */
    public function testSetOccasionnel(): void {

        $obj = new BonTravPrev();

        $obj->setOccasionnel(true);
        $this->assertEquals(true, $obj->getOccasionnel());
    }

    /**
     * Tests setPlusieursJours()
     *
     * @return void
     */
    public function testSetPlusieursJours(): void {

        $obj = new BonTravPrev();

        $obj->setPlusieursJours(true);
        $this->assertEquals(true, $obj->getPlusieursJours());
    }

    /**
     * Tests setPlusieursMois()
     *
     * @return void
     */
    public function testSetPlusieursMois(): void {

        $obj = new BonTravPrev();

        $obj->setPlusieursMois(true);
        $this->assertEquals(true, $obj->getPlusieursMois());
    }

    /**
     * Tests setPosteRent()
     *
     * @return void
     */
    public function testSetPosteRent(): void {

        $obj = new BonTravPrev();

        $obj->setPosteRent("posteRent");
        $this->assertEquals("posteRent", $obj->getPosteRent());
    }

    /**
     * Tests setProratise()
     *
     * @return void
     */
    public function testSetProratise(): void {

        $obj = new BonTravPrev();

        $obj->setProratise(true);
        $this->assertEquals(true, $obj->getProratise());
    }

    /**
     * Tests setSignataire()
     *
     * @return void
     */
    public function testSetSignataire(): void {

        $obj = new BonTravPrev();

        $obj->setSignataire("signataire");
        $this->assertEquals("signataire", $obj->getSignataire());
    }

    /**
     * Tests setSigne()
     *
     * @return void
     */
    public function testSetSigne(): void {

        $obj = new BonTravPrev();

        $obj->setSigne(true);
        $this->assertEquals(true, $obj->getSigne());
    }

    /**
     * Tests setStartMob()
     *
     * @return void
     */
    public function testSetStartMob(): void {

        $obj = new BonTravPrev();

        $obj->setStartMob("startMob");
        $this->assertEquals("startMob", $obj->getStartMob());
    }

    /**
     * Tests setTypeBt()
     *
     * @return void
     */
    public function testSetTypeBt(): void {

        $obj = new BonTravPrev();

        $obj->setTypeBt("typeBt");
        $this->assertEquals("typeBt", $obj->getTypeBt());
    }

    /**
     * Tests setTypeBtSaisi()
     *
     * @return void
     */
    public function testSetTypeBtSaisi(): void {

        $obj = new BonTravPrev();

        $obj->setTypeBtSaisi("typeBtSaisi");
        $this->assertEquals("typeBtSaisi", $obj->getTypeBtSaisi());
    }

    /**
     * Tests setUniqIdBlocage()
     *
     * @return void
     */
    public function testSetUniqIdBlocage(): void {

        $obj = new BonTravPrev();

        $obj->setUniqIdBlocage("uniqIdBlocage");
        $this->assertEquals("uniqIdBlocage", $obj->getUniqIdBlocage());
    }

    /**
     * Tests setVia()
     *
     * @return void
     */
    public function testSetVia(): void {

        $obj = new BonTravPrev();

        $obj->setVia("via");
        $this->assertEquals("via", $obj->getVia());
    }

    /**
     * Tests setreference1Devis()
     *
     * @return void
     */
    public function testSetreference1Devis(): void {

        $obj = new BonTravPrev();

        $obj->setreference1Devis("reference1Devis");
        $this->assertEquals("reference1Devis", $obj->getreference1Devis());
    }

    /**
     * Tests setreference2Devis()
     *
     * @return void
     */
    public function testSetreference2Devis(): void {

        $obj = new BonTravPrev();

        $obj->setreference2Devis("reference2Devis");
        $this->assertEquals("reference2Devis", $obj->getreference2Devis());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BonTravPrev();

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
        $this->assertNull($obj->getBtCopie());
        $this->assertNull($obj->getBtDevisDejaFacture());
        $this->assertNull($obj->getBtValide());
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
        $this->assertNull($obj->getMontantHtDevis());
        $this->assertNull($obj->getNbJoursPointes());
        $this->assertNull($obj->getNbJoursPrevus());
        $this->assertNull($obj->getNombreEmployes());
        $this->assertNull($obj->getNonTraite());
        $this->assertNull($obj->getNumBt());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroPj());
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
        $this->assertNull($obj->getTypeBt());
        $this->assertNull($obj->getTypeBtSaisi());
        $this->assertNull($obj->getUniqIdBlocage());
        $this->assertNull($obj->getVia());
        $this->assertNull($obj->getreference1Devis());
        $this->assertNull($obj->getreference2Devis());
    }
}
