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
use WBW\Library\Quadratus\Model\QPaie\Etablissements2;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Etablissements2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QPaie
 */
class Etablissements2Test extends AbstractTestCase {

    /**
     * Tests setAdherentSyndicat()
     *
     * @return void
     */
    public function testSetAdherentSyndicat(): void {

        $obj = new Etablissements2();

        $obj->setAdherentSyndicat(true);
        $this->assertEquals(true, $obj->getAdherentSyndicat());
    }

    /**
     * Tests setAnneeChgtEffectif()
     *
     * @return void
     */
    public function testSetAnneeChgtEffectif(): void {

        $obj = new Etablissements2();

        $obj->setAnneeChgtEffectif("anneeChgtEffectif");
        $this->assertEquals("anneeChgtEffectif", $obj->getAnneeChgtEffectif());
    }

    /**
     * Tests setAnneeJei()
     *
     * @return void
     */
    public function testSetAnneeJei(): void {

        $obj = new Etablissements2();

        $obj->setAnneeJei(10);
        $this->assertEquals(10, $obj->getAnneeJei());
    }

    /**
     * Tests setAssujettiCvae()
     *
     * @return void
     */
    public function testSetAssujettiCvae(): void {

        $obj = new Etablissements2();

        $obj->setAssujettiCvae(true);
        $this->assertEquals(true, $obj->getAssujettiCvae());
    }

    /**
     * Tests setAutreSignatureDnae()
     *
     * @return void
     */
    public function testSetAutreSignatureDnae(): void {

        $obj = new Etablissements2();

        $obj->setAutreSignatureDnae("autreSignatureDnae");
        $this->assertEquals("autreSignatureDnae", $obj->getAutreSignatureDnae());
    }

    /**
     * Tests setBic2()
     *
     * @return void
     */
    public function testSetBic2(): void {

        $obj = new Etablissements2();

        $obj->setBic2("bic2");
        $this->assertEquals("bic2", $obj->getBic2());
    }

    /**
     * Tests setBic3()
     *
     * @return void
     */
    public function testSetBic3(): void {

        $obj = new Etablissements2();

        $obj->setBic3("bic3");
        $this->assertEquals("bic3", $obj->getBic3());
    }

    /**
     * Tests setCaisseCpTransport()
     *
     * @return void
     */
    public function testSetCaisseCpTransport(): void {

        $obj = new Etablissements2();

        $obj->setCaisseCpTransport(true);
        $this->assertEquals(true, $obj->getCaisseCpTransport());
    }

    /**
     * Tests setCategorieJuridique()
     *
     * @return void
     */
    public function testSetCategorieJuridique(): void {

        $obj = new Etablissements2();

        $obj->setCategorieJuridique("categorieJuridique");
        $this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
    }

    /**
     * Tests setCodeEtablissement()
     *
     * @return void
     */
    public function testSetCodeEtablissement(): void {

        $obj = new Etablissements2();

        $obj->setCodeEtablissement(10);
        $this->assertEquals(10, $obj->getCodeEtablissement());
    }

    /**
     * Tests setCodeMedTravDue()
     *
     * @return void
     */
    public function testSetCodeMedTravDue(): void {

        $obj = new Etablissements2();

        $obj->setCodeMedTravDue("codeMedTravDue");
        $this->assertEquals("codeMedTravDue", $obj->getCodeMedTravDue());
    }

    /**
     * Tests setCodeOrgaDue()
     *
     * @return void
     */
    public function testSetCodeOrgaDue(): void {

        $obj = new Etablissements2();

        $obj->setCodeOrgaDue("codeOrgaDue");
        $this->assertEquals("codeOrgaDue", $obj->getCodeOrgaDue());
    }

    /**
     * Tests setCoeffFillonMoins20()
     *
     * @return void
     */
    public function testSetCoeffFillonMoins20(): void {

        $obj = new Etablissements2();

        $obj->setCoeffFillonMoins20(true);
        $this->assertEquals(true, $obj->getCoeffFillonMoins20());
    }

    /**
     * Tests setCompteChargeHeuresActPart()
     *
     * @return void
     */
    public function testSetCompteChargeHeuresActPart(): void {

        $obj = new Etablissements2();

        $obj->setCompteChargeHeuresActPart("compteChargeHeuresActPart");
        $this->assertEquals("compteChargeHeuresActPart", $obj->getCompteChargeHeuresActPart());
    }

    /**
     * Tests setCompteChargeIndemAbsIntemp()
     *
     * @return void
     */
    public function testSetCompteChargeIndemAbsIntemp(): void {

        $obj = new Etablissements2();

        $obj->setCompteChargeIndemAbsIntemp("compteChargeIndemAbsIntemp");
        $this->assertEquals("compteChargeIndemAbsIntemp", $obj->getCompteChargeIndemAbsIntemp());
    }

    /**
     * Tests setCompteChargeIndemActPart()
     *
     * @return void
     */
    public function testSetCompteChargeIndemActPart(): void {

        $obj = new Etablissements2();

        $obj->setCompteChargeIndemActPart("compteChargeIndemActPart");
        $this->assertEquals("compteChargeIndemActPart", $obj->getCompteChargeIndemActPart());
    }

    /**
     * Tests setCompteChargeIntVers()
     *
     * @return void
     */
    public function testSetCompteChargeIntVers(): void {

        $obj = new Etablissements2();

        $obj->setCompteChargeIntVers("compteChargeIntVers");
        $this->assertEquals("compteChargeIntVers", $obj->getCompteChargeIntVers());
    }

    /**
     * Tests setCompteChargePartVers()
     *
     * @return void
     */
    public function testSetCompteChargePartVers(): void {

        $obj = new Etablissements2();

        $obj->setCompteChargePartVers("compteChargePartVers");
        $this->assertEquals("compteChargePartVers", $obj->getCompteChargePartVers());
    }

    /**
     * Tests setContactSignatureDnae()
     *
     * @return void
     */
    public function testSetContactSignatureDnae(): void {

        $obj = new Etablissements2();

        $obj->setContactSignatureDnae("contactSignatureDnae");
        $this->assertEquals("contactSignatureDnae", $obj->getContactSignatureDnae());
    }

    /**
     * Tests setDateFinExclureLfr2012()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinExclureLfr2012(): void {

        // Set a Date/time mock.
        $dateFinExclureLfr2012 = new DateTime("2018-09-10");

        $obj = new Etablissements2();

        $obj->setDateFinExclureLfr2012($dateFinExclureLfr2012);
        $this->assertSame($dateFinExclureLfr2012, $obj->getDateFinExclureLfr2012());
    }

    /**
     * Tests setExclureLfr2012()
     *
     * @return void
     */
    public function testSetExclureLfr2012(): void {

        $obj = new Etablissements2();

        $obj->setExclureLfr2012(true);
        $this->assertEquals(true, $obj->getExclureLfr2012());
    }

    /**
     * Tests setGestionHstepa()
     *
     * @return void
     */
    public function testSetGestionHstepa(): void {

        $obj = new Etablissements2();

        $obj->setGestionHstepa("gestionHstepa");
        $this->assertEquals("gestionHstepa", $obj->getGestionHstepa());
    }

    /**
     * Tests setGestionMaintienSalAuto()
     *
     * @return void
     */
    public function testSetGestionMaintienSalAuto(): void {

        $obj = new Etablissements2();

        $obj->setGestionMaintienSalAuto(true);
        $this->assertEquals(true, $obj->getGestionMaintienSalAuto());
    }

    /**
     * Tests setIban2()
     *
     * @return void
     */
    public function testSetIban2(): void {

        $obj = new Etablissements2();

        $obj->setIban2("iban2");
        $this->assertEquals("iban2", $obj->getIban2());
    }

    /**
     * Tests setIban3()
     *
     * @return void
     */
    public function testSetIban3(): void {

        $obj = new Etablissements2();

        $obj->setIban3("iban3");
        $this->assertEquals("iban3", $obj->getIban3());
    }

    /**
     * Tests setIbanIdClient2()
     *
     * @return void
     */
    public function testSetIbanIdClient2(): void {

        $obj = new Etablissements2();

        $obj->setIbanIdClient2("ibanIdClient2");
        $this->assertEquals("ibanIdClient2", $obj->getIbanIdClient2());
    }

    /**
     * Tests setIbanIdClient3()
     *
     * @return void
     */
    public function testSetIbanIdClient3(): void {

        $obj = new Etablissements2();

        $obj->setIbanIdClient3("ibanIdClient3");
        $this->assertEquals("ibanIdClient3", $obj->getIbanIdClient3());
    }

    /**
     * Tests setImplantationEntreprise()
     *
     * @return void
     */
    public function testSetImplantationEntreprise(): void {

        $obj = new Etablissements2();

        $obj->setImplantationEntreprise("implantationEntreprise");
        $this->assertEquals("implantationEntreprise", $obj->getImplantationEntreprise());
    }

    /**
     * Tests setJfChargeEmp()
     *
     * @return void
     */
    public function testSetJfChargeEmp(): void {

        $obj = new Etablissements2();

        $obj->setJfChargeEmp(true);
        $this->assertEquals(true, $obj->getJfChargeEmp());
    }

    /**
     * Tests setLieuSignatureDnae()
     *
     * @return void
     */
    public function testSetLieuSignatureDnae(): void {

        $obj = new Etablissements2();

        $obj->setLieuSignatureDnae("lieuSignatureDnae");
        $this->assertEquals("lieuSignatureDnae", $obj->getLieuSignatureDnae());
    }

    /**
     * Tests setMaintienNetDeducCsgijss()
     *
     * @return void
     */
    public function testSetMaintienNetDeducCsgijss(): void {

        $obj = new Etablissements2();

        $obj->setMaintienNetDeducCsgijss(true);
        $this->assertEquals(true, $obj->getMaintienNetDeducCsgijss());
    }

    /**
     * Tests setNbFractionEtab()
     *
     * @return void
     */
    public function testSetNbFractionEtab(): void {

        $obj = new Etablissements2();

        $obj->setNbFractionEtab(10);
        $this->assertEquals(10, $obj->getNbFractionEtab());
    }

    /**
     * Tests setNomSignataireDnae()
     *
     * @return void
     */
    public function testSetNomSignataireDnae(): void {

        $obj = new Etablissements2();

        $obj->setNomSignataireDnae("nomSignataireDnae");
        $this->assertEquals("nomSignataireDnae", $obj->getNomSignataireDnae());
    }

    /**
     * Tests setPrenomSignataireDnae()
     *
     * @return void
     */
    public function testSetPrenomSignataireDnae(): void {

        $obj = new Etablissements2();

        $obj->setPrenomSignataireDnae("prenomSignataireDnae");
        $this->assertEquals("prenomSignataireDnae", $obj->getPrenomSignataireDnae());
    }

    /**
     * Tests setPseudoSiret()
     *
     * @return void
     */
    public function testSetPseudoSiret(): void {

        $obj = new Etablissements2();

        $obj->setPseudoSiret("pseudoSiret");
        $this->assertEquals("pseudoSiret", $obj->getPseudoSiret());
    }

    /**
     * Tests setQualiteSignataireDnae()
     *
     * @return void
     */
    public function testSetQualiteSignataireDnae(): void {

        $obj = new Etablissements2();

        $obj->setQualiteSignataireDnae("qualiteSignataireDnae");
        $this->assertEquals("qualiteSignataireDnae", $obj->getQualiteSignataireDnae());
    }

    /**
     * Tests setReductionMayotte()
     *
     * @return void
     */
    public function testSetReductionMayotte(): void {

        $obj = new Etablissements2();

        $obj->setReductionMayotte(true);
        $this->assertEquals(true, $obj->getReductionMayotte());
    }

    /**
     * Tests setRemunerationExpatries()
     *
     * @return void
     */
    public function testSetRemunerationExpatries(): void {

        $obj = new Etablissements2();

        $obj->setRemunerationExpatries("remunerationExpatries");
        $this->assertEquals("remunerationExpatries", $obj->getRemunerationExpatries());
    }

    /**
     * Tests setSiretCentralisateur()
     *
     * @return void
     */
    public function testSetSiretCentralisateur(): void {

        $obj = new Etablissements2();

        $obj->setSiretCentralisateur(true);
        $this->assertEquals(true, $obj->getSiretCentralisateur());
    }

    /**
     * Tests setSmicMCourant()
     *
     * @return void
     */
    public function testSetSmicMCourant(): void {

        $obj = new Etablissements2();

        $obj->setSmicMCourant(true);
        $this->assertEquals(true, $obj->getSmicMCourant());
    }

    /**
     * Tests setSocieteInterim()
     *
     * @return void
     */
    public function testSetSocieteInterim(): void {

        $obj = new Etablissements2();

        $obj->setSocieteInterim(true);
        $this->assertEquals(true, $obj->getSocieteInterim());
    }

    /**
     * Tests setTauxComplHeure()
     *
     * @return void
     */
    public function testSetTauxComplHeure(): void {

        $obj = new Etablissements2();

        $obj->setTauxComplHeure(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxComplHeure());
    }

    /**
     * Tests setTauxCotisOssEtOpe()
     *
     * @return void
     */
    public function testSetTauxCotisOssEtOpe(): void {

        $obj = new Etablissements2();

        $obj->setTauxCotisOssEtOpe(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCotisOssEtOpe());
    }

    /**
     * Tests setTauxHComp()
     *
     * @return void
     */
    public function testSetTauxHComp(): void {

        $obj = new Etablissements2();

        $obj->setTauxHComp(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxHComp());
    }

    /**
     * Tests setTds19()
     *
     * @return void
     */
    public function testSetTds19(): void {

        $obj = new Etablissements2();

        $obj->setTds19("tds19");
        $this->assertEquals("tds19", $obj->getTds19());
    }

    /**
     * Tests setTelSignatureDnae()
     *
     * @return void
     */
    public function testSetTelSignatureDnae(): void {

        $obj = new Etablissements2();

        $obj->setTelSignatureDnae("telSignatureDnae");
        $this->assertEquals("telSignatureDnae", $obj->getTelSignatureDnae());
    }

    /**
     * Tests setTepaMoins20()
     *
     * @return void
     */
    public function testSetTepaMoins20(): void {

        $obj = new Etablissements2();

        $obj->setTepaMoins20(true);
        $this->assertEquals(true, $obj->getTepaMoins20());
    }

    /**
     * Tests setTypeEffectifCt()
     *
     * @return void
     */
    public function testSetTypeEffectifCt(): void {

        $obj = new Etablissements2();

        $obj->setTypeEffectifCt("typeEffectifCt");
        $this->assertEquals("typeEffectifCt", $obj->getTypeEffectifCt());
    }

    /**
     * Tests setTypeMaintienBrutNet()
     *
     * @return void
     */
    public function testSetTypeMaintienBrutNet(): void {

        $obj = new Etablissements2();

        $obj->setTypeMaintienBrutNet("typeMaintienBrutNet");
        $this->assertEquals("typeMaintienBrutNet", $obj->getTypeMaintienBrutNet());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Etablissements2();

        $this->assertNull($obj->getAdherentSyndicat());
        $this->assertNull($obj->getAnneeChgtEffectif());
        $this->assertNull($obj->getAnneeJei());
        $this->assertNull($obj->getAssujettiCvae());
        $this->assertNull($obj->getAutreSignatureDnae());
        $this->assertNull($obj->getBic2());
        $this->assertNull($obj->getBic3());
        $this->assertNull($obj->getCaisseCpTransport());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getCodeEtablissement());
        $this->assertNull($obj->getCodeMedTravDue());
        $this->assertNull($obj->getCodeOrgaDue());
        $this->assertNull($obj->getCoeffFillonMoins20());
        $this->assertNull($obj->getCompteChargeHeuresActPart());
        $this->assertNull($obj->getCompteChargeIndemAbsIntemp());
        $this->assertNull($obj->getCompteChargeIndemActPart());
        $this->assertNull($obj->getCompteChargeIntVers());
        $this->assertNull($obj->getCompteChargePartVers());
        $this->assertNull($obj->getContactSignatureDnae());
        $this->assertNull($obj->getDateFinExclureLfr2012());
        $this->assertNull($obj->getExclureLfr2012());
        $this->assertNull($obj->getGestionHstepa());
        $this->assertNull($obj->getGestionMaintienSalAuto());
        $this->assertNull($obj->getIban2());
        $this->assertNull($obj->getIban3());
        $this->assertNull($obj->getIbanIdClient2());
        $this->assertNull($obj->getIbanIdClient3());
        $this->assertNull($obj->getImplantationEntreprise());
        $this->assertNull($obj->getJfChargeEmp());
        $this->assertNull($obj->getLieuSignatureDnae());
        $this->assertNull($obj->getMaintienNetDeducCsgijss());
        $this->assertNull($obj->getNbFractionEtab());
        $this->assertNull($obj->getNomSignataireDnae());
        $this->assertNull($obj->getPrenomSignataireDnae());
        $this->assertNull($obj->getPseudoSiret());
        $this->assertNull($obj->getQualiteSignataireDnae());
        $this->assertNull($obj->getReductionMayotte());
        $this->assertNull($obj->getRemunerationExpatries());
        $this->assertNull($obj->getSmicMCourant());
        $this->assertNull($obj->getSiretCentralisateur());
        $this->assertNull($obj->getSocieteInterim());
        $this->assertNull($obj->getTds19());
        $this->assertNull($obj->getTepaMoins20());
        $this->assertNull($obj->getTauxComplHeure());
        $this->assertNull($obj->getTauxCotisOssEtOpe());
        $this->assertNull($obj->getTauxHComp());
        $this->assertNull($obj->getTelSignatureDnae());
        $this->assertNull($obj->getTypeEffectifCt());
        $this->assertNull($obj->getTypeMaintienBrutNet());
    }
}
