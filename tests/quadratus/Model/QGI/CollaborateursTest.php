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
use Exception;
use WBW\Library\Quadratus\Model\QGI\Collaborateurs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Collaborateurs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class CollaborateursTest extends AbstractTestCase {

    /**
     * Tests setAccesAutoriseBonsTravaux()
     *
     * @return void
     */
    public function testSetAccesAutoriseBonsTravaux(): void {

        $obj = new Collaborateurs();

        $obj->setAccesAutoriseBonsTravaux(true);
        $this->assertEquals(true, $obj->getAccesAutoriseBonsTravaux());
    }

    /**
     * Tests setAccesAutorisePlanFacturation()
     *
     * @return void
     */
    public function testSetAccesAutorisePlanFacturation(): void {

        $obj = new Collaborateurs();

        $obj->setAccesAutorisePlanFacturation(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanFacturation());
    }

    /**
     * Tests setAccesAutorisePlanTache()
     *
     * @return void
     */
    public function testSetAccesAutorisePlanTache(): void {

        $obj = new Collaborateurs();

        $obj->setAccesAutorisePlanTache(true);
        $this->assertEquals(true, $obj->getAccesAutorisePlanTache());
    }

    /**
     * Tests setAccesCurDossOnly()
     *
     * @return void
     */
    public function testSetAccesCurDossOnly(): void {

        $obj = new Collaborateurs();

        $obj->setAccesCurDossOnly(true);
        $this->assertEquals(true, $obj->getAccesCurDossOnly());
    }

    /**
     * Tests setAccesDocsCab()
     *
     * @return void
     */
    public function testSetAccesDocsCab(): void {

        $obj = new Collaborateurs();

        $obj->setAccesDocsCab(true);
        $this->assertEquals(true, $obj->getAccesDocsCab());
    }

    /**
     * Tests setAccesDossierCpta()
     *
     * @return void
     */
    public function testSetAccesDossierCpta(): void {

        $obj = new Collaborateurs();

        $obj->setAccesDossierCpta("accesDossierCpta");
        $this->assertEquals("accesDossierCpta", $obj->getAccesDossierCpta());
    }

    /**
     * Tests setAccesDossierPaie()
     *
     * @return void
     */
    public function testSetAccesDossierPaie(): void {

        $obj = new Collaborateurs();

        $obj->setAccesDossierPaie("accesDossierPaie");
        $this->assertEquals("accesDossierPaie", $obj->getAccesDossierPaie());
    }

    /**
     * Tests setAccesGestionaireStatsCroisees()
     *
     * @return void
     */
    public function testSetAccesGestionaireStatsCroisees(): void {

        $obj = new Collaborateurs();

        $obj->setAccesGestionaireStatsCroisees(true);
        $this->assertEquals(true, $obj->getAccesGestionaireStatsCroisees());
    }

    /**
     * Tests setAccesRepCommun()
     *
     * @return void
     */
    public function testSetAccesRepCommun(): void {

        $obj = new Collaborateurs();

        $obj->setAccesRepCommun("accesRepCommun");
        $this->assertEquals("accesRepCommun", $obj->getAccesRepCommun());
    }

    /**
     * Tests setAccesStatCab()
     *
     * @return void
     */
    public function testSetAccesStatCab(): void {

        $obj = new Collaborateurs();

        $obj->setAccesStatCab(true);
        $this->assertEquals(true, $obj->getAccesStatCab());
    }

    /**
     * Tests setAnnulationAffaire()
     *
     * @return void
     */
    public function testSetAnnulationAffaire(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationAffaire(true);
        $this->assertEquals(true, $obj->getAnnulationAffaire());
    }

    /**
     * Tests setAnnulationArticle()
     *
     * @return void
     */
    public function testSetAnnulationArticle(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationArticle(true);
        $this->assertEquals(true, $obj->getAnnulationArticle());
    }

    /**
     * Tests setAnnulationBonsTravaux()
     *
     * @return void
     */
    public function testSetAnnulationBonsTravaux(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationBonsTravaux(true);
        $this->assertEquals(true, $obj->getAnnulationBonsTravaux());
    }

    /**
     * Tests setAnnulationChantier()
     *
     * @return void
     */
    public function testSetAnnulationChantier(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationChantier(true);
        $this->assertEquals(true, $obj->getAnnulationChantier());
    }

    /**
     * Tests setAnnulationClient()
     *
     * @return void
     */
    public function testSetAnnulationClient(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationClient(true);
        $this->assertEquals(true, $obj->getAnnulationClient());
    }

    /**
     * Tests setAnnulationCommission()
     *
     * @return void
     */
    public function testSetAnnulationCommission(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationCommission(true);
        $this->assertEquals(true, $obj->getAnnulationCommission());
    }

    /**
     * Tests setAnnulationDossierCpta()
     *
     * @return void
     */
    public function testSetAnnulationDossierCpta(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationDossierCpta(true);
        $this->assertEquals(true, $obj->getAnnulationDossierCpta());
    }

    /**
     * Tests setAnnulationDossierFact()
     *
     * @return void
     */
    public function testSetAnnulationDossierFact(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationDossierFact(true);
        $this->assertEquals(true, $obj->getAnnulationDossierFact());
    }

    /**
     * Tests setAnnulationDossierPaie()
     *
     * @return void
     */
    public function testSetAnnulationDossierPaie(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationDossierPaie(true);
        $this->assertEquals(true, $obj->getAnnulationDossierPaie());
    }

    /**
     * Tests setAnnulationFournisseur()
     *
     * @return void
     */
    public function testSetAnnulationFournisseur(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationFournisseur(true);
        $this->assertEquals(true, $obj->getAnnulationFournisseur());
    }

    /**
     * Tests setAnnulationPlanFacturation()
     *
     * @return void
     */
    public function testSetAnnulationPlanFacturation(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationPlanFacturation(true);
        $this->assertEquals(true, $obj->getAnnulationPlanFacturation());
    }

    /**
     * Tests setAnnulationPlanTache()
     *
     * @return void
     */
    public function testSetAnnulationPlanTache(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationPlanTache(true);
        $this->assertEquals(true, $obj->getAnnulationPlanTache());
    }

    /**
     * Tests setAnnulationTache()
     *
     * @return void
     */
    public function testSetAnnulationTache(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationTache(true);
        $this->assertEquals(true, $obj->getAnnulationTache());
    }

    /**
     * Tests setAnnulationTarif()
     *
     * @return void
     */
    public function testSetAnnulationTarif(): void {

        $obj = new Collaborateurs();

        $obj->setAnnulationTarif(true);
        $this->assertEquals(true, $obj->getAnnulationTarif());
    }

    /**
     * Tests setArticlesLstPersoAccesGestionModifiables()
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionModifiables(): void {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoAccesGestionModifiables(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoAccesGestionModifiables());
    }

    /**
     * Tests setArticlesLstPersoAccesGestionnaire()
     *
     * @return void
     */
    public function testSetArticlesLstPersoAccesGestionnaire(): void {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoAccesGestionnaire(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoAccesGestionnaire());
    }

    /**
     * Tests setArticlesLstPersoChampsModif()
     *
     * @return void
     */
    public function testSetArticlesLstPersoChampsModif(): void {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoChampsModif(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoChampsModif());
    }

    /**
     * Tests setArticlesLstPersoCopieColonne()
     *
     * @return void
     */
    public function testSetArticlesLstPersoCopieColonne(): void {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoCopieColonne());
    }

    /**
     * Tests setArticlesLstPersoInterdireCreat()
     *
     * @return void
     */
    public function testSetArticlesLstPersoInterdireCreat(): void {

        $obj = new Collaborateurs();

        $obj->setArticlesLstPersoInterdireCreat(true);
        $this->assertEquals(true, $obj->getArticlesLstPersoInterdireCreat());
    }

    /**
     * Tests setAutoriseSaisieTpsColonnes()
     *
     * @return void
     */
    public function testSetAutoriseSaisieTpsColonnes(): void {

        $obj = new Collaborateurs();

        $obj->setAutoriseSaisieTpsColonnes(true);
        $this->assertEquals(true, $obj->getAutoriseSaisieTpsColonnes());
    }

    /**
     * Tests setBic()
     *
     * @return void
     */
    public function testSetBic(): void {

        $obj = new Collaborateurs();

        $obj->setBic("bic");
        $this->assertEquals("bic", $obj->getBic());
    }

    /**
     * Tests setBlocageEdCli()
     *
     * @return void
     */
    public function testSetBlocageEdCli(): void {

        $obj = new Collaborateurs();

        $obj->setBlocageEdCli(true);
        $this->assertEquals(true, $obj->getBlocageEdCli());
    }

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Collaborateurs();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Collaborateurs();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCategoriePrixKm()
     *
     * @return void
     */
    public function testSetCategoriePrixKm(): void {

        $obj = new Collaborateurs();

        $obj->setCategoriePrixKm("categoriePrixKm");
        $this->assertEquals("categoriePrixKm", $obj->getCategoriePrixKm());
    }

    /**
     * Tests setCategorieTicketResto()
     *
     * @return void
     */
    public function testSetCategorieTicketResto(): void {

        $obj = new Collaborateurs();

        $obj->setCategorieTicketResto("categorieTicketResto");
        $this->assertEquals("categorieTicketResto", $obj->getCategorieTicketResto());
    }

    /**
     * Tests setChargesMensuelles()
     *
     * @return void
     */
    public function testSetChargesMensuelles(): void {

        $obj = new Collaborateurs();

        $obj->setChargesMensuelles(10.092018);
        $this->assertEquals(10.092018, $obj->getChargesMensuelles());
    }

    /**
     * Tests setCleCcnPaie()
     *
     * @return void
     */
    public function testSetCleCcnPaie(): void {

        $obj = new Collaborateurs();

        $obj->setCleCcnPaie("cleCcnPaie");
        $this->assertEquals("cleCcnPaie", $obj->getCleCcnPaie());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Collaborateurs();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeCentre()
     *
     * @return void
     */
    public function testSetCodeCentre(): void {

        $obj = new Collaborateurs();

        $obj->setCodeCentre("codeCentre");
        $this->assertEquals("codeCentre", $obj->getCodeCentre());
    }

    /**
     * Tests setCodeChef1()
     *
     * @return void
     */
    public function testSetCodeChef1(): void {

        $obj = new Collaborateurs();

        $obj->setCodeChef1("codeChef1");
        $this->assertEquals("codeChef1", $obj->getCodeChef1());
    }

    /**
     * Tests setCodeChef2()
     *
     * @return void
     */
    public function testSetCodeChef2(): void {

        $obj = new Collaborateurs();

        $obj->setCodeChef2("codeChef2");
        $this->assertEquals("codeChef2", $obj->getCodeChef2());
    }

    /**
     * Tests setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new Collaborateurs();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests setCodeFamille()
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new Collaborateurs();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests setCodeFamilleFrn()
     *
     * @return void
     */
    public function testSetCodeFamilleFrn(): void {

        $obj = new Collaborateurs();

        $obj->setCodeFamilleFrn("codeFamilleFrn");
        $this->assertEquals("codeFamilleFrn", $obj->getCodeFamilleFrn());
    }

    /**
     * Tests setCodeGroupe()
     *
     * @return void
     */
    public function testSetCodeGroupe(): void {

        $obj = new Collaborateurs();

        $obj->setCodeGroupe("codeGroupe");
        $this->assertEquals("codeGroupe", $obj->getCodeGroupe());
    }

    /**
     * Tests setCodeGroupeVisuMsg()
     *
     * @return void
     */
    public function testSetCodeGroupeVisuMsg(): void {

        $obj = new Collaborateurs();

        $obj->setCodeGroupeVisuMsg("codeGroupeVisuMsg");
        $this->assertEquals("codeGroupeVisuMsg", $obj->getCodeGroupeVisuMsg());
    }

    /**
     * Tests setCodeLangue()
     *
     * @return void
     */
    public function testSetCodeLangue(): void {

        $obj = new Collaborateurs();

        $obj->setCodeLangue("codeLangue");
        $this->assertEquals("codeLangue", $obj->getCodeLangue());
    }

    /**
     * Tests setCodeLiaisonDest()
     *
     * @return void
     */
    public function testSetCodeLiaisonDest(): void {

        $obj = new Collaborateurs();

        $obj->setCodeLiaisonDest("codeLiaisonDest");
        $this->assertEquals("codeLiaisonDest", $obj->getCodeLiaisonDest());
    }

    /**
     * Tests setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new Collaborateurs();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Collaborateurs();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCodeVehicule()
     *
     * @return void
     */
    public function testSetCodeVehicule(): void {

        $obj = new Collaborateurs();

        $obj->setCodeVehicule("codeVehicule");
        $this->assertEquals("codeVehicule", $obj->getCodeVehicule());
    }

    /**
     * Tests setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Collaborateurs();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Collaborateurs();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setCompteComptable()
     *
     * @return void
     */
    public function testSetCompteComptable(): void {

        $obj = new Collaborateurs();

        $obj->setCompteComptable("compteComptable");
        $this->assertEquals("compteComptable", $obj->getCompteComptable());
    }

    /**
     * Tests setCompteDeTiers()
     *
     * @return void
     */
    public function testSetCompteDeTiers(): void {

        $obj = new Collaborateurs();

        $obj->setCompteDeTiers("compteDeTiers");
        $this->assertEquals("compteDeTiers", $obj->getCompteDeTiers());
    }

    /**
     * Tests setControleSaisieTp()
     *
     * @return void
     */
    public function testSetControleSaisieTp(): void {

        $obj = new Collaborateurs();

        $obj->setControleSaisieTp("controleSaisieTp");
        $this->assertEquals("controleSaisieTp", $obj->getControleSaisieTp());
    }

    /**
     * Tests setCreationAffaire()
     *
     * @return void
     */
    public function testSetCreationAffaire(): void {

        $obj = new Collaborateurs();

        $obj->setCreationAffaire(true);
        $this->assertEquals(true, $obj->getCreationAffaire());
    }

    /**
     * Tests setCreationArticle()
     *
     * @return void
     */
    public function testSetCreationArticle(): void {

        $obj = new Collaborateurs();

        $obj->setCreationArticle(true);
        $this->assertEquals(true, $obj->getCreationArticle());
    }

    /**
     * Tests setCreationBonsTravaux()
     *
     * @return void
     */
    public function testSetCreationBonsTravaux(): void {

        $obj = new Collaborateurs();

        $obj->setCreationBonsTravaux(true);
        $this->assertEquals(true, $obj->getCreationBonsTravaux());
    }

    /**
     * Tests setCreationChantier()
     *
     * @return void
     */
    public function testSetCreationChantier(): void {

        $obj = new Collaborateurs();

        $obj->setCreationChantier(true);
        $this->assertEquals(true, $obj->getCreationChantier());
    }

    /**
     * Tests setCreationClient()
     *
     * @return void
     */
    public function testSetCreationClient(): void {

        $obj = new Collaborateurs();

        $obj->setCreationClient(true);
        $this->assertEquals(true, $obj->getCreationClient());
    }

    /**
     * Tests setCreationCommission()
     *
     * @return void
     */
    public function testSetCreationCommission(): void {

        $obj = new Collaborateurs();

        $obj->setCreationCommission(true);
        $this->assertEquals(true, $obj->getCreationCommission());
    }

    /**
     * Tests setCreationDossierCpta()
     *
     * @return void
     */
    public function testSetCreationDossierCpta(): void {

        $obj = new Collaborateurs();

        $obj->setCreationDossierCpta(true);
        $this->assertEquals(true, $obj->getCreationDossierCpta());
    }

    /**
     * Tests setCreationDossierFact()
     *
     * @return void
     */
    public function testSetCreationDossierFact(): void {

        $obj = new Collaborateurs();

        $obj->setCreationDossierFact(true);
        $this->assertEquals(true, $obj->getCreationDossierFact());
    }

    /**
     * Tests setCreationDossierPaie()
     *
     * @return void
     */
    public function testSetCreationDossierPaie(): void {

        $obj = new Collaborateurs();

        $obj->setCreationDossierPaie(true);
        $this->assertEquals(true, $obj->getCreationDossierPaie());
    }

    /**
     * Tests setCreationFournisseur()
     *
     * @return void
     */
    public function testSetCreationFournisseur(): void {

        $obj = new Collaborateurs();

        $obj->setCreationFournisseur(true);
        $this->assertEquals(true, $obj->getCreationFournisseur());
    }

    /**
     * Tests setCreationPlanFacturation()
     *
     * @return void
     */
    public function testSetCreationPlanFacturation(): void {

        $obj = new Collaborateurs();

        $obj->setCreationPlanFacturation(true);
        $this->assertEquals(true, $obj->getCreationPlanFacturation());
    }

    /**
     * Tests setCreationPlanTache()
     *
     * @return void
     */
    public function testSetCreationPlanTache(): void {

        $obj = new Collaborateurs();

        $obj->setCreationPlanTache(true);
        $this->assertEquals(true, $obj->getCreationPlanTache());
    }

    /**
     * Tests setCreationTache()
     *
     * @return void
     */
    public function testSetCreationTache(): void {

        $obj = new Collaborateurs();

        $obj->setCreationTache(true);
        $this->assertEquals(true, $obj->getCreationTache());
    }

    /**
     * Tests setCreationTarif()
     *
     * @return void
     */
    public function testSetCreationTarif(): void {

        $obj = new Collaborateurs();

        $obj->setCreationTarif(true);
        $this->assertEquals(true, $obj->getCreationTarif());
    }

    /**
     * Tests setDateEntree()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEntree(): void {

        // Set a Date/time mock.
        $dateEntree = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests setDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateSortie(): void {

        // Set a Date/time mock.
        $dateSortie = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests setDateValidationBudget()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationBudget(): void {

        // Set a Date/time mock.
        $dateValidationBudget = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateValidationBudget($dateValidationBudget);
        $this->assertSame($dateValidationBudget, $obj->getDateValidationBudget());
    }

    /**
     * Tests setDateValidationNdF()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationNdF(): void {

        // Set a Date/time mock.
        $dateValidationNdF = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateValidationNdF($dateValidationNdF);
        $this->assertSame($dateValidationNdF, $obj->getDateValidationNdF());
    }

    /**
     * Tests setDateValidationTp()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateValidationTp(): void {

        // Set a Date/time mock.
        $dateValidationTp = new DateTime("2018-09-10");

        $obj = new Collaborateurs();

        $obj->setDateValidationTp($dateValidationTp);
        $this->assertSame($dateValidationTp, $obj->getDateValidationTp());
    }

    /**
     * Tests setDesactiverFiltreMsg()
     *
     * @return void
     */
    public function testSetDesactiverFiltreMsg(): void {

        $obj = new Collaborateurs();

        $obj->setDesactiverFiltreMsg(true);
        $this->assertEquals(true, $obj->getDesactiverFiltreMsg());
    }

    /**
     * Tests setDisponible()
     *
     * @return void
     */
    public function testSetDisponible(): void {

        $obj = new Collaborateurs();

        $obj->setDisponible(true);
        $this->assertEquals(true, $obj->getDisponible());
    }

    /**
     * Tests setDomBanque()
     *
     * @return void
     */
    public function testSetDomBanque(): void {

        $obj = new Collaborateurs();

        $obj->setDomBanque("domBanque");
        $this->assertEquals("domBanque", $obj->getDomBanque());
    }

    /**
     * Tests setDossierPaie()
     *
     * @return void
     */
    public function testSetDossierPaie(): void {

        $obj = new Collaborateurs();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Tests setDroitParamEmailsConfidentiels()
     *
     * @return void
     */
    public function testSetDroitParamEmailsConfidentiels(): void {

        $obj = new Collaborateurs();

        $obj->setDroitParamEmailsConfidentiels(true);
        $this->assertEquals(true, $obj->getDroitParamEmailsConfidentiels());
    }

    /**
     * Tests setDroitSyncPort()
     *
     * @return void
     */
    public function testSetDroitSyncPort(): void {

        $obj = new Collaborateurs();

        $obj->setDroitSyncPort(true);
        $this->assertEquals(true, $obj->getDroitSyncPort());
    }

    /**
     * Tests setDroitSyncQProp()
     *
     * @return void
     */
    public function testSetDroitSyncQProp(): void {

        $obj = new Collaborateurs();

        $obj->setDroitSyncQProp(true);
        $this->assertEquals(true, $obj->getDroitSyncQProp());
    }

    /**
     * Tests setEmail()
     *
     * @return void
     */
    public function testSetEmail(): void {

        $obj = new Collaborateurs();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
    }

    /**
     * Tests setEmailActiverAideSaisie()
     *
     * @return void
     */
    public function testSetEmailActiverAideSaisie(): void {

        $obj = new Collaborateurs();

        $obj->setEmailActiverAideSaisie(true);
        $this->assertEquals(true, $obj->getEmailActiverAideSaisie());
    }

    /**
     * Tests setEmailAgendaDmdConfirm()
     *
     * @return void
     */
    public function testSetEmailAgendaDmdConfirm(): void {

        $obj = new Collaborateurs();

        $obj->setEmailAgendaDmdConfirm("emailAgendaDmdConfirm");
        $this->assertEquals("emailAgendaDmdConfirm", $obj->getEmailAgendaDmdConfirm());
    }

    /**
     * Tests setEmailAutoClotureImap()
     *
     * @return void
     */
    public function testSetEmailAutoClotureImap(): void {

        $obj = new Collaborateurs();

        $obj->setEmailAutoClotureImap(true);
        $this->assertEquals(true, $obj->getEmailAutoClotureImap());
    }

    /**
     * Tests setEmailLstAdrChoixElem()
     *
     * @return void
     */
    public function testSetEmailLstAdrChoixElem(): void {

        $obj = new Collaborateurs();

        $obj->setEmailLstAdrChoixElem(10);
        $this->assertEquals(10, $obj->getEmailLstAdrChoixElem());
    }

    /**
     * Tests setEmailModeSignature()
     *
     * @return void
     */
    public function testSetEmailModeSignature(): void {

        $obj = new Collaborateurs();

        $obj->setEmailModeSignature(10);
        $this->assertEquals(10, $obj->getEmailModeSignature());
    }

    /**
     * Tests setEmailNbJAgMini()
     *
     * @return void
     */
    public function testSetEmailNbJAgMini(): void {

        $obj = new Collaborateurs();

        $obj->setEmailNbJAgMini(10);
        $this->assertEquals(10, $obj->getEmailNbJAgMini());
    }

    /**
     * Tests setEmailObjetDefaut()
     *
     * @return void
     */
    public function testSetEmailObjetDefaut(): void {

        $obj = new Collaborateurs();

        $obj->setEmailObjetDefaut("emailObjetDefaut");
        $this->assertEquals("emailObjetDefaut", $obj->getEmailObjetDefaut());
    }

    /**
     * Tests setEmailPied()
     *
     * @return void
     */
    public function testSetEmailPied(): void {

        $obj = new Collaborateurs();

        $obj->setEmailPied("emailPied");
        $this->assertEquals("emailPied", $obj->getEmailPied());
    }

    /**
     * Tests setEmailRedirAuto()
     *
     * @return void
     */
    public function testSetEmailRedirAuto(): void {

        $obj = new Collaborateurs();

        $obj->setEmailRedirAuto(true);
        $this->assertEquals(true, $obj->getEmailRedirAuto());
    }

    /**
     * Tests setEmailRedirAutoCollab()
     *
     * @return void
     */
    public function testSetEmailRedirAutoCollab(): void {

        $obj = new Collaborateurs();

        $obj->setEmailRedirAutoCollab("emailRedirAutoCollab");
        $this->assertEquals("emailRedirAutoCollab", $obj->getEmailRedirAutoCollab());
    }

    /**
     * Tests setEmailRedirection()
     *
     * @return void
     */
    public function testSetEmailRedirection(): void {

        $obj = new Collaborateurs();

        $obj->setEmailRedirection("emailRedirection");
        $this->assertEquals("emailRedirection", $obj->getEmailRedirection());
    }

    /**
     * Tests setEmailReponseAuto()
     *
     * @return void
     */
    public function testSetEmailReponseAuto(): void {

        $obj = new Collaborateurs();

        $obj->setEmailReponseAuto(true);
        $this->assertEquals(true, $obj->getEmailReponseAuto());
    }

    /**
     * Tests setEmailReponseAutoText()
     *
     * @return void
     */
    public function testSetEmailReponseAutoText(): void {

        $obj = new Collaborateurs();

        $obj->setEmailReponseAutoText("emailReponseAutoText");
        $this->assertEquals("emailReponseAutoText", $obj->getEmailReponseAutoText());
    }

    /**
     * Tests setEmailRrActive()
     *
     * @return void
     */
    public function testSetEmailRrActive(): void {

        $obj = new Collaborateurs();

        $obj->setEmailRrActive(true);
        $this->assertEquals(true, $obj->getEmailRrActive());
    }

    /**
     * Tests setEmailStartMode()
     *
     * @return void
     */
    public function testSetEmailStartMode(): void {

        $obj = new Collaborateurs();

        $obj->setEmailStartMode(10);
        $this->assertEquals(10, $obj->getEmailStartMode());
    }

    /**
     * Tests setEmailSurServeur()
     *
     * @return void
     */
    public function testSetEmailSurServeur(): void {

        $obj = new Collaborateurs();

        $obj->setEmailSurServeur(true);
        $this->assertEquals(true, $obj->getEmailSurServeur());
    }

    /**
     * Tests setEmailTete()
     *
     * @return void
     */
    public function testSetEmailTete(): void {

        $obj = new Collaborateurs();

        $obj->setEmailTete("emailTete");
        $this->assertEquals("emailTete", $obj->getEmailTete());
    }

    /**
     * Tests setEstAcheteur()
     *
     * @return void
     */
    public function testSetEstAcheteur(): void {

        $obj = new Collaborateurs();

        $obj->setEstAcheteur(10);
        $this->assertEquals(10, $obj->getEstAcheteur());
    }

    /**
     * Tests setEtabConfidentialiteQp()
     *
     * @return void
     */
    public function testSetEtabConfidentialiteQp(): void {

        $obj = new Collaborateurs();

        $obj->setEtabConfidentialiteQp("etabConfidentialiteQp");
        $this->assertEquals("etabConfidentialiteQp", $obj->getEtabConfidentialiteQp());
    }

    /**
     * Tests setFictif()
     *
     * @return void
     */
    public function testSetFictif(): void {

        $obj = new Collaborateurs();

        $obj->setFictif(true);
        $this->assertEquals(true, $obj->getFictif());
    }

    /**
     * Tests setFonction()
     *
     * @return void
     */
    public function testSetFonction(): void {

        $obj = new Collaborateurs();

        $obj->setFonction("fonction");
        $this->assertEquals("fonction", $obj->getFonction());
    }

    /**
     * Tests setIban()
     *
     * @return void
     */
    public function testSetIban(): void {

        $obj = new Collaborateurs();

        $obj->setIban("iban");
        $this->assertEquals("iban", $obj->getIban());
    }

    /**
     * Tests setInterdictionPwd()
     *
     * @return void
     */
    public function testSetInterdictionPwd(): void {

        $obj = new Collaborateurs();

        $obj->setInterdictionPwd(true);
        $this->assertEquals(true, $obj->getInterdictionPwd());
    }

    /**
     * Tests setInterdictionVueFacturation()
     *
     * @return void
     */
    public function testSetInterdictionVueFacturation(): void {

        $obj = new Collaborateurs();

        $obj->setInterdictionVueFacturation(true);
        $this->assertEquals(true, $obj->getInterdictionVueFacturation());
    }

    /**
     * Tests setInterdireAccesArchivesCpta()
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesCpta(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesArchivesCpta(true);
        $this->assertEquals(true, $obj->getInterdireAccesArchivesCpta());
    }

    /**
     * Tests setInterdireAccesArchivesPaie()
     *
     * @return void
     */
    public function testSetInterdireAccesArchivesPaie(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesArchivesPaie(true);
        $this->assertEquals(true, $obj->getInterdireAccesArchivesPaie());
    }

    /**
     * Tests setInterdireAccesEditionBalance()
     *
     * @return void
     */
    public function testSetInterdireAccesEditionBalance(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesEditionBalance(true);
        $this->assertEquals(true, $obj->getInterdireAccesEditionBalance());
    }

    /**
     * Tests setInterdireAccesEntete()
     *
     * @return void
     */
    public function testSetInterdireAccesEntete(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesEntete(true);
        $this->assertEquals(true, $obj->getInterdireAccesEntete());
    }

    /**
     * Tests setInterdireAccesSuppDocArch()
     *
     * @return void
     */
    public function testSetInterdireAccesSuppDocArch(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireAccesSuppDocArch(true);
        $this->assertEquals(true, $obj->getInterdireAccesSuppDocArch());
    }

    /**
     * Tests setInterdireEditionValoriseJrnTemps()
     *
     * @return void
     */
    public function testSetInterdireEditionValoriseJrnTemps(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireEditionValoriseJrnTemps(true);
        $this->assertEquals(true, $obj->getInterdireEditionValoriseJrnTemps());
    }

    /**
     * Tests setInterdireEnvoiPostit()
     *
     * @return void
     */
    public function testSetInterdireEnvoiPostit(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireEnvoiPostit(true);
        $this->assertEquals(true, $obj->getInterdireEnvoiPostit());
    }

    /**
     * Tests setInterdireModifAffCli()
     *
     * @return void
     */
    public function testSetInterdireModifAffCli(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireModifAffCli(true);
        $this->assertEquals(true, $obj->getInterdireModifAffCli());
    }

    /**
     * Tests setInterdireModifDepot()
     *
     * @return void
     */
    public function testSetInterdireModifDepot(): void {

        $obj = new Collaborateurs();

        $obj->setInterdireModifDepot(true);
        $this->assertEquals(true, $obj->getInterdireModifDepot());
    }

    /**
     * Tests setInterdirePubliDocWeb()
     *
     * @return void
     */
    public function testSetInterdirePubliDocWeb(): void {

        $obj = new Collaborateurs();

        $obj->setInterdirePubliDocWeb(true);
        $this->assertEquals(true, $obj->getInterdirePubliDocWeb());
    }

    /**
     * Tests setInterim()
     *
     * @return void
     */
    public function testSetInterim(): void {

        $obj = new Collaborateurs();

        $obj->setInterim(true);
        $this->assertEquals(true, $obj->getInterim());
    }

    /**
     * Tests setIsGroupe()
     *
     * @return void
     */
    public function testSetIsGroupe(): void {

        $obj = new Collaborateurs();

        $obj->setIsGroupe(true);
        $this->assertEquals(true, $obj->getIsGroupe());
    }

    /**
     * Tests setIsProfilMessages()
     *
     * @return void
     */
    public function testSetIsProfilMessages(): void {

        $obj = new Collaborateurs();

        $obj->setIsProfilMessages(true);
        $this->assertEquals(true, $obj->getIsProfilMessages());
    }

    /**
     * Tests setLimiterVisuAgenda()
     *
     * @return void
     */
    public function testSetLimiterVisuAgenda(): void {

        $obj = new Collaborateurs();

        $obj->setLimiterVisuAgenda(true);
        $this->assertEquals(true, $obj->getLimiterVisuAgenda());
    }

    /**
     * Tests setMasquerFournisseurs()
     *
     * @return void
     */
    public function testSetMasquerFournisseurs(): void {

        $obj = new Collaborateurs();

        $obj->setMasquerFournisseurs(true);
        $this->assertEquals(true, $obj->getMasquerFournisseurs());
    }

    /**
     * Tests setMessagesConfidentiels()
     *
     * @return void
     */
    public function testSetMessagesConfidentiels(): void {

        $obj = new Collaborateurs();

        $obj->setMessagesConfidentiels("messagesConfidentiels");
        $this->assertEquals("messagesConfidentiels", $obj->getMessagesConfidentiels());
    }

    /**
     * Tests setModifAffaire()
     *
     * @return void
     */
    public function testSetModifAffaire(): void {

        $obj = new Collaborateurs();

        $obj->setModifAffaire("modifAffaire");
        $this->assertEquals("modifAffaire", $obj->getModifAffaire());
    }

    /**
     * Tests setModifArticle()
     *
     * @return void
     */
    public function testSetModifArticle(): void {

        $obj = new Collaborateurs();

        $obj->setModifArticle("modifArticle");
        $this->assertEquals("modifArticle", $obj->getModifArticle());
    }

    /**
     * Tests setModifBonsTravaux()
     *
     * @return void
     */
    public function testSetModifBonsTravaux(): void {

        $obj = new Collaborateurs();

        $obj->setModifBonsTravaux("modifBonsTravaux");
        $this->assertEquals("modifBonsTravaux", $obj->getModifBonsTravaux());
    }

    /**
     * Tests setModifChantier()
     *
     * @return void
     */
    public function testSetModifChantier(): void {

        $obj = new Collaborateurs();

        $obj->setModifChantier("modifChantier");
        $this->assertEquals("modifChantier", $obj->getModifChantier());
    }

    /**
     * Tests setModifClient()
     *
     * @return void
     */
    public function testSetModifClient(): void {

        $obj = new Collaborateurs();

        $obj->setModifClient("modifClient");
        $this->assertEquals("modifClient", $obj->getModifClient());
    }

    /**
     * Tests setModifCommission()
     *
     * @return void
     */
    public function testSetModifCommission(): void {

        $obj = new Collaborateurs();

        $obj->setModifCommission("modifCommission");
        $this->assertEquals("modifCommission", $obj->getModifCommission());
    }

    /**
     * Tests setModifDossierFact()
     *
     * @return void
     */
    public function testSetModifDossierFact(): void {

        $obj = new Collaborateurs();

        $obj->setModifDossierFact("modifDossierFact");
        $this->assertEquals("modifDossierFact", $obj->getModifDossierFact());
    }

    /**
     * Tests setModifDroitsAsp()
     *
     * @return void
     */
    public function testSetModifDroitsAsp(): void {

        $obj = new Collaborateurs();

        $obj->setModifDroitsAsp(true);
        $this->assertEquals(true, $obj->getModifDroitsAsp());
    }

    /**
     * Tests setModifEnVue()
     *
     * @return void
     */
    public function testSetModifEnVue(): void {

        $obj = new Collaborateurs();

        $obj->setModifEnVue(true);
        $this->assertEquals(true, $obj->getModifEnVue());
    }

    /**
     * Tests setModifFournisseur()
     *
     * @return void
     */
    public function testSetModifFournisseur(): void {

        $obj = new Collaborateurs();

        $obj->setModifFournisseur("modifFournisseur");
        $this->assertEquals("modifFournisseur", $obj->getModifFournisseur());
    }

    /**
     * Tests setModifPlanFacturation()
     *
     * @return void
     */
    public function testSetModifPlanFacturation(): void {

        $obj = new Collaborateurs();

        $obj->setModifPlanFacturation("modifPlanFacturation");
        $this->assertEquals("modifPlanFacturation", $obj->getModifPlanFacturation());
    }

    /**
     * Tests setModifPlanTache()
     *
     * @return void
     */
    public function testSetModifPlanTache(): void {

        $obj = new Collaborateurs();

        $obj->setModifPlanTache("modifPlanTache");
        $this->assertEquals("modifPlanTache", $obj->getModifPlanTache());
    }

    /**
     * Tests setModifTache()
     *
     * @return void
     */
    public function testSetModifTache(): void {

        $obj = new Collaborateurs();

        $obj->setModifTache("modifTache");
        $this->assertEquals("modifTache", $obj->getModifTache());
    }

    /**
     * Tests setModifTarif()
     *
     * @return void
     */
    public function testSetModifTarif(): void {

        $obj = new Collaborateurs();

        $obj->setModifTarif("modifTarif");
        $this->assertEquals("modifTarif", $obj->getModifTarif());
    }

    /**
     * Tests setMotDePasse()
     *
     * @return void
     */
    public function testSetMotDePasse(): void {

        $obj = new Collaborateurs();

        $obj->setMotDePasse("motDePasse");
        $this->assertEquals("motDePasse", $obj->getMotDePasse());
    }

    /**
     * Tests setMsgRedirAuto()
     *
     * @return void
     */
    public function testSetMsgRedirAuto(): void {

        $obj = new Collaborateurs();

        $obj->setMsgRedirAuto(true);
        $this->assertEquals(true, $obj->getMsgRedirAuto());
    }

    /**
     * Tests setNivConfEmpPropreteRestreint()
     *
     * @return void
     */
    public function testSetNivConfEmpPropreteRestreint(): void {

        $obj = new Collaborateurs();

        $obj->setNivConfEmpPropreteRestreint(true);
        $this->assertEquals(true, $obj->getNivConfEmpPropreteRestreint());
    }

    /**
     * Tests setNiveau()
     *
     * @return void
     */
    public function testSetNiveau(): void {

        $obj = new Collaborateurs();

        $obj->setNiveau(10);
        $this->assertEquals(10, $obj->getNiveau());
    }

    /**
     * Tests setNiveauConfidentialiteQp()
     *
     * @return void
     */
    public function testSetNiveauConfidentialiteQp(): void {

        $obj = new Collaborateurs();

        $obj->setNiveauConfidentialiteQp("niveauConfidentialiteQp");
        $this->assertEquals("niveauConfidentialiteQp", $obj->getNiveauConfidentialiteQp());
    }

    /**
     * Tests setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new Collaborateurs();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new Collaborateurs();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Collaborateurs();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Collaborateurs();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setNumero()
     *
     * @return void
     */
    public function testSetNumero(): void {

        $obj = new Collaborateurs();

        $obj->setNumero("numero");
        $this->assertEquals("numero", $obj->getNumero());
    }

    /**
     * Tests setPaInvisible()
     *
     * @return void
     */
    public function testSetPaInvisible(): void {

        $obj = new Collaborateurs();

        $obj->setPaInvisible(true);
        $this->assertEquals(true, $obj->getPaInvisible());
    }

    /**
     * Tests setParcCodeRemorque()
     *
     * @return void
     */
    public function testSetParcCodeRemorque(): void {

        $obj = new Collaborateurs();

        $obj->setParcCodeRemorque("parcCodeRemorque");
        $this->assertEquals("parcCodeRemorque", $obj->getParcCodeRemorque());
    }

    /**
     * Tests setParcCodeVehicule()
     *
     * @return void
     */
    public function testSetParcCodeVehicule(): void {

        $obj = new Collaborateurs();

        $obj->setParcCodeVehicule("parcCodeVehicule");
        $this->assertEquals("parcCodeVehicule", $obj->getParcCodeVehicule());
    }

    /**
     * Tests setPasAccesQws()
     *
     * @return void
     */
    public function testSetPasAccesQws(): void {

        $obj = new Collaborateurs();

        $obj->setPasAccesQws(true);
        $this->assertEquals(true, $obj->getPasAccesQws());
    }

    /**
     * Tests setPasSaisieDesTemps()
     *
     * @return void
     */
    public function testSetPasSaisieDesTemps(): void {

        $obj = new Collaborateurs();

        $obj->setPasSaisieDesTemps(true);
        $this->assertEquals(true, $obj->getPasSaisieDesTemps());
    }

    /**
     * Tests setPasSaisieDesTempsAuto()
     *
     * @return void
     */
    public function testSetPasSaisieDesTempsAuto(): void {

        $obj = new Collaborateurs();

        $obj->setPasSaisieDesTempsAuto(true);
        $this->assertEquals(true, $obj->getPasSaisieDesTempsAuto());
    }

    /**
     * Tests setPortablePerso()
     *
     * @return void
     */
    public function testSetPortablePerso(): void {

        $obj = new Collaborateurs();

        $obj->setPortablePerso("portablePerso");
        $this->assertEquals("portablePerso", $obj->getPortablePerso());
    }

    /**
     * Tests setPresent()
     *
     * @return void
     */
    public function testSetPresent(): void {

        $obj = new Collaborateurs();

        $obj->setPresent(true);
        $this->assertEquals(true, $obj->getPresent());
    }

    /**
     * Tests setPrevenuNouveauCd()
     *
     * @return void
     */
    public function testSetPrevenuNouveauCd(): void {

        $obj = new Collaborateurs();

        $obj->setPrevenuNouveauCd(true);
        $this->assertEquals(true, $obj->getPrevenuNouveauCd());
    }

    /**
     * Tests setPrixKm()
     *
     * @return void
     */
    public function testSetPrixKm(): void {

        $obj = new Collaborateurs();

        $obj->setPrixKm(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixKm());
    }

    /**
     * Tests setPrixVente()
     *
     * @return void
     */
    public function testSetPrixVente(): void {

        $obj = new Collaborateurs();

        $obj->setPrixVente(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente());
    }

    /**
     * Tests setPrixVente2()
     *
     * @return void
     */
    public function testSetPrixVente2(): void {

        $obj = new Collaborateurs();

        $obj->setPrixVente2(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente2());
    }

    /**
     * Tests setPrixVente3()
     *
     * @return void
     */
    public function testSetPrixVente3(): void {

        $obj = new Collaborateurs();

        $obj->setPrixVente3(10.092018);
        $this->assertEquals(10.092018, $obj->getPrixVente3());
    }

    /**
     * Tests setRestrictAccesPieces()
     *
     * @return void
     */
    public function testSetRestrictAccesPieces(): void {

        $obj = new Collaborateurs();

        $obj->setRestrictAccesPieces(true);
        $this->assertEquals(true, $obj->getRestrictAccesPieces());
    }

    /**
     * Tests setRestrictAccesStats()
     *
     * @return void
     */
    public function testSetRestrictAccesStats(): void {

        $obj = new Collaborateurs();

        $obj->setRestrictAccesStats(true);
        $this->assertEquals(true, $obj->getRestrictAccesStats());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Collaborateurs();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setSaisiePvInterdite()
     *
     * @return void
     */
    public function testSetSaisiePvInterdite(): void {

        $obj = new Collaborateurs();

        $obj->setSaisiePvInterdite(true);
        $this->assertEquals(true, $obj->getSaisiePvInterdite());
    }

    /**
     * Tests setSalaireMensuel()
     *
     * @return void
     */
    public function testSetSalaireMensuel(): void {

        $obj = new Collaborateurs();

        $obj->setSalaireMensuel(10.092018);
        $this->assertEquals(10.092018, $obj->getSalaireMensuel());
    }

    /**
     * Tests setSelArtCollab()
     *
     * @return void
     */
    public function testSetSelArtCollab(): void {

        $obj = new Collaborateurs();

        $obj->setSelArtCollab(true);
        $this->assertEquals(true, $obj->getSelArtCollab());
    }

    /**
     * Tests setSelAvLstPersoAccesGestionModifiables()
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionModifiables(): void {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoAccesGestionModifiables(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoAccesGestionModifiables());
    }

    /**
     * Tests setSelAvLstPersoAccesGestionnaire()
     *
     * @return void
     */
    public function testSetSelAvLstPersoAccesGestionnaire(): void {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoAccesGestionnaire(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoAccesGestionnaire());
    }

    /**
     * Tests setSelAvLstPersoChampsModif()
     *
     * @return void
     */
    public function testSetSelAvLstPersoChampsModif(): void {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoChampsModif(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoChampsModif());
    }

    /**
     * Tests setSelAvLstPersoCopieColonne()
     *
     * @return void
     */
    public function testSetSelAvLstPersoCopieColonne(): void {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoCopieColonne(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoCopieColonne());
    }

    /**
     * Tests setSelAvLstPersoInterdireCreat()
     *
     * @return void
     */
    public function testSetSelAvLstPersoInterdireCreat(): void {

        $obj = new Collaborateurs();

        $obj->setSelAvLstPersoInterdireCreat(true);
        $this->assertEquals(true, $obj->getSelAvLstPersoInterdireCreat());
    }

    /**
     * Tests setSelCliCollab()
     *
     * @return void
     */
    public function testSetSelCliCollab(): void {

        $obj = new Collaborateurs();

        $obj->setSelCliCollab(true);
        $this->assertEquals(true, $obj->getSelCliCollab());
    }

    /**
     * Tests setSelFrnCollab()
     *
     * @return void
     */
    public function testSetSelFrnCollab(): void {

        $obj = new Collaborateurs();

        $obj->setSelFrnCollab(true);
        $this->assertEquals(true, $obj->getSelFrnCollab());
    }

    /**
     * Tests setSelectionArticle()
     *
     * @return void
     */
    public function testSetSelectionArticle(): void {

        $obj = new Collaborateurs();

        $obj->setSelectionArticle("selectionArticle");
        $this->assertEquals("selectionArticle", $obj->getSelectionArticle());
    }

    /**
     * Tests setSelectionClient()
     *
     * @return void
     */
    public function testSetSelectionClient(): void {

        $obj = new Collaborateurs();

        $obj->setSelectionClient("selectionClient");
        $this->assertEquals("selectionClient", $obj->getSelectionClient());
    }

    /**
     * Tests setSelectionFournisseur()
     *
     * @return void
     */
    public function testSetSelectionFournisseur(): void {

        $obj = new Collaborateurs();

        $obj->setSelectionFournisseur("selectionFournisseur");
        $this->assertEquals("selectionFournisseur", $obj->getSelectionFournisseur());
    }

    /**
     * Tests setSuiviMessages()
     *
     * @return void
     */
    public function testSetSuiviMessages(): void {

        $obj = new Collaborateurs();

        $obj->setSuiviMessages(true);
        $this->assertEquals(true, $obj->getSuiviMessages());
    }

    /**
     * Tests setSuperviseur()
     *
     * @return void
     */
    public function testSetSuperviseur(): void {

        $obj = new Collaborateurs();

        $obj->setSuperviseur(true);
        $this->assertEquals(true, $obj->getSuperviseur());
    }

    /**
     * Tests setSyncMso()
     *
     * @return void
     */
    public function testSetSyncMso(): void {

        $obj = new Collaborateurs();

        $obj->setSyncMso(true);
        $this->assertEquals(true, $obj->getSyncMso());
    }

    /**
     * Tests setTachesGroupe()
     *
     * @return void
     */
    public function testSetTachesGroupe(): void {

        $obj = new Collaborateurs();

        $obj->setTachesGroupe("tachesGroupe");
        $this->assertEquals("tachesGroupe", $obj->getTachesGroupe());
    }

    /**
     * Tests setTauxCommission()
     *
     * @return void
     */
    public function testSetTauxCommission(): void {

        $obj = new Collaborateurs();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Tests setTelDirect()
     *
     * @return void
     */
    public function testSetTelDirect(): void {

        $obj = new Collaborateurs();

        $obj->setTelDirect("telDirect");
        $this->assertEquals("telDirect", $obj->getTelDirect());
    }

    /**
     * Tests setTelPerso()
     *
     * @return void
     */
    public function testSetTelPerso(): void {

        $obj = new Collaborateurs();

        $obj->setTelPerso("telPerso");
        $this->assertEquals("telPerso", $obj->getTelPerso());
    }

    /**
     * Tests setTelPortable1()
     *
     * @return void
     */
    public function testSetTelPortable1(): void {

        $obj = new Collaborateurs();

        $obj->setTelPortable1("telPortable1");
        $this->assertEquals("telPortable1", $obj->getTelPortable1());
    }

    /**
     * Tests setTelPortable2()
     *
     * @return void
     */
    public function testSetTelPortable2(): void {

        $obj = new Collaborateurs();

        $obj->setTelPortable2("telPortable2");
        $this->assertEquals("telPortable2", $obj->getTelPortable2());
    }

    /**
     * Tests setTelPoste()
     *
     * @return void
     */
    public function testSetTelPoste(): void {

        $obj = new Collaborateurs();

        $obj->setTelPoste("telPoste");
        $this->assertEquals("telPoste", $obj->getTelPoste());
    }

    /**
     * Tests setTpPasControler()
     *
     * @return void
     */
    public function testSetTpPasControler(): void {

        $obj = new Collaborateurs();

        $obj->setTpPasControler(true);
        $this->assertEquals(true, $obj->getTpPasControler());
    }

    /**
     * Tests setTpPasJournalTemps()
     *
     * @return void
     */
    public function testSetTpPasJournalTemps(): void {

        $obj = new Collaborateurs();

        $obj->setTpPasJournalTemps(true);
        $this->assertEquals(true, $obj->getTpPasJournalTemps());
    }

    /**
     * Tests setTpPasNotesDeFrais()
     *
     * @return void
     */
    public function testSetTpPasNotesDeFrais(): void {

        $obj = new Collaborateurs();

        $obj->setTpPasNotesDeFrais(true);
        $this->assertEquals(true, $obj->getTpPasNotesDeFrais());
    }

    /**
     * Tests setTpPasTpsValide()
     *
     * @return void
     */
    public function testSetTpPasTpsValide(): void {

        $obj = new Collaborateurs();

        $obj->setTpPasTpsValide(true);
        $this->assertEquals(true, $obj->getTpPasTpsValide());
    }

    /**
     * Tests setTpPourcentageNonOperationnel()
     *
     * @return void
     */
    public function testSetTpPourcentageNonOperationnel(): void {

        $obj = new Collaborateurs();

        $obj->setTpPourcentageNonOperationnel(10.092018);
        $this->assertEquals(10.092018, $obj->getTpPourcentageNonOperationnel());
    }

    /**
     * Tests setTpsNiveauBlocage()
     *
     * @return void
     */
    public function testSetTpsNiveauBlocage(): void {

        $obj = new Collaborateurs();

        $obj->setTpsNiveauBlocage("tpsNiveauBlocage");
        $this->assertEquals("tpsNiveauBlocage", $obj->getTpsNiveauBlocage());
    }

    /**
     * Tests setTxComInvisible()
     *
     * @return void
     */
    public function testSetTxComInvisible(): void {

        $obj = new Collaborateurs();

        $obj->setTxComInvisible(true);
        $this->assertEquals(true, $obj->getTxComInvisible());
    }

    /**
     * Tests setTypeConf2CmavCli()
     *
     * @return void
     */
    public function testSetTypeConf2CmavCli(): void {

        $obj = new Collaborateurs();

        $obj->setTypeConf2CmavCli("typeConf2CmavCli");
        $this->assertEquals("typeConf2CmavCli", $obj->getTypeConf2CmavCli());
    }

    /**
     * Tests setTypeConfCmavCli()
     *
     * @return void
     */
    public function testSetTypeConfCmavCli(): void {

        $obj = new Collaborateurs();

        $obj->setTypeConfCmavCli("typeConfCmavCli");
        $this->assertEquals("typeConfCmavCli", $obj->getTypeConfCmavCli());
    }

    /**
     * Tests setTypeVisuAppels()
     *
     * @return void
     */
    public function testSetTypeVisuAppels(): void {

        $obj = new Collaborateurs();

        $obj->setTypeVisuAppels("typeVisuAppels");
        $this->assertEquals("typeVisuAppels", $obj->getTypeVisuAppels());
    }

    /**
     * Tests setTypeVisuTaches()
     *
     * @return void
     */
    public function testSetTypeVisuTaches(): void {

        $obj = new Collaborateurs();

        $obj->setTypeVisuTaches("typeVisuTaches");
        $this->assertEquals("typeVisuTaches", $obj->getTypeVisuTaches());
    }

    /**
     * Tests setUseMailGeneric()
     *
     * @return void
     */
    public function testSetUseMailGeneric(): void {

        $obj = new Collaborateurs();

        $obj->setUseMailGeneric(true);
        $this->assertEquals(true, $obj->getUseMailGeneric());
    }

    /**
     * Tests setVisualisationFicheCabinet()
     *
     * @return void
     */
    public function testSetVisualisationFicheCabinet(): void {

        $obj = new Collaborateurs();

        $obj->setVisualisationFicheCabinet(true);
        $this->assertEquals(true, $obj->getVisualisationFicheCabinet());
    }

    /**
     * Tests setVueComDroitReaffect()
     *
     * @return void
     */
    public function testSetVueComDroitReaffect(): void {

        $obj = new Collaborateurs();

        $obj->setVueComDroitReaffect(true);
        $this->assertEquals(true, $obj->getVueComDroitReaffect());
    }

    /**
     * Tests setVueDevisDroitReaffect()
     *
     * @return void
     */
    public function testSetVueDevisDroitReaffect(): void {

        $obj = new Collaborateurs();

        $obj->setVueDevisDroitReaffect(true);
        $this->assertEquals(true, $obj->getVueDevisDroitReaffect());
    }

    /**
     * Tests setVueDevisDroitSuppr()
     *
     * @return void
     */
    public function testSetVueDevisDroitSuppr(): void {

        $obj = new Collaborateurs();

        $obj->setVueDevisDroitSuppr(true);
        $this->assertEquals(true, $obj->getVueDevisDroitSuppr());
    }

    /**
     * Tests setVueDevisDroitValid()
     *
     * @return void
     */
    public function testSetVueDevisDroitValid(): void {

        $obj = new Collaborateurs();

        $obj->setVueDevisDroitValid(true);
        $this->assertEquals(true, $obj->getVueDevisDroitValid());
    }

    /**
     * Tests setYaDroitsCollab()
     *
     * @return void
     */
    public function testSetYaDroitsCollab(): void {

        $obj = new Collaborateurs();

        $obj->setYaDroitsCollab(true);
        $this->assertEquals(true, $obj->getYaDroitsCollab());
    }

    /**
     * Tests seteWsMdp()
     *
     * @return void
     */
    public function testSeteWsMdp(): void {

        $obj = new Collaborateurs();

        $obj->seteWsMdp("eWsMdp");
        $this->assertEquals("eWsMdp", $obj->geteWsMdp());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Collaborateurs();

        $this->assertNull($obj->getAccesAutoriseBonsTravaux());
        $this->assertNull($obj->getAccesAutorisePlanFacturation());
        $this->assertNull($obj->getAccesAutorisePlanTache());
        $this->assertNull($obj->getAccesCurDossOnly());
        $this->assertNull($obj->getAccesDocsCab());
        $this->assertNull($obj->getAccesDossierCpta());
        $this->assertNull($obj->getAccesDossierPaie());
        $this->assertNull($obj->getAccesGestionaireStatsCroisees());
        $this->assertNull($obj->getAccesRepCommun());
        $this->assertNull($obj->getAccesStatCab());
        $this->assertNull($obj->getAnnulationAffaire());
        $this->assertNull($obj->getAnnulationArticle());
        $this->assertNull($obj->getAnnulationBonsTravaux());
        $this->assertNull($obj->getAnnulationChantier());
        $this->assertNull($obj->getAnnulationClient());
        $this->assertNull($obj->getAnnulationCommission());
        $this->assertNull($obj->getAnnulationDossierCpta());
        $this->assertNull($obj->getAnnulationDossierFact());
        $this->assertNull($obj->getAnnulationDossierPaie());
        $this->assertNull($obj->getAnnulationFournisseur());
        $this->assertNull($obj->getAnnulationPlanFacturation());
        $this->assertNull($obj->getAnnulationPlanTache());
        $this->assertNull($obj->getAnnulationTache());
        $this->assertNull($obj->getAnnulationTarif());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getArticlesLstPersoAccesGestionnaire());
        $this->assertNull($obj->getArticlesLstPersoChampsModif());
        $this->assertNull($obj->getArticlesLstPersoCopieColonne());
        $this->assertNull($obj->getArticlesLstPersoInterdireCreat());
        $this->assertNull($obj->getAutoriseSaisieTpsColonnes());
        $this->assertNull($obj->getBic());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBlocageEdCli());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCategoriePrixKm());
        $this->assertNull($obj->getCategorieTicketResto());
        $this->assertNull($obj->getChargesMensuelles());
        $this->assertNull($obj->getCleCcnPaie());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeCentre());
        $this->assertNull($obj->getCodeChef1());
        $this->assertNull($obj->getCodeChef2());
        $this->assertNull($obj->getCodeDepot());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeFamilleFrn());
        $this->assertNull($obj->getCodeGroupe());
        $this->assertNull($obj->getCodeGroupeVisuMsg());
        $this->assertNull($obj->getCodeLangue());
        $this->assertNull($obj->getCodeLiaisonDest());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeVehicule());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getCompteComptable());
        $this->assertNull($obj->getCompteDeTiers());
        $this->assertNull($obj->getControleSaisieTp());
        $this->assertNull($obj->getCreationAffaire());
        $this->assertNull($obj->getCreationArticle());
        $this->assertNull($obj->getCreationBonsTravaux());
        $this->assertNull($obj->getCreationChantier());
        $this->assertNull($obj->getCreationClient());
        $this->assertNull($obj->getCreationCommission());
        $this->assertNull($obj->getCreationDossierCpta());
        $this->assertNull($obj->getCreationDossierFact());
        $this->assertNull($obj->getCreationDossierPaie());
        $this->assertNull($obj->getCreationFournisseur());
        $this->assertNull($obj->getCreationPlanFacturation());
        $this->assertNull($obj->getCreationPlanTache());
        $this->assertNull($obj->getCreationTache());
        $this->assertNull($obj->getCreationTarif());
        $this->assertNull($obj->getDateEntree());
        $this->assertNull($obj->getDateSortie());
        $this->assertNull($obj->getDateValidationBudget());
        $this->assertNull($obj->getDateValidationNdF());
        $this->assertNull($obj->getDateValidationTp());
        $this->assertNull($obj->getDesactiverFiltreMsg());
        $this->assertNull($obj->getDisponible());
        $this->assertNull($obj->getDomBanque());
        $this->assertNull($obj->getDossierPaie());
        $this->assertNull($obj->getDroitParamEmailsConfidentiels());
        $this->assertNull($obj->getDroitSyncPort());
        $this->assertNull($obj->getDroitSyncQProp());
        $this->assertNull($obj->getEmailAgendaDmdConfirm());
        $this->assertNull($obj->getEmailAutoClotureImap());
        $this->assertNull($obj->getEmailModeSignature());
        $this->assertNull($obj->getEmailNbJAgMini());
        $this->assertNull($obj->getEmailObjetDefaut());
        $this->assertNull($obj->getEmailPied());
        $this->assertNull($obj->getEmailRrActive());
        $this->assertNull($obj->getEmailRedirAuto());
        $this->assertNull($obj->getEmailRedirAutoCollab());
        $this->assertNull($obj->getEmailReponseAuto());
        $this->assertNull($obj->getEmailReponseAutoText());
        $this->assertNull($obj->getEmailStartMode());
        $this->assertNull($obj->getEmailSurServeur());
        $this->assertNull($obj->getEmailTete());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getEmailActiverAideSaisie());
        $this->assertNull($obj->getEmailLstAdrChoixElem());
        $this->assertNull($obj->getEmailRedirection());
        $this->assertNull($obj->getEstAcheteur());
        $this->assertNull($obj->getEtabConfidentialiteQp());
        $this->assertNull($obj->getFictif());
        $this->assertNull($obj->getFonction());
        $this->assertNull($obj->getIban());
        $this->assertNull($obj->getInterdictionPwd());
        $this->assertNull($obj->getInterdictionVueFacturation());
        $this->assertNull($obj->getInterdireAccesArchivesCpta());
        $this->assertNull($obj->getInterdireAccesArchivesPaie());
        $this->assertNull($obj->getInterdireAccesEditionBalance());
        $this->assertNull($obj->getInterdireAccesEntete());
        $this->assertNull($obj->getInterdireAccesSuppDocArch());
        $this->assertNull($obj->getInterdireEditionValoriseJrnTemps());
        $this->assertNull($obj->getInterdireEnvoiPostit());
        $this->assertNull($obj->getInterdireModifAffCli());
        $this->assertNull($obj->getInterdireModifDepot());
        $this->assertNull($obj->getInterdirePubliDocWeb());
        $this->assertNull($obj->getInterim());
        $this->assertNull($obj->getIsGroupe());
        $this->assertNull($obj->getIsProfilMessages());
        $this->assertNull($obj->getLimiterVisuAgenda());
        $this->assertNull($obj->getMasquerFournisseurs());
        $this->assertNull($obj->getMessagesConfidentiels());
        $this->assertNull($obj->getModifAffaire());
        $this->assertNull($obj->getModifArticle());
        $this->assertNull($obj->getModifBonsTravaux());
        $this->assertNull($obj->getModifChantier());
        $this->assertNull($obj->getModifClient());
        $this->assertNull($obj->getModifCommission());
        $this->assertNull($obj->getModifDossierFact());
        $this->assertNull($obj->getModifDroitsAsp());
        $this->assertNull($obj->getModifEnVue());
        $this->assertNull($obj->getModifFournisseur());
        $this->assertNull($obj->getModifPlanFacturation());
        $this->assertNull($obj->getModifPlanTache());
        $this->assertNull($obj->getModifTache());
        $this->assertNull($obj->getModifTarif());
        $this->assertNull($obj->getMotDePasse());
        $this->assertNull($obj->getMsgRedirAuto());
        $this->assertNull($obj->getNivConfEmpPropreteRestreint());
        $this->assertNull($obj->getNiveau());
        $this->assertNull($obj->getNiveauConfidentialiteQp());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumero());
        $this->assertNull($obj->getPaInvisible());
        $this->assertNull($obj->getParcCodeRemorque());
        $this->assertNull($obj->getParcCodeVehicule());
        $this->assertNull($obj->getPasAccesQws());
        $this->assertNull($obj->getPasSaisieDesTemps());
        $this->assertNull($obj->getPasSaisieDesTempsAuto());
        $this->assertNull($obj->getPortablePerso());
        $this->assertNull($obj->getPresent());
        $this->assertNull($obj->getPrevenuNouveauCd());
        $this->assertNull($obj->getPrixKm());
        $this->assertNull($obj->getPrixVente());
        $this->assertNull($obj->getPrixVente2());
        $this->assertNull($obj->getPrixVente3());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRestrictAccesPieces());
        $this->assertNull($obj->getRestrictAccesStats());
        $this->assertNull($obj->getSaisiePvInterdite());
        $this->assertNull($obj->getSalaireMensuel());
        $this->assertNull($obj->getSelArtCollab());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionModifiables());
        $this->assertNull($obj->getSelAvLstPersoAccesGestionnaire());
        $this->assertNull($obj->getSelAvLstPersoChampsModif());
        $this->assertNull($obj->getSelAvLstPersoCopieColonne());
        $this->assertNull($obj->getSelAvLstPersoInterdireCreat());
        $this->assertNull($obj->getSelCliCollab());
        $this->assertNull($obj->getSelFrnCollab());
        $this->assertNull($obj->getSelectionArticle());
        $this->assertNull($obj->getSelectionClient());
        $this->assertNull($obj->getSelectionFournisseur());
        $this->assertNull($obj->getSuiviMessages());
        $this->assertNull($obj->getSuperviseur());
        $this->assertNull($obj->getSyncMso());
        $this->assertNull($obj->getTpPasControler());
        $this->assertNull($obj->getTpPasJournalTemps());
        $this->assertNull($obj->getTpPasNotesDeFrais());
        $this->assertNull($obj->getTpPasTpsValide());
        $this->assertNull($obj->getTpPourcentageNonOperationnel());
        $this->assertNull($obj->getTachesGroupe());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTelDirect());
        $this->assertNull($obj->getTelPerso());
        $this->assertNull($obj->getTelPortable1());
        $this->assertNull($obj->getTelPortable2());
        $this->assertNull($obj->getTelPoste());
        $this->assertNull($obj->getTpsNiveauBlocage());
        $this->assertNull($obj->getTxComInvisible());
        $this->assertNull($obj->getTypeConf2CmavCli());
        $this->assertNull($obj->getTypeConfCmavCli());
        $this->assertNull($obj->getTypeVisuAppels());
        $this->assertNull($obj->getTypeVisuTaches());
        $this->assertNull($obj->getUseMailGeneric());
        $this->assertNull($obj->getVisualisationFicheCabinet());
        $this->assertNull($obj->getVueComDroitReaffect());
        $this->assertNull($obj->getVueDevisDroitReaffect());
        $this->assertNull($obj->getVueDevisDroitSuppr());
        $this->assertNull($obj->getVueDevisDroitValid());
        $this->assertNull($obj->getYaDroitsCollab());
        $this->assertNull($obj->geteWsMdp());
    }
}
