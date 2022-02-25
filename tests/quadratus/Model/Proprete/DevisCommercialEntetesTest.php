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
use WBW\Library\Quadratus\Model\Proprete\DevisCommercialEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Devis commercial entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class DevisCommercialEntetesTest extends AbstractTestCase {

    /**
     * Tests setAdIntBtq()
     *
     * @return void
     */
    public function testSetAdIntBtq(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntBtq("adIntBtq");
        $this->assertEquals("adIntBtq", $obj->getAdIntBtq());
    }

    /**
     * Tests setAdIntBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdIntBureauDistributeur(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntBureauDistributeur("adIntBureauDistributeur");
        $this->assertEquals("adIntBureauDistributeur", $obj->getAdIntBureauDistributeur());
    }

    /**
     * Tests setAdIntCodePays()
     *
     * @return void
     */
    public function testSetAdIntCodePays(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntCodePays("adIntCodePays");
        $this->assertEquals("adIntCodePays", $obj->getAdIntCodePays());
    }

    /**
     * Tests setAdIntCodePostal()
     *
     * @return void
     */
    public function testSetAdIntCodePostal(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntCodePostal("adIntCodePostal");
        $this->assertEquals("adIntCodePostal", $obj->getAdIntCodePostal());
    }

    /**
     * Tests setAdIntComplement()
     *
     * @return void
     */
    public function testSetAdIntComplement(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntComplement("adIntComplement");
        $this->assertEquals("adIntComplement", $obj->getAdIntComplement());
    }

    /**
     * Tests setAdIntNom()
     *
     * @return void
     */
    public function testSetAdIntNom(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntNom("adIntNom");
        $this->assertEquals("adIntNom", $obj->getAdIntNom());
    }

    /**
     * Tests setAdIntNomVoie()
     *
     * @return void
     */
    public function testSetAdIntNomVoie(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntNomVoie("adIntNomVoie");
        $this->assertEquals("adIntNomVoie", $obj->getAdIntNomVoie());
    }

    /**
     * Tests setAdIntNumVoie()
     *
     * @return void
     */
    public function testSetAdIntNumVoie(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setAdIntNumVoie("adIntNumVoie");
        $this->assertEquals("adIntNumVoie", $obj->getAdIntNumVoie());
    }

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAnalClient()
     *
     * @return void
     */
    public function testSetCodeAnalClient(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeAnalClient("codeAnalClient");
        $this->assertEquals("codeAnalClient", $obj->getCodeAnalClient());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeClientFact()
     *
     * @return void
     */
    public function testSetCodeClientFact(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests setCodeFactor()
     *
     * @return void
     */
    public function testSetCodeFactor(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests setCodeLangueDesignationArticle()
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests setCodeModeReglement()
     *
     * @return void
     */
    public function testSetCodeModeReglement(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeModeReglement("codeModeReglement");
        $this->assertEquals("codeModeReglement", $obj->getCodeModeReglement());
    }

    /**
     * Tests setCodePays()
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setCodeRepresentant()
     *
     * @return void
     */
    public function testSetCodeRepresentant(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests setCodeTvaClient()
     *
     * @return void
     */
    public function testSetCodeTvaClient(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeTvaClient("codeTvaClient");
        $this->assertEquals("codeTvaClient", $obj->getCodeTvaClient());
    }

    /**
     * Tests setCodeVentilClient()
     *
     * @return void
     */
    public function testSetCodeVentilClient(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setCodeVentilClient("codeVentilClient");
        $this->assertEquals("codeVentilClient", $obj->getCodeVentilClient());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setDateAcceptation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAcceptation(): void {

        // Set a Date/time mock.
        $dateAcceptation = new DateTime("2018-09-10");

        $obj = new DevisCommercialEntetes();

        $obj->setDateAcceptation($dateAcceptation);
        $this->assertSame($dateAcceptation, $obj->getDateAcceptation());
    }

    /**
     * Tests setDateDevis()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDevis(): void {

        // Set a Date/time mock.
        $dateDevis = new DateTime("2018-09-10");

        $obj = new DevisCommercialEntetes();

        $obj->setDateDevis($dateDevis);
        $this->assertSame($dateDevis, $obj->getDateDevis());
    }

    /**
     * Tests setDateEcheance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new DevisCommercialEntetes();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests setDateValidation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidation(): void {

        // Set a Date/time mock.
        $dateValidation = new DateTime("2018-09-10");

        $obj = new DevisCommercialEntetes();

        $obj->setDateValidation($dateValidation);
        $this->assertSame($dateValidation, $obj->getDateValidation());
    }

    /**
     * Tests setDevisEuros()
     *
     * @return void
     */
    public function testSetDevisEuros(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setDevisEuros(true);
        $this->assertEquals(true, $obj->getDevisEuros());
    }

    /**
     * Tests setDevisVm()
     *
     * @return void
     */
    public function testSetDevisVm(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setDevisVm(true);
        $this->assertEquals(true, $obj->getDevisVm());
    }

    /**
     * Tests setEcheanceDepart()
     *
     * @return void
     */
    public function testSetEcheanceDepart(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setEcheanceDepart("echeanceDepart");
        $this->assertEquals("echeanceDepart", $obj->getEcheanceDepart());
    }

    /**
     * Tests setEcheanceForcee()
     *
     * @return void
     */
    public function testSetEcheanceForcee(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setEcheanceForcee(true);
        $this->assertEquals(true, $obj->getEcheanceForcee());
    }

    /**
     * Tests setEcheanceLe()
     *
     * @return void
     */
    public function testSetEcheanceLe(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setEcheanceLe("echeanceLe");
        $this->assertEquals("echeanceLe", $obj->getEcheanceLe());
    }

    /**
     * Tests setEcheanceNbJours()
     *
     * @return void
     */
    public function testSetEcheanceNbJours(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setEcheanceNbJours(10);
        $this->assertEquals(10, $obj->getEcheanceNbJours());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setFonctionCommercial()
     *
     * @return void
     */
    public function testSetFonctionCommercial(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setFonctionCommercial("fonctionCommercial");
        $this->assertEquals("fonctionCommercial", $obj->getFonctionCommercial());
    }

    /**
     * Tests setInterlocuteur()
     *
     * @return void
     */
    public function testSetInterlocuteur(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setInterlocuteur("interlocuteur");
        $this->assertEquals("interlocuteur", $obj->getInterlocuteur());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelleTransfCpta()
     *
     * @return void
     */
    public function testSetLibelleTransfCpta(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setLibelleTransfCpta("libelleTransfCpta");
        $this->assertEquals("libelleTransfCpta", $obj->getLibelleTransfCpta());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setMentionLibre()
     *
     * @return void
     */
    public function testSetMentionLibre(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setMentionLibre("mentionLibre");
        $this->assertEquals("mentionLibre", $obj->getMentionLibre());
    }

    /**
     * Tests setMontantAcompte()
     *
     * @return void
     */
    public function testSetMontantAcompte(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setMontantAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAcompte());
    }

    /**
     * Tests setMontantHtpx()
     *
     * @return void
     */
    public function testSetMontantHtpx(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setMontantHtpx(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtpx());
    }

    /**
     * Tests setMontantHtvm()
     *
     * @return void
     */
    public function testSetMontantHtvm(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setMontantHtvm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtvm());
    }

    /**
     * Tests setMontantTtc()
     *
     * @return void
     */
    public function testSetMontantTtc(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setMontantTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTtc());
    }

    /**
     * Tests setNomClient()
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests setNomSuite()
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests setNomSuite2()
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests setNomSuite3()
     *
     * @return void
     */
    public function testSetNomSuite3(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setNumeroDevis()
     *
     * @return void
     */
    public function testSetNumeroDevis(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setPrestation()
     *
     * @return void
     */
    public function testSetPrestation(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setPrestation("prestation");
        $this->assertEquals("prestation", $obj->getPrestation());
    }

    /**
     * Tests setReference1()
     *
     * @return void
     */
    public function testSetReference1(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }

    /**
     * Tests setReference2()
     *
     * @return void
     */
    public function testSetReference2(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }

    /**
     * Tests setReference3()
     *
     * @return void
     */
    public function testSetReference3(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }

    /**
     * Tests setReference4()
     *
     * @return void
     */
    public function testSetReference4(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }

    /**
     * Tests setSaisirAdresse()
     *
     * @return void
     */
    public function testSetSaisirAdresse(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setSaisirAdresse(true);
        $this->assertEquals(true, $obj->getSaisirAdresse());
    }

    /**
     * Tests setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests setSoumisTaxeDeee()
     *
     * @return void
     */
    public function testSetSoumisTaxeDeee(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setSoumisTaxeDeee(true);
        $this->assertEquals(true, $obj->getSoumisTaxeDeee());
    }

    /**
     * Tests setTauxDevise()
     *
     * @return void
     */
    public function testSetTauxDevise(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setTauxDevise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDevise());
    }

    /**
     * Tests setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests setTauxRemise1()
     *
     * @return void
     */
    public function testSetTauxRemise1(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setTauxRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise1());
    }

    /**
     * Tests setTauxRemise2()
     *
     * @return void
     */
    public function testSetTauxRemise2(): void {

        $obj = new DevisCommercialEntetes();

        $obj->setTauxRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise2());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DevisCommercialEntetes();

        $this->assertNull($obj->getAdIntBtq());
        $this->assertNull($obj->getAdIntBureauDistributeur());
        $this->assertNull($obj->getAdIntCodePays());
        $this->assertNull($obj->getAdIntCodePostal());
        $this->assertNull($obj->getAdIntComplement());
        $this->assertNull($obj->getAdIntNom());
        $this->assertNull($obj->getAdIntNomVoie());
        $this->assertNull($obj->getAdIntNumVoie());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCivilite());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAnalClient());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFactor());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeModeReglement());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeRepresentant());
        $this->assertNull($obj->getCodeTvaClient());
        $this->assertNull($obj->getCodeVentilClient());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateAcceptation());
        $this->assertNull($obj->getDateDevis());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateValidation());
        $this->assertNull($obj->getDevisEuros());
        $this->assertNull($obj->getDevisVm());
        $this->assertNull($obj->getEcheanceDepart());
        $this->assertNull($obj->getEcheanceForcee());
        $this->assertNull($obj->getEcheanceLe());
        $this->assertNull($obj->getEcheanceNbJours());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFonctionCommercial());
        $this->assertNull($obj->getInterlocuteur());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleTransfCpta());
        $this->assertNull($obj->getLienDocument());
        $this->assertNull($obj->getMentionLibre());
        $this->assertNull($obj->getMontantAcompte());
        $this->assertNull($obj->getMontantHtpx());
        $this->assertNull($obj->getMontantHtvm());
        $this->assertNull($obj->getMontantTtc());
        $this->assertNull($obj->getNomClient());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomSuite3());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPrestation());
        $this->assertNull($obj->getReference1());
        $this->assertNull($obj->getReference2());
        $this->assertNull($obj->getReference3());
        $this->assertNull($obj->getReference4());
        $this->assertNull($obj->getSaisirAdresse());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisTaxeDeee());
        $this->assertNull($obj->getTauxDevise());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getTauxRemise1());
        $this->assertNull($obj->getTauxRemise2());
    }
}
