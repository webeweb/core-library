<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\QGI\Fournisseurs;

/**
 * Fournisseurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\QGI
 */
class FournisseursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fournisseurs();

        $this->assertNull($obj->getAdresseSiteFournisseur());
        $this->assertNull($obj->getArticlePort1());
        $this->assertNull($obj->getArticlePort2());
        $this->assertNull($obj->getBloque());
        $this->assertNull($obj->getChiffreAffaire());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeActivite());
        $this->assertNull($obj->getCodeAssistantJuridique());
        $this->assertNull($obj->getCodeAssistantSocial());
        $this->assertNull($obj->getCodeAutre1());
        $this->assertNull($obj->getCodeAutre2());
        $this->assertNull($obj->getCodeAvocat());
        $this->assertNull($obj->getCodeBarre());
        $this->assertNull($obj->getCodeCategorieFournisseur());
        $this->assertNull($obj->getCodeCollaborateur());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeEditionFact());
        $this->assertNull($obj->getCodeExc());
        $this->assertNull($obj->getCodeExpert());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeGeo());
        $this->assertNull($obj->getCodeImputationAnalytique());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeOrigine());
        $this->assertNull($obj->getCodePortefeuille());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTransporteur());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCompteDeVente());
        $this->assertNull($obj->getDsCodeCollab());
        $this->assertNull($obj->getDsDateRetour());
        $this->assertNull($obj->getDsDateSortie());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDelai());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getDossierComptable());
        $this->assertNull($obj->getDossierPaie());
        $this->assertNull($obj->getEanFrn());
        $this->assertNull($obj->getEcheanceFinDecade());
        $this->assertNull($obj->getEcheanceFinQuinzaine());
        $this->assertNull($obj->getEtat1());
        $this->assertNull($obj->getEtat2());
        $this->assertNull($obj->getEtat3());
        $this->assertNull($obj->getEtat4());
        $this->assertNull($obj->getEtat5());
        $this->assertNull($obj->getEtiquettes());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getFraisFixes1());
        $this->assertNull($obj->getFraisFixes2());
        $this->assertNull($obj->getFrancoPort1());
        $this->assertNull($obj->getFrancoPort2());
        $this->assertNull($obj->getIgp());
        $this->assertNull($obj->getIdentifiantTva());
        $this->assertNull($obj->getInsp());
        $this->assertNull($obj->getMissionSurDossier());
        $this->assertNull($obj->getModeleBr());
        $this->assertNull($obj->getModeleCommande());
        $this->assertNull($obj->getModeleFacture());
        $this->assertNull($obj->getModeleReleve());
        $this->assertNull($obj->getMontantFranco());
        $this->assertNull($obj->getMontantMiniCde());
        $this->assertNull($obj->getMontantPortLiv());
        $this->assertNull($obj->getNbBr());
        $this->assertNull($obj->getNbCommande());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNbJourInterval());
        $this->assertNull($obj->getNbMaxBr());
        $this->assertNull($obj->getNbReleve());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumFactureF());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getObservation1());
        $this->assertNull($obj->getObservation2());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPrefixeFactureF());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRegime());
        $this->assertNull($obj->getRegroupementFact());
        $this->assertNull($obj->getReleveFacture());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getResultat());
        $this->assertNull($obj->getSiegeGroupe());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisPort1());
        $this->assertNull($obj->getSoumisPort2());
        $this->assertNull($obj->getSoumisTva());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getSoumisTaxe4());
        $this->assertNull($obj->getSoumisTaxe5());
        $this->assertNull($obj->getTrsAffGrp());
        $this->assertNull($obj->getTrsAffMatDang());
        $this->assertNull($obj->getTrsAffProdChim());
        $this->assertNull($obj->getTrsAffRefri());
        $this->assertNull($obj->getTrsCodeTarif());
        $this->assertNull($obj->getTrsEstUnAffrete());
        $this->assertNull($obj->getTrsGestionPalettes());
        $this->assertNull($obj->getTrspCentPxTrs());
        $this->assertNull($obj->getTrsSuiviPlaningAff());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTauxComm());
        $this->assertNull($obj->getTauxEscompte());
        $this->assertNull($obj->getToutesActivites());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTypeEditBr());
        $this->assertNull($obj->getTypeFournisseur());
    }

    /**
     * Tests the setAdresseSiteFournisseur() method.
     *
     * @return void
     */
    public function testSetAdresseSiteFournisseur() {

        $obj = new Fournisseurs();

        $obj->setAdresseSiteFournisseur("adresseSiteFournisseur");
        $this->assertEquals("adresseSiteFournisseur", $obj->getAdresseSiteFournisseur());
    }

    /**
     * Tests the setArticlePort1() method.
     *
     * @return void
     */
    public function testSetArticlePort1() {

        $obj = new Fournisseurs();

        $obj->setArticlePort1("articlePort1");
        $this->assertEquals("articlePort1", $obj->getArticlePort1());
    }

    /**
     * Tests the setArticlePort2() method.
     *
     * @return void
     */
    public function testSetArticlePort2() {

        $obj = new Fournisseurs();

        $obj->setArticlePort2("articlePort2");
        $this->assertEquals("articlePort2", $obj->getArticlePort2());
    }

    /**
     * Tests the setBloque() method.
     *
     * @return void
     */
    public function testSetBloque() {

        $obj = new Fournisseurs();

        $obj->setBloque(true);
        $this->assertEquals(true, $obj->getBloque());
    }

    /**
     * Tests the setChiffreAffaire() method.
     *
     * @return void
     */
    public function testSetChiffreAffaire() {

        $obj = new Fournisseurs();

        $obj->setChiffreAffaire(10.092018);
        $this->assertEquals(10.092018, $obj->getChiffreAffaire());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Fournisseurs();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite() {

        $obj = new Fournisseurs();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeAssistantJuridique() method.
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique() {

        $obj = new Fournisseurs();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Tests the setCodeAssistantSocial() method.
     *
     * @return void
     */
    public function testSetCodeAssistantSocial() {

        $obj = new Fournisseurs();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Tests the setCodeAutre1() method.
     *
     * @return void
     */
    public function testSetCodeAutre1() {

        $obj = new Fournisseurs();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Tests the setCodeAutre2() method.
     *
     * @return void
     */
    public function testSetCodeAutre2() {

        $obj = new Fournisseurs();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Tests the setCodeAvocat() method.
     *
     * @return void
     */
    public function testSetCodeAvocat() {

        $obj = new Fournisseurs();

        $obj->setCodeAvocat("codeAvocat");
        $this->assertEquals("codeAvocat", $obj->getCodeAvocat());
    }

    /**
     * Tests the setCodeBarre() method.
     *
     * @return void
     */
    public function testSetCodeBarre() {

        $obj = new Fournisseurs();

        $obj->setCodeBarre(true);
        $this->assertEquals(true, $obj->getCodeBarre());
    }

    /**
     * Tests the setCodeCategorieFournisseur() method.
     *
     * @return void
     */
    public function testSetCodeCategorieFournisseur() {

        $obj = new Fournisseurs();

        $obj->setCodeCategorieFournisseur("codeCategorieFournisseur");
        $this->assertEquals("codeCategorieFournisseur", $obj->getCodeCategorieFournisseur());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Fournisseurs();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new Fournisseurs();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Fournisseurs();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeEditionFact() method.
     *
     * @return void
     */
    public function testSetCodeEditionFact() {

        $obj = new Fournisseurs();

        $obj->setCodeEditionFact("codeEditionFact");
        $this->assertEquals("codeEditionFact", $obj->getCodeEditionFact());
    }

    /**
     * Tests the setCodeExc() method.
     *
     * @return void
     */
    public function testSetCodeExc() {

        $obj = new Fournisseurs();

        $obj->setCodeExc("codeExc");
        $this->assertEquals("codeExc", $obj->getCodeExc());
    }

    /**
     * Tests the setCodeExpert() method.
     *
     * @return void
     */
    public function testSetCodeExpert() {

        $obj = new Fournisseurs();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille() {

        $obj = new Fournisseurs();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeGeo() method.
     *
     * @return void
     */
    public function testSetCodeGeo() {

        $obj = new Fournisseurs();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Tests the setCodeImputationAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeImputationAnalytique() {

        $obj = new Fournisseurs();

        $obj->setCodeImputationAnalytique("codeImputationAnalytique");
        $this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
    }

    /**
     * Tests the setCodeLangueDesignationArticle() method.
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle() {

        $obj = new Fournisseurs();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests the setCodeOrigine() method.
     *
     * @return void
     */
    public function testSetCodeOrigine() {

        $obj = new Fournisseurs();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Tests the setCodePortefeuille() method.
     *
     * @return void
     */
    public function testSetCodePortefeuille() {

        $obj = new Fournisseurs();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Tests the setCodeReglement() method.
     *
     * @return void
     */
    public function testSetCodeReglement() {

        $obj = new Fournisseurs();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new Fournisseurs();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeSousFamille() method.
     *
     * @return void
     */
    public function testSetCodeSousFamille() {

        $obj = new Fournisseurs();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Tests the setCodeTransporteur() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur() {

        $obj = new Fournisseurs();

        $obj->setCodeTransporteur("codeTransporteur");
        $this->assertEquals("codeTransporteur", $obj->getCodeTransporteur());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva() {

        $obj = new Fournisseurs();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new Fournisseurs();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setCollectif() method.
     *
     * @return void
     */
    public function testSetCollectif() {

        $obj = new Fournisseurs();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests the setCompteDeVente() method.
     *
     * @return void
     */
    public function testSetCompteDeVente() {

        $obj = new Fournisseurs();

        $obj->setCompteDeVente(true);
        $this->assertEquals(true, $obj->getCompteDeVente());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation() {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree() {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification() {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie() {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests the setDelai() method.
     *
     * @return void
     */
    public function testSetDelai() {

        $obj = new Fournisseurs();

        $obj->setDelai(10.092018);
        $this->assertEquals(10.092018, $obj->getDelai());
    }

    /**
     * Tests the setDomiciliationBancaire1() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1() {

        $obj = new Fournisseurs();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests the setDomiciliationBancaire2() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2() {

        $obj = new Fournisseurs();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests the setDossierComptable() method.
     *
     * @return void
     */
    public function testSetDossierComptable() {

        $obj = new Fournisseurs();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Tests the setDossierPaie() method.
     *
     * @return void
     */
    public function testSetDossierPaie() {

        $obj = new Fournisseurs();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Tests the setDsCodeCollab() method.
     *
     * @return void
     */
    public function testSetDsCodeCollab() {

        $obj = new Fournisseurs();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Tests the setDsDateRetour() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour() {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Tests the setDsDateSortie() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie() {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Tests the setEanFrn() method.
     *
     * @return void
     */
    public function testSetEanFrn() {

        $obj = new Fournisseurs();

        $obj->setEanFrn("eanFrn");
        $this->assertEquals("eanFrn", $obj->getEanFrn());
    }

    /**
     * Tests the setEcheanceFinDecade() method.
     *
     * @return void
     */
    public function testSetEcheanceFinDecade() {

        $obj = new Fournisseurs();

        $obj->setEcheanceFinDecade(true);
        $this->assertEquals(true, $obj->getEcheanceFinDecade());
    }

    /**
     * Tests the setEcheanceFinQuinzaine() method.
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine() {

        $obj = new Fournisseurs();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertEquals(true, $obj->getEcheanceFinQuinzaine());
    }

    /**
     * Tests the setEtat1() method.
     *
     * @return void
     */
    public function testSetEtat1() {

        $obj = new Fournisseurs();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }

    /**
     * Tests the setEtat2() method.
     *
     * @return void
     */
    public function testSetEtat2() {

        $obj = new Fournisseurs();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }

    /**
     * Tests the setEtat3() method.
     *
     * @return void
     */
    public function testSetEtat3() {

        $obj = new Fournisseurs();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }

    /**
     * Tests the setEtat4() method.
     *
     * @return void
     */
    public function testSetEtat4() {

        $obj = new Fournisseurs();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }

    /**
     * Tests the setEtat5() method.
     *
     * @return void
     */
    public function testSetEtat5() {

        $obj = new Fournisseurs();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }

    /**
     * Tests the setEtiquettes() method.
     *
     * @return void
     */
    public function testSetEtiquettes() {

        $obj = new Fournisseurs();

        $obj->setEtiquettes(true);
        $this->assertEquals(true, $obj->getEtiquettes());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros() {

        $obj = new Fournisseurs();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setFactureIsolee() method.
     *
     * @return void
     */
    public function testSetFactureIsolee() {

        $obj = new Fournisseurs();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests the setFraisFixes1() method.
     *
     * @return void
     */
    public function testSetFraisFixes1() {

        $obj = new Fournisseurs();

        $obj->setFraisFixes1(true);
        $this->assertEquals(true, $obj->getFraisFixes1());
    }

    /**
     * Tests the setFraisFixes2() method.
     *
     * @return void
     */
    public function testSetFraisFixes2() {

        $obj = new Fournisseurs();

        $obj->setFraisFixes2(true);
        $this->assertEquals(true, $obj->getFraisFixes2());
    }

    /**
     * Tests the setFrancoPort1() method.
     *
     * @return void
     */
    public function testSetFrancoPort1() {

        $obj = new Fournisseurs();

        $obj->setFrancoPort1(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort1());
    }

    /**
     * Tests the setFrancoPort2() method.
     *
     * @return void
     */
    public function testSetFrancoPort2() {

        $obj = new Fournisseurs();

        $obj->setFrancoPort2(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort2());
    }

    /**
     * Tests the setIdentifiantTva() method.
     *
     * @return void
     */
    public function testSetIdentifiantTva() {

        $obj = new Fournisseurs();

        $obj->setIdentifiantTva("identifiantTva");
        $this->assertEquals("identifiantTva", $obj->getIdentifiantTva());
    }

    /**
     * Tests the setIgp() method.
     *
     * @return void
     */
    public function testSetIgp() {

        $obj = new Fournisseurs();

        $obj->setIgp(true);
        $this->assertEquals(true, $obj->getIgp());
    }

    /**
     * Tests the setInsp() method.
     *
     * @return void
     */
    public function testSetInsp() {

        $obj = new Fournisseurs();

        $obj->setInsp("insp");
        $this->assertEquals("insp", $obj->getInsp());
    }

    /**
     * Tests the setMissionSurDossier() method.
     *
     * @return void
     */
    public function testSetMissionSurDossier() {

        $obj = new Fournisseurs();

        $obj->setMissionSurDossier(10);
        $this->assertEquals(10, $obj->getMissionSurDossier());
    }

    /**
     * Tests the setModeleBr() method.
     *
     * @return void
     */
    public function testSetModeleBr() {

        $obj = new Fournisseurs();

        $obj->setModeleBr("modeleBr");
        $this->assertEquals("modeleBr", $obj->getModeleBr());
    }

    /**
     * Tests the setModeleCommande() method.
     *
     * @return void
     */
    public function testSetModeleCommande() {

        $obj = new Fournisseurs();

        $obj->setModeleCommande("modeleCommande");
        $this->assertEquals("modeleCommande", $obj->getModeleCommande());
    }

    /**
     * Tests the setModeleFacture() method.
     *
     * @return void
     */
    public function testSetModeleFacture() {

        $obj = new Fournisseurs();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests the setModeleReleve() method.
     *
     * @return void
     */
    public function testSetModeleReleve() {

        $obj = new Fournisseurs();

        $obj->setModeleReleve("modeleReleve");
        $this->assertEquals("modeleReleve", $obj->getModeleReleve());
    }

    /**
     * Tests the setMontantFranco() method.
     *
     * @return void
     */
    public function testSetMontantFranco() {

        $obj = new Fournisseurs();

        $obj->setMontantFranco(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantFranco());
    }

    /**
     * Tests the setMontantMiniCde() method.
     *
     * @return void
     */
    public function testSetMontantMiniCde() {

        $obj = new Fournisseurs();

        $obj->setMontantMiniCde(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantMiniCde());
    }

    /**
     * Tests the setMontantPortLiv() method.
     *
     * @return void
     */
    public function testSetMontantPortLiv() {

        $obj = new Fournisseurs();

        $obj->setMontantPortLiv(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPortLiv());
    }

    /**
     * Tests the setNbBr() method.
     *
     * @return void
     */
    public function testSetNbBr() {

        $obj = new Fournisseurs();

        $obj->setNbBr("nbBr");
        $this->assertEquals("nbBr", $obj->getNbBr());
    }

    /**
     * Tests the setNbCommande() method.
     *
     * @return void
     */
    public function testSetNbCommande() {

        $obj = new Fournisseurs();

        $obj->setNbCommande("nbCommande");
        $this->assertEquals("nbCommande", $obj->getNbCommande());
    }

    /**
     * Tests the setNbFacture() method.
     *
     * @return void
     */
    public function testSetNbFacture() {

        $obj = new Fournisseurs();

        $obj->setNbFacture("nbFacture");
        $this->assertEquals("nbFacture", $obj->getNbFacture());
    }

    /**
     * Tests the setNbJourInterval() method.
     *
     * @return void
     */
    public function testSetNbJourInterval() {

        $obj = new Fournisseurs();

        $obj->setNbJourInterval(10);
        $this->assertEquals(10, $obj->getNbJourInterval());
    }

    /**
     * Tests the setNbMaxBr() method.
     *
     * @return void
     */
    public function testSetNbMaxBr() {

        $obj = new Fournisseurs();

        $obj->setNbMaxBr("nbMaxBr");
        $this->assertEquals("nbMaxBr", $obj->getNbMaxBr());
    }

    /**
     * Tests the setNbReleve() method.
     *
     * @return void
     */
    public function testSetNbReleve() {

        $obj = new Fournisseurs();

        $obj->setNbReleve("nbReleve");
        $this->assertEquals("nbReleve", $obj->getNbReleve());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new Fournisseurs();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumFactureF() method.
     *
     * @return void
     */
    public function testSetNumFactureF() {

        $obj = new Fournisseurs();

        $obj->setNumFactureF(10);
        $this->assertEquals(10, $obj->getNumFactureF());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new Fournisseurs();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setObservation1() method.
     *
     * @return void
     */
    public function testSetObservation1() {

        $obj = new Fournisseurs();

        $obj->setObservation1("observation1");
        $this->assertEquals("observation1", $obj->getObservation1());
    }

    /**
     * Tests the setObservation2() method.
     *
     * @return void
     */
    public function testSetObservation2() {

        $obj = new Fournisseurs();

        $obj->setObservation2("observation2");
        $this->assertEquals("observation2", $obj->getObservation2());
    }

    /**
     * Tests the setPaiementDepartLe() method.
     *
     * @return void
     */
    public function testSetPaiementDepartLe() {

        $obj = new Fournisseurs();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Tests the setPaiementLe() method.
     *
     * @return void
     */
    public function testSetPaiementLe() {

        $obj = new Fournisseurs();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Tests the setPaiementNombreDeJours() method.
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours() {

        $obj = new Fournisseurs();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests the setPrefixeFactureF() method.
     *
     * @return void
     */
    public function testSetPrefixeFactureF() {

        $obj = new Fournisseurs();

        $obj->setPrefixeFactureF("prefixeFactureF");
        $this->assertEquals("prefixeFactureF", $obj->getPrefixeFactureF());
    }

    /**
     * Tests the setRegime() method.
     *
     * @return void
     */
    public function testSetRegime() {

        $obj = new Fournisseurs();

        $obj->setRegime("regime");
        $this->assertEquals("regime", $obj->getRegime());
    }

    /**
     * Tests the setRegroupementFact() method.
     *
     * @return void
     */
    public function testSetRegroupementFact() {

        $obj = new Fournisseurs();

        $obj->setRegroupementFact("regroupementFact");
        $this->assertEquals("regroupementFact", $obj->getRegroupementFact());
    }

    /**
     * Tests the setReleveFacture() method.
     *
     * @return void
     */
    public function testSetReleveFacture() {

        $obj = new Fournisseurs();

        $obj->setReleveFacture(true);
        $this->assertEquals(true, $obj->getReleveFacture());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new Fournisseurs();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new Fournisseurs();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new Fournisseurs();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setRemisePied() method.
     *
     * @return void
     */
    public function testSetRemisePied() {

        $obj = new Fournisseurs();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests the setRemisePied2() method.
     *
     * @return void
     */
    public function testSetRemisePied2() {

        $obj = new Fournisseurs();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests the setRemisePied3() method.
     *
     * @return void
     */
    public function testSetRemisePied3() {

        $obj = new Fournisseurs();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests the setResultat() method.
     *
     * @return void
     */
    public function testSetResultat() {

        $obj = new Fournisseurs();

        $obj->setResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getResultat());
    }

    /**
     * Tests the setRib() method.
     *
     * @return void
     */
    public function testSetRib() {

        $obj = new Fournisseurs();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests the setSiegeGroupe() method.
     *
     * @return void
     */
    public function testSetSiegeGroupe() {

        $obj = new Fournisseurs();

        $obj->setSiegeGroupe(true);
        $this->assertEquals(true, $obj->getSiegeGroupe());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new Fournisseurs();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setSoumisPort1() method.
     *
     * @return void
     */
    public function testSetSoumisPort1() {

        $obj = new Fournisseurs();

        $obj->setSoumisPort1("soumisPort1");
        $this->assertEquals("soumisPort1", $obj->getSoumisPort1());
    }

    /**
     * Tests the setSoumisPort2() method.
     *
     * @return void
     */
    public function testSetSoumisPort2() {

        $obj = new Fournisseurs();

        $obj->setSoumisPort2("soumisPort2");
        $this->assertEquals("soumisPort2", $obj->getSoumisPort2());
    }

    /**
     * Tests the setSoumisTaxe1() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe1() {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe1(true);
        $this->assertEquals(true, $obj->getSoumisTaxe1());
    }

    /**
     * Tests the setSoumisTaxe2() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe2() {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe2(true);
        $this->assertEquals(true, $obj->getSoumisTaxe2());
    }

    /**
     * Tests the setSoumisTaxe3() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe3() {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe3(true);
        $this->assertEquals(true, $obj->getSoumisTaxe3());
    }

    /**
     * Tests the setSoumisTaxe4() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe4() {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe4(true);
        $this->assertEquals(true, $obj->getSoumisTaxe4());
    }

    /**
     * Tests the setSoumisTaxe5() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe5() {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe5(true);
        $this->assertEquals(true, $obj->getSoumisTaxe5());
    }

    /**
     * Tests the setSoumisTva() method.
     *
     * @return void
     */
    public function testSetSoumisTva() {

        $obj = new Fournisseurs();

        $obj->setSoumisTva(true);
        $this->assertEquals(true, $obj->getSoumisTva());
    }

    /**
     * Tests the setTauxComm() method.
     *
     * @return void
     */
    public function testSetTauxComm() {

        $obj = new Fournisseurs();

        $obj->setTauxComm(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxComm());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte() {

        $obj = new Fournisseurs();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setToutesActivites() method.
     *
     * @return void
     */
    public function testSetToutesActivites() {

        $obj = new Fournisseurs();

        $obj->setToutesActivites("toutesActivites");
        $this->assertEquals("toutesActivites", $obj->getToutesActivites());
    }

    /**
     * Tests the setTransporteur() method.
     *
     * @return void
     */
    public function testSetTransporteur() {

        $obj = new Fournisseurs();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests the setTrsAffGrp() method.
     *
     * @return void
     */
    public function testSetTrsAffGrp() {

        $obj = new Fournisseurs();

        $obj->setTrsAffGrp(true);
        $this->assertEquals(true, $obj->getTrsAffGrp());
    }

    /**
     * Tests the setTrsAffMatDang() method.
     *
     * @return void
     */
    public function testSetTrsAffMatDang() {

        $obj = new Fournisseurs();

        $obj->setTrsAffMatDang("trsAffMatDang");
        $this->assertEquals("trsAffMatDang", $obj->getTrsAffMatDang());
    }

    /**
     * Tests the setTrsAffProdChim() method.
     *
     * @return void
     */
    public function testSetTrsAffProdChim() {

        $obj = new Fournisseurs();

        $obj->setTrsAffProdChim("trsAffProdChim");
        $this->assertEquals("trsAffProdChim", $obj->getTrsAffProdChim());
    }

    /**
     * Tests the setTrsAffRefri() method.
     *
     * @return void
     */
    public function testSetTrsAffRefri() {

        $obj = new Fournisseurs();

        $obj->setTrsAffRefri("trsAffRefri");
        $this->assertEquals("trsAffRefri", $obj->getTrsAffRefri());
    }

    /**
     * Tests the setTrsCodeTarif() method.
     *
     * @return void
     */
    public function testSetTrsCodeTarif() {

        $obj = new Fournisseurs();

        $obj->setTrsCodeTarif("trsCodeTarif");
        $this->assertEquals("trsCodeTarif", $obj->getTrsCodeTarif());
    }

    /**
     * Tests the setTrsEstUnAffrete() method.
     *
     * @return void
     */
    public function testSetTrsEstUnAffrete() {

        $obj = new Fournisseurs();

        $obj->setTrsEstUnAffrete("trsEstUnAffrete");
        $this->assertEquals("trsEstUnAffrete", $obj->getTrsEstUnAffrete());
    }

    /**
     * Tests the setTrsGestionPalettes() method.
     *
     * @return void
     */
    public function testSetTrsGestionPalettes() {

        $obj = new Fournisseurs();

        $obj->setTrsGestionPalettes(true);
        $this->assertEquals(true, $obj->getTrsGestionPalettes());
    }

    /**
     * Tests the setTrsSuiviPlaningAff() method.
     *
     * @return void
     */
    public function testSetTrsSuiviPlaningAff() {

        $obj = new Fournisseurs();

        $obj->setTrsSuiviPlaningAff(true);
        $this->assertEquals(true, $obj->getTrsSuiviPlaningAff());
    }

    /**
     * Tests the setTrspCentPxTrs() method.
     *
     * @return void
     */
    public function testSetTrspCentPxTrs() {

        $obj = new Fournisseurs();

        $obj->setTrspCentPxTrs(10.092018);
        $this->assertEquals(10.092018, $obj->getTrspCentPxTrs());
    }

    /**
     * Tests the setTvaRegime() method.
     *
     * @return void
     */
    public function testSetTvaRegime() {

        $obj = new Fournisseurs();

        $obj->setTvaRegime("tvaRegime");
        $this->assertEquals("tvaRegime", $obj->getTvaRegime());
    }

    /**
     * Tests the setTypeEditBr() method.
     *
     * @return void
     */
    public function testSetTypeEditBr() {

        $obj = new Fournisseurs();

        $obj->setTypeEditBr("typeEditBr");
        $this->assertEquals("typeEditBr", $obj->getTypeEditBr());
    }

    /**
     * Tests the setTypeFournisseur() method.
     *
     * @return void
     */
    public function testSetTypeFournisseur() {

        $obj = new Fournisseurs();

        $obj->setTypeFournisseur("typeFournisseur");
        $this->assertEquals("typeFournisseur", $obj->getTypeFournisseur());
    }
}
