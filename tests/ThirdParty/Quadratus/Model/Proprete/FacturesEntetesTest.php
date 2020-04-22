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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\FacturesEntetes;

/**
 * Factures entetes test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class FacturesEntetesTest extends AbstractTestCase {

    /**
     * Tests the setAdIntBtq() method.
     *
     * @return void
     */
    public function testSetAdIntBtq() {

        $obj = new FacturesEntetes();

        $obj->setAdIntBtq("adIntBtq");
        $this->assertEquals("adIntBtq", $obj->getAdIntBtq());
    }

    /**
     * Tests the setAdIntBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdIntBureauDistributeur() {

        $obj = new FacturesEntetes();

        $obj->setAdIntBureauDistributeur("adIntBureauDistributeur");
        $this->assertEquals("adIntBureauDistributeur", $obj->getAdIntBureauDistributeur());
    }

    /**
     * Tests the setAdIntCodePays() method.
     *
     * @return void
     */
    public function testSetAdIntCodePays() {

        $obj = new FacturesEntetes();

        $obj->setAdIntCodePays("adIntCodePays");
        $this->assertEquals("adIntCodePays", $obj->getAdIntCodePays());
    }

    /**
     * Tests the setAdIntCodePostal() method.
     *
     * @return void
     */
    public function testSetAdIntCodePostal() {

        $obj = new FacturesEntetes();

        $obj->setAdIntCodePostal("adIntCodePostal");
        $this->assertEquals("adIntCodePostal", $obj->getAdIntCodePostal());
    }

    /**
     * Tests the setAdIntComplement() method.
     *
     * @return void
     */
    public function testSetAdIntComplement() {

        $obj = new FacturesEntetes();

        $obj->setAdIntComplement("adIntComplement");
        $this->assertEquals("adIntComplement", $obj->getAdIntComplement());
    }

    /**
     * Tests the setAdIntNom() method.
     *
     * @return void
     */
    public function testSetAdIntNom() {

        $obj = new FacturesEntetes();

        $obj->setAdIntNom("adIntNom");
        $this->assertEquals("adIntNom", $obj->getAdIntNom());
    }

    /**
     * Tests the setAdIntNomVoie() method.
     *
     * @return void
     */
    public function testSetAdIntNomVoie() {

        $obj = new FacturesEntetes();

        $obj->setAdIntNomVoie("adIntNomVoie");
        $this->assertEquals("adIntNomVoie", $obj->getAdIntNomVoie());
    }

    /**
     * Tests the setAdIntNumVoie() method.
     *
     * @return void
     */
    public function testSetAdIntNumVoie() {

        $obj = new FacturesEntetes();

        $obj->setAdIntNumVoie("adIntNumVoie");
        $this->assertEquals("adIntNumVoie", $obj->getAdIntNumVoie());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq() {

        $obj = new FacturesEntetes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur() {

        $obj = new FacturesEntetes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setCivilite() method.
     *
     * @return void
     */
    public function testSetCivilite() {

        $obj = new FacturesEntetes();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire() {

        $obj = new FacturesEntetes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAnalClient() method.
     *
     * @return void
     */
    public function testSetCodeAnalClient() {

        $obj = new FacturesEntetes();

        $obj->setCodeAnalClient("codeAnalClient");
        $this->assertEquals("codeAnalClient", $obj->getCodeAnalClient());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier() {

        $obj = new FacturesEntetes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient() {

        $obj = new FacturesEntetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeClientFact() method.
     *
     * @return void
     */
    public function testSetCodeClientFact() {

        $obj = new FacturesEntetes();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests the setCodeDevise() method.
     *
     * @return void
     */
    public function testSetCodeDevise() {

        $obj = new FacturesEntetes();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests the setCodeFactor() method.
     *
     * @return void
     */
    public function testSetCodeFactor() {

        $obj = new FacturesEntetes();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests the setCodeLangueDesignationArticle() method.
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle() {

        $obj = new FacturesEntetes();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests the setCodeModeReglement() method.
     *
     * @return void
     */
    public function testSetCodeModeReglement() {

        $obj = new FacturesEntetes();

        $obj->setCodeModeReglement("codeModeReglement");
        $this->assertEquals("codeModeReglement", $obj->getCodeModeReglement());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays() {

        $obj = new FacturesEntetes();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal() {

        $obj = new FacturesEntetes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodeRegroupement() method.
     *
     * @return void
     */
    public function testSetCodeRegroupement() {

        $obj = new FacturesEntetes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests the setCodeRepresentant() method.
     *
     * @return void
     */
    public function testSetCodeRepresentant() {

        $obj = new FacturesEntetes();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests the setCodeTvaClient() method.
     *
     * @return void
     */
    public function testSetCodeTvaClient() {

        $obj = new FacturesEntetes();

        $obj->setCodeTvaClient("codeTvaClient");
        $this->assertEquals("codeTvaClient", $obj->getCodeTvaClient());
    }

    /**
     * Tests the setCodeVentilClient() method.
     *
     * @return void
     */
    public function testSetCodeVentilClient() {

        $obj = new FacturesEntetes();

        $obj->setCodeVentilClient("codeVentilClient");
        $this->assertEquals("codeVentilClient", $obj->getCodeVentilClient());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement() {

        $obj = new FacturesEntetes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setDateEcheance() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance() {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new FacturesEntetes();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests the setDateFacture() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFacture() {

        // Set a Date/time mock.
        $dateFacture = new DateTime("2018-09-10");

        $obj = new FacturesEntetes();

        $obj->setDateFacture($dateFacture);
        $this->assertSame($dateFacture, $obj->getDateFacture());
    }

    /**
     * Tests the setDateLimiteForcee() method.
     *
     * @return void
     */
    public function testSetDateLimiteForcee() {

        $obj = new FacturesEntetes();

        $obj->setDateLimiteForcee(true);
        $this->assertEquals(true, $obj->getDateLimiteForcee());
    }

    /**
     * Tests the setDateLimiteResiliation() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteResiliation() {

        // Set a Date/time mock.
        $dateLimiteResiliation = new DateTime("2018-09-10");

        $obj = new FacturesEntetes();

        $obj->setDateLimiteResiliation($dateLimiteResiliation);
        $this->assertSame($dateLimiteResiliation, $obj->getDateLimiteResiliation());
    }

    /**
     * Tests the setEcheanceDepart() method.
     *
     * @return void
     */
    public function testSetEcheanceDepart() {

        $obj = new FacturesEntetes();

        $obj->setEcheanceDepart("echeanceDepart");
        $this->assertEquals("echeanceDepart", $obj->getEcheanceDepart());
    }

    /**
     * Tests the setEcheanceForcee() method.
     *
     * @return void
     */
    public function testSetEcheanceForcee() {

        $obj = new FacturesEntetes();

        $obj->setEcheanceForcee(true);
        $this->assertEquals(true, $obj->getEcheanceForcee());
    }

    /**
     * Tests the setEcheanceLe() method.
     *
     * @return void
     */
    public function testSetEcheanceLe() {

        $obj = new FacturesEntetes();

        $obj->setEcheanceLe("echeanceLe");
        $this->assertEquals("echeanceLe", $obj->getEcheanceLe());
    }

    /**
     * Tests the setEcheanceNbJours() method.
     *
     * @return void
     */
    public function testSetEcheanceNbJours() {

        $obj = new FacturesEntetes();

        $obj->setEcheanceNbJours(10);
        $this->assertEquals(10, $obj->getEcheanceNbJours());
    }

    /**
     * Tests the setEtat() method.
     *
     * @return void
     */
    public function testSetEtat() {

        $obj = new FacturesEntetes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests the setFactureEuros() method.
     *
     * @return void
     */
    public function testSetFactureEuros() {

        $obj = new FacturesEntetes();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests the setFactureVm() method.
     *
     * @return void
     */
    public function testSetFactureVm() {

        $obj = new FacturesEntetes();

        $obj->setFactureVm(true);
        $this->assertEquals(true, $obj->getFactureVm());
    }

    /**
     * Tests the setFonctionCommercial() method.
     *
     * @return void
     */
    public function testSetFonctionCommercial() {

        $obj = new FacturesEntetes();

        $obj->setFonctionCommercial("fonctionCommercial");
        $this->assertEquals("fonctionCommercial", $obj->getFonctionCommercial());
    }

    /**
     * Tests the setInterlocuteur() method.
     *
     * @return void
     */
    public function testSetInterlocuteur() {

        $obj = new FacturesEntetes();

        $obj->setInterlocuteur("interlocuteur");
        $this->assertEquals("interlocuteur", $obj->getInterlocuteur());
    }

    /**
     * Tests the setLibTransfCpta() method.
     *
     * @return void
     */
    public function testSetLibTransfCpta() {

        $obj = new FacturesEntetes();

        $obj->setLibTransfCpta("libTransfCpta");
        $this->assertEquals("libTransfCpta", $obj->getLibTransfCpta());
    }

    /**
     * Tests the setLibelle() method.
     *
     * @return void
     */
    public function testSetLibelle() {

        $obj = new FacturesEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests the setLibelleTransfCpta() method.
     *
     * @return void
     */
    public function testSetLibelleTransfCpta() {

        $obj = new FacturesEntetes();

        $obj->setLibelleTransfCpta("libelleTransfCpta");
        $this->assertEquals("libelleTransfCpta", $obj->getLibelleTransfCpta());
    }

    /**
     * Tests the setLienDocDossCpta() method.
     *
     * @return void
     */
    public function testSetLienDocDossCpta() {

        $obj = new FacturesEntetes();

        $obj->setLienDocDossCpta("lienDocDossCpta");
        $this->assertEquals("lienDocDossCpta", $obj->getLienDocDossCpta());
    }

    /**
     * Tests the setLienDocument() method.
     *
     * @return void
     */
    public function testSetLienDocument() {

        $obj = new FacturesEntetes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests the setMentionLibre() method.
     *
     * @return void
     */
    public function testSetMentionLibre() {

        $obj = new FacturesEntetes();

        $obj->setMentionLibre("mentionLibre");
        $this->assertEquals("mentionLibre", $obj->getMentionLibre());
    }

    /**
     * Tests the setMontantAcompte() method.
     *
     * @return void
     */
    public function testSetMontantAcompte() {

        $obj = new FacturesEntetes();

        $obj->setMontantAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAcompte());
    }

    /**
     * Tests the setMontantHtpx() method.
     *
     * @return void
     */
    public function testSetMontantHtpx() {

        $obj = new FacturesEntetes();

        $obj->setMontantHtpx(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtpx());
    }

    /**
     * Tests the setMontantHtvm() method.
     *
     * @return void
     */
    public function testSetMontantHtvm() {

        $obj = new FacturesEntetes();

        $obj->setMontantHtvm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtvm());
    }

    /**
     * Tests the setMontantTtc() method.
     *
     * @return void
     */
    public function testSetMontantTtc() {

        $obj = new FacturesEntetes();

        $obj->setMontantTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTtc());
    }

    /**
     * Tests the setNomClient() method.
     *
     * @return void
     */
    public function testSetNomClient() {

        $obj = new FacturesEntetes();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite() {

        $obj = new FacturesEntetes();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuite2() method.
     *
     * @return void
     */
    public function testSetNomSuite2() {

        $obj = new FacturesEntetes();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests the setNomSuite3() method.
     *
     * @return void
     */
    public function testSetNomSuite3() {

        $obj = new FacturesEntetes();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie() {

        $obj = new FacturesEntetes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNombreEcheances() method.
     *
     * @return void
     */
    public function testSetNombreEcheances() {

        $obj = new FacturesEntetes();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests the setNumMandat() method.
     *
     * @return void
     */
    public function testSetNumMandat() {

        $obj = new FacturesEntetes();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie() {

        $obj = new FacturesEntetes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumeroCommandeWebFt() method.
     *
     * @return void
     */
    public function testSetNumeroCommandeWebFt() {

        $obj = new FacturesEntetes();

        $obj->setNumeroCommandeWebFt("numeroCommandeWebFt");
        $this->assertEquals("numeroCommandeWebFt", $obj->getNumeroCommandeWebFt());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte() {

        $obj = new FacturesEntetes();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setNumeroDevis() method.
     *
     * @return void
     */
    public function testSetNumeroDevis() {

        $obj = new FacturesEntetes();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests the setNumeroFacture() method.
     *
     * @return void
     */
    public function testSetNumeroFacture() {

        $obj = new FacturesEntetes();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests the setNumeroPj() method.
     *
     * @return void
     */
    public function testSetNumeroPj() {

        $obj = new FacturesEntetes();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests the setPrestation() method.
     *
     * @return void
     */
    public function testSetPrestation() {

        $obj = new FacturesEntetes();

        $obj->setPrestation("prestation");
        $this->assertEquals("prestation", $obj->getPrestation());
    }

    /**
     * Tests the setReference1() method.
     *
     * @return void
     */
    public function testSetReference1() {

        $obj = new FacturesEntetes();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }

    /**
     * Tests the setReference2() method.
     *
     * @return void
     */
    public function testSetReference2() {

        $obj = new FacturesEntetes();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }

    /**
     * Tests the setReference3() method.
     *
     * @return void
     */
    public function testSetReference3() {

        $obj = new FacturesEntetes();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }

    /**
     * Tests the setReference4() method.
     *
     * @return void
     */
    public function testSetReference4() {

        $obj = new FacturesEntetes();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }

    /**
     * Tests the setRum() method.
     *
     * @return void
     */
    public function testSetRum() {

        $obj = new FacturesEntetes();

        $obj->setRum("rum");
        $this->assertEquals("rum", $obj->getRum());
    }

    /**
     * Tests the setSaisirAdresse() method.
     *
     * @return void
     */
    public function testSetSaisirAdresse() {

        $obj = new FacturesEntetes();

        $obj->setSaisirAdresse(true);
        $this->assertEquals(true, $obj->getSaisirAdresse());
    }

    /**
     * Tests the setSoumisEscompte() method.
     *
     * @return void
     */
    public function testSetSoumisEscompte() {

        $obj = new FacturesEntetes();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests the setSoumisTaxeDeee() method.
     *
     * @return void
     */
    public function testSetSoumisTaxeDeee() {

        $obj = new FacturesEntetes();

        $obj->setSoumisTaxeDeee(true);
        $this->assertEquals(true, $obj->getSoumisTaxeDeee());
    }

    /**
     * Tests the setTauxDevise() method.
     *
     * @return void
     */
    public function testSetTauxDevise() {

        $obj = new FacturesEntetes();

        $obj->setTauxDevise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDevise());
    }

    /**
     * Tests the setTauxEscompte() method.
     *
     * @return void
     */
    public function testSetTauxEscompte() {

        $obj = new FacturesEntetes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests the setTauxRemise1() method.
     *
     * @return void
     */
    public function testSetTauxRemise1() {

        $obj = new FacturesEntetes();

        $obj->setTauxRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise1());
    }

    /**
     * Tests the setTauxRemise2() method.
     *
     * @return void
     */
    public function testSetTauxRemise2() {

        $obj = new FacturesEntetes();

        $obj->setTauxRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise2());
    }

    /**
     * Tests the setValeurIcs() method.
     *
     * @return void
     */
    public function testSetValeurIcs() {

        $obj = new FacturesEntetes();

        $obj->setValeurIcs("valeurIcs");
        $this->assertEquals("valeurIcs", $obj->getValeurIcs());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new FacturesEntetes();

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
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateFacture());
        $this->assertNull($obj->getDateLimiteForcee());
        $this->assertNull($obj->getDateLimiteResiliation());
        $this->assertNull($obj->getEcheanceDepart());
        $this->assertNull($obj->getEcheanceForcee());
        $this->assertNull($obj->getEcheanceLe());
        $this->assertNull($obj->getEcheanceNbJours());
        $this->assertNull($obj->getEtat());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getFactureVm());
        $this->assertNull($obj->getFonctionCommercial());
        $this->assertNull($obj->getInterlocuteur());
        $this->assertNull($obj->getLibTransfCpta());
        $this->assertNull($obj->getLibelle());
        $this->assertNull($obj->getLibelleTransfCpta());
        $this->assertNull($obj->getLienDocDossCpta());
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
        $this->assertNull($obj->getNumMandat());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumeroCommandeWebFt());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getNumeroDevis());
        $this->assertNull($obj->getNumeroFacture());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPrestation());
        $this->assertNull($obj->getRum());
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
        $this->assertNull($obj->getValeurIcs());
    }
}
