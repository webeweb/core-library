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
use WBW\Library\Quadratus\Model\Proprete\FacturesEntetes;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Factures entetes test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class FacturesEntetesTest extends AbstractTestCase {

    /**
     * Tests setAdIntBtq()
     *
     * @return void
     */
    public function testSetAdIntBtq(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntBtq("adIntBtq");
        $this->assertEquals("adIntBtq", $obj->getAdIntBtq());
    }

    /**
     * Tests setAdIntBureauDistributeur()
     *
     * @return void
     */
    public function testSetAdIntBureauDistributeur(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntBureauDistributeur("adIntBureauDistributeur");
        $this->assertEquals("adIntBureauDistributeur", $obj->getAdIntBureauDistributeur());
    }

    /**
     * Tests setAdIntCodePays()
     *
     * @return void
     */
    public function testSetAdIntCodePays(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntCodePays("adIntCodePays");
        $this->assertEquals("adIntCodePays", $obj->getAdIntCodePays());
    }

    /**
     * Tests setAdIntCodePostal()
     *
     * @return void
     */
    public function testSetAdIntCodePostal(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntCodePostal("adIntCodePostal");
        $this->assertEquals("adIntCodePostal", $obj->getAdIntCodePostal());
    }

    /**
     * Tests setAdIntComplement()
     *
     * @return void
     */
    public function testSetAdIntComplement(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntComplement("adIntComplement");
        $this->assertEquals("adIntComplement", $obj->getAdIntComplement());
    }

    /**
     * Tests setAdIntNom()
     *
     * @return void
     */
    public function testSetAdIntNom(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntNom("adIntNom");
        $this->assertEquals("adIntNom", $obj->getAdIntNom());
    }

    /**
     * Tests setAdIntNomVoie()
     *
     * @return void
     */
    public function testSetAdIntNomVoie(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntNomVoie("adIntNomVoie");
        $this->assertEquals("adIntNomVoie", $obj->getAdIntNomVoie());
    }

    /**
     * Tests setAdIntNumVoie()
     *
     * @return void
     */
    public function testSetAdIntNumVoie(): void {

        $obj = new FacturesEntetes();

        $obj->setAdIntNumVoie("adIntNumVoie");
        $this->assertEquals("adIntNumVoie", $obj->getAdIntNumVoie());
    }

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new FacturesEntetes();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new FacturesEntetes();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setCivilite()
     *
     * @return void
     */
    public function testSetCivilite(): void {

        $obj = new FacturesEntetes();

        $obj->setCivilite("civilite");
        $this->assertEquals("civilite", $obj->getCivilite());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeAnalClient()
     *
     * @return void
     */
    public function testSetCodeAnalClient(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeAnalClient("codeAnalClient");
        $this->assertEquals("codeAnalClient", $obj->getCodeAnalClient());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeClientFact()
     *
     * @return void
     */
    public function testSetCodeClientFact(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeClientFact("codeClientFact");
        $this->assertEquals("codeClientFact", $obj->getCodeClientFact());
    }

    /**
     * Tests setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests setCodeFactor()
     *
     * @return void
     */
    public function testSetCodeFactor(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeFactor("codeFactor");
        $this->assertEquals("codeFactor", $obj->getCodeFactor());
    }

    /**
     * Tests setCodeLangueDesignationArticle()
     *
     * @return void
     */
    public function testSetCodeLangueDesignationArticle(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeLangueDesignationArticle("codeLangueDesignationArticle");
        $this->assertEquals("codeLangueDesignationArticle", $obj->getCodeLangueDesignationArticle());
    }

    /**
     * Tests setCodeModeReglement()
     *
     * @return void
     */
    public function testSetCodeModeReglement(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeModeReglement("codeModeReglement");
        $this->assertEquals("codeModeReglement", $obj->getCodeModeReglement());
    }

    /**
     * Tests setCodePays()
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new FacturesEntetes();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new FacturesEntetes();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setCodeRepresentant()
     *
     * @return void
     */
    public function testSetCodeRepresentant(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests setCodeTvaClient()
     *
     * @return void
     */
    public function testSetCodeTvaClient(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeTvaClient("codeTvaClient");
        $this->assertEquals("codeTvaClient", $obj->getCodeTvaClient());
    }

    /**
     * Tests setCodeVentilClient()
     *
     * @return void
     */
    public function testSetCodeVentilClient(): void {

        $obj = new FacturesEntetes();

        $obj->setCodeVentilClient("codeVentilClient");
        $this->assertEquals("codeVentilClient", $obj->getCodeVentilClient());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new FacturesEntetes();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
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

        $obj = new FacturesEntetes();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests setDateFacture()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFacture(): void {

        // Set a Date/time mock.
        $dateFacture = new DateTime("2018-09-10");

        $obj = new FacturesEntetes();

        $obj->setDateFacture($dateFacture);
        $this->assertSame($dateFacture, $obj->getDateFacture());
    }

    /**
     * Tests setDateLimiteForcee()
     *
     * @return void
     */
    public function testSetDateLimiteForcee(): void {

        $obj = new FacturesEntetes();

        $obj->setDateLimiteForcee(true);
        $this->assertEquals(true, $obj->getDateLimiteForcee());
    }

    /**
     * Tests setDateLimiteResiliation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateLimiteResiliation(): void {

        // Set a Date/time mock.
        $dateLimiteResiliation = new DateTime("2018-09-10");

        $obj = new FacturesEntetes();

        $obj->setDateLimiteResiliation($dateLimiteResiliation);
        $this->assertSame($dateLimiteResiliation, $obj->getDateLimiteResiliation());
    }

    /**
     * Tests setEcheanceDepart()
     *
     * @return void
     */
    public function testSetEcheanceDepart(): void {

        $obj = new FacturesEntetes();

        $obj->setEcheanceDepart("echeanceDepart");
        $this->assertEquals("echeanceDepart", $obj->getEcheanceDepart());
    }

    /**
     * Tests setEcheanceForcee()
     *
     * @return void
     */
    public function testSetEcheanceForcee(): void {

        $obj = new FacturesEntetes();

        $obj->setEcheanceForcee(true);
        $this->assertEquals(true, $obj->getEcheanceForcee());
    }

    /**
     * Tests setEcheanceLe()
     *
     * @return void
     */
    public function testSetEcheanceLe(): void {

        $obj = new FacturesEntetes();

        $obj->setEcheanceLe("echeanceLe");
        $this->assertEquals("echeanceLe", $obj->getEcheanceLe());
    }

    /**
     * Tests setEcheanceNbJours()
     *
     * @return void
     */
    public function testSetEcheanceNbJours(): void {

        $obj = new FacturesEntetes();

        $obj->setEcheanceNbJours(10);
        $this->assertEquals(10, $obj->getEcheanceNbJours());
    }

    /**
     * Tests setEtat()
     *
     * @return void
     */
    public function testSetEtat(): void {

        $obj = new FacturesEntetes();

        $obj->setEtat("etat");
        $this->assertEquals("etat", $obj->getEtat());
    }

    /**
     * Tests setFactureEuros()
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new FacturesEntetes();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests setFactureVm()
     *
     * @return void
     */
    public function testSetFactureVm(): void {

        $obj = new FacturesEntetes();

        $obj->setFactureVm(true);
        $this->assertEquals(true, $obj->getFactureVm());
    }

    /**
     * Tests setFonctionCommercial()
     *
     * @return void
     */
    public function testSetFonctionCommercial(): void {

        $obj = new FacturesEntetes();

        $obj->setFonctionCommercial("fonctionCommercial");
        $this->assertEquals("fonctionCommercial", $obj->getFonctionCommercial());
    }

    /**
     * Tests setInterlocuteur()
     *
     * @return void
     */
    public function testSetInterlocuteur(): void {

        $obj = new FacturesEntetes();

        $obj->setInterlocuteur("interlocuteur");
        $this->assertEquals("interlocuteur", $obj->getInterlocuteur());
    }

    /**
     * Tests setLibTransfCpta()
     *
     * @return void
     */
    public function testSetLibTransfCpta(): void {

        $obj = new FacturesEntetes();

        $obj->setLibTransfCpta("libTransfCpta");
        $this->assertEquals("libTransfCpta", $obj->getLibTransfCpta());
    }

    /**
     * Tests setLibelle()
     *
     * @return void
     */
    public function testSetLibelle(): void {

        $obj = new FacturesEntetes();

        $obj->setLibelle("libelle");
        $this->assertEquals("libelle", $obj->getLibelle());
    }

    /**
     * Tests setLibelleTransfCpta()
     *
     * @return void
     */
    public function testSetLibelleTransfCpta(): void {

        $obj = new FacturesEntetes();

        $obj->setLibelleTransfCpta("libelleTransfCpta");
        $this->assertEquals("libelleTransfCpta", $obj->getLibelleTransfCpta());
    }

    /**
     * Tests setLienDocDossCpta()
     *
     * @return void
     */
    public function testSetLienDocDossCpta(): void {

        $obj = new FacturesEntetes();

        $obj->setLienDocDossCpta("lienDocDossCpta");
        $this->assertEquals("lienDocDossCpta", $obj->getLienDocDossCpta());
    }

    /**
     * Tests setLienDocument()
     *
     * @return void
     */
    public function testSetLienDocument(): void {

        $obj = new FacturesEntetes();

        $obj->setLienDocument("lienDocument");
        $this->assertEquals("lienDocument", $obj->getLienDocument());
    }

    /**
     * Tests setMentionLibre()
     *
     * @return void
     */
    public function testSetMentionLibre(): void {

        $obj = new FacturesEntetes();

        $obj->setMentionLibre("mentionLibre");
        $this->assertEquals("mentionLibre", $obj->getMentionLibre());
    }

    /**
     * Tests setMontantAcompte()
     *
     * @return void
     */
    public function testSetMontantAcompte(): void {

        $obj = new FacturesEntetes();

        $obj->setMontantAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAcompte());
    }

    /**
     * Tests setMontantHtpx()
     *
     * @return void
     */
    public function testSetMontantHtpx(): void {

        $obj = new FacturesEntetes();

        $obj->setMontantHtpx(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtpx());
    }

    /**
     * Tests setMontantHtvm()
     *
     * @return void
     */
    public function testSetMontantHtvm(): void {

        $obj = new FacturesEntetes();

        $obj->setMontantHtvm(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantHtvm());
    }

    /**
     * Tests setMontantTtc()
     *
     * @return void
     */
    public function testSetMontantTtc(): void {

        $obj = new FacturesEntetes();

        $obj->setMontantTtc(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantTtc());
    }

    /**
     * Tests setNomClient()
     *
     * @return void
     */
    public function testSetNomClient(): void {

        $obj = new FacturesEntetes();

        $obj->setNomClient("nomClient");
        $this->assertEquals("nomClient", $obj->getNomClient());
    }

    /**
     * Tests setNomSuite()
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new FacturesEntetes();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests setNomSuite2()
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new FacturesEntetes();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests setNomSuite3()
     *
     * @return void
     */
    public function testSetNomSuite3(): void {

        $obj = new FacturesEntetes();

        $obj->setNomSuite3("nomSuite3");
        $this->assertEquals("nomSuite3", $obj->getNomSuite3());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new FacturesEntetes();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new FacturesEntetes();

        $obj->setNombreEcheances("nombreEcheances");
        $this->assertEquals("nombreEcheances", $obj->getNombreEcheances());
    }

    /**
     * Tests setNumMandat()
     *
     * @return void
     */
    public function testSetNumMandat(): void {

        $obj = new FacturesEntetes();

        $obj->setNumMandat(10);
        $this->assertEquals(10, $obj->getNumMandat());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new FacturesEntetes();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setNumeroCommandeWebFt()
     *
     * @return void
     */
    public function testSetNumeroCommandeWebFt(): void {

        $obj = new FacturesEntetes();

        $obj->setNumeroCommandeWebFt("numeroCommandeWebFt");
        $this->assertEquals("numeroCommandeWebFt", $obj->getNumeroCommandeWebFt());
    }

    /**
     * Tests setNumeroCompte()
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new FacturesEntetes();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests setNumeroDevis()
     *
     * @return void
     */
    public function testSetNumeroDevis(): void {

        $obj = new FacturesEntetes();

        $obj->setNumeroDevis("numeroDevis");
        $this->assertEquals("numeroDevis", $obj->getNumeroDevis());
    }

    /**
     * Tests setNumeroFacture()
     *
     * @return void
     */
    public function testSetNumeroFacture(): void {

        $obj = new FacturesEntetes();

        $obj->setNumeroFacture("numeroFacture");
        $this->assertEquals("numeroFacture", $obj->getNumeroFacture());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new FacturesEntetes();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setPrestation()
     *
     * @return void
     */
    public function testSetPrestation(): void {

        $obj = new FacturesEntetes();

        $obj->setPrestation("prestation");
        $this->assertEquals("prestation", $obj->getPrestation());
    }

    /**
     * Tests setReference1()
     *
     * @return void
     */
    public function testSetReference1(): void {

        $obj = new FacturesEntetes();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }

    /**
     * Tests setReference2()
     *
     * @return void
     */
    public function testSetReference2(): void {

        $obj = new FacturesEntetes();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }

    /**
     * Tests setReference3()
     *
     * @return void
     */
    public function testSetReference3(): void {

        $obj = new FacturesEntetes();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }

    /**
     * Tests setReference4()
     *
     * @return void
     */
    public function testSetReference4(): void {

        $obj = new FacturesEntetes();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }

    /**
     * Tests setRum()
     *
     * @return void
     */
    public function testSetRum(): void {

        $obj = new FacturesEntetes();

        $obj->setRum("rum");
        $this->assertEquals("rum", $obj->getRum());
    }

    /**
     * Tests setSaisirAdresse()
     *
     * @return void
     */
    public function testSetSaisirAdresse(): void {

        $obj = new FacturesEntetes();

        $obj->setSaisirAdresse(true);
        $this->assertEquals(true, $obj->getSaisirAdresse());
    }

    /**
     * Tests setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new FacturesEntetes();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests setSoumisTaxeDeee()
     *
     * @return void
     */
    public function testSetSoumisTaxeDeee(): void {

        $obj = new FacturesEntetes();

        $obj->setSoumisTaxeDeee(true);
        $this->assertEquals(true, $obj->getSoumisTaxeDeee());
    }

    /**
     * Tests setTauxDevise()
     *
     * @return void
     */
    public function testSetTauxDevise(): void {

        $obj = new FacturesEntetes();

        $obj->setTauxDevise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDevise());
    }

    /**
     * Tests setTauxEscompte()
     *
     * @return void
     */
    public function testSetTauxEscompte(): void {

        $obj = new FacturesEntetes();

        $obj->setTauxEscompte(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxEscompte());
    }

    /**
     * Tests setTauxRemise1()
     *
     * @return void
     */
    public function testSetTauxRemise1(): void {

        $obj = new FacturesEntetes();

        $obj->setTauxRemise1(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise1());
    }

    /**
     * Tests setTauxRemise2()
     *
     * @return void
     */
    public function testSetTauxRemise2(): void {

        $obj = new FacturesEntetes();

        $obj->setTauxRemise2(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxRemise2());
    }

    /**
     * Tests setValeurIcs()
     *
     * @return void
     */
    public function testSetValeurIcs(): void {

        $obj = new FacturesEntetes();

        $obj->setValeurIcs("valeurIcs");
        $this->assertEquals("valeurIcs", $obj->getValeurIcs());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

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
