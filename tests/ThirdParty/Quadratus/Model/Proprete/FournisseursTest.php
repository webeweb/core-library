<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Core\Tests\AbstractTestCase;
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Fournisseurs;

/**
 * Fournisseurs test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FournisseursTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new Fournisseurs();

        $this->assertNull($obj->getApe());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getCode());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeFamille());
        $this->assertNull($obj->getCodeImputationAnalytique());
        $this->assertNull($obj->getCodeLangueDesignationArticle());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeSousFamille());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeTva1());
        $this->assertNull($obj->getCodeTva2());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCommentaires());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDelaiLe());
        $this->assertNull($obj->getDelaiNombre());
        $this->assertNull($obj->getDelaiType());
        $this->assertNull($obj->getDomiciliationBancaire1());
        $this->assertNull($obj->getDomiciliationBancaire2());
        $this->assertNull($obj->getEmail());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFax());
        $this->assertNull($obj->getFraisFixes1());
        $this->assertNull($obj->getFraisFixes2());
        $this->assertNull($obj->getFraisFixes3());
        $this->assertNull($obj->getIdentTva());
        $this->assertNull($obj->getMontantAcompte());
        $this->assertNull($obj->getNbColis());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPoids());
        $this->assertNull($obj->getPortable1());
        $this->assertNull($obj->getPortable2());
        $this->assertNull($obj->getRib());
        $this->assertNull($obj->getRc());
        $this->assertNull($obj->getReferenceClient());
        $this->assertNull($obj->getRemiseLigne1());
        $this->assertNull($obj->getRemiseLigne2());
        $this->assertNull($obj->getRemiseLigne3());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getTvaCle());
        $this->assertNull($obj->getTvaCodeDossier());
        $this->assertNull($obj->getTvaCodeRecette());
        $this->assertNull($obj->getTvaRegime());
        $this->assertNull($obj->getTel1());
        $this->assertNull($obj->getTel2());
        $this->assertNull($obj->getTelVoiture());
        $this->assertNull($obj->getTelex());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTxEscompteAchat());
    }

    /**
     * Tests the setApe() method.
     *
     * @return void
     */
    public function testSetApe() {

        $obj = new Fournisseurs();

        $obj->setApe("ape");
        $this->assertEquals("ape", $obj->getApe());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq() {

        $obj = new Fournisseurs();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new Fournisseurs();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
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
     * Tests the setCodeOfficielCommune() method.
     *
     * @return void
     */
    public function testSetCodeOfficielCommune() {

        $obj = new Fournisseurs();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new Fournisseurs();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new Fournisseurs();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
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
     * Tests the setCodeTva1() method.
     *
     * @return void
     */
    public function testSetCodeTva1() {

        $obj = new Fournisseurs();

        $obj->setCodeTva1("codeTva1");
        $this->assertEquals("codeTva1", $obj->getCodeTva1());
    }

    /**
     * Tests the setCodeTva2() method.
     *
     * @return void
     */
    public function testSetCodeTva2() {

        $obj = new Fournisseurs();

        $obj->setCodeTva2("codeTva2");
        $this->assertEquals("codeTva2", $obj->getCodeTva2());
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
     * Tests the setCommentaires() method.
     *
     * @return void
     */
    public function testSetCommentaires() {

        $obj = new Fournisseurs();

        $obj->setCommentaires("commentaires");
        $this->assertEquals("commentaires", $obj->getCommentaires());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new Fournisseurs();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
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
     * Tests the setDelaiLe() method.
     *
     * @return void
     */
    public function testSetDelaiLe() {

        $obj = new Fournisseurs();

        $obj->setDelaiLe(10);
        $this->assertEquals(10, $obj->getDelaiLe());
    }

    /**
     * Tests the setDelaiNombre() method.
     *
     * @return void
     */
    public function testSetDelaiNombre() {

        $obj = new Fournisseurs();

        $obj->setDelaiNombre(10);
        $this->assertEquals(10, $obj->getDelaiNombre());
    }

    /**
     * Tests the setDelaiType() method.
     *
     * @return void
     */
    public function testSetDelaiType() {

        $obj = new Fournisseurs();

        $obj->setDelaiType(10);
        $this->assertEquals(10, $obj->getDelaiType());
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
     * Tests the setEmail() method.
     *
     * @return void
     */
    public function testSetEmail() {

        $obj = new Fournisseurs();

        $obj->setEmail("email");
        $this->assertEquals("email", $obj->getEmail());
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
     * Tests the setFax() method.
     *
     * @return void
     */
    public function testSetFax() {

        $obj = new Fournisseurs();

        $obj->setFax("fax");
        $this->assertEquals("fax", $obj->getFax());
    }

    /**
     * Tests the setFraisFixes1() method.
     *
     * @return void
     */
    public function testSetFraisFixes1() {

        $obj = new Fournisseurs();

        $obj->setFraisFixes1(10.092018);
        $this->assertEquals(10.092018, $obj->getFraisFixes1());
    }

    /**
     * Tests the setFraisFixes2() method.
     *
     * @return void
     */
    public function testSetFraisFixes2() {

        $obj = new Fournisseurs();

        $obj->setFraisFixes2(10.092018);
        $this->assertEquals(10.092018, $obj->getFraisFixes2());
    }

    /**
     * Tests the setFraisFixes3() method.
     *
     * @return void
     */
    public function testSetFraisFixes3() {

        $obj = new Fournisseurs();

        $obj->setFraisFixes3(10.092018);
        $this->assertEquals(10.092018, $obj->getFraisFixes3());
    }

    /**
     * Tests the setIdentTva() method.
     *
     * @return void
     */
    public function testSetIdentTva() {

        $obj = new Fournisseurs();

        $obj->setIdentTva("identTva");
        $this->assertEquals("identTva", $obj->getIdentTva());
    }

    /**
     * Tests the setMontantAcompte() method.
     *
     * @return void
     */
    public function testSetMontantAcompte() {

        $obj = new Fournisseurs();

        $obj->setMontantAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAcompte());
    }

    /**
     * Tests the setNbColis() method.
     *
     * @return void
     */
    public function testSetNbColis() {

        $obj = new Fournisseurs();

        $obj->setNbColis(10);
        $this->assertEquals(10, $obj->getNbColis());
    }

    /**
     * Tests the setNom() method.
     *
     * @return void
     */
    public function testSetNom() {

        $obj = new Fournisseurs();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests the setNomResponsable() method.
     *
     * @return void
     */
    public function testSetNomResponsable() {

        $obj = new Fournisseurs();

        $obj->setNomResponsable("nomResponsable");
        $this->assertEquals("nomResponsable", $obj->getNomResponsable());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite() {

        $obj = new Fournisseurs();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomVille() method.
     *
     * @return void
     */
    public function testSetNomVille() {

        $obj = new Fournisseurs();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new Fournisseurs();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new Fournisseurs();

        $obj->setNombreEcheances(10);
        $this->assertEquals(10, $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new Fournisseurs();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
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

        $obj->setPaiementLe(10);
        $this->assertEquals(10, $obj->getPaiementLe());
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
     * Tests the setPoids() method.
     *
     * @return void
     */
    public function testSetPoids() {

        $obj = new Fournisseurs();

        $obj->setPoids(10.092018);
        $this->assertEquals(10.092018, $obj->getPoids());
    }

    /**
     * Tests the setPortable1() method.
     *
     * @return void
     */
    public function testSetPortable1() {

        $obj = new Fournisseurs();

        $obj->setPortable1("portable1");
        $this->assertEquals("portable1", $obj->getPortable1());
    }

    /**
     * Tests the setPortable2() method.
     *
     * @return void
     */
    public function testSetPortable2() {

        $obj = new Fournisseurs();

        $obj->setPortable2("portable2");
        $this->assertEquals("portable2", $obj->getPortable2());
    }

    /**
     * Tests the setRc() method.
     *
     * @return void
     */
    public function testSetRc() {

        $obj = new Fournisseurs();

        $obj->setRc("rc");
        $this->assertEquals("rc", $obj->getRc());
    }

    /**
     * Tests the setReferenceClient() method.
     *
     * @return void
     */
    public function testSetReferenceClient() {

        $obj = new Fournisseurs();

        $obj->setReferenceClient("referenceClient");
        $this->assertEquals("referenceClient", $obj->getReferenceClient());
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
     * Tests the setSiret() method.
     *
     * @return void
     */
    public function testSetSiret() {

        $obj = new Fournisseurs();

        $obj->setSiret("siret");
        $this->assertEquals("siret", $obj->getSiret());
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
     * Tests the setTel1() method.
     *
     * @return void
     */
    public function testSetTel1() {

        $obj = new Fournisseurs();

        $obj->setTel1("tel1");
        $this->assertEquals("tel1", $obj->getTel1());
    }

    /**
     * Tests the setTel2() method.
     *
     * @return void
     */
    public function testSetTel2() {

        $obj = new Fournisseurs();

        $obj->setTel2("tel2");
        $this->assertEquals("tel2", $obj->getTel2());
    }

    /**
     * Tests the setTelVoiture() method.
     *
     * @return void
     */
    public function testSetTelVoiture() {

        $obj = new Fournisseurs();

        $obj->setTelVoiture("telVoiture");
        $this->assertEquals("telVoiture", $obj->getTelVoiture());
    }

    /**
     * Tests the setTelex() method.
     *
     * @return void
     */
    public function testSetTelex() {

        $obj = new Fournisseurs();

        $obj->setTelex("telex");
        $this->assertEquals("telex", $obj->getTelex());
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
     * Tests the setTvaCle() method.
     *
     * @return void
     */
    public function testSetTvaCle() {

        $obj = new Fournisseurs();

        $obj->setTvaCle("tvaCle");
        $this->assertEquals("tvaCle", $obj->getTvaCle());
    }

    /**
     * Tests the setTvaCodeDossier() method.
     *
     * @return void
     */
    public function testSetTvaCodeDossier() {

        $obj = new Fournisseurs();

        $obj->setTvaCodeDossier("tvaCodeDossier");
        $this->assertEquals("tvaCodeDossier", $obj->getTvaCodeDossier());
    }

    /**
     * Tests the setTvaCodeRecette() method.
     *
     * @return void
     */
    public function testSetTvaCodeRecette() {

        $obj = new Fournisseurs();

        $obj->setTvaCodeRecette("tvaCodeRecette");
        $this->assertEquals("tvaCodeRecette", $obj->getTvaCodeRecette());
    }

    /**
     * Tests the setTvaRegime() method.
     *
     * @return void
     */
    public function testSetTvaRegime() {

        $obj = new Fournisseurs();

        $obj->setTvaRegime(10);
        $this->assertEquals(10, $obj->getTvaRegime());
    }

    /**
     * Tests the setTxEscompteAchat() method.
     *
     * @return void
     */
    public function testSetTxEscompteAchat() {

        $obj = new Fournisseurs();

        $obj->setTxEscompteAchat(10.092018);
        $this->assertEquals(10.092018, $obj->getTxEscompteAchat());
    }
}
