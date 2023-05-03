<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\QGI;

use DateTime;
use Throwable;
use WBW\Library\Quadratus\Model\QGI\Clients;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Clients test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class ClientsTest extends AbstractTestCase {

    /**
     * Test setActif()
     *
     * @return void
     */
    public function testSetActif(): void {

        $obj = new Clients();

        $obj->setActif(true);
        $this->assertTrue($obj->getActif());
    }

    /**
     * Test setActiviteNouvelle()
     *
     * @return void
     */
    public function testSetActiviteNouvelle(): void {

        $obj = new Clients();

        $obj->setActiviteNouvelle(true);
        $this->assertTrue($obj->getActiviteNouvelle());
    }

    /**
     * Test setActiviteSaiso()
     *
     * @return void
     */
    public function testSetActiviteSaiso(): void {

        $obj = new Clients();

        $obj->setActiviteSaiso(true);
        $this->assertTrue($obj->getActiviteSaiso());
    }

    /**
     * Test setAdresseSiteClient()
     *
     * @return void
     */
    public function testSetAdresseSiteClient(): void {

        $obj = new Clients();

        $obj->setAdresseSiteClient("adresseSiteClient");
        $this->assertEquals("adresseSiteClient", $obj->getAdresseSiteClient());
    }

    /**
     * Test setArticlePort1()
     *
     * @return void
     */
    public function testSetArticlePort1(): void {

        $obj = new Clients();

        $obj->setArticlePort1("articlePort1");
        $this->assertEquals("articlePort1", $obj->getArticlePort1());
    }

    /**
     * Test setArticlePort2()
     *
     * @return void
     */
    public function testSetArticlePort2(): void {

        $obj = new Clients();

        $obj->setArticlePort2("articlePort2");
        $this->assertEquals("articlePort2", $obj->getArticlePort2());
    }

    /**
     * Test setAssurance()
     *
     * @return void
     */
    public function testSetAssurance(): void {

        $obj = new Clients();

        $obj->setAssurance(true);
        $this->assertTrue($obj->getAssurance());
    }

    /**
     * Test setBibliothequeNovaxel()
     *
     * @return void
     */
    public function testSetBibliothequeNovaxel(): void {

        $obj = new Clients();

        $obj->setBibliothequeNovaxel("bibliothequeNovaxel");
        $this->assertEquals("bibliothequeNovaxel", $obj->getBibliothequeNovaxel());
    }

    /**
     * Test setBlChiffre()
     *
     * @return void
     */
    public function testSetBlChiffre(): void {

        $obj = new Clients();

        $obj->setBlChiffre(true);
        $this->assertTrue($obj->getBlChiffre());
    }

    /**
     * Test setBloque()
     *
     * @return void
     */
    public function testSetBloque(): void {

        $obj = new Clients();

        $obj->setBloque(true);
        $this->assertTrue($obj->getBloque());
    }

    /**
     * Test setCdeAutoManu()
     *
     * @return void
     */
    public function testSetCdeAutoManu(): void {

        $obj = new Clients();

        $obj->setCdeAutoManu("cdeAutoManu");
        $this->assertEquals("cdeAutoManu", $obj->getCdeAutoManu());
    }

    /**
     * Test setCga()
     *
     * @return void
     */
    public function testSetCga(): void {

        $obj = new Clients();

        $obj->setCga(true);
        $this->assertTrue($obj->getCga());
    }

    /**
     * Test setCharges()
     *
     * @return void
     */
    public function testSetCharges(): void {

        $obj = new Clients();

        $obj->setCharges("charges");
        $this->assertEquals("charges", $obj->getCharges());
    }

    /**
     * Test setChiffreAffaire()
     *
     * @return void
     */
    public function testSetChiffreAffaire(): void {

        $obj = new Clients();

        $obj->setChiffreAffaire(10.092018);
        $this->assertEquals(10.092018, $obj->getChiffreAffaire());
    }

    /**
     * Test setCleAlpha()
     *
     * @return void
     */
    public function testSetCleAlpha(): void {

        $obj = new Clients();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Test setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Clients();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Test setCodeActivite()
     *
     * @return void
     */
    public function testSetCodeActivite(): void {

        $obj = new Clients();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Test setCodeAgence()
     *
     * @return void
     */
    public function testSetCodeAgence(): void {

        $obj = new Clients();

        $obj->setCodeAgence("codeAgence");
        $this->assertEquals("codeAgence", $obj->getCodeAgence());
    }

    /**
     * Test setCodeArticleCotisation()
     *
     * @return void
     */
    public function testSetCodeArticleCotisation(): void {

        $obj = new Clients();

        $obj->setCodeArticleCotisation("codeArticleCotisation");
        $this->assertEquals("codeArticleCotisation", $obj->getCodeArticleCotisation());
    }

    /**
     * Test setCodeArticleDroitFixe()
     *
     * @return void
     */
    public function testSetCodeArticleDroitFixe(): void {

        $obj = new Clients();

        $obj->setCodeArticleDroitFixe("codeArticleDroitFixe");
        $this->assertEquals("codeArticleDroitFixe", $obj->getCodeArticleDroitFixe());
    }

    /**
     * Test setCodeArticleFraisFixe()
     *
     * @return void
     */
    public function testSetCodeArticleFraisFixe(): void {

        $obj = new Clients();

        $obj->setCodeArticleFraisFixe("codeArticleFraisFixe");
        $this->assertEquals("codeArticleFraisFixe", $obj->getCodeArticleFraisFixe());
    }

    /**
     * Test setCodeAssistantJuridique()
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique(): void {

        $obj = new Clients();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Test setCodeAssistantSocial()
     *
     * @return void
     */
    public function testSetCodeAssistantSocial(): void {

        $obj = new Clients();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Test setCodeAutre1()
     *
     * @return void
     */
    public function testSetCodeAutre1(): void {

        $obj = new Clients();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Test setCodeAutre2()
     *
     * @return void
     */
    public function testSetCodeAutre2(): void {

        $obj = new Clients();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Test setCodeAvocat()
     *
     * @return void
     */
    public function testSetCodeAvocat(): void {

        $obj = new Clients();

        $obj->setCodeAvocat("codeAvocat");
        $this->assertEquals("codeAvocat", $obj->getCodeAvocat());
    }

    /**
     * Test setCodeBarre()
     *
     * @return void
     */
    public function testSetCodeBarre(): void {

        $obj = new Clients();

        $obj->setCodeBarre(true);
        $this->assertTrue($obj->getCodeBarre());
    }

    /**
     * Test setCodeCategorieClient()
     *
     * @return void
     */
    public function testSetCodeCategorieClient(): void {

        $obj = new Clients();

        $obj->setCodeCategorieClient("codeCategorieClient");
        $this->assertEquals("codeCategorieClient", $obj->getCodeCategorieClient());
    }

    /**
     * Test setCodeClientFact()
     *
     * @return void
     */
    public function testSetCodeClientFact(): void {

        $obj = new Clients();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Test setCodeClientLivr()
     *
     * @return void
     */
    public function testSetCodeClientLivr(): void {

        $obj = new Clients();

        $obj->setCodeClientLivr("codeClientLivr");
        $this->assertEquals("codeClientLivr", $obj->getCodeClientLivr());
    }

    /**
     * Test setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Clients();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Test setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new Clients();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Test setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Clients();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Test setCodeEditionFact()
     *
     * @return void
     */
    public function testSetCodeEditionFact(): void {

        $obj = new Clients();

        $obj->setCodeEditionFact("codeEditionFact");
        $this->assertEquals("codeEditionFact", $obj->getCodeEditionFact());
    }

    /**
     * Test setCodeExc()
     *
     * @return void
     */
    public function testSetCodeExc(): void {

        $obj = new Clients();

        $obj->setCodeExc("codeExc");
        $this->assertEquals("codeExc", $obj->getCodeExc());
    }

    /**
     * Test setCodeExpert()
     *
     * @return void
     */
    public function testSetCodeExpert(): void {

        $obj = new Clients();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Test setCodeFactor()
     *
     * @return void
     */
    public function testSetCodeFactor(): void {

        $obj = new Clients();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Test setCodeFamille()
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new Clients();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Test setCodeGeo()
     *
     * @return void
     */
    public function testSetCodeGeo(): void {

        $obj = new Clients();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Test setCodeImputationAnalytique()
     *
     * @return void
     */
    public function testSetCodeImputationAnalytique(): void {

        $obj = new Clients();

        $obj->setCodeImputationAnalytique("codeImputationAnalytique");
        $this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
    }

    /**
     * Test setCodeLangueDesignationArticle()
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new Clients();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Test setCodeMissionFraisFixe()
     *
     * @return void
     */
    public function testSetCodeMissionFraisFixe(): void {

        $obj = new Clients();

        $obj->setCodeMissionFraisFixe("codeMissionFraisFixe");
        $this->assertEquals("codeMissionFraisFixe", $obj->getCodeMissionFraisFixe());
    }

    /**
     * Test setCodeOrigine()
     *
     * @return void
     */
    public function testSetCodeOrigine(): void {

        $obj = new Clients();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Test setCodePaysCorres()
     *
     * @return void
     */
    public function testSetCodePaysCorres(): void {

        $obj = new Clients();

        $obj->setCodePaysCorres("codePaysCorres");
        $this->assertEquals("codePaysCorres", $obj->getCodePaysCorres());
    }

    /**
     * Test setCodePaysFact()
     *
     * @return void
     */
    public function testSetCodePaysFact(): void {

        $obj = new Clients();

        $obj->setCodePaysFact("codePaysFact");
        $this->assertEquals("codePaysFact", $obj->getCodePaysFact());
    }

    /**
     * Test setCodePortefeuille()
     *
     * @return void
     */
    public function testSetCodePortefeuille(): void {

        $obj = new Clients();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Test setCodeRecetteImpots()
     *
     * @return void
     */
    public function testSetCodeRecetteImpots(): void {

        $obj = new Clients();

        $obj->setCodeRecetteImpots("codeRecetteImpots");
        $this->assertEquals("codeRecetteImpots", $obj->getCodeRecetteImpots());
    }

    /**
     * Test setCodeReglement()
     *
     * @return void
     */
    public function testSetCodeReglement(): void {

        $obj = new Clients();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Test setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Clients();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Test setCodeRepresentant()
     *
     * @return void
     */
    public function testSetCodeRepresentant(): void {

        $obj = new Clients();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Test setCodeRevision()
     *
     * @return void
     */
    public function testSetCodeRevision(): void {

        $obj = new Clients();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Test setCodeSousFamille()
     *
     * @return void
     */
    public function testSetCodeSousFamille(): void {

        $obj = new Clients();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Test setCodeSousTournee()
     *
     * @return void
     */
    public function testSetCodeSousTournee(): void {

        $obj = new Clients();

        $obj->setCodeSousTournee("codeSousTournee");
        $this->assertEquals("codeSousTournee", $obj->getCodeSousTournee());
    }

    /**
     * Test setCodeTarif()
     *
     * @return void
     */
    public function testSetCodeTarif(): void {

        $obj = new Clients();

        $obj->setCodeTarif("codeTarif");
        $this->assertEquals("codeTarif", $obj->getCodeTarif());
    }

    /**
     * Test setCodeTournee()
     *
     * @return void
     */
    public function testSetCodeTournee(): void {

        $obj = new Clients();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Test setCodeTransporteur()
     *
     * @return void
     */
    public function testSetCodeTransporteur(): void {

        $obj = new Clients();

        $obj->setCodeTransporteur("codeTransporteur");
        $this->assertEquals("codeTransporteur", $obj->getCodeTransporteur());
    }

    /**
     * Test setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Clients();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Test setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Clients();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Test setCoefSurPv()
     *
     * @return void
     */
    public function testSetCoefSurPv(): void {

        $obj = new Clients();

        $obj->setCoefSurPv(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefSurPv());
    }

    /**
     * Test setCoeffPvClient()
     *
     * @return void
     */
    public function testSetCoeffPvClient(): void {

        $obj = new Clients();

        $obj->setCoeffPvClient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffPvClient());
    }

    /**
     * Test setCollectif()
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Clients();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Test setConjoint()
     *
     * @return void
     */
    public function testSetConjoint(): void {

        $obj = new Clients();

        $obj->setConjoint("conjoint");
        $this->assertEquals("conjoint", $obj->getConjoint());
    }

    /**
     * Test setContactRecetteImpots()
     *
     * @return void
     */
    public function testSetContactRecetteImpots(): void {

        $obj = new Clients();

        $obj->setContactRecetteImpots("contactRecetteImpots");
        $this->assertEquals("contactRecetteImpots", $obj->getContactRecetteImpots());
    }

    /**
     * Test setDateAttribEncours()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateAttribEncours(): void {

        // Set a Date/time mock.
        $dateAttribEncours = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateAttribEncours($dateAttribEncours);
        $this->assertSame($dateAttribEncours, $obj->getDateAttribEncours());
    }

    /**
     * Test setDateCreation()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Test setDateDebActivite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebActivite(): void {

        // Set a Date/time mock.
        $dateDebActivite = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateDebActivite($dateDebActivite);
        $this->assertSame($dateDebActivite, $obj->getDateDebActivite());
    }

    /**
     * Test setDateDebProf()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDebProf(): void {

        // Set a Date/time mock.
        $dateDebProf = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateDebProf($dateDebProf);
        $this->assertSame($dateDebProf, $obj->getDateDebProf());
    }

    /**
     * Test setDateDerniereVente()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateDerniereVente(): void {

        // Set a Date/time mock.
        $dateDerniereVente = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateDerniereVente($dateDerniereVente);
        $this->assertSame($dateDerniereVente, $obj->getDateDerniereVente());
    }

    /**
     * Test setDateEntree()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Test setDateFinActivite()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateFinActivite(): void {

        // Set a Date/time mock.
        $dateFinActivite = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateFinActivite($dateFinActivite);
        $this->assertSame($dateFinActivite, $obj->getDateFinActivite());
    }

    /**
     * Test setDateModification()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Test setDateReprise()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateReprise(): void {

        // Set a Date/time mock.
        $dateReprise = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateReprise($dateReprise);
        $this->assertSame($dateReprise, $obj->getDateReprise());
    }

    /**
     * Test setDateSortie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Test setDelaiTarif()
     *
     * @return void
     */
    public function testSetDelaiTarif(): void {

        $obj = new Clients();

        $obj->setDelaiTarif(10);
        $this->assertEquals(10, $obj->getDelaiTarif());
    }

    /**
     * Test setDomiciliationBancaire1()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new Clients();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Test setDomiciliationBancaire2()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new Clients();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Test setDossierComptable()
     *
     * @return void
     */
    public function testSetDossierComptable(): void {

        $obj = new Clients();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Test setDossierPaie()
     *
     * @return void
     */
    public function testSetDossierPaie(): void {

        $obj = new Clients();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Test setDsCodeCollab()
     *
     * @return void
     */
    public function testSetDsCodeCollab(): void {

        $obj = new Clients();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Test setDsDateRetour()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour(): void {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Test setDsDateSortie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie(): void {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Test setDuClient()
     *
     * @return void
     */
    public function testSetDuClient(): void {

        $obj = new Clients();

        $obj->setDuClient("duClient");
        $this->assertEquals("duClient", $obj->getDuClient());
    }

    /**
     * Test setDureeEcheances()
     *
     * @return void
     */
    public function testSetDureeEcheances(): void {

        $obj = new Clients();

        $obj->setDureeEcheances("dureeEcheances");
        $this->assertEquals("dureeEcheances", $obj->getDureeEcheances());
    }

    /**
     * Test setEffectifEtp()
     *
     * @return void
     */
    public function testSetEffectifEtp(): void {

        $obj = new Clients();

        $obj->setEffectifEtp(10);
        $this->assertEquals(10, $obj->getEffectifEtp());
    }

    /**
     * Test setElectionCe()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetElectionCe(): void {

        // Set a Date/time mock.
        $electionCe = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setElectionCe($electionCe);
        $this->assertSame($electionCe, $obj->getElectionCe());
    }

    /**
     * Test setElectionDeleguePersonnel()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetElectionDeleguePersonnel(): void {

        // Set a Date/time mock.
        $electionDeleguePersonnel = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setElectionDeleguePersonnel($electionDeleguePersonnel);
        $this->assertSame($electionDeleguePersonnel, $obj->getElectionDeleguePersonnel());
    }

    /**
     * Test setEquipInfo()
     *
     * @return void
     */
    public function testSetEquipInfo(): void {

        $obj = new Clients();

        $obj->setEquipInfo("equipInfo");
        $this->assertEquals("equipInfo", $obj->getEquipInfo());
    }

    /**
     * Test setEtat1()
     *
     * @return void
     */
    public function testSetEtat1(): void {

        $obj = new Clients();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }

    /**
     * Test setEtat2()
     *
     * @return void
     */
    public function testSetEtat2(): void {

        $obj = new Clients();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }

    /**
     * Test setEtat3()
     *
     * @return void
     */
    public function testSetEtat3(): void {

        $obj = new Clients();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }

    /**
     * Test setEtat4()
     *
     * @return void
     */
    public function testSetEtat4(): void {

        $obj = new Clients();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }

    /**
     * Test setEtat5()
     *
     * @return void
     */
    public function testSetEtat5(): void {

        $obj = new Clients();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }

    /**
     * Test setEtiquettes()
     *
     * @return void
     */
    public function testSetEtiquettes(): void {

        $obj = new Clients();

        $obj->setEtiquettes(true);
        $this->assertTrue($obj->getEtiquettes());
    }

    /**
     * Test setFactBtq()
     *
     * @return void
     */
    public function testSetFactBtq(): void {

        $obj = new Clients();

        $obj->setFactBtq("factBtq");
        $this->assertEquals("factBtq", $obj->getFactBtq());
    }

    /**
     * Test setFactBureauDistributeur()
     *
     * @return void
     */
    public function testSetFactBureauDistributeur(): void {

        $obj = new Clients();

        $obj->setFactBureauDistributeur("factBureauDistributeur");
        $this->assertEquals("factBureauDistributeur", $obj->getFactBureauDistributeur());
    }

    /**
     * Test setFactCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetFactCodeOfficielCommune(): void {

        $obj = new Clients();

        $obj->setFactCodeOfficielCommune("factCodeOfficielCommune");
        $this->assertEquals("factCodeOfficielCommune", $obj->getFactCodeOfficielCommune());
    }

    /**
     * Test setFactCodePostal()
     *
     * @return void
     */
    public function testSetFactCodePostal(): void {

        $obj = new Clients();

        $obj->setFactCodePostal("factCodePostal");
        $this->assertEquals("factCodePostal", $obj->getFactCodePostal());
    }

    /**
     * Test setFactComplement()
     *
     * @return void
     */
    public function testSetFactComplement(): void {

        $obj = new Clients();

        $obj->setFactComplement("factComplement");
        $this->assertEquals("factComplement", $obj->getFactComplement());
    }

    /**
     * Test setFactNomRs()
     *
     * @return void
     */
    public function testSetFactNomRs(): void {

        $obj = new Clients();

        $obj->setFactNomRs("factNomRs");
        $this->assertEquals("factNomRs", $obj->getFactNomRs());
    }

    /**
     * Test setFactNomVille()
     *
     * @return void
     */
    public function testSetFactNomVille(): void {

        $obj = new Clients();

        $obj->setFactNomVille("factNomVille");
        $this->assertEquals("factNomVille", $obj->getFactNomVille());
    }

    /**
     * Test setFactNomVoie()
     *
     * @return void
     */
    public function testSetFactNomVoie(): void {

        $obj = new Clients();

        $obj->setFactNomVoie("factNomVoie");
        $this->assertEquals("factNomVoie", $obj->getFactNomVoie());
    }

    /**
     * Test setFactNumVoie()
     *
     * @return void
     */
    public function testSetFactNumVoie(): void {

        $obj = new Clients();

        $obj->setFactNumVoie("factNumVoie");
        $this->assertEquals("factNumVoie", $obj->getFactNumVoie());
    }

    /**
     * Test setFacturationCompta()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFacturationCompta(): void {

        // Set a Date/time mock.
        $facturationCompta = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationCompta($facturationCompta);
        $this->assertSame($facturationCompta, $obj->getFacturationCompta());
    }

    /**
     * Test setFacturationComptaPrec()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFacturationComptaPrec(): void {

        // Set a Date/time mock.
        $facturationComptaPrec = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationComptaPrec($facturationComptaPrec);
        $this->assertSame($facturationComptaPrec, $obj->getFacturationComptaPrec());
    }

    /**
     * Test setFacturationCotisation()
     *
     * @return void
     */
    public function testSetFacturationCotisation(): void {

        $obj = new Clients();

        $obj->setFacturationCotisation(true);
        $this->assertTrue($obj->getFacturationCotisation());
    }

    /**
     * Test setFacturationDroitFixe()
     *
     * @return void
     */
    public function testSetFacturationDroitFixe(): void {

        $obj = new Clients();

        $obj->setFacturationDroitFixe(true);
        $this->assertTrue($obj->getFacturationDroitFixe());
    }

    /**
     * Test setFacturationFraisFixe()
     *
     * @return void
     */
    public function testSetFacturationFraisFixe(): void {

        $obj = new Clients();

        $obj->setFacturationFraisFixe(true);
        $this->assertTrue($obj->getFacturationFraisFixe());
    }

    /**
     * Test setFacturationPaie()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFacturationPaie(): void {

        // Set a Date/time mock.
        $facturationPaie = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationPaie($facturationPaie);
        $this->assertSame($facturationPaie, $obj->getFacturationPaie());
    }

    /**
     * Test setFacturationPaiePrec()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetFacturationPaiePrec(): void {

        // Set a Date/time mock.
        $facturationPaiePrec = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setFacturationPaiePrec($facturationPaiePrec);
        $this->assertSame($facturationPaiePrec, $obj->getFacturationPaiePrec());
    }

    /**
     * Test setFactureEuros()
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new Clients();

        $obj->setFactureEuros(true);
        $this->assertTrue($obj->getFactureEuros());
    }

    /**
     * Test setFactureIsolee()
     *
     * @return void
     */
    public function testSetFactureIsolee(): void {

        $obj = new Clients();

        $obj->setFactureIsolee(true);
        $this->assertTrue($obj->getFactureIsolee());
    }

    /**
     * Test setFactureTempsPasses()
     *
     * @return void
     */
    public function testSetFactureTempsPasses(): void {

        $obj = new Clients();

        $obj->setFactureTempsPasses(true);
        $this->assertTrue($obj->getFactureTempsPasses());
    }

    /**
     * Test setFacturesMail()
     *
     * @return void
     */
    public function testSetFacturesMail(): void {

        $obj = new Clients();

        $obj->setFacturesMail(true);
        $this->assertTrue($obj->getFacturesMail());
    }

    /**
     * Test setFortementImpose()
     *
     * @return void
     */
    public function testSetFortementImpose(): void {

        $obj = new Clients();

        $obj->setFortementImpose("fortementImpose");
        $this->assertEquals("fortementImpose", $obj->getFortementImpose());
    }

    /**
     * Test setFraisFixes1()
     *
     * @return void
     */
    public function testSetFraisFixes1(): void {

        $obj = new Clients();

        $obj->setFraisFixes1(true);
        $this->assertTrue($obj->getFraisFixes1());
    }

    /**
     * Test setFraisFixes2()
     *
     * @return void
     */
    public function testSetFraisFixes2(): void {

        $obj = new Clients();

        $obj->setFraisFixes2(true);
        $this->assertTrue($obj->getFraisFixes2());
    }

    /**
     * Test setFrancoPort1()
     *
     * @return void
     */
    public function testSetFrancoPort1(): void {

        $obj = new Clients();

        $obj->setFrancoPort1(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort1());
    }

    /**
     * Test setFrancoPort2()
     *
     * @return void
     */
    public function testSetFrancoPort2(): void {

        $obj = new Clients();

        $obj->setFrancoPort2(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort2());
    }

    /**
     * Test setHeureAppel()
     *
     * @return void
     */
    public function testSetHeureAppel(): void {

        $obj = new Clients();

        $obj->setHeureAppel("heureAppel");
        $this->assertEquals("heureAppel", $obj->getHeureAppel());
    }

    /**
     * Test setIdentifiantTva()
     *
     * @return void
     */
    public function testSetIdentifiantTva(): void {

        $obj = new Clients();

        $obj->setIdentifiantTva("identifiantTva");
        $this->assertEquals("identifiantTva", $obj->getIdentifiantTva());
    }

    /**
     * Test setIndiceFacturesMail()
     *
     * @return void
     */
    public function testSetIndiceFacturesMail(): void {

        $obj = new Clients();

        $obj->setIndiceFacturesMail(10);
        $this->assertEquals(10, $obj->getIndiceFacturesMail());
    }

    /**
     * Test setInsp()
     *
     * @return void
     */
    public function testSetInsp(): void {

        $obj = new Clients();

        $obj->setInsp("insp");
        $this->assertEquals("insp", $obj->getInsp());
    }

    /**
     * Test setInteresseGestion()
     *
     * @return void
     */
    public function testSetInteresseGestion(): void {

        $obj = new Clients();

        $obj->setInteresseGestion("interesseGestion");
        $this->assertEquals("interesseGestion", $obj->getInteresseGestion());
    }

    /**
     * Test setMensualisationActif()
     *
     * @return void
     */
    public function testSetMensualisationActif(): void {

        $obj = new Clients();

        $obj->setMensualisationActif(true);
        $this->assertTrue($obj->getMensualisationActif());
    }

    /**
     * Test setMensualisationAu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMensualisationAu(): void {

        // Set a Date/time mock.
        $mensualisationAu = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setMensualisationAu($mensualisationAu);
        $this->assertSame($mensualisationAu, $obj->getMensualisationAu());
    }

    /**
     * Test setMensualisationDu()
     *
     * @return void
     * @throws Throwable Throws an exception if an error occurs.
     */
    public function testSetMensualisationDu(): void {

        // Set a Date/time mock.
        $mensualisationDu = new DateTime("2018-09-10");

        $obj = new Clients();

        $obj->setMensualisationDu($mensualisationDu);
        $this->assertSame($mensualisationDu, $obj->getMensualisationDu());
    }

    /**
     * Test setMensualisationFrequence()
     *
     * @return void
     */
    public function testSetMensualisationFrequence(): void {

        $obj = new Clients();

        $obj->setMensualisationFrequence("mensualisationFrequence");
        $this->assertEquals("mensualisationFrequence", $obj->getMensualisationFrequence());
    }

    /**
     * Test setMensualisationMontant()
     *
     * @return void
     */
    public function testSetMensualisationMontant(): void {

        $obj = new Clients();

        $obj->setMensualisationMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationMontant());
    }

    /**
     * Test setMissionSurDossier()
     *
     * @return void
     */
    public function testSetMissionSurDossier(): void {

        $obj = new Clients();

        $obj->setMissionSurDossier(10);
        $this->assertEquals(10, $obj->getMissionSurDossier());
    }

    /**
     * Test setModeleBl()
     *
     * @return void
     */
    public function testSetModeleBl(): void {

        $obj = new Clients();

        $obj->setModeleBl("modeleBl");
        $this->assertEquals("modeleBl", $obj->getModeleBl());
    }

    /**
     * Test setModeleCommande()
     *
     * @return void
     */
    public function testSetModeleCommande(): void {

        $obj = new Clients();

        $obj->setModeleCommande("modeleCommande");
        $this->assertEquals("modeleCommande", $obj->getModeleCommande());
    }

    /**
     * Test setModeleFacture()
     *
     * @return void
     */
    public function testSetModeleFacture(): void {

        $obj = new Clients();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Test setModeleProformas()
     *
     * @return void
     */
    public function testSetModeleProformas(): void {

        $obj = new Clients();

        $obj->setModeleProformas("modeleProformas");
        $this->assertEquals("modeleProformas", $obj->getModeleProformas());
    }

    /**
     * Test setModeleReleve()
     *
     * @return void
     */
    public function testSetModeleReleve(): void {

        $obj = new Clients();

        $obj->setModeleReleve("modeleReleve");
        $this->assertEquals("modeleReleve", $obj->getModeleReleve());
    }

    /**
     * Test setMoisCloture()
     *
     * @return void
     */
    public function testSetMoisCloture(): void {

        $obj = new Clients();

        $obj->setMoisCloture("moisCloture");
        $this->assertEquals("moisCloture", $obj->getMoisCloture());
    }

    /**
     * Test setMoisCotisation()
     *
     * @return void
     */
    public function testSetMoisCotisation(): void {

        $obj = new Clients();

        $obj->setMoisCotisation(10);
        $this->assertEquals(10, $obj->getMoisCotisation());
    }

    /**
     * Test setMoisDroitFixe()
     *
     * @return void
     */
    public function testSetMoisDroitFixe(): void {

        $obj = new Clients();

        $obj->setMoisDroitFixe(10);
        $this->assertEquals(10, $obj->getMoisDroitFixe());
    }

    /**
     * Test setMtCmdNonFact()
     *
     * @return void
     */
    public function testSetMtCmdNonFact(): void {

        $obj = new Clients();

        $obj->setMtCmdNonFact(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCmdNonFact());
    }

    /**
     * Test setMtEncours()
     *
     * @return void
     */
    public function testSetMtEncours(): void {

        $obj = new Clients();

        $obj->setMtEncours(10.092018);
        $this->assertEquals(10.092018, $obj->getMtEncours());
    }

    /**
     * Test setMtEncoursAutorise()
     *
     * @return void
     */
    public function testSetMtEncoursAutorise(): void {

        $obj = new Clients();

        $obj->setMtEncoursAutorise(10.092018);
        $this->assertEquals(10.092018, $obj->getMtEncoursAutorise());
    }

    /**
     * Test setNbAppelsEnCours()
     *
     * @return void
     */
    public function testSetNbAppelsEnCours(): void {

        $obj = new Clients();

        $obj->setNbAppelsEnCours(10);
        $this->assertEquals(10, $obj->getNbAppelsEnCours());
    }

    /**
     * Test setNbBl()
     *
     * @return void
     */
    public function testSetNbBl(): void {

        $obj = new Clients();

        $obj->setNbBl("nbBl");
        $this->assertEquals("nbBl", $obj->getNbBl());
    }

    /**
     * Test setNbBlNonChiffres()
     *
     * @return void
     */
    public function testSetNbBlNonChiffres(): void {

        $obj = new Clients();

        $obj->setNbBlNonChiffres(10);
        $this->assertEquals(10, $obj->getNbBlNonChiffres());
    }

    /**
     * Test setNbCommande()
     *
     * @return void
     */
    public function testSetNbCommande(): void {

        $obj = new Clients();

        $obj->setNbCommande("nbCommande");
        $this->assertEquals("nbCommande", $obj->getNbCommande());
    }

    /**
     * Test setNbDevis()
     *
     * @return void
     */
    public function testSetNbDevis(): void {

        $obj = new Clients();

        $obj->setNbDevis("nbDevis");
        $this->assertEquals("nbDevis", $obj->getNbDevis());
    }

    /**
     * Test setNbFacture()
     *
     * @return void
     */
    public function testSetNbFacture(): void {

        $obj = new Clients();

        $obj->setNbFacture("nbFacture");
        $this->assertEquals("nbFacture", $obj->getNbFacture());
    }

    /**
     * Test setNbJourInterval()
     *
     * @return void
     */
    public function testSetNbJourInterval(): void {

        $obj = new Clients();

        $obj->setNbJourInterval(10);
        $this->assertEquals(10, $obj->getNbJourInterval());
    }

    /**
     * Test setNbMaxBl()
     *
     * @return void
     */
    public function testSetNbMaxBl(): void {

        $obj = new Clients();

        $obj->setNbMaxBl("nbMaxBl");
        $this->assertEquals("nbMaxBl", $obj->getNbMaxBl());
    }

    /**
     * Test setNbReleve()
     *
     * @return void
     */
    public function testSetNbReleve(): void {

        $obj = new Clients();

        $obj->setNbReleve("nbReleve");
        $this->assertEquals("nbReleve", $obj->getNbReleve());
    }

    /**
     * Test setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Clients();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Test setNombreMoisExercice()
     *
     * @return void
     */
    public function testSetNombreMoisExercice(): void {

        $obj = new Clients();

        $obj->setNombreMoisExercice("nombreMoisExercice");
        $this->assertEquals("nombreMoisExercice", $obj->getNombreMoisExercice());
    }

    /**
     * Test setNotoriete()
     *
     * @return void
     */
    public function testSetNotoriete(): void {

        $obj = new Clients();

        $obj->setNotoriete("notoriete");
        $this->assertEquals("notoriete", $obj->getNotoriete());
    }

    /**
     * Test setNumWebAdherent()
     *
     * @return void
     */
    public function testSetNumWebAdherent(): void {

        $obj = new Clients();

        $obj->setNumWebAdherent("numWebAdherent");
        $this->assertEquals("numWebAdherent", $obj->getNumWebAdherent());
    }

    /**
     * Test setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Clients();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Test setObservation1()
     *
     * @return void
     */
    public function testSetObservation1(): void {

        $obj = new Clients();

        $obj->setObservation1("observation1");
        $this->assertEquals("observation1", $obj->getObservation1());
    }

    /**
     * Test setObservation2()
     *
     * @return void
     */
    public function testSetObservation2(): void {

        $obj = new Clients();

        $obj->setObservation2("observation2");
        $this->assertEquals("observation2", $obj->getObservation2());
    }

    /**
     * Test setObservation3()
     *
     * @return void
     */
    public function testSetObservation3(): void {

        $obj = new Clients();

        $obj->setObservation3("observation3");
        $this->assertEquals("observation3", $obj->getObservation3());
    }

    /**
     * Test setOccasionnel()
     *
     * @return void
     */
    public function testSetOccasionnel(): void {

        $obj = new Clients();

        $obj->setOccasionnel(true);
        $this->assertTrue($obj->getOccasionnel());
    }

    /**
     * Test setOrganisationAdm()
     *
     * @return void
     */
    public function testSetOrganisationAdm(): void {

        $obj = new Clients();

        $obj->setOrganisationAdm("organisationAdm");
        $this->assertEquals("organisationAdm", $obj->getOrganisationAdm());
    }

    /**
     * Test setPaiementDepartLe()
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new Clients();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Test setPaiementLe()
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new Clients();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Test setPaiementNombreDeJours()
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new Clients();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Test setPasProductif()
     *
     * @return void
     */
    public function testSetPasProductif(): void {

        $obj = new Clients();

        $obj->setPasProductif(true);
        $this->assertTrue($obj->getPasProductif());
    }

    /**
     * Test setPasTachesOperationnelles()
     *
     * @return void
     */
    public function testSetPasTachesOperationnelles(): void {

        $obj = new Clients();

        $obj->setPasTachesOperationnelles(true);
        $this->assertTrue($obj->getPasTachesOperationnelles());
    }

    /**
     * Test setPatrimoine()
     *
     * @return void
     */
    public function testSetPatrimoine(): void {

        $obj = new Clients();

        $obj->setPatrimoine("patrimoine");
        $this->assertEquals("patrimoine", $obj->getPatrimoine());
    }

    /**
     * Test setPrelevementsPerso()
     *
     * @return void
     */
    public function testSetPrelevementsPerso(): void {

        $obj = new Clients();

        $obj->setPrelevementsPerso("prelevementsPerso");
        $this->assertEquals("prelevementsPerso", $obj->getPrelevementsPerso());
    }

    /**
     * Test setPrescripteur()
     *
     * @return void
     */
    public function testSetPrescripteur(): void {

        $obj = new Clients();

        $obj->setPrescripteur("prescripteur");
        $this->assertEquals("prescripteur", $obj->getPrescripteur());
    }

    /**
     * Test setPrevisionnel()
     *
     * @return void
     */
    public function testSetPrevisionnel(): void {

        $obj = new Clients();

        $obj->setPrevisionnel("previsionnel");
        $this->assertEquals("previsionnel", $obj->getPrevisionnel());
    }

    /**
     * Test setPrioritaire()
     *
     * @return void
     */
    public function testSetPrioritaire(): void {

        $obj = new Clients();

        $obj->setPrioritaire(true);
        $this->assertTrue($obj->getPrioritaire());
    }

    /**
     * Test setProfilDirAnxieux()
     *
     * @return void
     */
    public function testSetProfilDirAnxieux(): void {

        $obj = new Clients();

        $obj->setProfilDirAnxieux(true);
        $this->assertTrue($obj->getProfilDirAnxieux());
    }

    /**
     * Test setProfilDirCommercial()
     *
     * @return void
     */
    public function testSetProfilDirCommercial(): void {

        $obj = new Clients();

        $obj->setProfilDirCommercial(true);
        $this->assertTrue($obj->getProfilDirCommercial());
    }

    /**
     * Test setProfilDirGestionnaire()
     *
     * @return void
     */
    public function testSetProfilDirGestionnaire(): void {

        $obj = new Clients();

        $obj->setProfilDirGestionnaire(true);
        $this->assertTrue($obj->getProfilDirGestionnaire());
    }

    /**
     * Test setProfilDirSomnolent()
     *
     * @return void
     */
    public function testSetProfilDirSomnolent(): void {

        $obj = new Clients();

        $obj->setProfilDirSomnolent(true);
        $this->assertTrue($obj->getProfilDirSomnolent());
    }

    /**
     * Test setProfilDirTechnicien()
     *
     * @return void
     */
    public function testSetProfilDirTechnicien(): void {

        $obj = new Clients();

        $obj->setProfilDirTechnicien(true);
        $this->assertTrue($obj->getProfilDirTechnicien());
    }

    /**
     * Test setProfilEnt()
     *
     * @return void
     */
    public function testSetProfilEnt(): void {

        $obj = new Clients();

        $obj->setProfilEnt("profilEnt");
        $this->assertEquals("profilEnt", $obj->getProfilEnt());
    }

    /**
     * Test setProspect()
     *
     * @return void
     */
    public function testSetProspect(): void {

        $obj = new Clients();

        $obj->setProspect(true);
        $this->assertTrue($obj->getProspect());
    }

    /**
     * Test setQualitePaiement()
     *
     * @return void
     */
    public function testSetQualitePaiement(): void {

        $obj = new Clients();

        $obj->setQualitePaiement("qualitePaiement");
        $this->assertEquals("qualitePaiement", $obj->getQualitePaiement());
    }

    /**
     * Test setRaisonFinActivite()
     *
     * @return void
     */
    public function testSetRaisonFinActivite(): void {

        $obj = new Clients();

        $obj->setRaisonFinActivite("raisonFinActivite");
        $this->assertEquals("raisonFinActivite", $obj->getRaisonFinActivite());
    }

    /**
     * Test setRaisonMvPaiement()
     *
     * @return void
     */
    public function testSetRaisonMvPaiement(): void {

        $obj = new Clients();

        $obj->setRaisonMvPaiement("raisonMvPaiement");
        $this->assertEquals("raisonMvPaiement", $obj->getRaisonMvPaiement());
    }

    /**
     * Test setRegime()
     *
     * @return void
     */
    public function testSetRegime(): void {

        $obj = new Clients();

        $obj->setRegime("regime");
        $this->assertEquals("regime", $obj->getRegime());
    }

    /**
     * Test setRegroupementFact()
     *
     * @return void
     */
    public function testSetRegroupementFact(): void {

        $obj = new Clients();

        $obj->setRegroupementFact("regroupementFact");
        $this->assertEquals("regroupementFact", $obj->getRegroupementFact());
    }

    /**
     * Test setRelationCabinet()
     *
     * @return void
     */
    public function testSetRelationCabinet(): void {

        $obj = new Clients();

        $obj->setRelationCabinet("relationCabinet");
        $this->assertEquals("relationCabinet", $obj->getRelationCabinet());
    }

    /**
     * Test setReleveFacture()
     *
     * @return void
     */
    public function testSetReleveFacture(): void {

        $obj = new Clients();

        $obj->setReleveFacture(true);
        $this->assertTrue($obj->getReleveFacture());
    }

    /**
     * Test setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new Clients();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Test setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new Clients();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Test setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new Clients();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Test setRemisePied()
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new Clients();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Test setRemisePied2()
     *
     * @return void
     */
    public function testSetRemisePied2(): void {

        $obj = new Clients();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Test setRemisePied3()
     *
     * @return void
     */
    public function testSetRemisePied3(): void {

        $obj = new Clients();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Test setResultat()
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new Clients();

        $obj->setResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getResultat());
    }

    /**
     * Test setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Clients();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Test setSanteFinanciere()
     *
     * @return void
     */
    public function testSetSanteFinanciere(): void {

        $obj = new Clients();

        $obj->setSanteFinanciere("santeFinanciere");
        $this->assertEquals("santeFinanciere", $obj->getSanteFinanciere());
    }

    /**
     * Test setServiceCpta()
     *
     * @return void
     */
    public function testSetServiceCpta(): void {

        $obj = new Clients();

        $obj->setServiceCpta(true);
        $this->assertTrue($obj->getServiceCpta());
    }

    /**
     * Test setSiegeGroupe()
     *
     * @return void
     */
    public function testSetSiegeGroupe(): void {

        $obj = new Clients();

        $obj->setSiegeGroupe(true);
        $this->assertTrue($obj->getSiegeGroupe());
    }

    /**
     * Test setSocial()
     *
     * @return void
     */
    public function testSetSocial(): void {

        $obj = new Clients();

        $obj->setSocial(true);
        $this->assertTrue($obj->getSocial());
    }

    /**
     * Test setSocialBtq()
     *
     * @return void
     */
    public function testSetSocialBtq(): void {

        $obj = new Clients();

        $obj->setSocialBtq("socialBtq");
        $this->assertEquals("socialBtq", $obj->getSocialBtq());
    }

    /**
     * Test setSocialBureauDistributeur()
     *
     * @return void
     */
    public function testSetSocialBureauDistributeur(): void {

        $obj = new Clients();

        $obj->setSocialBureauDistributeur("socialBureauDistributeur");
        $this->assertEquals("socialBureauDistributeur", $obj->getSocialBureauDistributeur());
    }

    /**
     * Test setSocialCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetSocialCodeOfficielCommune(): void {

        $obj = new Clients();

        $obj->setSocialCodeOfficielCommune("socialCodeOfficielCommune");
        $this->assertEquals("socialCodeOfficielCommune", $obj->getSocialCodeOfficielCommune());
    }

    /**
     * Test setSocialCodePostal()
     *
     * @return void
     */
    public function testSetSocialCodePostal(): void {

        $obj = new Clients();

        $obj->setSocialCodePostal("socialCodePostal");
        $this->assertEquals("socialCodePostal", $obj->getSocialCodePostal());
    }

    /**
     * Test setSocialComplement()
     *
     * @return void
     */
    public function testSetSocialComplement(): void {

        $obj = new Clients();

        $obj->setSocialComplement("socialComplement");
        $this->assertEquals("socialComplement", $obj->getSocialComplement());
    }

    /**
     * Test setSocialNomRs()
     *
     * @return void
     */
    public function testSetSocialNomRs(): void {

        $obj = new Clients();

        $obj->setSocialNomRs("socialNomRs");
        $this->assertEquals("socialNomRs", $obj->getSocialNomRs());
    }

    /**
     * Test setSocialNomVille()
     *
     * @return void
     */
    public function testSetSocialNomVille(): void {

        $obj = new Clients();

        $obj->setSocialNomVille("socialNomVille");
        $this->assertEquals("socialNomVille", $obj->getSocialNomVille());
    }

    /**
     * Test setSocialNomVoie()
     *
     * @return void
     */
    public function testSetSocialNomVoie(): void {

        $obj = new Clients();

        $obj->setSocialNomVoie("socialNomVoie");
        $this->assertEquals("socialNomVoie", $obj->getSocialNomVoie());
    }

    /**
     * Test setSocialNumVoie()
     *
     * @return void
     */
    public function testSetSocialNumVoie(): void {

        $obj = new Clients();

        $obj->setSocialNumVoie("socialNumVoie");
        $this->assertEquals("socialNumVoie", $obj->getSocialNumVoie());
    }

    /**
     * Test setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new Clients();

        $obj->setSoumisEscompte(true);
        $this->assertTrue($obj->getSoumisEscompte());
    }

    /**
     * Test setSoumisPort1()
     *
     * @return void
     */
    public function testSetSoumisPort1(): void {

        $obj = new Clients();

        $obj->setSoumisPort1("soumisPort1");
        $this->assertEquals("soumisPort1", $obj->getSoumisPort1());
    }

    /**
     * Test setSoumisPort2()
     *
     * @return void
     */
    public function testSetSoumisPort2(): void {

        $obj = new Clients();

        $obj->setSoumisPort2("soumisPort2");
        $this->assertEquals("soumisPort2", $obj->getSoumisPort2());
    }

    /**
     * Test setSoumisTaxe1()
     *
     * @return void
     */
    public function testSetSoumisTaxe1(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe1(true);
        $this->assertTrue($obj->getSoumisTaxe1());
    }

    /**
     * Test setSoumisTaxe2()
     *
     * @return void
     */
    public function testSetSoumisTaxe2(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe2(true);
        $this->assertTrue($obj->getSoumisTaxe2());
    }

    /**
     * Test setSoumisTaxe3()
     *
     * @return void
     */
    public function testSetSoumisTaxe3(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe3(true);
        $this->assertTrue($obj->getSoumisTaxe3());
    }

    /**
     * Test setSoumisTaxe4()
     *
     * @return void
     */
    public function testSetSoumisTaxe4(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe4(true);
        $this->assertTrue($obj->getSoumisTaxe4());
    }

    /**
     * Test setSoumisTaxe5()
     *
     * @return void
     */
    public function testSetSoumisTaxe5(): void {

        $obj = new Clients();

        $obj->setSoumisTaxe5(true);
        $this->assertTrue($obj->getSoumisTaxe5());
    }

    /**
     * Test setSoumisTva()
     *
     * @return void
     */
    public function testSetSoumisTva(): void {

        $obj = new Clients();

        $obj->setSoumisTva(true);
        $this->assertTrue($obj->getSoumisTva());
    }

    /**
     * Test setTableauDeBord()
     *
     * @return void
     */
    public function testSetTableauDeBord(): void {

        $obj = new Clients();

        $obj->setTableauDeBord("tableauDeBord");
        $this->assertEquals("tableauDeBord", $obj->getTableauDeBord());
    }

    /**
     * Test setToutesActivites()
     *
     * @return void
     */
    public function testSetToutesActivites(): void {

        $obj = new Clients();

        $obj->setToutesActivites("toutesActivites");
        $this->assertEquals("toutesActivites", $obj->getToutesActivites());
    }

    /**
     * Test setTransporteur()
     *
     * @return void
     */
    public function testSetTransporteur(): void {

        $obj = new Clients();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Test setTresorerie()
     *
     * @return void
     */
    public function testSetTresorerie(): void {

        $obj = new Clients();

        $obj->setTresorerie("tresorerie");
        $this->assertEquals("tresorerie", $obj->getTresorerie());
    }

    /**
     * Test setTvaRegime()
     *
     * @return void
     */
    public function testSetTvaRegime(): void {

        $obj = new Clients();

        $obj->setTvaRegime("tvaRegime");
        $this->assertEquals("tvaRegime", $obj->getTvaRegime());
    }

    /**
     * Test setTxEscompteVente()
     *
     * @return void
     */
    public function testSetTxEscompteVente(): void {

        $obj = new Clients();

        $obj->setTxEscompteVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTxEscompteVente());
    }

    /**
     * Test setTypeClient()
     *
     * @return void
     */
    public function testSetTypeClient(): void {

        $obj = new Clients();

        $obj->setTypeClient("typeClient");
        $this->assertEquals("typeClient", $obj->getTypeClient());
    }

    /**
     * Test setTypeEditBl()
     *
     * @return void
     */
    public function testSetTypeEditBl(): void {

        $obj = new Clients();

        $obj->setTypeEditBl("typeEditBl");
        $this->assertEquals("typeEditBl", $obj->getTypeEditBl());
    }

    /**
     * Test setTypeFacture()
     *
     * @return void
     */
    public function testSetTypeFacture(): void {

        $obj = new Clients();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }

    /**
     * Test setTypeGestionEtebac()
     *
     * @return void
     */
    public function testSetTypeGestionEtebac(): void {

        $obj = new Clients();

        $obj->setTypeGestionEtebac("typeGestionEtebac");
        $this->assertEquals("typeGestionEtebac", $obj->getTypeGestionEtebac());
    }

    /**
     * Test setUseAdresseFact()
     *
     * @return void
     */
    public function testSetUseAdresseFact(): void {

        $obj = new Clients();

        $obj->setUseAdresseFact(true);
        $this->assertTrue($obj->getUseAdresseFact());
    }

    /**
     * Test setUseCorresSociale()
     *
     * @return void
     */
    public function testSetUseCorresSociale(): void {

        $obj = new Clients();

        $obj->setUseCorresSociale(true);
        $this->assertTrue($obj->getUseCorresSociale());
    }

    /**
     * Test __construct()
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
