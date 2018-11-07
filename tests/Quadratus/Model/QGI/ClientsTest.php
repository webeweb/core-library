<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\Quadratus\Model\QGI;

use DateTime;
use WBW\Library\Core\Quadratus\Model\QGI\Clients;
use WBW\Library\Core\Tests\AbstractFrameworkTestCase;

/**
 * Clients model test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\Quadratus\Model\QGI
 */
class ClientsTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Clients();

        $this->assertNull($obj->getActif());
        $this->assertNull($obj->getActiviteNouvelle());
        $this->assertNull($obj->getActiviteSaiso());
        $this->assertNull($obj->getAdresseSiteClient());
        $this->assertNull($obj->getArticlePort1());
        $this->assertNull($obj->getArticlePort2());
        $this->assertNull($obj->getAssurance());
        $this->assertNull($obj->getBLChiffre());
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
        $this->assertNull($obj->getCodeTVA());
        $this->assertNull($obj->getCodeTarif());
        $this->assertNull($obj->getCodeTournee());
        $this->assertNull($obj->getCodeTransporteur());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCoefSurPV());
        $this->assertNull($obj->getCoeffPVClient());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getConjoint());
        $this->assertNull($obj->getContactRecetteImpots());
        $this->assertNull($obj->getDSCodeCollab());
        $this->assertNull($obj->getDSDateRetour());
        $this->assertNull($obj->getDSDateSortie());
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
        $this->assertNull($obj->getEffectifETP());
        $this->assertNull($obj->getElectionCE());
        $this->assertNull($obj->getElectionDeleguePersonnel());
        $this->assertNull($obj->getEquipInfo());
        $this->assertNull($obj->getEtat1());
        $this->assertNull($obj->getEtat2());
        $this->assertNull($obj->getEtat3());
        $this->assertNull($obj->getEtat4());
        $this->assertNull($obj->getEtat5());
        $this->assertNull($obj->getEtiquettes());
        $this->assertNull($obj->getFact_BTQ());
        $this->assertNull($obj->getFact_BureauDistributeur());
        $this->assertNull($obj->getFact_CodeOfficielCommune());
        $this->assertNull($obj->getFact_CodePostal());
        $this->assertNull($obj->getFact_Complement());
        $this->assertNull($obj->getFact_NomRS());
        $this->assertNull($obj->getFact_NomVille());
        $this->assertNull($obj->getFact_NomVoie());
        $this->assertNull($obj->getFact_NumVoie());
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
        $this->assertNull($obj->getIdentifiantTVA());
        $this->assertNull($obj->getIndiceFacturesMail());
        $this->assertNull($obj->getInsp());
        $this->assertNull($obj->getInteresseGestion());
        $this->assertNull($obj->getMensualisationActif());
        $this->assertNull($obj->getMensualisationAu());
        $this->assertNull($obj->getMensualisationDu());
        $this->assertNull($obj->getMensualisationFrequence());
        $this->assertNull($obj->getMensualisationMontant());
        $this->assertNull($obj->getMissionSurDossier());
        $this->assertNull($obj->getModeleBL());
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
        $this->assertNull($obj->getNbBL());
        $this->assertNull($obj->getNbBLNonChiffres());
        $this->assertNull($obj->getNbCommande());
        $this->assertNull($obj->getNbDevis());
        $this->assertNull($obj->getNbFacture());
        $this->assertNull($obj->getNbJourInterval());
        $this->assertNull($obj->getNbMaxBL());
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
        $this->assertNull($obj->getRIB());
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
        $this->assertNull($obj->getSocial_BTQ());
        $this->assertNull($obj->getSocial_BureauDistributeur());
        $this->assertNull($obj->getSocial_CodeOfficielCommune());
        $this->assertNull($obj->getSocial_CodePostal());
        $this->assertNull($obj->getSocial_Complement());
        $this->assertNull($obj->getSocial_NomRS());
        $this->assertNull($obj->getSocial_NomVille());
        $this->assertNull($obj->getSocial_NomVoie());
        $this->assertNull($obj->getSocial_NumVoie());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisPort1());
        $this->assertNull($obj->getSoumisPort2());
        $this->assertNull($obj->getSoumisTVA());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getSoumisTaxe4());
        $this->assertNull($obj->getSoumisTaxe5());
        $this->assertNull($obj->getTVARegime());
        $this->assertNull($obj->getTableauDeBord());
        $this->assertNull($obj->getToutesActivites());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTresorerie());
        $this->assertNull($obj->getTxEscompteVente());
        $this->assertNull($obj->getTypeClient());
        $this->assertNull($obj->getTypeEditBL());
        $this->assertNull($obj->getTypeFacture());
        $this->assertNull($obj->getTypeGestionETEBAC());
        $this->assertNull($obj->getUseAdresseFact());
        $this->assertNull($obj->getUseCorresSociale());
    }

    /**
     * Tests the setActif() method.
     *
     * @return void
     */
    public function testSetActif() {

        $obj = new Clients();

        $obj->setActif(true);
        $this->assertEquals(true, $obj->getActif());
    }

    /**
     * Tests the setActiviteNouvelle() method.
     *
     * @return void
     */
    public function testSetActiviteNouvelle() {

        $obj = new Clients();

        $obj->setActiviteNouvelle(true);
        $this->assertEquals(true, $obj->getActiviteNouvelle());
    }

    /**
     * Tests the setActiviteSaiso() method.
     *
     * @return void
     */
    public function testSetActiviteSaiso() {

        $obj = new Clients();

        $obj->setActiviteSaiso(true);
        $this->assertEquals(true, $obj->getActiviteSaiso());
    }

    /**
     * Tests the setAdresseSiteClient() method.
     *
     * @return void
     */
    public function testSetAdresseSiteClient() {

        $obj = new Clients();

        $obj->setAdresseSiteClient("adresseSiteClient");
        $this->assertEquals("adresseSiteClient", $obj->getAdresseSiteClient());
    }

    /**
     * Tests the setArticlePort1() method.
     *
     * @return void
     */
    public function testSetArticlePort1() {

        $obj = new Clients();

        $obj->setArticlePort1("articlePort1");
        $this->assertEquals("articlePort1", $obj->getArticlePort1());
    }

    /**
     * Tests the setArticlePort2() method.
     *
     * @return void
     */
    public function testSetArticlePort2() {

        $obj = new Clients();

        $obj->setArticlePort2("articlePort2");
        $this->assertEquals("articlePort2", $obj->getArticlePort2());
    }

    /**
     * Tests the setAssurance() method.
     *
     * @return void
     */
    public function testSetAssurance() {

        $obj = new Clients();

        $obj->setAssurance(true);
        $this->assertEquals(true, $obj->getAssurance());
    }

    /**
     * Tests the setBLChiffre() method.
     *
     * @return void
     */
    public function testSetBLChiffre() {

        $obj = new Clients();

        $obj->setBLChiffre(true);
        $this->assertEquals(true, $obj->getBLChiffre());
    }

    /**
     * Tests the setBibliothequeNovaxel() method.
     *
     * @return void
     */
    public function testSetBibliothequeNovaxel() {

        $obj = new Clients();

        $obj->setBibliothequeNovaxel("bibliothequeNovaxel");
        $this->assertEquals("bibliothequeNovaxel", $obj->getBibliothequeNovaxel());
    }

    /**
     * Tests the setBloque() method.
     *
     * @return void
     */
    public function testSetBloque() {

        $obj = new Clients();

        $obj->setBloque(true);
        $this->assertEquals(true, $obj->getBloque());
    }

    /**
     * Tests the setCdeAutoManu() method.
     *
     * @return void
     */
    public function testSetCdeAutoManu() {

        $obj = new Clients();

        $obj->setCdeAutoManu("cdeAutoManu");
        $this->assertEquals("cdeAutoManu", $obj->getCdeAutoManu());
    }

    /**
     * Tests the setCga() method.
     *
     * @return void
     */
    public function testSetCga() {

        $obj = new Clients();

        $obj->setCga(true);
        $this->assertEquals(true, $obj->getCga());
    }

    /**
     * Tests the setCharges() method.
     *
     * @return void
     */
    public function testSetCharges() {

        $obj = new Clients();

        $obj->setCharges("charges");
        $this->assertEquals("charges", $obj->getCharges());
    }

    /**
     * Tests the setChiffreAffaire() method.
     *
     * @return void
     */
    public function testSetChiffreAffaire() {

        $obj = new Clients();

        $obj->setChiffreAffaire(10.092018);
        $this->assertEquals(10.092018, $obj->getChiffreAffaire());
    }

    /**
     * Tests the setCleAlpha() method.
     *
     * @return void
     */
    public function testSetCleAlpha() {

        $obj = new Clients();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Tests the setCode() method.
     *
     * @return void
     */
    public function testSetCode() {

        $obj = new Clients();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests the setCodeActivite() method.
     *
     * @return void
     */
    public function testSetCodeActivite() {

        $obj = new Clients();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests the setCodeAgence() method.
     *
     * @return void
     */
    public function testSetCodeAgence() {

        $obj = new Clients();

        $obj->setCodeAgence("codeAgence");
        $this->assertEquals("codeAgence", $obj->getCodeAgence());
    }

    /**
     * Tests the setCodeArticleCotisation() method.
     *
     * @return void
     */
    public function testSetCodeArticleCotisation() {

        $obj = new Clients();

        $obj->setCodeArticleCotisation("codeArticleCotisation");
        $this->assertEquals("codeArticleCotisation", $obj->getCodeArticleCotisation());
    }

    /**
     * Tests the setCodeArticleDroitFixe() method.
     *
     * @return void
     */
    public function testSetCodeArticleDroitFixe() {

        $obj = new Clients();

        $obj->setCodeArticleDroitFixe("codeArticleDroitFixe");
        $this->assertEquals("codeArticleDroitFixe", $obj->getCodeArticleDroitFixe());
    }

    /**
     * Tests the setCodeArticleFraisFixe() method.
     *
     * @return void
     */
    public function testSetCodeArticleFraisFixe() {

        $obj = new Clients();

        $obj->setCodeArticleFraisFixe("codeArticleFraisFixe");
        $this->assertEquals("codeArticleFraisFixe", $obj->getCodeArticleFraisFixe());
    }

    /**
     * Tests the setCodeAssistantJuridique() method.
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique() {

        $obj = new Clients();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Tests the setCodeAssistantSocial() method.
     *
     * @return void
     */
    public function testSetCodeAssistantSocial() {

        $obj = new Clients();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Tests the setCodeAutre1() method.
     *
     * @return void
     */
    public function testSetCodeAutre1() {

        $obj = new Clients();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Tests the setCodeAutre2() method.
     *
     * @return void
     */
    public function testSetCodeAutre2() {

        $obj = new Clients();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Tests the setCodeAvocat() method.
     *
     * @return void
     */
    public function testSetCodeAvocat() {

        $obj = new Clients();

        $obj->setCodeAvocat("codeAvocat");
        $this->assertEquals("codeAvocat", $obj->getCodeAvocat());
    }

    /**
     * Tests the setCodeBarre() method.
     *
     * @return void
     */
    public function testSetCodeBarre() {

        $obj = new Clients();

        $obj->setCodeBarre(true);
        $this->assertEquals(true, $obj->getCodeBarre());
    }

    /**
     * Tests the setCodeCategorieClient() method.
     *
     * @return void
     */
    public function testSetCodeCategorieClient() {

        $obj = new Clients();

        $obj->setCodeCategorieClient("codeCategorieClient");
        $this->assertEquals("codeCategorieClient", $obj->getCodeCategorieClient());
    }

    /**
     * Tests the setCodeClientFact() method.
     *
     * @return void
     */
    public function testSetCodeClientFact() {

        $obj = new Clients();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests the setCodeClientLivr() method.
     *
     * @return void
     */
    public function testSetCodeClientLivr() {

        $obj = new Clients();

        $obj->setCodeClientLivr("codeClientLivr");
        $this->assertEquals("codeClientLivr", $obj->getCodeClientLivr());
    }

    /**
     * Tests the setCodeCollaborateur() method.
     *
     * @return void
     */
    public function testSetCodeCollaborateur() {

        $obj = new Clients();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests the setCodeDepot() method.
     *
     * @return void
     */
    public function testSetCodeDepot() {

        $obj = new Clients();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new Clients();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeEditionFact() method.
     *
     * @return void
     */
    public function testSetCodeEditionFact() {

        $obj = new Clients();

        $obj->setCodeEditionFact("codeEditionFact");
        $this->assertEquals("codeEditionFact", $obj->getCodeEditionFact());
    }

    /**
     * Tests the setCodeExc() method.
     *
     * @return void
     */
    public function testSetCodeExc() {

        $obj = new Clients();

        $obj->setCodeExc("codeExc");
        $this->assertEquals("codeExc", $obj->getCodeExc());
    }

    /**
     * Tests the setCodeExpert() method.
     *
     * @return void
     */
    public function testSetCodeExpert() {

        $obj = new Clients();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Tests the setCodeFactor() method.
     *
     * @return void
     */
    public function testSetCodeFactor() {

        $obj = new Clients();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests the setCodeFamille() method.
     *
     * @return void
     */
    public function testSetCodeFamille() {

        $obj = new Clients();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests the setCodeGeo() method.
     *
     * @return void
     */
    public function testSetCodeGeo() {

        $obj = new Clients();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Tests the setCodeImputationAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeImputationAnalytique() {

        $obj = new Clients();

        $obj->setCodeImputationAnalytique("codeImputationAnalytique");
        $this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
    }

    /**
     * Tests the setCodeLangueDesignationArticle() method.
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle() {

        $obj = new Clients();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests the setCodeMissionFraisFixe() method.
     *
     * @return void
     */
    public function testSetCodeMissionFraisFixe() {

        $obj = new Clients();

        $obj->setCodeMissionFraisFixe("codeMissionFraisFixe");
        $this->assertEquals("codeMissionFraisFixe", $obj->getCodeMissionFraisFixe());
    }

    /**
     * Tests the setCodeOrigine() method.
     *
     * @return void
     */
    public function testSetCodeOrigine() {

        $obj = new Clients();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Tests the setCodePaysCorres() method.
     *
     * @return void
     */
    public function testSetCodePaysCorres() {

        $obj = new Clients();

        $obj->setCodePaysCorres("codePaysCorres");
        $this->assertEquals("codePaysCorres", $obj->getCodePaysCorres());
    }

    /**
     * Tests the setCodePaysFact() method.
     *
     * @return void
     */
    public function testSetCodePaysFact() {

        $obj = new Clients();

        $obj->setCodePaysFact("codePaysFact");
        $this->assertEquals("codePaysFact", $obj->getCodePaysFact());
    }

    /**
     * Tests the setCodePortefeuille() method.
     *
     * @return void
     */
    public function testSetCodePortefeuille() {

        $obj = new Clients();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Tests the setCodeRecetteImpots() method.
     *
     * @return void
     */
    public function testSetCodeRecetteImpots() {

        $obj = new Clients();

        $obj->setCodeRecetteImpots("codeRecetteImpots");
        $this->assertEquals("codeRecetteImpots", $obj->getCodeRecetteImpots());
    }

    /**
     * Tests the setCodeReglement() method.
     *
     * @return void
     */
    public function testSetCodeReglement() {

        $obj = new Clients();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new Clients();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeRepresentant() method.
     *
     * @return void
     */
    public function testSetCodeRepresentant() {

        $obj = new Clients();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests the setCodeRevision() method.
     *
     * @return void
     */
    public function testSetCodeRevision() {

        $obj = new Clients();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Tests the setCodeSousFamille() method.
     *
     * @return void
     */
    public function testSetCodeSousFamille() {

        $obj = new Clients();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Tests the setCodeSousTournee() method.
     *
     * @return void
     */
    public function testSetCodeSousTournee() {

        $obj = new Clients();

        $obj->setCodeSousTournee("codeSousTournee");
        $this->assertEquals("codeSousTournee", $obj->getCodeSousTournee());
    }

    /**
     * Tests the setCodeTVA() method.
     *
     * @return void
     */
    public function testSetCodeTVA() {

        $obj = new Clients();

        $obj->setCodeTVA("codeTVA");
        $this->assertEquals("codeTVA", $obj->getCodeTVA());
    }

    /**
     * Tests the setCodeTarif() method.
     *
     * @return void
     */
    public function testSetCodeTarif() {

        $obj = new Clients();

        $obj->setCodeTarif("codeTarif");
        $this->assertEquals("codeTarif", $obj->getCodeTarif());
    }

    /**
     * Tests the setCodeTournee() method.
     *
     * @return void
     */
    public function testSetCodeTournee() {

        $obj = new Clients();

        $obj->setCodeTournee("codeTournee");
        $this->assertEquals("codeTournee", $obj->getCodeTournee());
    }

    /**
     * Tests the setCodeTransporteur() method.
     *
     * @return void
     */
    public function testSetCodeTransporteur() {

        $obj = new Clients();

        $obj->setCodeTransporteur("codeTransporteur");
        $this->assertEquals("codeTransporteur", $obj->getCodeTransporteur());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta() {

        $obj = new Clients();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setCoefSurPV() method.
     *
     * @return void
     */
    public function testSetCoefSurPV() {

        $obj = new Clients();

        $obj->setCoefSurPV(10.092018);
        $this->assertEquals(10.092018, $obj->getCoefSurPV());
    }

    /**
     * Tests the setCoeffPVClient() method.
     *
     * @return void
     */
    public function testSetCoeffPVClient() {

        $obj = new Clients();

        $obj->setCoeffPVClient(10.092018);
        $this->assertEquals(10.092018, $obj->getCoeffPVClient());
    }

    /**
     * Tests the setCollectif() method.
     *
     * @return void
     */
    public function testSetCollectif() {

        $obj = new Clients();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests the setConjoint() method.
     *
     * @return void
     */
    public function testSetConjoint() {

        $obj = new Clients();

        $obj->setConjoint("conjoint");
        $this->assertEquals("conjoint", $obj->getConjoint());
    }

    /**
     * Tests the setContactRecetteImpots() method.
     *
     * @return void
     */
    public function testSetContactRecetteImpots() {

        $obj = new Clients();

        $obj->setContactRecetteImpots("contactRecetteImpots");
        $this->assertEquals("contactRecetteImpots", $obj->getContactRecetteImpots());
    }

    /**
     * Tests the setDSCodeCollab() method.
     *
     * @return void
     */
    public function testSetDSCodeCollab() {

        $obj = new Clients();

        $obj->setDSCodeCollab("dSCodeCollab");
        $this->assertEquals("dSCodeCollab", $obj->getDSCodeCollab());
    }

    /**
     * Tests the setDSDateRetour() method.
     *
     * @return void
     */
    public function testSetDSDateRetour() {

        $obj = new Clients();

        $obj->setDSDateRetour(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDSDateRetour());
    }

    /**
     * Tests the setDSDateSortie() method.
     *
     * @return void
     */
    public function testSetDSDateSortie() {

        $obj = new Clients();

        $obj->setDSDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDSDateSortie());
    }

    /**
     * Tests the setDateAttribEncours() method.
     *
     * @return void
     */
    public function testSetDateAttribEncours() {

        $obj = new Clients();

        $obj->setDateAttribEncours(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateAttribEncours());
    }

    /**
     * Tests the setDateCreation() method.
     *
     * @return void
     */
    public function testSetDateCreation() {

        $obj = new Clients();

        $obj->setDateCreation(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateCreation());
    }

    /**
     * Tests the setDateDebActivite() method.
     *
     * @return void
     */
    public function testSetDateDebActivite() {

        $obj = new Clients();

        $obj->setDateDebActivite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebActivite());
    }

    /**
     * Tests the setDateDebProf() method.
     *
     * @return void
     */
    public function testSetDateDebProf() {

        $obj = new Clients();

        $obj->setDateDebProf(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDebProf());
    }

    /**
     * Tests the setDateDerniereVente() method.
     *
     * @return void
     */
    public function testSetDateDerniereVente() {

        $obj = new Clients();

        $obj->setDateDerniereVente(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateDerniereVente());
    }

    /**
     * Tests the setDateEntree() method.
     *
     * @return void
     */
    public function testSetDateEntree() {

        $obj = new Clients();

        $obj->setDateEntree(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateEntree());
    }

    /**
     * Tests the setDateFinActivite() method.
     *
     * @return void
     */
    public function testSetDateFinActivite() {

        $obj = new Clients();

        $obj->setDateFinActivite(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateFinActivite());
    }

    /**
     * Tests the setDateModification() method.
     *
     * @return void
     */
    public function testSetDateModification() {

        $obj = new Clients();

        $obj->setDateModification(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateModification());
    }

    /**
     * Tests the setDateReprise() method.
     *
     * @return void
     */
    public function testSetDateReprise() {

        $obj = new Clients();

        $obj->setDateReprise(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateReprise());
    }

    /**
     * Tests the setDateSortie() method.
     *
     * @return void
     */
    public function testSetDateSortie() {

        $obj = new Clients();

        $obj->setDateSortie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getDateSortie());
    }

    /**
     * Tests the setDelaiTarif() method.
     *
     * @return void
     */
    public function testSetDelaiTarif() {

        $obj = new Clients();

        $obj->setDelaiTarif(10);
        $this->assertEquals(10, $obj->getDelaiTarif());
    }

    /**
     * Tests the setDomiciliationBancaire1() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1() {

        $obj = new Clients();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests the setDomiciliationBancaire2() method.
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2() {

        $obj = new Clients();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests the setDossierComptable() method.
     *
     * @return void
     */
    public function testSetDossierComptable() {

        $obj = new Clients();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Tests the setDossierPaie() method.
     *
     * @return void
     */
    public function testSetDossierPaie() {

        $obj = new Clients();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Tests the setDuClient() method.
     *
     * @return void
     */
    public function testSetDuClient() {

        $obj = new Clients();

        $obj->setDuClient("duClient");
        $this->assertEquals("duClient", $obj->getDuClient());
    }

    /**
     * Tests the setDureeEcheances() method.
     *
     * @return void
     */
    public function testSetDureeEcheances() {

        $obj = new Clients();

        $obj->setDureeEcheances("dureeEcheances");
        $this->assertEquals("dureeEcheances", $obj->getDureeEcheances());
    }

    /**
     * Tests the setEffectifETP() method.
     *
     * @return void
     */
    public function testSetEffectifETP() {

        $obj = new Clients();

        $obj->setEffectifETP(10);
        $this->assertEquals(10, $obj->getEffectifETP());
    }

    /**
     * Tests the setElectionCE() method.
     *
     * @return void
     */
    public function testSetElectionCE() {

        $obj = new Clients();

        $obj->setElectionCE(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getElectionCE());
    }

    /**
     * Tests the setElectionDeleguePersonnel() method.
     *
     * @return void
     */
    public function testSetElectionDeleguePersonnel() {

        $obj = new Clients();

        $obj->setElectionDeleguePersonnel(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getElectionDeleguePersonnel());
    }

    /**
     * Tests the setEquipInfo() method.
     *
     * @return void
     */
    public function testSetEquipInfo() {

        $obj = new Clients();

        $obj->setEquipInfo("equipInfo");
        $this->assertEquals("equipInfo", $obj->getEquipInfo());
    }

    /**
     * Tests the setEtat1() method.
     *
     * @return void
     */
    public function testSetEtat1() {

        $obj = new Clients();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }

    /**
     * Tests the setEtat2() method.
     *
     * @return void
     */
    public function testSetEtat2() {

        $obj = new Clients();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }

    /**
     * Tests the setEtat3() method.
     *
     * @return void
     */
    public function testSetEtat3() {

        $obj = new Clients();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }

    /**
     * Tests the setEtat4() method.
     *
     * @return void
     */
    public function testSetEtat4() {

        $obj = new Clients();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }

    /**
     * Tests the setEtat5() method.
     *
     * @return void
     */
    public function testSetEtat5() {

        $obj = new Clients();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }

    /**
     * Tests the setEtiquettes() method.
     *
     * @return void
     */
    public function testSetEtiquettes() {

        $obj = new Clients();

        $obj->setEtiquettes(true);
        $this->assertEquals(true, $obj->getEtiquettes());
    }

    /**
     * Tests the setFact_BTQ() method.
     *
     * @return void
     */
    public function testSetFact_BTQ() {

        $obj = new Clients();

        $obj->setFact_BTQ("fact_BTQ");
        $this->assertEquals("fact_BTQ", $obj->getFact_BTQ());
    }

    /**
     * Tests the setFact_BureauDistributeur() method.
     *
     * @return void
     */
    public function testSetFact_BureauDistributeur() {

        $obj = new Clients();

        $obj->setFact_BureauDistributeur("fact_BureauDistributeur");
        $this->assertEquals("fact_BureauDistributeur", $obj->getFact_BureauDistributeur());
    }

    /**
     * Tests the setFact_CodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetFact_CodeOfficielCommune() {

        $obj = new Clients();

        $obj->setFact_CodeOfficielCommune("fact_CodeOfficielCommune");
        $this->assertEquals("fact_CodeOfficielCommune", $obj->getFact_CodeOfficielCommune());
    }

    /**
     * Tests the setFact_CodePostal() method.
     *
     * @return void
     */
    public function testSetFact_CodePostal() {

        $obj = new Clients();

        $obj->setFact_CodePostal("fact_CodePostal");
        $this->assertEquals("fact_CodePostal", $obj->getFact_CodePostal());
    }

    /**
     * Tests the setFact_Complement() method.
     *
     * @return void
     */
    public function testSetFact_Complement() {

        $obj = new Clients();

        $obj->setFact_Complement("fact_Complement");
        $this->assertEquals("fact_Complement", $obj->getFact_Complement());
    }

    /**
     * Tests the setFact_NomRS() method.
     *
     * @return void
     */
    public function testSetFact_NomRS() {

        $obj = new Clients();

        $obj->setFact_NomRS("fact_NomRS");
        $this->assertEquals("fact_NomRS", $obj->getFact_NomRS());
    }

    /**
     * Tests the setFact_NomVille() method.
     *
     * @return void
     */
    public function testSetFact_NomVille() {

        $obj = new Clients();

        $obj->setFact_NomVille("fact_NomVille");
        $this->assertEquals("fact_NomVille", $obj->getFact_NomVille());
    }

    /**
     * Tests the setFact_NomVoie() method.
     *
     * @return void
     */
    public function testSetFact_NomVoie() {

        $obj = new Clients();

        $obj->setFact_NomVoie("fact_NomVoie");
        $this->assertEquals("fact_NomVoie", $obj->getFact_NomVoie());
    }

    /**
     * Tests the setFact_NumVoie() method.
     *
     * @return void
     */
    public function testSetFact_NumVoie() {

        $obj = new Clients();

        $obj->setFact_NumVoie("fact_NumVoie");
        $this->assertEquals("fact_NumVoie", $obj->getFact_NumVoie());
    }

    /**
     * Tests the setFacturationCompta() method.
     *
     * @return void
     */
    public function testSetFacturationCompta() {

        $obj = new Clients();

        $obj->setFacturationCompta(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFacturationCompta());
    }

    /**
     * Tests the setFacturationComptaPrec() method.
     *
     * @return void
     */
    public function testSetFacturationComptaPrec() {

        $obj = new Clients();

        $obj->setFacturationComptaPrec(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFacturationComptaPrec());
    }

    /**
     * Tests the setFacturationCotisation() method.
     *
     * @return void
     */
    public function testSetFacturationCotisation() {

        $obj = new Clients();

        $obj->setFacturationCotisation(true);
        $this->assertEquals(true, $obj->getFacturationCotisation());
    }

    /**
     * Tests the setFacturationDroitFixe() method.
     *
     * @return void
     */
    public function testSetFacturationDroitFixe() {

        $obj = new Clients();

        $obj->setFacturationDroitFixe(true);
        $this->assertEquals(true, $obj->getFacturationDroitFixe());
    }

    /**
     * Tests the setFacturationFraisFixe() method.
     *
     * @return void
     */
    public function testSetFacturationFraisFixe() {

        $obj = new Clients();

        $obj->setFacturationFraisFixe(true);
        $this->assertEquals(true, $obj->getFacturationFraisFixe());
    }

    /**
     * Tests the setFacturationPaie() method.
     *
     * @return void
     */
    public function testSetFacturationPaie() {

        $obj = new Clients();

        $obj->setFacturationPaie(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFacturationPaie());
    }

    /**
     * Tests the setFacturationPaiePrec() method.
     *
     * @return void
     */
    public function testSetFacturationPaiePrec() {

        $obj = new Clients();

        $obj->setFacturationPaiePrec(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getFacturationPaiePrec());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros() {

        $obj = new Clients();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setFactureIsolee() method.
     *
     * @return void
     */
    public function testSetFactureIsolee() {

        $obj = new Clients();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests the setFactureTempsPasses() method.
     *
     * @return void
     */
    public function testSetFactureTempsPasses() {

        $obj = new Clients();

        $obj->setFactureTempsPasses(true);
        $this->assertEquals(true, $obj->getFactureTempsPasses());
    }

    /**
     * Tests the setFacturesMail() method.
     *
     * @return void
     */
    public function testSetFacturesMail() {

        $obj = new Clients();

        $obj->setFacturesMail(true);
        $this->assertEquals(true, $obj->getFacturesMail());
    }

    /**
     * Tests the setFortementImpose() method.
     *
     * @return void
     */
    public function testSetFortementImpose() {

        $obj = new Clients();

        $obj->setFortementImpose("fortementImpose");
        $this->assertEquals("fortementImpose", $obj->getFortementImpose());
    }

    /**
     * Tests the setFraisFixes1() method.
     *
     * @return void
     */
    public function testSetFraisFixes1() {

        $obj = new Clients();

        $obj->setFraisFixes1(true);
        $this->assertEquals(true, $obj->getFraisFixes1());
    }

    /**
     * Tests the setFraisFixes2() method.
     *
     * @return void
     */
    public function testSetFraisFixes2() {

        $obj = new Clients();

        $obj->setFraisFixes2(true);
        $this->assertEquals(true, $obj->getFraisFixes2());
    }

    /**
     * Tests the setFrancoPort1() method.
     *
     * @return void
     */
    public function testSetFrancoPort1() {

        $obj = new Clients();

        $obj->setFrancoPort1(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort1());
    }

    /**
     * Tests the setFrancoPort2() method.
     *
     * @return void
     */
    public function testSetFrancoPort2() {

        $obj = new Clients();

        $obj->setFrancoPort2(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort2());
    }

    /**
     * Tests the setHeureAppel() method.
     *
     * @return void
     */
    public function testSetHeureAppel() {

        $obj = new Clients();

        $obj->setHeureAppel("heureAppel");
        $this->assertEquals("heureAppel", $obj->getHeureAppel());
    }

    /**
     * Tests the setIdentifiantTVA() method.
     *
     * @return void
     */
    public function testSetIdentifiantTVA() {

        $obj = new Clients();

        $obj->setIdentifiantTVA("identifiantTVA");
        $this->assertEquals("identifiantTVA", $obj->getIdentifiantTVA());
    }

    /**
     * Tests the setIndiceFacturesMail() method.
     *
     * @return void
     */
    public function testSetIndiceFacturesMail() {

        $obj = new Clients();

        $obj->setIndiceFacturesMail(10);
        $this->assertEquals(10, $obj->getIndiceFacturesMail());
    }

    /**
     * Tests the setInsp() method.
     *
     * @return void
     */
    public function testSetInsp() {

        $obj = new Clients();

        $obj->setInsp("insp");
        $this->assertEquals("insp", $obj->getInsp());
    }

    /**
     * Tests the setInteresseGestion() method.
     *
     * @return void
     */
    public function testSetInteresseGestion() {

        $obj = new Clients();

        $obj->setInteresseGestion("interesseGestion");
        $this->assertEquals("interesseGestion", $obj->getInteresseGestion());
    }

    /**
     * Tests the setMensualisationActif() method.
     *
     * @return void
     */
    public function testSetMensualisationActif() {

        $obj = new Clients();

        $obj->setMensualisationActif(true);
        $this->assertEquals(true, $obj->getMensualisationActif());
    }

    /**
     * Tests the setMensualisationAu() method.
     *
     * @return void
     */
    public function testSetMensualisationAu() {

        $obj = new Clients();

        $obj->setMensualisationAu(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getMensualisationAu());
    }

    /**
     * Tests the setMensualisationDu() method.
     *
     * @return void
     */
    public function testSetMensualisationDu() {

        $obj = new Clients();

        $obj->setMensualisationDu(new DateTime("2018-09-10"));
        $this->assertEquals(new DateTime("2018-09-10"), $obj->getMensualisationDu());
    }

    /**
     * Tests the setMensualisationFrequence() method.
     *
     * @return void
     */
    public function testSetMensualisationFrequence() {

        $obj = new Clients();

        $obj->setMensualisationFrequence("mensualisationFrequence");
        $this->assertEquals("mensualisationFrequence", $obj->getMensualisationFrequence());
    }

    /**
     * Tests the setMensualisationMontant() method.
     *
     * @return void
     */
    public function testSetMensualisationMontant() {

        $obj = new Clients();

        $obj->setMensualisationMontant(10.092018);
        $this->assertEquals(10.092018, $obj->getMensualisationMontant());
    }

    /**
     * Tests the setMissionSurDossier() method.
     *
     * @return void
     */
    public function testSetMissionSurDossier() {

        $obj = new Clients();

        $obj->setMissionSurDossier(10);
        $this->assertEquals(10, $obj->getMissionSurDossier());
    }

    /**
     * Tests the setModeleBL() method.
     *
     * @return void
     */
    public function testSetModeleBL() {

        $obj = new Clients();

        $obj->setModeleBL("modeleBL");
        $this->assertEquals("modeleBL", $obj->getModeleBL());
    }

    /**
     * Tests the setModeleCommande() method.
     *
     * @return void
     */
    public function testSetModeleCommande() {

        $obj = new Clients();

        $obj->setModeleCommande("modeleCommande");
        $this->assertEquals("modeleCommande", $obj->getModeleCommande());
    }

    /**
     * Tests the setModeleFacture() method.
     *
     * @return void
     */
    public function testSetModeleFacture() {

        $obj = new Clients();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests the setModeleProformas() method.
     *
     * @return void
     */
    public function testSetModeleProformas() {

        $obj = new Clients();

        $obj->setModeleProformas("modeleProformas");
        $this->assertEquals("modeleProformas", $obj->getModeleProformas());
    }

    /**
     * Tests the setModeleReleve() method.
     *
     * @return void
     */
    public function testSetModeleReleve() {

        $obj = new Clients();

        $obj->setModeleReleve("modeleReleve");
        $this->assertEquals("modeleReleve", $obj->getModeleReleve());
    }

    /**
     * Tests the setMoisCloture() method.
     *
     * @return void
     */
    public function testSetMoisCloture() {

        $obj = new Clients();

        $obj->setMoisCloture("moisCloture");
        $this->assertEquals("moisCloture", $obj->getMoisCloture());
    }

    /**
     * Tests the setMoisCotisation() method.
     *
     * @return void
     */
    public function testSetMoisCotisation() {

        $obj = new Clients();

        $obj->setMoisCotisation(10);
        $this->assertEquals(10, $obj->getMoisCotisation());
    }

    /**
     * Tests the setMoisDroitFixe() method.
     *
     * @return void
     */
    public function testSetMoisDroitFixe() {

        $obj = new Clients();

        $obj->setMoisDroitFixe(10);
        $this->assertEquals(10, $obj->getMoisDroitFixe());
    }

    /**
     * Tests the setMtCmdNonFact() method.
     *
     * @return void
     */
    public function testSetMtCmdNonFact() {

        $obj = new Clients();

        $obj->setMtCmdNonFact(10.092018);
        $this->assertEquals(10.092018, $obj->getMtCmdNonFact());
    }

    /**
     * Tests the setMtEncours() method.
     *
     * @return void
     */
    public function testSetMtEncours() {

        $obj = new Clients();

        $obj->setMtEncours(10.092018);
        $this->assertEquals(10.092018, $obj->getMtEncours());
    }

    /**
     * Tests the setMtEncoursAutorise() method.
     *
     * @return void
     */
    public function testSetMtEncoursAutorise() {

        $obj = new Clients();

        $obj->setMtEncoursAutorise(10.092018);
        $this->assertEquals(10.092018, $obj->getMtEncoursAutorise());
    }

    /**
     * Tests the setNbAppelsEnCours() method.
     *
     * @return void
     */
    public function testSetNbAppelsEnCours() {

        $obj = new Clients();

        $obj->setNbAppelsEnCours(10);
        $this->assertEquals(10, $obj->getNbAppelsEnCours());
    }

    /**
     * Tests the setNbBL() method.
     *
     * @return void
     */
    public function testSetNbBL() {

        $obj = new Clients();

        $obj->setNbBL("nbBL");
        $this->assertEquals("nbBL", $obj->getNbBL());
    }

    /**
     * Tests the setNbBLNonChiffres() method.
     *
     * @return void
     */
    public function testSetNbBLNonChiffres() {

        $obj = new Clients();

        $obj->setNbBLNonChiffres(10);
        $this->assertEquals(10, $obj->getNbBLNonChiffres());
    }

    /**
     * Tests the setNbCommande() method.
     *
     * @return void
     */
    public function testSetNbCommande() {

        $obj = new Clients();

        $obj->setNbCommande("nbCommande");
        $this->assertEquals("nbCommande", $obj->getNbCommande());
    }

    /**
     * Tests the setNbDevis() method.
     *
     * @return void
     */
    public function testSetNbDevis() {

        $obj = new Clients();

        $obj->setNbDevis("nbDevis");
        $this->assertEquals("nbDevis", $obj->getNbDevis());
    }

    /**
     * Tests the setNbFacture() method.
     *
     * @return void
     */
    public function testSetNbFacture() {

        $obj = new Clients();

        $obj->setNbFacture("nbFacture");
        $this->assertEquals("nbFacture", $obj->getNbFacture());
    }

    /**
     * Tests the setNbJourInterval() method.
     *
     * @return void
     */
    public function testSetNbJourInterval() {

        $obj = new Clients();

        $obj->setNbJourInterval(10);
        $this->assertEquals(10, $obj->getNbJourInterval());
    }

    /**
     * Tests the setNbMaxBL() method.
     *
     * @return void
     */
    public function testSetNbMaxBL() {

        $obj = new Clients();

        $obj->setNbMaxBL("nbMaxBL");
        $this->assertEquals("nbMaxBL", $obj->getNbMaxBL());
    }

    /**
     * Tests the setNbReleve() method.
     *
     * @return void
     */
    public function testSetNbReleve() {

        $obj = new Clients();

        $obj->setNbReleve("nbReleve");
        $this->assertEquals("nbReleve", $obj->getNbReleve());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new Clients();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setNombreMoisExercice() method.
     *
     * @return void
     */
    public function testSetNombreMoisExercice() {

        $obj = new Clients();

        $obj->setNombreMoisExercice("nombreMoisExercice");
        $this->assertEquals("nombreMoisExercice", $obj->getNombreMoisExercice());
    }

    /**
     * Tests the setNotoriete() method.
     *
     * @return void
     */
    public function testSetNotoriete() {

        $obj = new Clients();

        $obj->setNotoriete("notoriete");
        $this->assertEquals("notoriete", $obj->getNotoriete());
    }

    /**
     * Tests the setNumWebAdherent() method.
     *
     * @return void
     */
    public function testSetNumWebAdherent() {

        $obj = new Clients();

        $obj->setNumWebAdherent("numWebAdherent");
        $this->assertEquals("numWebAdherent", $obj->getNumWebAdherent());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new Clients();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setObservation1() method.
     *
     * @return void
     */
    public function testSetObservation1() {

        $obj = new Clients();

        $obj->setObservation1("observation1");
        $this->assertEquals("observation1", $obj->getObservation1());
    }

    /**
     * Tests the setObservation2() method.
     *
     * @return void
     */
    public function testSetObservation2() {

        $obj = new Clients();

        $obj->setObservation2("observation2");
        $this->assertEquals("observation2", $obj->getObservation2());
    }

    /**
     * Tests the setObservation3() method.
     *
     * @return void
     */
    public function testSetObservation3() {

        $obj = new Clients();

        $obj->setObservation3("observation3");
        $this->assertEquals("observation3", $obj->getObservation3());
    }

    /**
     * Tests the setOccasionnel() method.
     *
     * @return void
     */
    public function testSetOccasionnel() {

        $obj = new Clients();

        $obj->setOccasionnel(true);
        $this->assertEquals(true, $obj->getOccasionnel());
    }

    /**
     * Tests the setOrganisationAdm() method.
     *
     * @return void
     */
    public function testSetOrganisationAdm() {

        $obj = new Clients();

        $obj->setOrganisationAdm("organisationAdm");
        $this->assertEquals("organisationAdm", $obj->getOrganisationAdm());
    }

    /**
     * Tests the setPaiementDepartLe() method.
     *
     * @return void
     */
    public function testSetPaiementDepartLe() {

        $obj = new Clients();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Tests the setPaiementLe() method.
     *
     * @return void
     */
    public function testSetPaiementLe() {

        $obj = new Clients();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Tests the setPaiementNombreDeJours() method.
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours() {

        $obj = new Clients();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests the setPasProductif() method.
     *
     * @return void
     */
    public function testSetPasProductif() {

        $obj = new Clients();

        $obj->setPasProductif(true);
        $this->assertEquals(true, $obj->getPasProductif());
    }

    /**
     * Tests the setPasTachesOperationnelles() method.
     *
     * @return void
     */
    public function testSetPasTachesOperationnelles() {

        $obj = new Clients();

        $obj->setPasTachesOperationnelles(true);
        $this->assertEquals(true, $obj->getPasTachesOperationnelles());
    }

    /**
     * Tests the setPatrimoine() method.
     *
     * @return void
     */
    public function testSetPatrimoine() {

        $obj = new Clients();

        $obj->setPatrimoine("patrimoine");
        $this->assertEquals("patrimoine", $obj->getPatrimoine());
    }

    /**
     * Tests the setPrelevementsPerso() method.
     *
     * @return void
     */
    public function testSetPrelevementsPerso() {

        $obj = new Clients();

        $obj->setPrelevementsPerso("prelevementsPerso");
        $this->assertEquals("prelevementsPerso", $obj->getPrelevementsPerso());
    }

    /**
     * Tests the setPrescripteur() method.
     *
     * @return void
     */
    public function testSetPrescripteur() {

        $obj = new Clients();

        $obj->setPrescripteur("prescripteur");
        $this->assertEquals("prescripteur", $obj->getPrescripteur());
    }

    /**
     * Tests the setPrevisionnel() method.
     *
     * @return void
     */
    public function testSetPrevisionnel() {

        $obj = new Clients();

        $obj->setPrevisionnel("previsionnel");
        $this->assertEquals("previsionnel", $obj->getPrevisionnel());
    }

    /**
     * Tests the setPrioritaire() method.
     *
     * @return void
     */
    public function testSetPrioritaire() {

        $obj = new Clients();

        $obj->setPrioritaire(true);
        $this->assertEquals(true, $obj->getPrioritaire());
    }

    /**
     * Tests the setProfilDirAnxieux() method.
     *
     * @return void
     */
    public function testSetProfilDirAnxieux() {

        $obj = new Clients();

        $obj->setProfilDirAnxieux(true);
        $this->assertEquals(true, $obj->getProfilDirAnxieux());
    }

    /**
     * Tests the setProfilDirCommercial() method.
     *
     * @return void
     */
    public function testSetProfilDirCommercial() {

        $obj = new Clients();

        $obj->setProfilDirCommercial(true);
        $this->assertEquals(true, $obj->getProfilDirCommercial());
    }

    /**
     * Tests the setProfilDirGestionnaire() method.
     *
     * @return void
     */
    public function testSetProfilDirGestionnaire() {

        $obj = new Clients();

        $obj->setProfilDirGestionnaire(true);
        $this->assertEquals(true, $obj->getProfilDirGestionnaire());
    }

    /**
     * Tests the setProfilDirSomnolent() method.
     *
     * @return void
     */
    public function testSetProfilDirSomnolent() {

        $obj = new Clients();

        $obj->setProfilDirSomnolent(true);
        $this->assertEquals(true, $obj->getProfilDirSomnolent());
    }

    /**
     * Tests the setProfilDirTechnicien() method.
     *
     * @return void
     */
    public function testSetProfilDirTechnicien() {

        $obj = new Clients();

        $obj->setProfilDirTechnicien(true);
        $this->assertEquals(true, $obj->getProfilDirTechnicien());
    }

    /**
     * Tests the setProfilEnt() method.
     *
     * @return void
     */
    public function testSetProfilEnt() {

        $obj = new Clients();

        $obj->setProfilEnt("profilEnt");
        $this->assertEquals("profilEnt", $obj->getProfilEnt());
    }

    /**
     * Tests the setProspect() method.
     *
     * @return void
     */
    public function testSetProspect() {

        $obj = new Clients();

        $obj->setProspect(true);
        $this->assertEquals(true, $obj->getProspect());
    }

    /**
     * Tests the setQualitePaiement() method.
     *
     * @return void
     */
    public function testSetQualitePaiement() {

        $obj = new Clients();

        $obj->setQualitePaiement("qualitePaiement");
        $this->assertEquals("qualitePaiement", $obj->getQualitePaiement());
    }

    /**
     * Tests the setRIB() method.
     *
     * @return void
     */
    public function testSetRIB() {

        $obj = new Clients();

        $obj->setRIB("rIB");
        $this->assertEquals("rIB", $obj->getRIB());
    }

    /**
     * Tests the setRaisonFinActivite() method.
     *
     * @return void
     */
    public function testSetRaisonFinActivite() {

        $obj = new Clients();

        $obj->setRaisonFinActivite("raisonFinActivite");
        $this->assertEquals("raisonFinActivite", $obj->getRaisonFinActivite());
    }

    /**
     * Tests the setRaisonMvPaiement() method.
     *
     * @return void
     */
    public function testSetRaisonMvPaiement() {

        $obj = new Clients();

        $obj->setRaisonMvPaiement("raisonMvPaiement");
        $this->assertEquals("raisonMvPaiement", $obj->getRaisonMvPaiement());
    }

    /**
     * Tests the setRegime() method.
     *
     * @return void
     */
    public function testSetRegime() {

        $obj = new Clients();

        $obj->setRegime("regime");
        $this->assertEquals("regime", $obj->getRegime());
    }

    /**
     * Tests the setRegroupementFact() method.
     *
     * @return void
     */
    public function testSetRegroupementFact() {

        $obj = new Clients();

        $obj->setRegroupementFact("regroupementFact");
        $this->assertEquals("regroupementFact", $obj->getRegroupementFact());
    }

    /**
     * Tests the setRelationCabinet() method.
     *
     * @return void
     */
    public function testSetRelationCabinet() {

        $obj = new Clients();

        $obj->setRelationCabinet("relationCabinet");
        $this->assertEquals("relationCabinet", $obj->getRelationCabinet());
    }

    /**
     * Tests the setReleveFacture() method.
     *
     * @return void
     */
    public function testSetReleveFacture() {

        $obj = new Clients();

        $obj->setReleveFacture(true);
        $this->assertEquals(true, $obj->getReleveFacture());
    }

    /**
     * Tests the setRemiseLigne1() method.
     *
     * @return void
     */
    public function testSetRemiseLigne1() {

        $obj = new Clients();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests the setRemiseLigne2() method.
     *
     * @return void
     */
    public function testSetRemiseLigne2() {

        $obj = new Clients();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests the setRemiseLigne3() method.
     *
     * @return void
     */
    public function testSetRemiseLigne3() {

        $obj = new Clients();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests the setRemisePied() method.
     *
     * @return void
     */
    public function testSetRemisePied() {

        $obj = new Clients();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests the setRemisePied2() method.
     *
     * @return void
     */
    public function testSetRemisePied2() {

        $obj = new Clients();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests the setRemisePied3() method.
     *
     * @return void
     */
    public function testSetRemisePied3() {

        $obj = new Clients();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests the setResultat() method.
     *
     * @return void
     */
    public function testSetResultat() {

        $obj = new Clients();

        $obj->setResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getResultat());
    }

    /**
     * Tests the setSanteFinanciere() method.
     *
     * @return void
     */
    public function testSetSanteFinanciere() {

        $obj = new Clients();

        $obj->setSanteFinanciere("santeFinanciere");
        $this->assertEquals("santeFinanciere", $obj->getSanteFinanciere());
    }

    /**
     * Tests the setServiceCpta() method.
     *
     * @return void
     */
    public function testSetServiceCpta() {

        $obj = new Clients();

        $obj->setServiceCpta(true);
        $this->assertEquals(true, $obj->getServiceCpta());
    }

    /**
     * Tests the setSiegeGroupe() method.
     *
     * @return void
     */
    public function testSetSiegeGroupe() {

        $obj = new Clients();

        $obj->setSiegeGroupe(true);
        $this->assertEquals(true, $obj->getSiegeGroupe());
    }

    /**
     * Tests the setSocial() method.
     *
     * @return void
     */
    public function testSetSocial() {

        $obj = new Clients();

        $obj->setSocial(true);
        $this->assertEquals(true, $obj->getSocial());
    }

    /**
     * Tests the setSocial_BTQ() method.
     *
     * @return void
     */
    public function testSetSocial_BTQ() {

        $obj = new Clients();

        $obj->setSocial_BTQ("social_BTQ");
        $this->assertEquals("social_BTQ", $obj->getSocial_BTQ());
    }

    /**
     * Tests the setSocial_BureauDistributeur() method.
     *
     * @return void
     */
    public function testSetSocial_BureauDistributeur() {

        $obj = new Clients();

        $obj->setSocial_BureauDistributeur("social_BureauDistributeur");
        $this->assertEquals("social_BureauDistributeur", $obj->getSocial_BureauDistributeur());
    }

    /**
     * Tests the setSocial_CodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetSocial_CodeOfficielCommune() {

        $obj = new Clients();

        $obj->setSocial_CodeOfficielCommune("social_CodeOfficielCommune");
        $this->assertEquals("social_CodeOfficielCommune", $obj->getSocial_CodeOfficielCommune());
    }

    /**
     * Tests the setSocial_CodePostal() method.
     *
     * @return void
     */
    public function testSetSocial_CodePostal() {

        $obj = new Clients();

        $obj->setSocial_CodePostal("social_CodePostal");
        $this->assertEquals("social_CodePostal", $obj->getSocial_CodePostal());
    }

    /**
     * Tests the setSocial_Complement() method.
     *
     * @return void
     */
    public function testSetSocial_Complement() {

        $obj = new Clients();

        $obj->setSocial_Complement("social_Complement");
        $this->assertEquals("social_Complement", $obj->getSocial_Complement());
    }

    /**
     * Tests the setSocial_NomRS() method.
     *
     * @return void
     */
    public function testSetSocial_NomRS() {

        $obj = new Clients();

        $obj->setSocial_NomRS("social_NomRS");
        $this->assertEquals("social_NomRS", $obj->getSocial_NomRS());
    }

    /**
     * Tests the setSocial_NomVille() method.
     *
     * @return void
     */
    public function testSetSocial_NomVille() {

        $obj = new Clients();

        $obj->setSocial_NomVille("social_NomVille");
        $this->assertEquals("social_NomVille", $obj->getSocial_NomVille());
    }

    /**
     * Tests the setSocial_NomVoie() method.
     *
     * @return void
     */
    public function testSetSocial_NomVoie() {

        $obj = new Clients();

        $obj->setSocial_NomVoie("social_NomVoie");
        $this->assertEquals("social_NomVoie", $obj->getSocial_NomVoie());
    }

    /**
     * Tests the setSocial_NumVoie() method.
     *
     * @return void
     */
    public function testSetSocial_NumVoie() {

        $obj = new Clients();

        $obj->setSocial_NumVoie("social_NumVoie");
        $this->assertEquals("social_NumVoie", $obj->getSocial_NumVoie());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new Clients();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setSoumisPort1() method.
     *
     * @return void
     */
    public function testSetSoumisPort1() {

        $obj = new Clients();

        $obj->setSoumisPort1("soumisPort1");
        $this->assertEquals("soumisPort1", $obj->getSoumisPort1());
    }

    /**
     * Tests the setSoumisPort2() method.
     *
     * @return void
     */
    public function testSetSoumisPort2() {

        $obj = new Clients();

        $obj->setSoumisPort2("soumisPort2");
        $this->assertEquals("soumisPort2", $obj->getSoumisPort2());
    }

    /**
     * Tests the setSoumisTVA() method.
     *
     * @return void
     */
    public function testSetSoumisTVA() {

        $obj = new Clients();

        $obj->setSoumisTVA(true);
        $this->assertEquals(true, $obj->getSoumisTVA());
    }

    /**
     * Tests the setSoumisTaxe1() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe1() {

        $obj = new Clients();

        $obj->setSoumisTaxe1(true);
        $this->assertEquals(true, $obj->getSoumisTaxe1());
    }

    /**
     * Tests the setSoumisTaxe2() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe2() {

        $obj = new Clients();

        $obj->setSoumisTaxe2(true);
        $this->assertEquals(true, $obj->getSoumisTaxe2());
    }

    /**
     * Tests the setSoumisTaxe3() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe3() {

        $obj = new Clients();

        $obj->setSoumisTaxe3(true);
        $this->assertEquals(true, $obj->getSoumisTaxe3());
    }

    /**
     * Tests the setSoumisTaxe4() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe4() {

        $obj = new Clients();

        $obj->setSoumisTaxe4(true);
        $this->assertEquals(true, $obj->getSoumisTaxe4());
    }

    /**
     * Tests the setSoumisTaxe5() method.
     *
     * @return void
     */
    public function testSetSoumisTaxe5() {

        $obj = new Clients();

        $obj->setSoumisTaxe5(true);
        $this->assertEquals(true, $obj->getSoumisTaxe5());
    }

    /**
     * Tests the setTVARegime() method.
     *
     * @return void
     */
    public function testSetTVARegime() {

        $obj = new Clients();

        $obj->setTVARegime("tVARegime");
        $this->assertEquals("tVARegime", $obj->getTVARegime());
    }

    /**
     * Tests the setTableauDeBord() method.
     *
     * @return void
     */
    public function testSetTableauDeBord() {

        $obj = new Clients();

        $obj->setTableauDeBord("tableauDeBord");
        $this->assertEquals("tableauDeBord", $obj->getTableauDeBord());
    }

    /**
     * Tests the setToutesActivites() method.
     *
     * @return void
     */
    public function testSetToutesActivites() {

        $obj = new Clients();

        $obj->setToutesActivites("toutesActivites");
        $this->assertEquals("toutesActivites", $obj->getToutesActivites());
    }

    /**
     * Tests the setTransporteur() method.
     *
     * @return void
     */
    public function testSetTransporteur() {

        $obj = new Clients();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests the setTresorerie() method.
     *
     * @return void
     */
    public function testSetTresorerie() {

        $obj = new Clients();

        $obj->setTresorerie("tresorerie");
        $this->assertEquals("tresorerie", $obj->getTresorerie());
    }

    /**
     * Tests the setTxEscompteVente() method.
     *
     * @return void
     */
    public function testSetTxEscompteVente() {

        $obj = new Clients();

        $obj->setTxEscompteVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTxEscompteVente());
    }

    /**
     * Tests the setTypeClient() method.
     *
     * @return void
     */
    public function testSetTypeClient() {

        $obj = new Clients();

        $obj->setTypeClient("typeClient");
        $this->assertEquals("typeClient", $obj->getTypeClient());
    }

    /**
     * Tests the setTypeEditBL() method.
     *
     * @return void
     */
    public function testSetTypeEditBL() {

        $obj = new Clients();

        $obj->setTypeEditBL("typeEditBL");
        $this->assertEquals("typeEditBL", $obj->getTypeEditBL());
    }

    /**
     * Tests the setTypeFacture() method.
     *
     * @return void
     */
    public function testSetTypeFacture() {

        $obj = new Clients();

        $obj->setTypeFacture(10);
        $this->assertEquals(10, $obj->getTypeFacture());
    }

    /**
     * Tests the setTypeGestionETEBAC() method.
     *
     * @return void
     */
    public function testSetTypeGestionETEBAC() {

        $obj = new Clients();

        $obj->setTypeGestionETEBAC("typeGestionETEBAC");
        $this->assertEquals("typeGestionETEBAC", $obj->getTypeGestionETEBAC());
    }

    /**
     * Tests the setUseAdresseFact() method.
     *
     * @return void
     */
    public function testSetUseAdresseFact() {

        $obj = new Clients();

        $obj->setUseAdresseFact(true);
        $this->assertEquals(true, $obj->getUseAdresseFact());
    }

    /**
     * Tests the setUseCorresSociale() method.
     *
     * @return void
     */
    public function testSetUseCorresSociale() {

        $obj = new Clients();

        $obj->setUseCorresSociale(true);
        $this->assertEquals(true, $obj->getUseCorresSociale());
    }

}
