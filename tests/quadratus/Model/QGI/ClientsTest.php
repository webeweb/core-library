<?php

/*
 * This file is part of the core-library-package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\QGI\Clients;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsTest extends AbstractTestCase {

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Clients();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setActiviteNouvelle() method.
     *
     * @return void
     */
    public function testSetActiviteNouvelle(): void {

        $obj = new Clients();

        $obj->setActiviteNouvelle(true);
        $this->assertEquals(true, $obj->getActiviteNouvelle());
    }

    /**
     * Tests the setActiviteSaiso() method.
     *
     * @return void
     */
    public function testSetActiviteSaiso(): void {

        $obj = new Clients();

        $obj->setActiviteSaiso(true);
        $this->assertEquals(true, $obj->getActiviteSaiso());
    }

    /**
     * Tests the setAdresseSiteClient() method.
     *
     * @return void
     */
    public function testSetAdresseSiteClient(): void {

        $obj = new Clients();

        $obj->setAdresseSiteClient("adresseSiteClient");
        $this->assertEquals("adresseSiteClient", $obj->getAdresseSiteClient());
    }

    /**
     * Tests the setArticlePort1() method.
     *
     * @return void
     */
    public function testSetArticlePort1(): void {

        $obj = new Clients();

        $obj->setArticlePort1("articlePort1");
        $this->assertEquals("articlePort1", $obj->getArticlePort1());
    }

    /**
     * Tests the setArticlePort2() method.
     *
     * @return void
     */
    public function testSetArticlePort2(): void {

        $obj = new Clients();

        $obj->setArticlePort2("articlePort2");
        $this->assertEquals("articlePort2", $obj->getArticlePort2());
    }

    /**
     * Tests the setAssurance() method.
     *
     * @return void
     */
    public function testSetAssurance(): void {

        $obj = new Clients();

        $obj->setAssurance(true);
        $this->assertEquals(true, $obj->getAssurance());
    }

    /**
     * Tests the setBibliothequeNovaxel() method.
     *
     * @return void
     */
    public function testSetBibliothequeNovaxel(): void {

        $obj = new Clients();

        $obj->setBibliothequeNovaxel("bibliothequeNovaxel");
        $this->assertEquals("bibliothequeNovaxel", $obj->getBibliothequeNovaxel());
    }

    /**
     * Tests the setBlChiffre() method.
     *
     * @return void
     */
    public function testSetBlChiffre(): void {

        $obj = new Clients();

        $obj->setBlChiffre(true);
        $this->assertEquals(true, $obj->getBlChiffre());
    }

    /**
     * Tests the setBloque() method.
     *
     * @return void
     */
    public function testSetBloque(): void {

        $obj = new Clients();

        $obj->setBloque(true);
        $this->assertEquals(true, $obj->getBloque());
    }

    /**
     * Tests the setCdeAutoManu() method.
     *
     * @return void
     */
    public function testSetCdeAutoManu(): void {

        $obj = new Clients();

        $obj->setCdeAutoManu("cdeAutoManu");
        $this->assertEquals("cdeAutoManu", $obj->getCdeAutoManu());
    }

    /**
     * Tests the setCga() method.
     *
     * @return void
     */
    public function testSetCga(): void {

        $obj = new Clients();

        $obj->setCga(true);
        $this->assertEquals(true, $obj->getCga());
    }

    /**
     * Tests the setCharges() method.
     *
     * @return void
     */
    public function testSetCharges(): void {

        $obj = new Clients();

        $obj->setCharges("charges");
        $this->assertEquals("charges", $obj->getCharges());
    }

    /**
     * Tests the setChiffreAffaire() method.
     *
     * @return void
     */
    public function testSetChiffreAffaire(): void {

        $obj = new Clients();

        $obj->setChiffreAffaire(10.092018);
        $this->assertEquals(10.092018, $obj->getChiffreAffaire());
    }

    /**
     * Tests the setCleAlpha() method.
     *
     * @return void
     */
    public function testSetCleAlpha(): void {

        $obj = new Clients();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Clients();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite(): void {

        $obj = new Clients();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeAgence() method.
     *
     * @return void
     */
    public function testSetCodeAgence(): void {

        $obj = new Clients();

        $obj->setCodeAgence("codeAgence");
        $this->assertEquals("codeAgence", $obj->getCodeAgence());
    }

    /**
     * Tests the setCodeArticleCotisation() method.
     *
     * @return void
     */
    public function testSetCodeArticleCotisation(): void {

        $obj = new Clients();

        $obj->setCodeArticleCotisation("codeArticleCotisation");
        $this->assertEquals("codeArticleCotisation", $obj->getCodeArticleCotisation());
    }

    /**
     * Tests the setCodeArticleDroitFixe() method.
     *
     * @return void
     */
    public function testSetCodeArticleDroitFixe(): void {

        $obj = new Clients();

        $obj->setCodeArticleDroitFixe("codeArticleDroitFixe");
        $this->assertEquals("codeArticleDroitFixe", $obj->getCodeArticleDroitFixe());
    }

    /**
     * Tests the setCodeArticleFraisFixe() method.
     *
     * @return void
     */
    public function testSetCodeArticleFraisFixe(): void {

        $obj = new Clients();

        $obj->setCodeArticleFraisFixe("codeArticleFraisFixe");
        $this->assertEquals("codeArticleFraisFixe", $obj->getCodeArticleFraisFixe());
    }

    /**
     * Tests the setCodeAssistantJuridique() method.
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique(): void {

        $obj = new Clients();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Tests the setCodeAssistantSocial() method.
     *
     * @return void
     */
    public function testSetCodeAssistantSocial(): void {

        $obj = new Clients();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Tests the setCodeAutre1() method.
     *
     * @return void
     */
    public function testSetCodeAutre1(): void {

        $obj = new Clients();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Tests the setCodeAutre2() method.
     *
     * @return void
     */
    public function testSetCodeAutre2(): void {

        $obj = new Clients();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Tests the setCodeAvocat() method.
     *
     * @return void
     */
    public function testSetCodeAvocat(): void {

        $obj = new Clients();

        $obj->setCodeAvocat("codeAvocat");
        $this->assertEquals("codeAvocat", $obj->getCodeAvocat());
    }

    /**
     * Tests the setCodeBarre() method.
     *
     * @return void
     */
    public function testSetCodeBarre(): void {

        $obj = new Clients();

        $obj->setCodeBarre(true);
        $this->assertEquals(true, $obj->getCodeBarre());
    }

    /**
     * Tests the setCodeCategorieClient() method.
     *
     * @return void
     */
    public function testSetCodeCategorieClient(): void {

        $obj = new Clients();

        $obj->setCodeCategorieClient("codeCategorieClient");
        $this->assertEquals("codeCategorieClient", $obj->getCodeCategorieClient());
    }

    /**
     * Tests the setCodeClientFact() method.
     *
     * @return void
     */
    public function testSetCodeClientFact(): void {

        $obj = new Clients();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests the setCodeClientLivr() method.
     *
     * @return void
     */
    public function testSetCodeClientLivr(): void {

        $obj = new Clients();

        $obj->setCodeClientLivr("codeClientLivr");
        $this->assertEquals("codeClientLivr", $obj->getCodeClientLivr());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Clients();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new Clients();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Clients();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeEditionFact() method.
     *
     * @return void
     */
    public function testSetCodeEditionFact(): void {

        $obj = new Clients();

        $obj->setCodeEditionFact("codeEditionFact");
        $this->assertEquals("codeEditionFact", $obj->getCodeEditionFact());
    }

    /**
     * Tests the setCodeExc() method.
     *
     * @return void
     */
    public function testSetCodeExc(): void {

        $obj = new Clients();

        $obj->setCodeExc("codeExc");
        $this->assertEquals("codeExc", $obj->getCodeExc());
    }

    /**
     * Tests the setCodeExpert() method.
     *
     * @return void
     */
    public function testSetCodeExpert(): void {

        $obj = new Clients();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Tests the setCodeFactor() method.
     *
     * @return void
     */
    public function testSetCodeFactor(): void {

        $obj = new Clients();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new Clients();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeGeo() method.
     *
     * @return void
     */
    public function testSetCodeGeo(): void {

        $obj = new Clients();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Tests the setCodeImputationAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeImputationAnalytique(): void {

        $obj = new Clients();

        $obj->setCodeImputationAnalytique("codeImputationAnalytique");
        $this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
    }

    /**
     * Tests the setCodeLangueDesignationArticle() method.
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new Clients();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests the setCodeMissionFraisFixe() method.
     *
     * @return void
     */
    public function testSetCodeMissionFraisFixe(): void {

        $obj = new Clients();

        $obj->setCodeMissionFraisFixe("codeMissionFraisFixe");
        $this->assertEquals("codeMissionFraisFixe", $obj->getCodeMissionFraisFixe());
    }

    /**
     * Tests the setCodeOrigine() method.
     *
     * @return void
     */
    public function testSetCodeOrigine(): void {

        $obj = new Clients();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Tests the setCodePaysCorres() method.
     *
     * @return void
     */
    public function testSetCodePaysCorres(): void {

        $obj = new Clients();

        $obj->setCodePaysCorres("codePaysCorres");
        $this->assertEquals("codePaysCorres", $obj->getCodePaysCorres());
    }

    /**
     * Tests the setCodePaysFact() method.
     *
     * @return void
     */
    public function testSetCodePaysFact(): void {

        $obj = new Clients();

        $obj->setCodePaysFact("codePaysFact");
        $this->assertEquals("codePaysFact", $obj->getCodePaysFact());
    }

    /**
     * Tests the setCodePortefeuille() method.
     *
     * @return void
     */
    public function testSetCodePortefeuille(): void {

        $obj = new Clients();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Tests the setCodeRecetteImpots() method.
     *
     * @return void
     */
    public function testSetCodeRecetteImpots(): void {

        $obj = new Clients();

        $obj->setCodeRecetteImpots("codeRecetteImpots");
        $this->assertEquals("codeRecetteImpots", $obj->getCodeRecetteImpots());
    }

    /**
     * Tests the setCodeReglement() method.
     *
     * @return void
     */
    public function testSetCodeReglement(): void {

        $obj = new Clients();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Clients();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeRepresentant() method.
     *
     * @return void
     */
    public function testSetCodeRepresentant(): void {

        $obj = new Clients();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests the setCodeRevision() method.
     *
     * @return void
     */
    public function testSetCodeRevision(): void {

        $obj = new Clients();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Tests the setCodeSousFamille() method.
     *
     * @return void
     */
    public function testSetCodeSousFamille(): void {

        $obj = new Clients();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Tests the setCodeSousTournee() method.
     *
     * @return void
     */
    public function testSetCodeSousTournee(): void {

        $obj = new Clients();

        $obj->setCodeSousTournee("codeSousTournee");
        $this->assertEquals("codeSousTournee", $obj->getCodeSousTournee());
    }

    /**
     * Tests the setCodeTarif() method.
     *
     * @return void
     */
    public function testSetCodeTarif(): void {

        $obj = new Clients();

        $obj->setCodeTarif("codeTarif");
        $this->assertEquals("codeTarif", $obj->getCodeTarif());
    }

    /**
     * Tests the setCodeTournee() method.
     *
     * @return void
     */
    public function testSetCodeTournee(): void {

        $obj = new Clients();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests the setCodeTransporteur() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur(): void {

        $obj = new Clients();

        $obj->setCodeTransporteur("codeTransporteur");
        $this->assertEquals("codeTransporteur", $obj->getCodeTransporteur());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Clients();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Clients();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setCoefSurPv() method.
     *
     * @return void
     */
    public function testSetCoefSurPv(): void {

        $obj = new Clients();

        $obj->setCoefSurPv(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefSurPv());
    }

    /**
     * Tests the setCoeffPvClient() method.
     *
     * @return void
     */
    public function testSetCoeffPvClient(): void {

        $obj = new Clients();

        $obj->setCoeffPvClient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffPvClient());
    }

    /**
     * Tests the setCollectif() method.
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Clients();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests the setConjoint() method.
     *
     * @return void
     */
    public function testSetConjoint(): void {

        $obj = new Clients();

        $obj->setConjoint("conjoint");
        $this->assertEquals("conjoint", $obj->getConjoint());
    }

    /**
     * Tests the setContactRecetteImpots() method.
     *
     * @return void
     */
    public function testSetContactRecetteImpots(): void {

        $obj = new Clients();

        $obj->setContactRecetteImpots("contactRecetteImpots");
        $this->assertEquals("contactRecetteImpots", $obj->getContactRecetteImpots());
    }

    /**
     * Tests the setDateAttribEncours() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateAttribEncours(): void {

        // Set a Date/time mock.
        $dateAttribEncours = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateAttribEncours($dateAttribEncours);
        $this->assertSame($dateAttribEncours, $obj->getDateAttribEncours());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateDebActivite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebActivite(): void {

        // Set a Date/time mock.
        $dateDebActivite = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateDebActivite($dateDebActivite);
        $this->assertSame($dateDebActivite, $obj->getDateDebActivite());
    }

    /**
     * Tests the setDateDebProf() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebProf(): void {

        // Set a Date/time mock.
        $dateDebProf = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateDebProf($dateDebProf);
        $this->assertSame($dateDebProf, $obj->getDateDebProf());
    }

    /**
     * Tests the setDateDerniereVente() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDerniereVente(): void {

        // Set a Date/time mock.
        $dateDerniereVente = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateDerniereVente($dateDerniereVente);
        $this->assertSame($dateDerniereVente, $obj->getDateDerniereVente());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateFinActivite() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFinActivite(): void {

        // Set a Date/time mock.
        $dateFinActivite = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateFinActivite($dateFinActivite);
        $this->assertSame($dateFinActivite, $obj->getDateFinActivite());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDateReprise() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReprise(): void {

        // Set a Date/time mock.
        $dateReprise = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateReprise($dateReprise);
        $this->assertSame($dateReprise, $obj->getDateReprise());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setDelaiTarif() method.
     *
     * @return void
     */
    public function testSetDelaiTarif(): void {

        $obj = new Clients();

        $obj->setDelaiTarif(10);
        $this->assertEquals(10, $obj->getDelaiTarif());
    }

    /**
     * Tests the setDomiciliationBancaire1() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new Clients();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests the setDomiciliationBancaire2() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new Clients();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests the setDossierComptable() method.
     *
     * @return void
     */
    public function testSetDossierComptable(): void {

        $obj = new Clients();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Tests the setDossierPaie() method.
     *
     * @return void
     */
    public function testSetDossierPaie(): void {

        $obj = new Clients();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Tests the setDsCodeCollab() method.
     *
     * @return void
     */
    public function testSetDsCodeCollab(): void {

        $obj = new Clients();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Tests the setDsDateRetour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour(): void {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Tests the setDsDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie(): void {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Tests the setDuClient() method.
     *
     * @return void
     */
    public function testSetDuClient(): void {

        $obj = new Clients();

        $obj->setDuClient("duClient");
        $this->assertEquals("duClient", $obj->getDuClient());
    }

    /**
     * Tests the setDureeEcheances() method.
     *
     * @return void
     */
    public function testSetDureeEcheances(): void {

        $obj = new Clients();

        $obj->setDureeEcheances("dureeEcheances");
        $this->assertEquals("dureeEcheances", $obj->getDureeEcheances());
    }

    /**
     * Tests the setEffectifEtp() method.
     *
     * @return void
     */
    public function testSetEffectifEtp(): void {

        $obj = new Clients();

        $obj->setEffectifEtp(10);
        $this->assertEquals(10, $obj->getEffectifEtp());
    }

    /**
     * Tests the setElectionCe() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetElectionCe(): void {

        // Set a Date/time mock.
        $electionCe = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setElectionCe($electionCe);
        $this->assertSame($electionCe, $obj->getElectionCe());
    }

    /**
     * Tests the setElectionDeleguePersonnel() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetElectionDeleguePersonnel(): void {

        // Set a Date/time mock.
        $electionDeleguePersonnel = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setElectionDeleguePersonnel($electionDeleguePersonnel);
        $this->assertSame($electionDeleguePersonnel, $obj->getElectionDeleguePersonnel());
    }

    /**
     * Tests the setEquipInfo() method.
     *
     * @return void
     */
    public function testSetEquipInfo(): void {

        $obj = new Clients();

        $obj->setEquipInfo("equipInfo");
        $this->assertEquals("equipInfo", $obj->getEquipInfo());
    }

    /**
     * Tests the setEtat1() method.
     *
     * @return void
     */
    public function testSetEtat1(): void {

        $obj = new Clients();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }

    /**
     * Tests the setEtat2() method.
     *
     * @return void
     */
    public function testSetEtat2(): void {

        $obj = new Clients();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }

    /**
     * Tests the setEtat3() method.
     *
     * @return void
     */
    public function testSetEtat3(): void {

        $obj = new Clients();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }

    /**
     * Tests the setEtat4() method.
     *
     * @return void
     */
    public function testSetEtat4(): void {

        $obj = new Clients();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }

    /**
     * Tests the setEtat5() method.
     *
     * @return void
     */
    public function testSetEtat5(): void {

        $obj = new Clients();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }

    /**
     * Tests the setEtiquettes() method.
     *
     * @return void
     */
    public function testSetEtiquettes(): void {

        $obj = new Clients();

        $obj->setEtiquettes(true);
        $this->assertEquals(true, $obj->getEtiquettes());
    }

    /**
     * Tests the setFactBtq() method.
     *
     * @return void
     */
    public function testSetFactBtq(): void {

        $obj = new Clients();

        $obj->setFactBtq("factBtq");
        $this->assertEquals("factBtq", $obj->getFactBtq());
    }

    /**
     * Tests the setFactBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetFactBureauDistributeur(): void {

        $obj = new Clients();

        $obj->setFactBureauDistributeur("factBureauDistributeur");
        $this->assertEquals("factBureauDistributeur", $obj->getFactBureauDistributeur());
    }

    /**
     * Tests the setFactCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetFactCodeOfficielCommune(): void {

        $obj = new Clients();

        $obj->setFactCodeOfficielCommune("factCodeOfficielCommune");
        $this->assertEquals("factCodeOfficielCommune", $obj->getFactCodeOfficielCommune());
    }

    /**
     * Tests the setFactCodePostal() method.
     *
     * @return void
     */
    public function testSetFactCodePostal(): void {

        $obj = new Clients();

        $obj->setFactCodePostal("factCodePostal");
        $this->assertEquals("factCodePostal", $obj->getFactCodePostal());
    }

    /**
     * Tests the setFactComplement() method.
     *
     * @return void
     */
    public function testSetFactComplement(): void {

        $obj = new Clients();

        $obj->setFactComplement("factComplement");
        $this->assertEquals("factComplement", $obj->getFactComplement());
    }

    /**
     * Tests the setFactNomRs() method.
     *
     * @return void
     */
    public function testSetFactNomRs(): void {

        $obj = new Clients();

        $obj->setFactNomRs("factNomRs");
        $this->assertEquals("factNomRs", $obj->getFactNomRs());
    }

    /**
     * Tests the setFactNomVille() method.
     *
     * @return void
     */
    public function testSetFactNomVille(): void {

        $obj = new Clients();

        $obj->setFactNomVille("factNomVille");
        $this->assertEquals("factNomVille", $obj->getFactNomVille());
    }

    /**
     * Tests the setFactNomVoie() method.
     *
     * @return void
     */
    public function testSetFactNomVoie(): void {

        $obj = new Clients();

        $obj->setFactNomVoie("factNomVoie");
        $this->assertEquals("factNomVoie", $obj->getFactNomVoie());
    }

    /**
     * Tests the setFactNumVoie() method.
     *
     * @return void
     */
    public function testSetFactNumVoie(): void {

        $obj = new Clients();

        $obj->setFactNumVoie("factNumVoie");
        $this->assertEquals("factNumVoie", $obj->getFactNumVoie());
    }

    /**
     * Tests the setFacturationCompta() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFacturationCompta(): void {

        // Set a Date/time mock.
        $facturationCompta = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationCompta($facturationCompta);
        $this->assertSame($facturationCompta, $obj->getFacturationCompta());
    }

    /**
     * Tests the setFacturationComptaPrec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFacturationComptaPrec(): void {

        // Set a Date/time mock.
        $facturationComptaPrec = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationComptaPrec($facturationComptaPrec);
        $this->assertSame($facturationComptaPrec, $obj->getFacturationComptaPrec());
    }

    /**
     * Tests the setFacturationCotisation() method.
     *
     * @return void
     */
    public function testSetFacturationCotisation(): void {

        $obj = new Clients();

        $obj->setFacturationCotisation(true);
        $this->assertEquals(true, $obj->getFacturationCotisation());
    }

    /**
     * Tests the setFacturationDroitFixe() method.
     *
     * @return void
     */
    public function testSetFacturationDroitFixe(): void {

        $obj = new Clients();

        $obj->setFacturationDroitFixe(true);
        $this->assertEquals(true, $obj->getFacturationDroitFixe());
    }

    /**
     * Tests the setFacturationFraisFixe() method.
     *
     * @return void
     */
    public function testSetFacturationFraisFixe(): void {

        $obj = new Clients();

        $obj->setFacturationFraisFixe(true);
        $this->assertEquals(true, $obj->getFacturationFraisFixe());
    }

    /**
     * Tests the setFacturationPaie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFacturationPaie(): void {

        // Set a Date/time mock.
        $facturationPaie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationPaie($facturationPaie);
        $this->assertSame($facturationPaie, $obj->getFacturationPaie());
    }

    /**
     * Tests the setFacturationPaiePrec() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetFacturationPaiePrec(): void {

        // Set a Date/time mock.
        $facturationPaiePrec = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationPaiePrec($facturationPaiePrec);
        $this->assertSame($facturationPaiePrec, $obj->getFacturationPaiePrec());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new Clients();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setFactureIsolee() method.
     *
     * @return void
     */
    public function testSetFactureIsolee(): void {

        $obj = new Clients();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests the setFactureTempsPasses() method.
     *
     * @return void
     */
    public function testSetFactureTempsPasses(): void {

        $obj = new Clients();

        $obj->setFactureTempsPasses(true);
        $this->assertEquals(true, $obj->getFactureTempsPasses());
    }

    /**
     * Tests the setFacturesMail() method.
     *
     * @return void
     */
    public function testSetFacturesMail(): void {

        $obj = new Clients();

        $obj->setFacturesMail(true);
        $this->assertEquals(true, $obj->getFacturesMail());
    }

    /**
     * Tests the setFortementImpose() method.
     *
     * @return void
     */
    public function testSetFortementImpose(): void {

        $obj = new Clients();

        $obj->setFortementImpose("fortementImpose");
        $this->assertEquals("fortementImpose", $obj->getFortementImpose());
    }

    /**
     * Tests the setFraisFixes1() method.
     *
     * @return void
     */
    public function testSetFraisFixes1(): void {

        $obj = new Clients();

        $obj->setFraisFixes1(true);
        $this->assertEquals(true, $obj->getFraisFixes1());
    }

    /**
     * Tests the setFraisFixes2() method.
     *
     * @return void
     */
    public function testSetFraisFixes2(): void {

        $obj = new Clients();

        $obj->setFraisFixes2(true);
        $this->assertEquals(true, $obj->getFraisFixes2());
    }

    /**
     * Tests the setFrancoPort1() method.
     *
     * @return void
     */
    public function testSetFrancoPort1(): void {

        $obj = new Clients();

        $obj->setFrancoPort1(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort1());
    }

    /**
     * Tests the setFrancoPort2() method.
     *
     * @return void
     */
    public function testSetFrancoPort2(): void {

        $obj = new Clients();

        $obj->setFrancoPort2(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort2());
    }

    /**
     * Tests the setHeureAppel() method.
     *
     * @return void
     */
    public function testSetHeureAppel(): void {

        $obj = new Clients();

        $obj->setHeureAppel("heureAppel");
        $this->assertEquals("heureAppel", $obj->getHeureAppel());
    }

    /**
     * Tests the setIdentifiantTva() method.
     *
     * @return void
     */
    public function testSetIdentifiantTva(): void {

        $obj = new Clients();

        $obj->setIdentifiantTva("identifiantTva");
        $this->assertEquals("identifiantTva", $obj->getIdentifiantTva());
    }

    /**
     * Tests the setIndiceFacturesMail() method.
     *
     * @return void
     */
    public function testSetIndiceFacturesMail(): void {

        $obj = new Clients();

        $obj->setIndiceFacturesMail(10);
        $this->assertEquals(10, $obj->getIndiceFacturesMail());
    }

    /**
     * Tests the setInsp() method.
     *
     * @return void
     */
    public function testSetInsp(): void {

        $obj = new Clients();

        $obj->setInsp("insp");
        $this->assertEquals("insp", $obj->getInsp());
    }

    /**
     * Tests the setInteresseGestion() method.
     *
     * @return void
     */
    public function testSetInteresseGestion(): void {

        $obj = new Clients();

        $obj->setInteresseGestion("interesseGestion");
        $this->assertEquals("interesseGestion", $obj->getInteresseGestion());
    }

    /**
     * Tests the setMensualisationActif() method.
     *
     * @return void
     */
    public function testSetMensualisationActif(): void {

        $obj = new Clients();

        $obj->setMensualisationActif(true);
        $this->assertEquals(true, $obj->getMensualisationActif());
    }

    /**
     * Tests the setMensualisationAu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMensualisationAu(): void {

        // Set a Date/time mock.
        $mensualisationAu = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setMensualisationAu($mensualisationAu);
        $this->assertSame($mensualisationAu, $obj->getMensualisationAu());
    }

    /**
     * Tests the setMensualisationDu() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetMensualisationDu(): void {

        // Set a Date/time mock.
        $mensualisationDu = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setMensualisationDu($mensualisationDu);
        $this->assertSame($mensualisationDu, $obj->getMensualisationDu());
    }

    /**
     * Tests the setMensualisationFrequence() method.
     *
     * @return void
     */
    public function testSetMensualisationFrequence(): void {

        $obj = new Clients();

        $obj->setMensualisationFrequence("mensualisationFrequence");
        $this->assertEquals("mensualisationFrequence", $obj->getMensualisationFrequence());
    }

    /**
     * Tests the setMensualisationMontant() method.
     *
     * @return void
     */
    public function testSetMensualisationMontant(): void {

        $obj = new Clients();

        $obj->setMensualisationMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationMontant());
    }

    /**
     * Tests the setMissionSurDossier() method.
     *
     * @return void
     */
    public function testSetMissionSurDossier(): void {

        $obj = new Clients();

        $obj->setMissionSurDossier(10);
        $this->assertEquals(10, $obj->getMissionSurDossier());
    }

    /**
     * Tests the setModeleBl() method.
     *
     * @return void
     */
    public function testSetModeleBl(): void {

        $obj = new Clients();

        $obj->setModeleBl("modeleBl");
        $this->assertEquals("modeleBl", $obj->getModeleBl());
    }

    /**
     * Tests the setModeleCommande() method.
     *
     * @return void
     */
    public function testSetModeleCommande(): void {

        $obj = new Clients();

        $obj->setModeleCommande("modeleCommande");
        $this->assertEquals("modeleCommande", $obj->getModeleCommande());
    }

    /**
     * Tests the setModeleFacture() method.
     *
     * @return void
     */
    public function testSetModeleFacture(): void {

        $obj = new Clients();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests the setModeleProformas() method.
     *
     * @return void
     */
    public function testSetModeleProformas(): void {

        $obj = new Clients();

        $obj->setModeleProformas("modeleProformas");
        $this->assertEquals("modeleProformas", $obj->getModeleProformas());
    }

    /**
     * Tests the setModeleReleve() method.
     *
     * @return void
     */
    public function testSetModeleReleve(): void {

        $obj = new Clients();

        $obj->setModeleReleve("modeleReleve");
        $this->assertEquals("modeleReleve", $obj->getModeleReleve());
    }

    /**
     * Tests the setMoisCloture() method.
     *
     * @return void
     */
    public function testSetMoisCloture(): void {

        $obj = new Clients();

        $obj->setMoisCloture("moisCloture");
        $this->assertEquals("moisCloture", $obj->getMoisCloture());
    }

    /**
     * Tests the setMoisCotisation() method.
     *
     * @return void
     */
    public function testSetMoisCotisation(): void {

        $obj = new Clients();

        $obj->setMoisCotisation(10);
        $this->assertEquals(10, $obj->getMoisCotisation());
    }

    /**
     * Tests the setMoisDroitFixe() method.
     *
     * @return void
     */
    public function testSetMoisDroitFixe(): void {

        $obj = new Clients();

        $obj->setMoisDroitFixe(10);
        $this->assertEquals(10, $obj->getMoisDroitFixe());
    }

    /**
     * Tests the setMtCmdNonFact() method.
     *
     * @return void
     */
    public function testSetMtCmdNonFact(): void {

        $obj = new Clients();

        $obj->setMtCmdNonFact(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCmdNonFact());
    }

    /**
     * Tests the setMtEncours() method.
     *
     * @return void
     */
    public function testSetMtEncours(): void {

        $obj = new Clients();

        $obj->setMtEncours(10.092018);
        $this->assertEquals(10.092018, $obj->getMtEncours());
    }

    /**
     * Tests the setMtEncoursAutorise() method.
     *
     * @return void
     */
    public function testSetMtEncoursAutorise(): void {

        $obj = new Clients();

        $obj->setMtEncoursAutorise(10.092018);
        $this->assertEquals(10.092018, $obj->getMtEncoursAutorise());
    }

    /**
     * Tests the setNbAppelsEnCours() method.
     *
     * @return void
     */
    public function testSetNbAppelsEnCours(): void {

        $obj = new Clients();

        $obj->setNbAppelsEnCours(10);
        $this->assertEquals(10, $obj->getNbAppelsEnCours());
    }

    /**
     * Tests the setNbBl() method.
     *
     * @return void
     */
    public function testSetNbBl(): void {

        $obj = new Clients();

        $obj->setNbBl("nbBl");
        $this->assertEquals("nbBl", $obj->getNbBl());
    }

    /**
     * Tests the setNbBlNonChiffres() method.
     *
     * @return void
     */
    public function testSetNbBlNonChiffres(): void {

        $obj = new Clients();

        $obj->setNbBlNonChiffres(10);
        $this->assertEquals(10, $obj->getNbBlNonChiffres());
    }

    /**
     * Tests the setNbCommande() method.
     *
     * @return void
     */
    public function testSetNbCommande(): void {

        $obj = new Clients();

        $obj->setNbCommande("nbCommande");
        $this->assertEquals("nbCommande", $obj->getNbCommande());
    }

    /**
     * Tests the setNbDevis() method.
     *
     * @return void
     */
    public function testSetNbDevis(): void {

        $obj = new Clients();

        $obj->setNbDevis("nbDevis");
        $this->assertEquals("nbDevis", $obj->getNbDevis());
    }

    /**
     * Tests the setNbFacture() method.
     *
     * @return void
     */
    public function testSetNbFacture(): void {

        $obj = new Clients();

        $obj->setNbFacture("nbFacture");
        $this->assertEquals("nbFacture", $obj->getNbFacture());
    }

    /**
     * Tests the setNbJourInterval() method.
     *
     * @return void
     */
    public function testSetNbJourInterval(): void {

        $obj = new Clients();

        $obj->setNbJourInterval(10);
        $this->assertEquals(10, $obj->getNbJourInterval());
    }

    /**
     * Tests the setNbMaxBl() method.
     *
     * @return void
     */
    public function testSetNbMaxBl(): void {

        $obj = new Clients();

        $obj->setNbMaxBl("nbMaxBl");
        $this->assertEquals("nbMaxBl", $obj->getNbMaxBl());
    }

    /**
     * Tests the setNbReleve() method.
     *
     * @return void
     */
    public function testSetNbReleve(): void {

        $obj = new Clients();

        $obj->setNbReleve("nbReleve");
        $this->assertEquals("nbReleve", $obj->getNbReleve());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Clients();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setNombreMoisExercice() method.
     *
     * @return void
     */
    public function testSetNombreMoisExercice(): void {

        $obj = new Clients();

        $obj->setNombreMoisExercice("nombreMoisExercice");
        $this->assertEquals("nombreMoisExercice", $obj->getNombreMoisExercice());
    }

    /**
     * Tests the setNotoriete() method.
     *
     * @return void
     */
    public function testSetNotoriete(): void {

        $obj = new Clients();

        $obj->setNotoriete("notoriete");
        $this->assertEquals("notoriete", $obj->getNotoriete());
    }

    /**
     * Tests the setNumWebAdherent() method.
     *
     * @return void
     */
    public function testSetNumWebAdherent(): void {

        $obj = new Clients();

        $obj->setNumWebAdherent("numWebAdherent");
        $this->assertEquals("numWebAdherent", $obj->getNumWebAdherent());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Clients();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setObservation1() method.
     *
     * @return void
     */
    public function testSetObservation1(): void {

        $obj = new Clients();

        $obj->setObservation1("observation1");
        $this->assertEquals("observation1", $obj->getObservation1());
    }

    /**
     * Tests the setObservation2() method.
     *
     * @return void
     */
    public function testSetObservation2(): void {

        $obj = new Clients();

        $obj->setObservation2("observation2");
        $this->assertEquals("observation2", $obj->getObservation2());
    }

    /**
     * Tests the setObservation3() method.
     *
     * @return void
     */
    public function testSetObservation3(): void {

        $obj = new Clients();

        $obj->setObservation3("observation3");
        $this->assertEquals("observation3", $obj->getObservation3());
    }

    /**
     * Tests the setOccasionnel() method.
     *
     * @return void
     */
    public function testSetOccasionnel(): void {

        $obj = new Clients();

        $obj->setOccasionnel(true);
        $this->assertEquals(true, $obj->getOccasionnel());
    }

    /**
     * Tests the setOrganisationAdm() method.
     *
     * @return void
     */
    public function testSetOrganisationAdm(): void {

        $obj = new Clients();

        $obj->setOrganisationAdm("organisationAdm");
        $this->assertEquals("organisationAdm", $obj->getOrganisationAdm());
    }

    /**
     * Tests the setPaiementDepartLe() method.
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new Clients();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Tests the setPaiementLe() method.
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new Clients();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Tests the setPaiementNombreDeJours() method.
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new Clients();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests the setPasProductif() method.
     *
     * @return void
     */
    public function testSetPasProductif(): void {

        $obj = new Clients();

        $obj->setPasProductif(true);
        $this->assertEquals(true, $obj->getPasProductif());
    }

    /**
     * Tests the setPasTachesOperationnelles() method.
     *
     * @return void
     */
    public function testSetPasTachesOperationnelles(): void {

        $obj = new Clients();

        $obj->setPasTachesOperationnelles(true);
        $this->assertEquals(true, $obj->getPasTachesOperationnelles());
    }

    /**
     * Tests the setPatrimoine() method.
     *
     * @return void
     */
    public function testSetPatrimoine(): void {

        $obj = new Clients();

        $obj->setPatrimoine("patrimoine");
        $this->assertEquals("patrimoine", $obj->getPatrimoine());
    }

    /**
     * Tests the setPrelevementsPerso() method.
     *
     * @return void
     */
    public function testSetPrelevementsPerso(): void {

        $obj = new Clients();

        $obj->setPrelevementsPerso("prelevementsPerso");
        $this->assertEquals("prelevementsPerso", $obj->getPrelevementsPerso());
    }

    /**
     * Tests the setPrescripteur() method.
     *
     * @return void
     */
    public function testSetPrescripteur(): void {

        $obj = new Clients();

        $obj->setPrescripteur("prescripteur");
        $this->assertEquals("prescripteur", $obj->getPrescripteur());
    }

    /**
     * Tests the setPrevisionnel() method.
     *
     * @return void
     */
    public function testSetPrevisionnel(): void {

        $obj = new Clients();

        $obj->setPrevisionnel("previsionnel");
        $this->assertEquals("previsionnel", $obj->getPrevisionnel());
    }

    /**
     * Tests the setPrioritaire() method.
     *
     * @return void
     */
    public function testSetPrioritaire(): void {

        $obj = new Clients();

        $obj->setPrioritaire(true);
        $this->assertEquals(true, $obj->getPrioritaire());
    }

    /**
     * Tests the setProfilDirAnxieux() method.
     *
     * @return void
     */
    public function testSetProfilDirAnxieux(): void {

        $obj = new Clients();

        $obj->setProfilDirAnxieux(true);
        $this->assertEquals(true, $obj->getProfilDirAnxieux());
    }

    /**
     * Tests the setProfilDirCommercial() method.
     *
     * @return void
     */
    public function testSetProfilDirCommercial(): void {

        $obj = new Clients();

        $obj->setProfilDirCommercial(true);
        $this->assertEquals(true, $obj->getProfilDirCommercial());
    }

    /**
     * Tests the setProfilDirGestionnaire() method.
     *
     * @return void
     */
    public function testSetProfilDirGestionnaire(): void {

        $obj = new Clients();

        $obj->setProfilDirGestionnaire(true);
        $this->assertEquals(true, $obj->getProfilDirGestionnaire());
    }

    /**
     * Tests the setProfilDirSomnolent() method.
     *
     * @return void
     */
    public function testSetProfilDirSomnolent(): void {

        $obj = new Clients();

        $obj->setProfilDirSomnolent(true);
        $this->assertEquals(true, $obj->getProfilDirSomnolent());
    }

    /**
     * Tests the setProfilDirTechnicien() method.
     *
     * @return void
     */
    public function testSetProfilDirTechnicien(): void {

        $obj = new Clients();

        $obj->setProfilDirTechnicien(true);
        $this->assertEquals(true, $obj->getProfilDirTechnicien());
    }

    /**
     * Tests the setProfilEnt() method.
     *
     * @return void
     */
    public function testSetProfilEnt(): void {

        $obj = new Clients();

        $obj->setProfilEnt("profilEnt");
        $this->assertEquals("profilEnt", $obj->getProfilEnt());
    }

    /**
     * Tests the setProspect() method.
     *
     * @return void
     */
    public function testSetProspect(): void {

        $obj = new Clients();

        $obj->setProspect(true);
        $this->assertEquals(true, $obj->getProspect());
    }

    /**
     * Tests the setQualitePaiement() method.
     *
     * @return void
     */
    public function testSetQualitePaiement(): void {

        $obj = new Clients();

        $obj->setQualitePaiement("qualitePaiement");
        $this->assertEquals("qualitePaiement", $obj->getQualitePaiement());
    }

    /**
     * Tests the setRaisonFinActivite() method.
     *
     * @return void
     */
    public function testSetRaisonFinActivite(): void {

        $obj = new Clients();

        $obj->setRaisonFinActivite("raisonFinActivite");
        $this->assertEquals("raisonFinActivite", $obj->getRaisonFinActivite());
    }

    /**
     * Tests the setRaisonMvPaiement() method.
     *
     * @return void
     */
    public function testSetRaisonMvPaiement(): void {

        $obj = new Clients();

        $obj->setRaisonMvPaiement("raisonMvPaiement");
        $this->assertEquals("raisonMvPaiement", $obj->getRaisonMvPaiement());
    }

    /**
     * Tests the setRegime() method.
     *
     * @return void
     */
    public function testSetRegime(): void {

        $obj = new Clients();

        $obj->setRegime("regime");
        $this->assertEquals("regime", $obj->getRegime());
    }

    /**
     * Tests the setRegroupementFact() method.
     *
     * @return void
     */
    public function testSetRegroupementFact(): void {

        $obj = new Clients();

        $obj->setRegroupementFact("regroupementFact");
        $this->assertEquals("regroupementFact", $obj->getRegroupementFact());
    }

    /**
     * Tests the setRelationCabinet() method.
     *
     * @return void
     */
    public function testSetRelationCabinet(): void {

        $obj = new Clients();

        $obj->setRelationCabinet("relationCabinet");
        $this->assertEquals("relationCabinet", $obj->getRelationCabinet());
    }

    /**
     * Tests the setReleveFacture() method.
     *
     * @return void
     */
    public function testSetReleveFacture(): void {

        $obj = new Clients();

        $obj->setReleveFacture(true);
        $this->assertEquals(true, $obj->getReleveFacture());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new Clients();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new Clients();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new Clients();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setRemisePied() method.
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new Clients();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests the setRemisePied2() method.
     *
     * @return void
     */
    public function testSetRemisePied2(): void {

        $obj = new Clients();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests the setRemisePied3() method.
     *
     * @return void
     */
    public function testSetRemisePied3(): void {

        $obj = new Clients();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests the setResultat() method.
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new Clients();

        $obj->setResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getResultat());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Clients();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSanteFinanciere() method.
     *
     * @return void
     */
    public function testSetSanteFinanciere(): void {

        $obj = new Clients();

        $obj->setSanteFinanciere("santeFinanciere");
        $this->assertEquals("santeFinanciere", $obj->getSanteFinanciere());
    }

    /**
     * Tests the setServiceCpta() method.
     *
     * @return void
     */
    public function testSetServiceCpta(): void {

        $obj = new Clients();

        $obj->setServiceCpta(true);
        $this->assertEquals(true, $obj->getServiceCpta());
    }

    /**
     * Tests the setSiegeGroupe() method.
     *
     * @return void
     */
    public function testSetSiegeGroupe(): void {

        $obj = new Clients();

        $obj->setSiegeGroupe(true);
        $this->assertEquals(true, $obj->getSiegeGroupe());
    }

    /**
     * Tests the setSocial() method.
     *
     * @return void
     */
    public function testSetSocial(): void {

        $obj = new Clients();

        $obj->setSocial(true);
        $this->assertEquals(true, $obj->getSocial());
    }

    /**
     * Tests the setSocialBtq() method.
     *
     * @return void
     */
    public function testSetSocialBtq(): void {

        $obj = new Clients();

        $obj->setSocialBtq("socialBtq");
        $this->assertEquals("socialBtq", $obj->getSocialBtq());
    }

    /**
     * Tests the setSocialBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetSocialBureauDistributeur(): void {

        $obj = new Clients();

        $obj->setSocialBureauDistributeur("socialBureauDistributeur");
        $this->assertEquals("socialBureauDistributeur", $obj->getSocialBureauDistributeur());
    }

    /**
     * Tests the setSocialCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetSocialCodeOfficielCommune(): void {

        $obj = new Clients();

        $obj->setSocialCodeOfficielCommune("socialCodeOfficielCommune");
        $this->assertEquals("socialCodeOfficielCommune", $obj->getSocialCodeOfficielCommune());
    }

    /**
     * Tests the setSocialCodePostal() method.
     *
     * @return void
     */
    public function testSetSocialCodePostal(): void {

        $obj = new Clients();

        $obj->setSocialCodePostal("socialCodePostal");
        $this->assertEquals("socialCodePostal", $obj->getSocialCodePostal());
    }

    /**
     * Tests the setSocialComplement() method.
     *
     * @return void
     */
    public function testSetSocialComplement(): void {

        $obj = new Clients();

        $obj->setSocialComplement("socialComplement");
        $this->assertEquals("socialComplement", $obj->getSocialComplement());
    }

    /**
     * Tests the setSocialNomRs() method.
     *
     * @return void
     */
    public function testSetSocialNomRs(): void {

        $obj = new Clients();

        $obj->setSocialNomRs("socialNomRs");
        $this->assertEquals("socialNomRs", $obj->getSocialNomRs());
    }

    /**
     * Tests the setSocialNomVille() method.
     *
     * @return void
     */
    public function testSetSocialNomVille(): void {

        $obj = new Clients();

        $obj->setSocialNomVille("socialNomVille");
        $this->assertEquals("socialNomVille", $obj->getSocialNomVille());
    }

    /**
     * Tests the setSocialNomVoie() method.
     *
     * @return void
     */
    public function testSetSocialNomVoie(): void {

        $obj = new Clients();

        $obj->setSocialNomVoie("socialNomVoie");
        $this->assertEquals("socialNomVoie", $obj->getSocialNomVoie());
    }

    /**
     * Tests the setSocialNumVoie() method.
     *
     * @return void
     */
    public function testSetSocialNumVoie(): void {

        $obj = new Clients();

        $obj->setSocialNumVoie("socialNumVoie");
        $this->assertEquals("socialNumVoie", $obj->getSocialNumVoie());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new Clients();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setSoumisPort1() method.
     *
     * @return void
     */
    public function testSetSoumisPort1(): void {

        $obj = new Clients();

        $obj->setSoumisPort1("soumisPort1");
        $this->assertEquals("soumisPort1", $obj->getSoumisPort1());
    }

    /**
     * Tests the setSoumisPort2() method.
     *
     * @return void
     */
    public function testSetSoumisPort2(): void {

        $obj = new Clients();

        $obj->setSoumisPort2("soumisPort2");
        $this->assertEquals("soumisPort2", $obj->getSoumisPort2());
    }

    /**
     * Tests the setSoumisTaxe1() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe1(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe1(true);
        $this->assertEquals(true, $obj->getSoumisTaxe1());
    }

    /**
     * Tests the setSoumisTaxe2() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe2(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe2(true);
        $this->assertEquals(true, $obj->getSoumisTaxe2());
    }

    /**
     * Tests the setSoumisTaxe3() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe3(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe3(true);
        $this->assertEquals(true, $obj->getSoumisTaxe3());
    }

    /**
     * Tests the setSoumisTaxe4() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe4(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe4(true);
        $this->assertEquals(true, $obj->getSoumisTaxe4());
    }

    /**
     * Tests the setSoumisTaxe5() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe5(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe5(true);
        $this->assertEquals(true, $obj->getSoumisTaxe5());
    }

    /**
     * Tests the setSoumisTva() method.
     *
     * @return void
     */
    public function testSetSoumisTva(): void {

        $obj = new Clients();

        $obj->setSoumisTva(true);
        $this->assertEquals(true, $obj->getSoumisTva());
    }

    /**
     * Tests the setTableauDeBord() method.
     *
     * @return void
     */
    public function testSetTableauDeBord(): void {

        $obj = new Clients();

        $obj->setTableauDeBord("tableauDeBord");
        $this->assertEquals("tableauDeBord", $obj->getTableauDeBord());
    }

    /**
     * Tests the setToutesActivites() method.
     *
     * @return void
     */
    public function testSetToutesActivites(): void {

        $obj = new Clients();

        $obj->setToutesActivites("toutesActivites");
        $this->assertEquals("toutesActivites", $obj->getToutesActivites());
    }

    /**
     * Tests the setTransporteur() method.
     *
     * @return void
     */
    public function testSetTransporteur(): void {

        $obj = new Clients();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests the setTresorerie() method.
     *
     * @return void
     */
    public function testSetTresorerie(): void {

        $obj = new Clients();

        $obj->setTresorerie("tresorerie");
        $this->assertEquals("tresorerie", $obj->getTresorerie());
    }

    /**
     * Tests the setTvaRegime() method.
     *
     * @return void
     */
    public function testSetTvaRegime(): void {

        $obj = new Clients();

        $obj->setTvaRegime("tvaRegime");
        $this->assertEquals("tvaRegime", $obj->getTvaRegime());
    }

    /**
     * Tests the setTxEscompteVente() method.
     *
     * @return void
     */
    public function testSetTxEscompteVente(): void {

        $obj = new Clients();

        $obj->setTxEscompteVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTxEscompteVente());
    }

    /**
     * Tests the setTypeClient() method.
     *
     * @return void
     */
    public function testSetTypeClient(): void {

        $obj = new Clients();

        $obj->setTypeClient("typeClient");
        $this->assertEquals("typeClient", $obj->getTypeClient());
    }

    /**
     * Tests the setTypeEditBl() method.
     *
     * @return void
     */
    public function testSetTypeEditBl(): void {

        $obj = new Clients();

        $obj->setTypeEditBl("typeEditBl");
        $this->assertEquals("typeEditBl", $obj->getTypeEditBl());
    }

    /**
     * Tests the setTypeFacture() method.
     *
     * @return void
     */
    public function testSetTypeFacture(): void {

        $obj = new Clients();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }

    /**
     * Tests the setTypeGestionEtebac() method.
     *
     * @return void
     */
    public function testSetTypeGestionEtebac(): void {

        $obj = new Clients();

        $obj->setTypeGestionEtebac("typeGestionEtebac");
        $this->assertEquals("typeGestionEtebac", $obj->getTypeGestionEtebac());
    }

    /**
     * Tests the setUseAdresseFact() method.
     *
     * @return void
     */
    public function testSetUseAdresseFact(): void {

        $obj = new Clients();

        $obj->setUseAdresseFact(true);
        $this->assertEquals(true, $obj->getUseAdresseFact());
    }

    /**
     * Tests the setUseCorresSociale() method.
     *
     * @return void
     */
    public function testSetUseCorresSociale(): void {

        $obj = new Clients();

        $obj->setUseCorresSociale(true);
        $this->assertEquals(true, $obj->getUseCorresSociale());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Clients();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getActiviteNouvelle());
        $this->assertNull($obj->getActiviteSaiso());
        $this->assertNull($obj->getAdresseSiteClient());
        $this->assertNull($obj->getArticlePort1());
        $this->assertNull($obj->getArticlePort2());
        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getBlChiffre());
        $this->assertNull($obj->getBibliothequeNovaxel());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getCdeAutoManu());
        $this->assertNull($obj->getCga());
        $this->assertNull($obj->getCharges());
        $this->assertNull($obj->getChiffreAffaire());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeAgence());
        $this->assertNull($obj->getCodeArticleCotisation());
        $this->assertNull($obj->getCodeArticleDroitFixe());
        $this->assertNull($obj->getCodeArticleFraisFixe());
        $this->assertNull($obj->getCodeAssistantJuridique());
        $this->assertNull($obj->getCodeAssistantSocial());
        $this->assertNull($obj->getCodeAutre1());
        $this->assertNull($obj->getCodeAutre2());
        $this->assertNull($obj->getCodeAvocat());
        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeCategorieClient());
        $this->assertNull($obj->getCodeClientFact());
        $this->assertNull($obj->getCodeClientLivr());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeEditionFact());
        $this->assertNull($obj->getCodeExc());
        $this->assertNull($obj->getCodeExpert());
        $this->assertNull($obj->getCodeFactor());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeGeo());
        $this->assertNull($obj->getCodeImputationAnalytique());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeMissionFraisFixe());
        $this->assertNull($obj->getCodeOrigine());
        $this->assertNull($obj->getCodePaysCorres());
        $this->assertNull($obj->getCodePaysFact());
        $this->assertNull($obj->getCodePortefeuille());
        $this->assertNull($obj->getCodeRecetteImpots());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeRepresentant());
        $this->assertNull($obj->getCodeRevision());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeSousTournee());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTarif());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCodeTransporteur());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCoefSurPv());
        $this->assertNull($obj->getCoeffPvClient());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getConjoint());
        $this->assertNull($obj->getContactRecetteImpots());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDateAttribEncours());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebActivite());
        $this->assertNull($obj->getDateDebProf());
        $this->assertNull($obj->getDateDerniereVente());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateFinActivite());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateReprise());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDelaiTarif());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getDossierComptable());
        $this->assertNull($obj->getDossierPaie());
        $this->assertNull($obj->getDuClient());
        $this->assertNull($obj->getDureeEcheances());
        $this->assertNull($obj->getEffectifEtp());
        $this->assertNull($obj->getElectionCe());
        $this->assertNull($obj->getElectionDeleguePersonnel());
        $this->assertNull($obj->getEquipInfo());
        $this->assertNull($obj->getEtat1());
        $this->assertNull($obj->getEtat2());
        $this->assertNull($obj->getEtat3());
        $this->assertNull($obj->getEtat4());
        $this->assertNull($obj->getEtat5());
        $this->assertNull($obj->getEtiquettes());
        $this->assertNull($obj->getFactBtq());
        $this->assertNull($obj->getFactBureauDistributeur());
        $this->assertNull($obj->getFactCodeOfficielCommune());
        $this->assertNull($obj->getFactCodePostal());
        $this->assertNull($obj->getFactComplement());
        $this->assertNull($obj->getFactNomRs());
        $this->assertNull($obj->getFactNomVille());
        $this->assertNull($obj->getFactNomVoie());
        $this->assertNull($obj->getFactNumVoie());
        $this->assertNull($obj->getFacturationCompta());
        $this->assertNull($obj->getFacturationComptaPrec());
        $this->assertNull($obj->getFacturationCotisation());
        $this->assertNull($obj->getFacturationDroitFixe());
        $this->assertNull($obj->getFacturationFraisFixe());
        $this->assertNull($obj->getFacturationPaie());
        $this->assertNull($obj->getFacturationPaiePrec());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getFactureTempsPasses());
        $this->assertNull($obj->getFacturesMail());
        $this->assertNull($obj->getFortementImpose());
        $this->assertNull($obj->getFraisFixes1());
        $this->assertNull($obj->getFraisFixes2());
        $this->assertNull($obj->getFrancoPort1());
        $this->assertNull($obj->getFrancoPort2());
        $this->assertNull($obj->getHeureAppel());
        $this->assertNull($obj->getIdentifiantTva());
        $this->assertNull($obj->getIndiceFacturesMail());
        $this->assertNull($obj->getInsp());
        $this->assertNull($obj->getInteresseGestion());
        $this->assertNull($obj->getMensualisationActif());
        $this->assertNull($obj->getMensualisationAu());
        $this->assertNull($obj->getMensualisationDu());
        $this->assertNull($obj->getMensualisationFrequence());
        $this->assertNull($obj->getMensualisationMontant());
        $this->assertNull($obj->getMissionSurDossier());
        $this->assertNull($obj->getModeleBl());
        $this->assertNull($obj->getModeleCommande());
        $this->assertNull($obj->getModeleFacture());
        $this->assertNull($obj->getModeleProformas());
        $this->assertNull($obj->getModeleReleve());
        $this->assertNull($obj->getMoisCloture());
        $this->assertNull($obj->getMoisCotisation());
        $this->assertNull($obj->getMoisDroitFixe());
        $this->assertNull($obj->getMtCmdNonFact());
        $this->assertNull($obj->getMtEncours());
        $this->assertNull($obj->getMtEncoursAutorise());
        $this->assertNull($obj->getNbAppelsEnCours());
        $this->assertNull($obj->getNbBl());
        $this->assertNull($obj->getNbBlNonChiffres());
        $this->assertNull($obj->getNbCommande());
        $this->assertNull($obj->getNbDevis());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNbJourInterval());
        $this->assertNull($obj->getNbMaxBl());
        $this->assertNull($obj->getNbReleve());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNombreMoisExercice());
        $this->assertNull($obj->getNotoriete());
        $this->assertNull($obj->getNumWebAdherent());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getObservation1());
        $this->assertNull($obj->getObservation2());
        $this->assertNull($obj->getObservation3());
        $this->assertNull($obj->getOccasionnel());
        $this->assertNull($obj->getOrganisationAdm());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPasProductif());
        $this->assertNull($obj->getPasTachesOperationnelles());
        $this->assertNull($obj->getPatrimoine());
        $this->assertNull($obj->getPrelevementsPerso());
        $this->assertNull($obj->getPrescripteur());
        $this->assertNull($obj->getPrevisionnel());
        $this->assertNull($obj->getPrioritaire());
        $this->assertNull($obj->getProfilDirAnxieux());
        $this->assertNull($obj->getProfilDirCommercial());
        $this->assertNull($obj->getProfilDirGestionnaire());
        $this->assertNull($obj->getProfilDirSomnolent());
        $this->assertNull($obj->getProfilDirTechnicien());
        $this->assertNull($obj->getProfilEnt());
        $this->assertNull($obj->getProspect());
        $this->assertNull($obj->getQualitePaiement());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRaisonFinActivite());
        $this->assertNull($obj->getRaisonMvPaiement());
        $this->assertNull($obj->getRegime());
        $this->assertNull($obj->getRegroupementFact());
        $this->assertNull($obj->getRelationCabinet());
        $this->assertNull($obj->getReleveFacture());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getResultat());
        $this->assertNull($obj->getSanteFinanciere());
        $this->assertNull($obj->getServiceCpta());
        $this->assertNull($obj->getSiegeGroupe());
        $this->assertNull($obj->getSocial());
        $this->assertNull($obj->getSocialBtq());
        $this->assertNull($obj->getSocialBureauDistributeur());
        $this->assertNull($obj->getSocialCodeOfficielCommune());
        $this->assertNull($obj->getSocialCodePostal());
        $this->assertNull($obj->getSocialComplement());
        $this->assertNull($obj->getSocialNomRs());
        $this->assertNull($obj->getSocialNomVille());
        $this->assertNull($obj->getSocialNomVoie());
        $this->assertNull($obj->getSocialNumVoie());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisPort1());
        $this->assertNull($obj->getSoumisPort2());
        $this->assertNull($obj->getSoumisTva());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getSoumisTaxe4());
        $this->assertNull($obj->getSoumisTaxe5());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTableauDeBord());
        $this->assertNull($obj->getToutesActivites());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTresorerie());
        $this->assertNull($obj->getTxEscompteVente());
        $this->assertNull($obj->getTypeClient());
        $this->assertNull($obj->getTypeEditBl());
        $this->assertNull($obj->getTypeFacture());
        $this->assertNull($obj->getTypeGestionEtebac());
        $this->assertNull($obj->getUseAdresseFact());
        $this->assertNull($obj->getUseCorresSociale());
    }
}
