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
use WBW\Library\Quadratus\Model\QGI\Fournisseurs;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Fournisseurs test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\QGI
 */
class FournisseursTest extends AbstractTestCase {

    /**
     * Tests setAdresseSiteFournisseur()
     *
     * @return void
     */
    public function testSetAdresseSiteFournisseur(): void {

        $obj = new Fournisseurs();

        $obj->setAdresseSiteFournisseur("adresseSiteFournisseur");
        $this->assertEquals("adresseSiteFournisseur", $obj->getAdresseSiteFournisseur());
    }

    /**
     * Tests setArticlePort1()
     *
     * @return void
     */
    public function testSetArticlePort1(): void {

        $obj = new Fournisseurs();

        $obj->setArticlePort1("articlePort1");
        $this->assertEquals("articlePort1", $obj->getArticlePort1());
    }

    /**
     * Tests setArticlePort2()
     *
     * @return void
     */
    public function testSetArticlePort2(): void {

        $obj = new Fournisseurs();

        $obj->setArticlePort2("articlePort2");
        $this->assertEquals("articlePort2", $obj->getArticlePort2());
    }

    /**
     * Tests setBloque()
     *
     * @return void
     */
    public function testSetBloque(): void {

        $obj = new Fournisseurs();

        $obj->setBloque(true);
        $this->assertEquals(true, $obj->getBloque());
    }

    /**
     * Tests setChiffreAffaire()
     *
     * @return void
     */
    public function testSetChiffreAffaire(): void {

        $obj = new Fournisseurs();

        $obj->setChiffreAffaire(10.092018);
        $this->assertEquals(10.092018, $obj->getChiffreAffaire());
    }

    /**
     * Tests setCode()
     *
     * @return void
     */
    public function testSetCode(): void {

        $obj = new Fournisseurs();

        $obj->setCode("code");
        $this->assertEquals("code", $obj->getCode());
    }

    /**
     * Tests setCodeActivite()
     *
     * @return void
     */
    public function testSetCodeActivite(): void {

        $obj = new Fournisseurs();

        $obj->setCodeActivite("codeActivite");
        $this->assertEquals("codeActivite", $obj->getCodeActivite());
    }

    /**
     * Tests setCodeAssistantJuridique()
     *
     * @return void
     */
    public function testSetCodeAssistantJuridique(): void {

        $obj = new Fournisseurs();

        $obj->setCodeAssistantJuridique("codeAssistantJuridique");
        $this->assertEquals("codeAssistantJuridique", $obj->getCodeAssistantJuridique());
    }

    /**
     * Tests setCodeAssistantSocial()
     *
     * @return void
     */
    public function testSetCodeAssistantSocial(): void {

        $obj = new Fournisseurs();

        $obj->setCodeAssistantSocial("codeAssistantSocial");
        $this->assertEquals("codeAssistantSocial", $obj->getCodeAssistantSocial());
    }

    /**
     * Tests setCodeAutre1()
     *
     * @return void
     */
    public function testSetCodeAutre1(): void {

        $obj = new Fournisseurs();

        $obj->setCodeAutre1("codeAutre1");
        $this->assertEquals("codeAutre1", $obj->getCodeAutre1());
    }

    /**
     * Tests setCodeAutre2()
     *
     * @return void
     */
    public function testSetCodeAutre2(): void {

        $obj = new Fournisseurs();

        $obj->setCodeAutre2("codeAutre2");
        $this->assertEquals("codeAutre2", $obj->getCodeAutre2());
    }

    /**
     * Tests setCodeAvocat()
     *
     * @return void
     */
    public function testSetCodeAvocat(): void {

        $obj = new Fournisseurs();

        $obj->setCodeAvocat("codeAvocat");
        $this->assertEquals("codeAvocat", $obj->getCodeAvocat());
    }

    /**
     * Tests setCodeBarre()
     *
     * @return void
     */
    public function testSetCodeBarre(): void {

        $obj = new Fournisseurs();

        $obj->setCodeBarre(true);
        $this->assertEquals(true, $obj->getCodeBarre());
    }

    /**
     * Tests setCodeCategorieFournisseur()
     *
     * @return void
     */
    public function testSetCodeCategorieFournisseur(): void {

        $obj = new Fournisseurs();

        $obj->setCodeCategorieFournisseur("codeCategorieFournisseur");
        $this->assertEquals("codeCategorieFournisseur", $obj->getCodeCategorieFournisseur());
    }

    /**
     * Tests setCodeCollaborateur()
     *
     * @return void
     */
    public function testSetCodeCollaborateur(): void {

        $obj = new Fournisseurs();

        $obj->setCodeCollaborateur("codeCollaborateur");
        $this->assertEquals("codeCollaborateur", $obj->getCodeCollaborateur());
    }

    /**
     * Tests setCodeDepot()
     *
     * @return void
     */
    public function testSetCodeDepot(): void {

        $obj = new Fournisseurs();

        $obj->setCodeDepot("codeDepot");
        $this->assertEquals("codeDepot", $obj->getCodeDepot());
    }

    /**
     * Tests setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new Fournisseurs();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests setCodeEditionFact()
     *
     * @return void
     */
    public function testSetCodeEditionFact(): void {

        $obj = new Fournisseurs();

        $obj->setCodeEditionFact("codeEditionFact");
        $this->assertEquals("codeEditionFact", $obj->getCodeEditionFact());
    }

    /**
     * Tests setCodeExc()
     *
     * @return void
     */
    public function testSetCodeExc(): void {

        $obj = new Fournisseurs();

        $obj->setCodeExc("codeExc");
        $this->assertEquals("codeExc", $obj->getCodeExc());
    }

    /**
     * Tests setCodeExpert()
     *
     * @return void
     */
    public function testSetCodeExpert(): void {

        $obj = new Fournisseurs();

        $obj->setCodeExpert("codeExpert");
        $this->assertEquals("codeExpert", $obj->getCodeExpert());
    }

    /**
     * Tests setCodeFamille()
     *
     * @return void
     */
    public function testSetCodeFamille(): void {

        $obj = new Fournisseurs();

        $obj->setCodeFamille("codeFamille");
        $this->assertEquals("codeFamille", $obj->getCodeFamille());
    }

    /**
     * Tests setCodeGeo()
     *
     * @return void
     */
    public function testSetCodeGeo(): void {

        $obj = new Fournisseurs();

        $obj->setCodeGeo("codeGeo");
        $this->assertEquals("codeGeo", $obj->getCodeGeo());
    }

    /**
     * Tests setCodeImputationAnalytique()
     *
     * @return void
     */
    public function testSetCodeImputationAnalytique(): void {

        $obj = new Fournisseurs();

        $obj->setCodeImputationAnalytique("codeImputationAnalytique");
        $this->assertEquals("codeImputationAnalytique", $obj->getCodeImputationAnalytique());
    }

    /**
     * Tests setCodeLangueDesignationArticle()
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new Fournisseurs();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests setCodeOrigine()
     *
     * @return void
     */
    public function testSetCodeOrigine(): void {

        $obj = new Fournisseurs();

        $obj->setCodeOrigine("codeOrigine");
        $this->assertEquals("codeOrigine", $obj->getCodeOrigine());
    }

    /**
     * Tests setCodePortefeuille()
     *
     * @return void
     */
    public function testSetCodePortefeuille(): void {

        $obj = new Fournisseurs();

        $obj->setCodePortefeuille("codePortefeuille");
        $this->assertEquals("codePortefeuille", $obj->getCodePortefeuille());
    }

    /**
     * Tests setCodeReglement()
     *
     * @return void
     */
    public function testSetCodeReglement(): void {

        $obj = new Fournisseurs();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new Fournisseurs();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setCodeSousFamille()
     *
     * @return void
     */
    public function testSetCodeSousFamille(): void {

        $obj = new Fournisseurs();

        $obj->setCodeSousFamille("codeSousFamille");
        $this->assertEquals("codeSousFamille", $obj->getCodeSousFamille());
    }

    /**
     * Tests setCodeTransporteur()
     *
     * @return void
     */
    public function testSetCodeTransporteur(): void {

        $obj = new Fournisseurs();

        $obj->setCodeTransporteur("codeTransporteur");
        $this->assertEquals("codeTransporteur", $obj->getCodeTransporteur());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Fournisseurs();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Fournisseurs();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests setCollectif()
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Fournisseurs();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests setCompteDeVente()
     *
     * @return void
     */
    public function testSetCompteDeVente(): void {

        $obj = new Fournisseurs();

        $obj->setCompteDeVente(true);
        $this->assertEquals(true, $obj->getCompteDeVente());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
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

        $obj = new Fournisseurs();

        $obj->setDateEntree($dateEntree);
        $this->assertSame($dateEntree, $obj->getDateEntree());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
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

        $obj = new Fournisseurs();

        $obj->setDateSortie($dateSortie);
        $this->assertSame($dateSortie, $obj->getDateSortie());
    }

    /**
     * Tests setDelai()
     *
     * @return void
     */
    public function testSetDelai(): void {

        $obj = new Fournisseurs();

        $obj->setDelai(10.092018);
        $this->assertEquals(10.092018, $obj->getDelai());
    }

    /**
     * Tests setDomiciliationBancaire1()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire1(): void {

        $obj = new Fournisseurs();

        $obj->setDomiciliationBancaire1("domiciliationBancaire1");
        $this->assertEquals("domiciliationBancaire1", $obj->getDomiciliationBancaire1());
    }

    /**
     * Tests setDomiciliationBancaire2()
     *
     * @return void
     */
    public function testSetDomiciliationBancaire2(): void {

        $obj = new Fournisseurs();

        $obj->setDomiciliationBancaire2("domiciliationBancaire2");
        $this->assertEquals("domiciliationBancaire2", $obj->getDomiciliationBancaire2());
    }

    /**
     * Tests setDossierComptable()
     *
     * @return void
     */
    public function testSetDossierComptable(): void {

        $obj = new Fournisseurs();

        $obj->setDossierComptable("dossierComptable");
        $this->assertEquals("dossierComptable", $obj->getDossierComptable());
    }

    /**
     * Tests setDossierPaie()
     *
     * @return void
     */
    public function testSetDossierPaie(): void {

        $obj = new Fournisseurs();

        $obj->setDossierPaie("dossierPaie");
        $this->assertEquals("dossierPaie", $obj->getDossierPaie());
    }

    /**
     * Tests setDsCodeCollab()
     *
     * @return void
     */
    public function testSetDsCodeCollab(): void {

        $obj = new Fournisseurs();

        $obj->setDsCodeCollab("dsCodeCollab");
        $this->assertEquals("dsCodeCollab", $obj->getDsCodeCollab());
    }

    /**
     * Tests setDsDateRetour()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateRetour(): void {

        // Set a Date/time mock.
        $dsDateRetour = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDsDateRetour($dsDateRetour);
        $this->assertSame($dsDateRetour, $obj->getDsDateRetour());
    }

    /**
     * Tests setDsDateSortie()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDsDateSortie(): void {

        // Set a Date/time mock.
        $dsDateSortie = new DateTime("2018-09-10");

        $obj = new Fournisseurs();

        $obj->setDsDateSortie($dsDateSortie);
        $this->assertSame($dsDateSortie, $obj->getDsDateSortie());
    }

    /**
     * Tests setEanFrn()
     *
     * @return void
     */
    public function testSetEanFrn(): void {

        $obj = new Fournisseurs();

        $obj->setEanFrn("eanFrn");
        $this->assertEquals("eanFrn", $obj->getEanFrn());
    }

    /**
     * Tests setEcheanceFinDecade()
     *
     * @return void
     */
    public function testSetEcheanceFinDecade(): void {

        $obj = new Fournisseurs();

        $obj->setEcheanceFinDecade(true);
        $this->assertEquals(true, $obj->getEcheanceFinDecade());
    }

    /**
     * Tests setEcheanceFinQuinzaine()
     *
     * @return void
     */
    public function testSetEcheanceFinQuinzaine(): void {

        $obj = new Fournisseurs();

        $obj->setEcheanceFinQuinzaine(true);
        $this->assertEquals(true, $obj->getEcheanceFinQuinzaine());
    }

    /**
     * Tests setEtat1()
     *
     * @return void
     */
    public function testSetEtat1(): void {

        $obj = new Fournisseurs();

        $obj->setEtat1("etat1");
        $this->assertEquals("etat1", $obj->getEtat1());
    }

    /**
     * Tests setEtat2()
     *
     * @return void
     */
    public function testSetEtat2(): void {

        $obj = new Fournisseurs();

        $obj->setEtat2("etat2");
        $this->assertEquals("etat2", $obj->getEtat2());
    }

    /**
     * Tests setEtat3()
     *
     * @return void
     */
    public function testSetEtat3(): void {

        $obj = new Fournisseurs();

        $obj->setEtat3("etat3");
        $this->assertEquals("etat3", $obj->getEtat3());
    }

    /**
     * Tests setEtat4()
     *
     * @return void
     */
    public function testSetEtat4(): void {

        $obj = new Fournisseurs();

        $obj->setEtat4("etat4");
        $this->assertEquals("etat4", $obj->getEtat4());
    }

    /**
     * Tests setEtat5()
     *
     * @return void
     */
    public function testSetEtat5(): void {

        $obj = new Fournisseurs();

        $obj->setEtat5("etat5");
        $this->assertEquals("etat5", $obj->getEtat5());
    }

    /**
     * Tests setEtiquettes()
     *
     * @return void
     */
    public function testSetEtiquettes(): void {

        $obj = new Fournisseurs();

        $obj->setEtiquettes(true);
        $this->assertEquals(true, $obj->getEtiquettes());
    }

    /**
     * Tests setFactureEuros()
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new Fournisseurs();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests setFactureIsolee()
     *
     * @return void
     */
    public function testSetFactureIsolee(): void {

        $obj = new Fournisseurs();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests setFraisFixes1()
     *
     * @return void
     */
    public function testSetFraisFixes1(): void {

        $obj = new Fournisseurs();

        $obj->setFraisFixes1(true);
        $this->assertEquals(true, $obj->getFraisFixes1());
    }

    /**
     * Tests setFraisFixes2()
     *
     * @return void
     */
    public function testSetFraisFixes2(): void {

        $obj = new Fournisseurs();

        $obj->setFraisFixes2(true);
        $this->assertEquals(true, $obj->getFraisFixes2());
    }

    /**
     * Tests setFrancoPort1()
     *
     * @return void
     */
    public function testSetFrancoPort1(): void {

        $obj = new Fournisseurs();

        $obj->setFrancoPort1(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort1());
    }

    /**
     * Tests setFrancoPort2()
     *
     * @return void
     */
    public function testSetFrancoPort2(): void {

        $obj = new Fournisseurs();

        $obj->setFrancoPort2(10.092018);
        $this->assertEquals(10.092018, $obj->getFrancoPort2());
    }

    /**
     * Tests setIdentifiantTva()
     *
     * @return void
     */
    public function testSetIdentifiantTva(): void {

        $obj = new Fournisseurs();

        $obj->setIdentifiantTva("identifiantTva");
        $this->assertEquals("identifiantTva", $obj->getIdentifiantTva());
    }

    /**
     * Tests setIgp()
     *
     * @return void
     */
    public function testSetIgp(): void {

        $obj = new Fournisseurs();

        $obj->setIgp(true);
        $this->assertEquals(true, $obj->getIgp());
    }

    /**
     * Tests setInsp()
     *
     * @return void
     */
    public function testSetInsp(): void {

        $obj = new Fournisseurs();

        $obj->setInsp("insp");
        $this->assertEquals("insp", $obj->getInsp());
    }

    /**
     * Tests setMissionSurDossier()
     *
     * @return void
     */
    public function testSetMissionSurDossier(): void {

        $obj = new Fournisseurs();

        $obj->setMissionSurDossier(10);
        $this->assertEquals(10, $obj->getMissionSurDossier());
    }

    /**
     * Tests setModeleBr()
     *
     * @return void
     */
    public function testSetModeleBr(): void {

        $obj = new Fournisseurs();

        $obj->setModeleBr("modeleBr");
        $this->assertEquals("modeleBr", $obj->getModeleBr());
    }

    /**
     * Tests setModeleCommande()
     *
     * @return void
     */
    public function testSetModeleCommande(): void {

        $obj = new Fournisseurs();

        $obj->setModeleCommande("modeleCommande");
        $this->assertEquals("modeleCommande", $obj->getModeleCommande());
    }

    /**
     * Tests setModeleFacture()
     *
     * @return void
     */
    public function testSetModeleFacture(): void {

        $obj = new Fournisseurs();

        $obj->setModeleFacture("modeleFacture");
        $this->assertEquals("modeleFacture", $obj->getModeleFacture());
    }

    /**
     * Tests setModeleReleve()
     *
     * @return void
     */
    public function testSetModeleReleve(): void {

        $obj = new Fournisseurs();

        $obj->setModeleReleve("modeleReleve");
        $this->assertEquals("modeleReleve", $obj->getModeleReleve());
    }

    /**
     * Tests setMontantFranco()
     *
     * @return void
     */
    public function testSetMontantFranco(): void {

        $obj = new Fournisseurs();

        $obj->setMontantFranco(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantFranco());
    }

    /**
     * Tests setMontantMiniCde()
     *
     * @return void
     */
    public function testSetMontantMiniCde(): void {

        $obj = new Fournisseurs();

        $obj->setMontantMiniCde(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantMiniCde());
    }

    /**
     * Tests setMontantPortLiv()
     *
     * @return void
     */
    public function testSetMontantPortLiv(): void {

        $obj = new Fournisseurs();

        $obj->setMontantPortLiv(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantPortLiv());
    }

    /**
     * Tests setNbBr()
     *
     * @return void
     */
    public function testSetNbBr(): void {

        $obj = new Fournisseurs();

        $obj->setNbBr("nbBr");
        $this->assertEquals("nbBr", $obj->getNbBr());
    }

    /**
     * Tests setNbCommande()
     *
     * @return void
     */
    public function testSetNbCommande(): void {

        $obj = new Fournisseurs();

        $obj->setNbCommande("nbCommande");
        $this->assertEquals("nbCommande", $obj->getNbCommande());
    }

    /**
     * Tests setNbFacture()
     *
     * @return void
     */
    public function testSetNbFacture(): void {

        $obj = new Fournisseurs();

        $obj->setNbFacture("nbFacture");
        $this->assertEquals("nbFacture", $obj->getNbFacture());
    }

    /**
     * Tests setNbJourInterval()
     *
     * @return void
     */
    public function testSetNbJourInterval(): void {

        $obj = new Fournisseurs();

        $obj->setNbJourInterval(10);
        $this->assertEquals(10, $obj->getNbJourInterval());
    }

    /**
     * Tests setNbMaxBr()
     *
     * @return void
     */
    public function testSetNbMaxBr(): void {

        $obj = new Fournisseurs();

        $obj->setNbMaxBr("nbMaxBr");
        $this->assertEquals("nbMaxBr", $obj->getNbMaxBr());
    }

    /**
     * Tests setNbReleve()
     *
     * @return void
     */
    public function testSetNbReleve(): void {

        $obj = new Fournisseurs();

        $obj->setNbReleve("nbReleve");
        $this->assertEquals("nbReleve", $obj->getNbReleve());
    }

    /**
     * Tests setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new Fournisseurs();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests setNumFactureF()
     *
     * @return void
     */
    public function testSetNumFactureF(): void {

        $obj = new Fournisseurs();

        $obj->setNumFactureF(10);
        $this->assertEquals(10, $obj->getNumFactureF());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Fournisseurs();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setObservation1()
     *
     * @return void
     */
    public function testSetObservation1(): void {

        $obj = new Fournisseurs();

        $obj->setObservation1("observation1");
        $this->assertEquals("observation1", $obj->getObservation1());
    }

    /**
     * Tests setObservation2()
     *
     * @return void
     */
    public function testSetObservation2(): void {

        $obj = new Fournisseurs();

        $obj->setObservation2("observation2");
        $this->assertEquals("observation2", $obj->getObservation2());
    }

    /**
     * Tests setPaiementDepartLe()
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new Fournisseurs();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Tests setPaiementLe()
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new Fournisseurs();

        $obj->setPaiementLe("paiementLe");
        $this->assertEquals("paiementLe", $obj->getPaiementLe());
    }

    /**
     * Tests setPaiementNombreDeJours()
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new Fournisseurs();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests setPrefixeFactureF()
     *
     * @return void
     */
    public function testSetPrefixeFactureF(): void {

        $obj = new Fournisseurs();

        $obj->setPrefixeFactureF("prefixeFactureF");
        $this->assertEquals("prefixeFactureF", $obj->getPrefixeFactureF());
    }

    /**
     * Tests setRegime()
     *
     * @return void
     */
    public function testSetRegime(): void {

        $obj = new Fournisseurs();

        $obj->setRegime("regime");
        $this->assertEquals("regime", $obj->getRegime());
    }

    /**
     * Tests setRegroupementFact()
     *
     * @return void
     */
    public function testSetRegroupementFact(): void {

        $obj = new Fournisseurs();

        $obj->setRegroupementFact("regroupementFact");
        $this->assertEquals("regroupementFact", $obj->getRegroupementFact());
    }

    /**
     * Tests setReleveFacture()
     *
     * @return void
     */
    public function testSetReleveFacture(): void {

        $obj = new Fournisseurs();

        $obj->setReleveFacture(true);
        $this->assertEquals(true, $obj->getReleveFacture());
    }

    /**
     * Tests setRemiseLigne1()
     *
     * @return void
     */
    public function testSetRemiseLigne1(): void {

        $obj = new Fournisseurs();

        $obj->setRemiseLigne1(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne1());
    }

    /**
     * Tests setRemiseLigne2()
     *
     * @return void
     */
    public function testSetRemiseLigne2(): void {

        $obj = new Fournisseurs();

        $obj->setRemiseLigne2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne2());
    }

    /**
     * Tests setRemiseLigne3()
     *
     * @return void
     */
    public function testSetRemiseLigne3(): void {

        $obj = new Fournisseurs();

        $obj->setRemiseLigne3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemiseLigne3());
    }

    /**
     * Tests setRemisePied()
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new Fournisseurs();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests setRemisePied2()
     *
     * @return void
     */
    public function testSetRemisePied2(): void {

        $obj = new Fournisseurs();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests setRemisePied3()
     *
     * @return void
     */
    public function testSetRemisePied3(): void {

        $obj = new Fournisseurs();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests setResultat()
     *
     * @return void
     */
    public function testSetResultat(): void {

        $obj = new Fournisseurs();

        $obj->setResultat(10.092018);
        $this->assertEquals(10.092018, $obj->getResultat());
    }

    /**
     * Tests setRib()
     *
     * @return void
     */
    public function testSetRib(): void {

        $obj = new Fournisseurs();

        $obj->setRib("rib");
        $this->assertEquals("rib", $obj->getRib());
    }

    /**
     * Tests setSiegeGroupe()
     *
     * @return void
     */
    public function testSetSiegeGroupe(): void {

        $obj = new Fournisseurs();

        $obj->setSiegeGroupe(true);
        $this->assertEquals(true, $obj->getSiegeGroupe());
    }

    /**
     * Tests setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests setSoumisPort1()
     *
     * @return void
     */
    public function testSetSoumisPort1(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisPort1("soumisPort1");
        $this->assertEquals("soumisPort1", $obj->getSoumisPort1());
    }

    /**
     * Tests setSoumisPort2()
     *
     * @return void
     */
    public function testSetSoumisPort2(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisPort2("soumisPort2");
        $this->assertEquals("soumisPort2", $obj->getSoumisPort2());
    }

    /**
     * Tests setSoumisTaxe1()
     *
     * @return void
     */
    public function testSetSoumisTaxe1(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe1(true);
        $this->assertEquals(true, $obj->getSoumisTaxe1());
    }

    /**
     * Tests setSoumisTaxe2()
     *
     * @return void
     */
    public function testSetSoumisTaxe2(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe2(true);
        $this->assertEquals(true, $obj->getSoumisTaxe2());
    }

    /**
     * Tests setSoumisTaxe3()
     *
     * @return void
     */
    public function testSetSoumisTaxe3(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe3(true);
        $this->assertEquals(true, $obj->getSoumisTaxe3());
    }

    /**
     * Tests setSoumisTaxe4()
     *
     * @return void
     */
    public function testSetSoumisTaxe4(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe4(true);
        $this->assertEquals(true, $obj->getSoumisTaxe4());
    }

    /**
     * Tests setSoumisTaxe5()
     *
     * @return void
     */
    public function testSetSoumisTaxe5(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisTaxe5(true);
        $this->assertEquals(true, $obj->getSoumisTaxe5());
    }

    /**
     * Tests setSoumisTva()
     *
     * @return void
     */
    public function testSetSoumisTva(): void {

        $obj = new Fournisseurs();

        $obj->setSoumisTva(true);
        $this->assertEquals(true, $obj->getSoumisTva());
    }

    /**
     * Tests setTauxComm()
     *
     * @return void
     */
    public function testSetTauxComm(): void {

        $obj = new Fournisseurs();

        $obj->setTauxComm(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxComm());
    }

    /**
     * Tests setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new Fournisseurs();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests setToutesActivites()
     *
     * @return void
     */
    public function testSetToutesActivites(): void {

        $obj = new Fournisseurs();

        $obj->setToutesActivites("toutesActivites");
        $this->assertEquals("toutesActivites", $obj->getToutesActivites());
    }

    /**
     * Tests setTransporteur()
     *
     * @return void
     */
    public function testSetTransporteur(): void {

        $obj = new Fournisseurs();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests setTrsAffGrp()
     *
     * @return void
     */
    public function testSetTrsAffGrp(): void {

        $obj = new Fournisseurs();

        $obj->setTrsAffGrp(true);
        $this->assertEquals(true, $obj->getTrsAffGrp());
    }

    /**
     * Tests setTrsAffMatDang()
     *
     * @return void
     */
    public function testSetTrsAffMatDang(): void {

        $obj = new Fournisseurs();

        $obj->setTrsAffMatDang("trsAffMatDang");
        $this->assertEquals("trsAffMatDang", $obj->getTrsAffMatDang());
    }

    /**
     * Tests setTrsAffProdChim()
     *
     * @return void
     */
    public function testSetTrsAffProdChim(): void {

        $obj = new Fournisseurs();

        $obj->setTrsAffProdChim("trsAffProdChim");
        $this->assertEquals("trsAffProdChim", $obj->getTrsAffProdChim());
    }

    /**
     * Tests setTrsAffRefri()
     *
     * @return void
     */
    public function testSetTrsAffRefri(): void {

        $obj = new Fournisseurs();

        $obj->setTrsAffRefri("trsAffRefri");
        $this->assertEquals("trsAffRefri", $obj->getTrsAffRefri());
    }

    /**
     * Tests setTrsCodeTarif()
     *
     * @return void
     */
    public function testSetTrsCodeTarif(): void {

        $obj = new Fournisseurs();

        $obj->setTrsCodeTarif("trsCodeTarif");
        $this->assertEquals("trsCodeTarif", $obj->getTrsCodeTarif());
    }

    /**
     * Tests setTrsEstUnAffrete()
     *
     * @return void
     */
    public function testSetTrsEstUnAffrete(): void {

        $obj = new Fournisseurs();

        $obj->setTrsEstUnAffrete("trsEstUnAffrete");
        $this->assertEquals("trsEstUnAffrete", $obj->getTrsEstUnAffrete());
    }

    /**
     * Tests setTrsGestionPalettes()
     *
     * @return void
     */
    public function testSetTrsGestionPalettes(): void {

        $obj = new Fournisseurs();

        $obj->setTrsGestionPalettes(true);
        $this->assertEquals(true, $obj->getTrsGestionPalettes());
    }

    /**
     * Tests setTrsSuiviPlaningAff()
     *
     * @return void
     */
    public function testSetTrsSuiviPlaningAff(): void {

        $obj = new Fournisseurs();

        $obj->setTrsSuiviPlaningAff(true);
        $this->assertEquals(true, $obj->getTrsSuiviPlaningAff());
    }

    /**
     * Tests setTrspCentPxTrs()
     *
     * @return void
     */
    public function testSetTrspCentPxTrs(): void {

        $obj = new Fournisseurs();

        $obj->setTrspCentPxTrs(10.092018);
        $this->assertEquals(10.092018, $obj->getTrspCentPxTrs());
    }

    /**
     * Tests setTvaRegime()
     *
     * @return void
     */
    public function testSetTvaRegime(): void {

        $obj = new Fournisseurs();

        $obj->setTvaRegime("tvaRegime");
        $this->assertEquals("tvaRegime", $obj->getTvaRegime());
    }

    /**
     * Tests setTypeEditBr()
     *
     * @return void
     */
    public function testSetTypeEditBr(): void {

        $obj = new Fournisseurs();

        $obj->setTypeEditBr("typeEditBr");
        $this->assertEquals("typeEditBr", $obj->getTypeEditBr());
    }

    /**
     * Tests setTypeFournisseur()
     *
     * @return void
     */
    public function testSetTypeFournisseur(): void {

        $obj = new Fournisseurs();

        $obj->setTypeFournisseur("typeFournisseur");
        $this->assertEquals("typeFournisseur", $obj->getTypeFournisseur());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
}
