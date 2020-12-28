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
use WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete\Chantiers;

/**
 * Chantiers test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Tests\ThirdParty\Quadratus\Model\Proprete
 */
class ChantiersTest extends AbstractTestCase {

    /**
     * Tests the setAdFBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetAdFBureauDistributeur(): void {

        $obj = new Chantiers();

        $obj->setAdFBureauDistributeur("adFBureauDistributeur");
        $this->assertEquals("adFBureauDistributeur", $obj->getAdFBureauDistributeur());
    }

    /**
     * Tests the setAdFCivilite() method.
     *
     * @return void
     */
    public function testSetAdFCivilite(): void {

        $obj = new Chantiers();

        $obj->setAdFCivilite("adFCivilite");
        $this->assertEquals("adFCivilite", $obj->getAdFCivilite());
    }

    /**
     * Tests the setAdFCodePays() method.
     *
     * @return void
     */
    public function testSetAdFCodePays(): void {

        $obj = new Chantiers();

        $obj->setAdFCodePays("adFCodePays");
        $this->assertEquals("adFCodePays", $obj->getAdFCodePays());
    }

    /**
     * Tests the setAdFCodePostal() method.
     *
     * @return void
     */
    public function testSetAdFCodePostal(): void {

        $obj = new Chantiers();

        $obj->setAdFCodePostal("adFCodePostal");
        $this->assertEquals("adFCodePostal", $obj->getAdFCodePostal());
    }

    /**
     * Tests the setAdFComplement() method.
     *
     * @return void
     */
    public function testSetAdFComplement(): void {

        $obj = new Chantiers();

        $obj->setAdFComplement("adFComplement");
        $this->assertEquals("adFComplement", $obj->getAdFComplement());
    }

    /**
     * Tests the setAdFNomClient() method.
     *
     * @return void
     */
    public function testSetAdFNomClient(): void {

        $obj = new Chantiers();

        $obj->setAdFNomClient("adFNomClient");
        $this->assertEquals("adFNomClient", $obj->getAdFNomClient());
    }

    /**
     * Tests the setAdFNomSuite() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite(): void {

        $obj = new Chantiers();

        $obj->setAdFNomSuite("adFNomSuite");
        $this->assertEquals("adFNomSuite", $obj->getAdFNomSuite());
    }

    /**
     * Tests the setAdFNomSuite2() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite2(): void {

        $obj = new Chantiers();

        $obj->setAdFNomSuite2("adFNomSuite2");
        $this->assertEquals("adFNomSuite2", $obj->getAdFNomSuite2());
    }

    /**
     * Tests the setAdFNomSuite3() method.
     *
     * @return void
     */
    public function testSetAdFNomSuite3(): void {

        $obj = new Chantiers();

        $obj->setAdFNomSuite3("adFNomSuite3");
        $this->assertEquals("adFNomSuite3", $obj->getAdFNomSuite3());
    }

    /**
     * Tests the setAdFNomVoie() method.
     *
     * @return void
     */
    public function testSetAdFNomVoie(): void {

        $obj = new Chantiers();

        $obj->setAdFNomVoie("adFNomVoie");
        $this->assertEquals("adFNomVoie", $obj->getAdFNomVoie());
    }

    /**
     * Tests the setAdFNumVoie() method.
     *
     * @return void
     */
    public function testSetAdFNumVoie(): void {

        $obj = new Chantiers();

        $obj->setAdFNumVoie("adFNumVoie");
        $this->assertEquals("adFNumVoie", $obj->getAdFNumVoie());
    }

    /**
     * Tests the setAdFTypeAdresse() method.
     *
     * @return void
     */
    public function testSetAdFTypeAdresse(): void {

        $obj = new Chantiers();

        $obj->setAdFTypeAdresse("adFTypeAdresse");
        $this->assertEquals("adFTypeAdresse", $obj->getAdFTypeAdresse());
    }

    /**
     * Tests the setAdFbtq() method.
     *
     * @return void
     */
    public function testSetAdFbtq(): void {

        $obj = new Chantiers();

        $obj->setAdFbtq("adFbtq");
        $this->assertEquals("adFbtq", $obj->getAdFbtq());
    }

    /**
     * Tests the setAdresse() method.
     *
     * @return void
     */
    public function testSetAdresse(): void {

        $obj = new Chantiers();

        $obj->setAdresse("adresse");
        $this->assertEquals("adresse", $obj->getAdresse());
    }

    /**
     * Tests the setBtq() method.
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new Chantiers();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests the setBtqLivraison() method.
     *
     * @return void
     */
    public function testSetBtqLivraison(): void {

        $obj = new Chantiers();

        $obj->setBtqLivraison("btqLivraison");
        $this->assertEquals("btqLivraison", $obj->getBtqLivraison());
    }

    /**
     * Tests the setBudgetCommande() method.
     *
     * @return void
     */
    public function testSetBudgetCommande(): void {

        $obj = new Chantiers();

        $obj->setBudgetCommande(10.092018);
        $this->assertEquals(10.092018, $obj->getBudgetCommande());
    }

    /**
     * Tests the setBureauDistributeur() method.
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new Chantiers();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests the setBureauDistributeurLivraison() method.
     *
     * @return void
     */
    public function testSetBureauDistributeurLivraison(): void {

        $obj = new Chantiers();

        $obj->setBureauDistributeurLivraison("bureauDistributeurLivraison");
        $this->assertEquals("bureauDistributeurLivraison", $obj->getBureauDistributeurLivraison());
    }

    /**
     * Tests the setChantierPonctuel() method.
     *
     * @return void
     */
    public function testSetChantierPonctuel(): void {

        $obj = new Chantiers();

        $obj->setChantierPonctuel(true);
        $this->assertEquals(true, $obj->getChantierPonctuel());
    }

    /**
     * Tests the setChefEquipe() method.
     *
     * @return void
     */
    public function testSetChefEquipe(): void {

        $obj = new Chantiers();

        $obj->setChefEquipe("chefEquipe");
        $this->assertEquals("chefEquipe", $obj->getChefEquipe());
    }

    /**
     * Tests the setCleAlpha() method.
     *
     * @return void
     */
    public function testSetCleAlpha(): void {

        $obj = new Chantiers();

        $obj->setCleAlpha("cleAlpha");
        $this->assertEquals("cleAlpha", $obj->getCleAlpha());
    }

    /**
     * Tests the setCodeAffaire() method.
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new Chantiers();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests the setCodeAgence() method.
     *
     * @return void
     */
    public function testSetCodeAgence(): void {

        $obj = new Chantiers();

        $obj->setCodeAgence("codeAgence");
        $this->assertEquals("codeAgence", $obj->getCodeAgence());
    }

    /**
     * Tests the setCodeAnalytique() method.
     *
     * @return void
     */
    public function testSetCodeAnalytique(): void {

        $obj = new Chantiers();

        $obj->setCodeAnalytique("codeAnalytique");
        $this->assertEquals("codeAnalytique", $obj->getCodeAnalytique());
    }

    /**
     * Tests the setCodeChantier() method.
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new Chantiers();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests the setCodeClient() method.
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new Chantiers();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests the setCodeCommercial() method.
     *
     * @return void
     */
    public function testSetCodeCommercial(): void {

        $obj = new Chantiers();

        $obj->setCodeCommercial("codeCommercial");
        $this->assertEquals("codeCommercial", $obj->getCodeCommercial());
    }

    /**
     * Tests the setCodeEmpInspecteur() method.
     *
     * @return void
     */
    public function testSetCodeEmpInspecteur(): void {

        $obj = new Chantiers();

        $obj->setCodeEmpInspecteur("codeEmpInspecteur");
        $this->assertEquals("codeEmpInspecteur", $obj->getCodeEmpInspecteur());
    }

    /**
     * Tests the setCodeFormule() method.
     *
     * @return void
     */
    public function testSetCodeFormule(): void {

        $obj = new Chantiers();

        $obj->setCodeFormule("codeFormule");
        $this->assertEquals("codeFormule", $obj->getCodeFormule());
    }

    /**
     * Tests the setCodeLivraison() method.
     *
     * @return void
     */
    public function testSetCodeLivraison(): void {

        $obj = new Chantiers();

        $obj->setCodeLivraison("codeLivraison");
        $this->assertEquals("codeLivraison", $obj->getCodeLivraison());
    }

    /**
     * Tests the setCodePays() method.
     *
     * @return void
     */
    public function testSetCodePays(): void {

        $obj = new Chantiers();

        $obj->setCodePays("codePays");
        $this->assertEquals("codePays", $obj->getCodePays());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Chantiers();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodePostalLivraison() method.
     *
     * @return void
     */
    public function testSetCodePostalLivraison(): void {

        $obj = new Chantiers();

        $obj->setCodePostalLivraison("codePostalLivraison");
        $this->assertEquals("codePostalLivraison", $obj->getCodePostalLivraison());
    }

    /**
     * Tests the setCodeRegMarge() method.
     *
     * @return void
     */
    public function testSetCodeRegMarge(): void {

        $obj = new Chantiers();

        $obj->setCodeRegMarge("codeRegMarge");
        $this->assertEquals("codeRegMarge", $obj->getCodeRegMarge());
    }

    /**
     * Tests the setCodeRevision() method.
     *
     * @return void
     */
    public function testSetCodeRevision(): void {

        $obj = new Chantiers();

        $obj->setCodeRevision("codeRevision");
        $this->assertEquals("codeRevision", $obj->getCodeRevision());
    }

    /**
     * Tests the setCodeTva() method.
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new Chantiers();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests the setCodeVentilCompta() method.
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new Chantiers();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests the setCollectif() method.
     *
     * @return void
     */
    public function testSetCollectif(): void {

        $obj = new Chantiers();

        $obj->setCollectif("collectif");
        $this->assertEquals("collectif", $obj->getCollectif());
    }

    /**
     * Tests the setCommandeIsolee() method.
     *
     * @return void
     */
    public function testSetCommandeIsolee(): void {

        $obj = new Chantiers();

        $obj->setCommandeIsolee(true);
        $this->assertEquals(true, $obj->getCommandeIsolee());
    }

    /**
     * Tests the setComplement() method.
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new Chantiers();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests the setComplementLivraison() method.
     *
     * @return void
     */
    public function testSetComplementLivraison(): void {

        $obj = new Chantiers();

        $obj->setComplementLivraison("complementLivraison");
        $this->assertEquals("complementLivraison", $obj->getComplementLivraison());
    }

    /**
     * Tests the setDateCreat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreat(): void {

        // Set a Date/time mock.
        $dateCreat = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateCreat($dateCreat);
        $this->assertSame($dateCreat, $obj->getDateCreat());
    }

    /**
     * Tests the setDateDebut() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateDebut(): void {

        // Set a Date/time mock.
        $dateDebut = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateDebut($dateDebut);
        $this->assertSame($dateDebut, $obj->getDateDebut());
    }

    /**
     * Tests the setDateEcheanceContrat() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheanceContrat(): void {

        // Set a Date/time mock.
        $dateEcheanceContrat = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateEcheanceContrat($dateEcheanceContrat);
        $this->assertSame($dateEcheanceContrat, $obj->getDateEcheanceContrat());
    }

    /**
     * Tests the setDateFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateFin(): void {

        // Set a Date/time mock.
        $dateFin = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateFin($dateFin);
        $this->assertSame($dateFin, $obj->getDateFin());
    }

    /**
     * Tests the setDateModif() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModif(): void {

        // Set a Date/time mock.
        $dateModif = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateModif($dateModif);
        $this->assertSame($dateModif, $obj->getDateModif());
    }

    /**
     * Tests the setDateRevision() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateRevision(): void {

        // Set a Date/time mock.
        $dateRevision = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDateRevision($dateRevision);
        $this->assertSame($dateRevision, $obj->getDateRevision());
    }

    /**
     * Tests the setDescriptif() method.
     *
     * @return void
     */
    public function testSetDescriptif(): void {

        $obj = new Chantiers();

        $obj->setDescriptif("descriptif");
        $this->assertEquals("descriptif", $obj->getDescriptif());
    }

    /**
     * Tests the setDtAvantDernPrepa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtAvantDernPrepa(): void {

        // Set a Date/time mock.
        $dtAvantDernPrepa = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtAvantDernPrepa($dtAvantDernPrepa);
        $this->assertSame($dtAvantDernPrepa, $obj->getDtAvantDernPrepa());
    }

    /**
     * Tests the setDtDernPrepa() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtDernPrepa(): void {

        // Set a Date/time mock.
        $dtDernPrepa = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtDernPrepa($dtDernPrepa);
        $this->assertSame($dtDernPrepa, $obj->getDtDernPrepa());
    }

    /**
     * Tests the setDtValiditeFactDeb() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDeb(): void {

        // Set a Date/time mock.
        $dtValiditeFactDeb = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactDeb($dtValiditeFactDeb);
        $this->assertSame($dtValiditeFactDeb, $obj->getDtValiditeFactDeb());
    }

    /**
     * Tests the setDtValiditeFactDebDebMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactDebDebMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactDebDebMois = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactDebDebMois($dtValiditeFactDebDebMois);
        $this->assertSame($dtValiditeFactDebDebMois, $obj->getDtValiditeFactDebDebMois());
    }

    /**
     * Tests the setDtValiditeFactFin() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFin(): void {

        // Set a Date/time mock.
        $dtValiditeFactFin = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactFin($dtValiditeFactFin);
        $this->assertSame($dtValiditeFactFin, $obj->getDtValiditeFactFin());
    }

    /**
     * Tests the setDtValiditeFactFinFinMois() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDtValiditeFactFinFinMois(): void {

        // Set a Date/time mock.
        $dtValiditeFactFinFinMois = new DateTime("2018-09-10");

        $obj = new Chantiers();

        $obj->setDtValiditeFactFinFinMois($dtValiditeFactFinFinMois);
        $this->assertSame($dtValiditeFactFinFinMois, $obj->getDtValiditeFactFinFinMois());
    }

    /**
     * Tests the setEcheanceAnnuelle() method.
     *
     * @return void
     */
    public function testSetEcheanceAnnuelle(): void {

        $obj = new Chantiers();

        $obj->setEcheanceAnnuelle(true);
        $this->assertEquals(true, $obj->getEcheanceAnnuelle());
    }

    /**
     * Tests the setFactNegoceIsolee() method.
     *
     * @return void
     */
    public function testSetFactNegoceIsolee(): void {

        $obj = new Chantiers();

        $obj->setFactNegoceIsolee(true);
        $this->assertEquals(true, $obj->getFactNegoceIsolee());
    }

    /**
     * Tests the setFactureIsolee() method.
     *
     * @return void
     */
    public function testSetFactureIsolee(): void {

        $obj = new Chantiers();

        $obj->setFactureIsolee(true);
        $this->assertEquals(true, $obj->getFactureIsolee());
    }

    /**
     * Tests the setJourFact() method.
     *
     * @return void
     */
    public function testSetJourFact(): void {

        $obj = new Chantiers();

        $obj->setJourFact("jourFact");
        $this->assertEquals("jourFact", $obj->getJourFact());
    }

    /**
     * Tests the setLatitude() method.
     *
     * @return void
     */
    public function testSetLatitude(): void {

        $obj = new Chantiers();

        $obj->setLatitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLatitude());
    }

    /**
     * Tests the setLoiChatelSurFacture() method.
     *
     * @return void
     */
    public function testSetLoiChatelSurFacture(): void {

        $obj = new Chantiers();

        $obj->setLoiChatelSurFacture(true);
        $this->assertEquals(true, $obj->getLoiChatelSurFacture());
    }

    /**
     * Tests the setLongitude() method.
     *
     * @return void
     */
    public function testSetLongitude(): void {

        $obj = new Chantiers();

        $obj->setLongitude(10.092018);
        $this->assertEquals(10.092018, $obj->getLongitude());
    }

    /**
     * Tests the setMajStockByDa() method.
     *
     * @return void
     */
    public function testSetMajStockByDa(): void {

        $obj = new Chantiers();

        $obj->setMajStockByDa(true);
        $this->assertEquals(true, $obj->getMajStockByDa());
    }

    /**
     * Tests the setNbControlesPrevus() method.
     *
     * @return void
     */
    public function testSetNbControlesPrevus(): void {

        $obj = new Chantiers();

        $obj->setNbControlesPrevus(10);
        $this->assertEquals(10, $obj->getNbControlesPrevus());
    }

    /**
     * Tests the setNbMoisPreavis() method.
     *
     * @return void
     */
    public function testSetNbMoisPreavis(): void {

        $obj = new Chantiers();

        $obj->setNbMoisPreavis("nbMoisPreavis");
        $this->assertEquals("nbMoisPreavis", $obj->getNbMoisPreavis());
    }

    /**
     * Tests the setNomAdresse() method.
     *
     * @return void
     */
    public function testSetNomAdresse(): void {

        $obj = new Chantiers();

        $obj->setNomAdresse("nomAdresse");
        $this->assertEquals("nomAdresse", $obj->getNomAdresse());
    }

    /**
     * Tests the setNomChantier() method.
     *
     * @return void
     */
    public function testSetNomChantier(): void {

        $obj = new Chantiers();

        $obj->setNomChantier("nomChantier");
        $this->assertEquals("nomChantier", $obj->getNomChantier());
    }

    /**
     * Tests the setNomLivraison() method.
     *
     * @return void
     */
    public function testSetNomLivraison(): void {

        $obj = new Chantiers();

        $obj->setNomLivraison("nomLivraison");
        $this->assertEquals("nomLivraison", $obj->getNomLivraison());
    }

    /**
     * Tests the setNomResponsable() method.
     *
     * @return void
     */
    public function testSetNomResponsable(): void {

        $obj = new Chantiers();

        $obj->setNomResponsable("nomResponsable");
        $this->assertEquals("nomResponsable", $obj->getNomResponsable());
    }

    /**
     * Tests the setNomSuite() method.
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new Chantiers();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests the setNomSuiteLivraison() method.
     *
     * @return void
     */
    public function testSetNomSuiteLivraison(): void {

        $obj = new Chantiers();

        $obj->setNomSuiteLivraison("nomSuiteLivraison");
        $this->assertEquals("nomSuiteLivraison", $obj->getNomSuiteLivraison());
    }

    /**
     * Tests the setNomVoie() method.
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new Chantiers();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests the setNomVoieLivraison() method.
     *
     * @return void
     */
    public function testSetNomVoieLivraison(): void {

        $obj = new Chantiers();

        $obj->setNomVoieLivraison("nomVoieLivraison");
        $this->assertEquals("nomVoieLivraison", $obj->getNomVoieLivraison());
    }

    /**
     * Tests the setNumVoie() method.
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new Chantiers();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests the setNumVoieLivraison() method.
     *
     * @return void
     */
    public function testSetNumVoieLivraison(): void {

        $obj = new Chantiers();

        $obj->setNumVoieLivraison("numVoieLivraison");
        $this->assertEquals("numVoieLivraison", $obj->getNumVoieLivraison());
    }

    /**
     * Tests the setNumeroCompte() method.
     *
     * @return void
     */
    public function testSetNumeroCompte(): void {

        $obj = new Chantiers();

        $obj->setNumeroCompte("numeroCompte");
        $this->assertEquals("numeroCompte", $obj->getNumeroCompte());
    }

    /**
     * Tests the setPlanFact() method.
     *
     * @return void
     */
    public function testSetPlanFact(): void {

        $obj = new Chantiers();

        $obj->setPlanFact(true);
        $this->assertEquals(true, $obj->getPlanFact());
    }

    /**
     * Tests the setPourcConsoProduit() method.
     *
     * @return void
     */
    public function testSetPourcConsoProduit(): void {

        $obj = new Chantiers();

        $obj->setPourcConsoProduit(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcConsoProduit());
    }

    /**
     * Tests the setPourcMargePrevis() method.
     *
     * @return void
     */
    public function testSetPourcMargePrevis(): void {

        $obj = new Chantiers();

        $obj->setPourcMargePrevis(10.092018);
        $this->assertEquals(10.092018, $obj->getPourcMargePrevis());
    }

    /**
     * Tests the setReferenceFacture() method.
     *
     * @return void
     */
    public function testSetReferenceFacture(): void {

        $obj = new Chantiers();

        $obj->setReferenceFacture("referenceFacture");
        $this->assertEquals("referenceFacture", $obj->getReferenceFacture());
    }

    /**
     * Tests the setReferenceFacture2() method.
     *
     * @return void
     */
    public function testSetReferenceFacture2(): void {

        $obj = new Chantiers();

        $obj->setReferenceFacture2("referenceFacture2");
        $this->assertEquals("referenceFacture2", $obj->getReferenceFacture2());
    }

    /**
     * Tests the setRuptDateLivraison() method.
     *
     * @return void
     */
    public function testSetRuptDateLivraison(): void {

        $obj = new Chantiers();

        $obj->setRuptDateLivraison(true);
        $this->assertEquals(true, $obj->getRuptDateLivraison());
    }

    /**
     * Tests the setTelephone() method.
     *
     * @return void
     */
    public function testSetTelephone(): void {

        $obj = new Chantiers();

        $obj->setTelephone("telephone");
        $this->assertEquals("telephone", $obj->getTelephone());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Chantiers();

        $this->assertNull($obj->getAdFbtq());
        $this->assertNull($obj->getAdFBureauDistributeur());
        $this->assertNull($obj->getAdFCivilite());
        $this->assertNull($obj->getAdFCodePays());
        $this->assertNull($obj->getAdFCodePostal());
        $this->assertNull($obj->getAdFComplement());
        $this->assertNull($obj->getAdFNomClient());
        $this->assertNull($obj->getAdFNomSuite());
        $this->assertNull($obj->getAdFNomSuite2());
        $this->assertNull($obj->getAdFNomSuite3());
        $this->assertNull($obj->getAdFNomVoie());
        $this->assertNull($obj->getAdFNumVoie());
        $this->assertNull($obj->getAdFTypeAdresse());
        $this->assertNull($obj->getAdresse());
        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtqLivraison());
        $this->assertNull($obj->getBudgetCommande());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeurLivraison());
        $this->assertNull($obj->getChantierPonctuel());
        $this->assertNull($obj->getChefEquipe());
        $this->assertNull($obj->getCleAlpha());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeAgence());
        $this->assertNull($obj->getCodeAnalytique());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeCommercial());
        $this->assertNull($obj->getCodeEmpInspecteur());
        $this->assertNull($obj->getCodeFormule());
        $this->assertNull($obj->getCodeLivraison());
        $this->assertNull($obj->getCodePays());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostalLivraison());
        $this->assertNull($obj->getCodeRegMarge());
        $this->assertNull($obj->getCodeRevision());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getCollectif());
        $this->assertNull($obj->getCommandeIsolee());
        $this->assertNull($obj->getComplementLivraison());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getDateCreat());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateEcheanceContrat());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDateModif());
        $this->assertNull($obj->getDateRevision());
        $this->assertNull($obj->getDescriptif());
        $this->assertNull($obj->getDtAvantDernPrepa());
        $this->assertNull($obj->getDtDernPrepa());
        $this->assertNull($obj->getDtValiditeFactDeb());
        $this->assertNull($obj->getDtValiditeFactDebDebMois());
        $this->assertNull($obj->getDtValiditeFactFin());
        $this->assertNull($obj->getDtValiditeFactFinFinMois());
        $this->assertNull($obj->getEcheanceAnnuelle());
        $this->assertNull($obj->getFactNegoceIsolee());
        $this->assertNull($obj->getFactureIsolee());
        $this->assertNull($obj->getJourFact());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLoiChatelSurFacture());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getMajStockByDa());
        $this->assertNull($obj->getNbControlesPrevus());
        $this->assertNull($obj->getNbMoisPreavis());
        $this->assertNull($obj->getNomAdresse());
        $this->assertNull($obj->getNomChantier());
        $this->assertNull($obj->getNomLivraison());
        $this->assertNull($obj->getNomResponsable());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuiteLivraison());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoieLivraison());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoieLivraison());
        $this->assertNull($obj->getNumeroCompte());
        $this->assertNull($obj->getPlanFact());
        $this->assertNull($obj->getPourcConsoProduit());
        $this->assertNull($obj->getPourcMargePrevis());
        $this->assertNull($obj->getReferenceFacture());
        $this->assertNull($obj->getReferenceFacture2());
        $this->assertNull($obj->getRuptDateLivraison());
        $this->assertNull($obj->getTelephone());
    }
}
